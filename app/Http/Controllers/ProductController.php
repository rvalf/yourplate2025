<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $s = $request->query('s');

        $products = Product::with('user')
            ->whereHas('user', function ($query) {
                $query->where('usr_seller_confirmed', 1);
            })
            ->when($s, function ($query, $s) {
                $query->where('prd_name', 'like', '%' . $s . '%');
            })
            ->paginate(4)
            ->withQueryString();

        return view('buyer.products', compact('products', 's'));
    }

    public function indexSeller(Request $request)
    {
        $s = $request->query('s');

        $products = Product::with('user')
            ->where('prd_usr_id_seller', session('usr_id'))
            ->when($s, function ($query, $s) {
                $query->where('prd_name', 'like', '%' . $s . '%');
            })
            ->paginate(4)
            ->withQueryString();

        $user = User::where('usr_id', session('usr_id'))->first();

        return view('seller.products', compact('products', 'user', 's'));
    }

    public function create()
    {
        return view('seller.create-product');
    }

    public function store(Request $request)
    {
        $request->merge([
            'price' => str_replace('.', '', $request->price),
        ]);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'picture' => ['mimes:jpg,png,jpeg', 'image', 'max:4096'],
            'closedpo' => ['nullable', 'date_format:H:i']
        ]);

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('images', 'public');
            $picturePath = 'storage/' . $path;
        } else {
            $picturePath = null;
        }

        $closedpo = $request->closedpo
            ? Carbon::today()->format('Y-m-d') . ' ' . $request->closedpo . ':00'
            : null;

        $product = Product::create([
            'prd_name' => $request->name,
            'prd_type' => $request->type,
            'prd_desc' => $request->description,
            'prd_price' => $request->price,
            'prd_image' => $picturePath,
            'prd_usr_id_seller' => session('usr_id'),
            'prd_closed_po' => $closedpo,
        ]);

        return redirect('/seller/marketplace')->with('success', 'Product uploaded successfully!');
    }

    public function detail($id)
    {
        $product = Product::with([
            'user',
            'reviews' => function ($query) {
                $query->orderBy('created_at', 'desc')->take(3);
            },
            'reviews.user'
        ])->findOrFail($id);

        return view('buyer.detail-product', compact('product'));
    }

    public function show($id)
    {
        $product = Product::with([
            'user',
            'reviews' => function ($query) {
                $query->orderBy('created_at', 'desc')->take(3);
            },
            'reviews.user'
        ])->findOrFail($id);

        $user = User::where('usr_id', session('usr_id'))->first();

        return view('seller.detail-product', compact('product', 'user'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('seller.edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->merge([
            'price' => str_replace('.', '', $request->price),
        ]);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'picture' => ['mimes:jpg,png,jpeg', 'image', 'max:4096'],
            'closedpo' => ['nullable', 'date_format:H:i']
        ]);

        $closedpo = $request->closedpo
            ? Carbon::today()->format('Y-m-d') . ' ' . $request->closedpo . ':00'
            : null;

        $product = Product::findOrFail($id);

        $product->prd_name = $request->name;
        $product->prd_type = $request->type;
        $product->prd_desc = $request->description;
        $product->prd_price = $request->price;
        $product->prd_closed_po = $closedpo;

        if ($request->hasFile('picture')) {
            if ($product->prd_image && Storage::exists(str_replace('storage/', 'public/', $product->prd_image))) {
                Storage::delete(str_replace('storage/', 'public/', $product->prd_image));
            }

            $path = $request->file('picture')->store('images', 'public');
            $product->prd_image = 'storage/' . $path;
        }

        $product->save();

        return redirect('/seller/marketplace')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::where('prd_id', $id)->where('prd_usr_id_seller', session('usr_id'))->first();

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found or unauthorized!');
        }

        $product->reviews()->delete();

        if ($product->prd_image) {
            $imagePath = storage_path('app/public/' . $product->prd_image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
}
