<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function detail($id) {
        $product = Product::with(['user', 'reviews' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }, 'reviews.user'])->findOrFail($id);

        $avgRating = $product->reviews->avg('rvw_rate');

        return view('buyer.detail-review', compact('product', 'avgRating'));
    }

    public function detailSeller($id) {
        $product = Product::with(['user', 'reviews' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }, 'reviews.user'])->findOrFail($id);

        $avgRating = $product->reviews->avg('rvw_rate');

        return view('seller.detail-review', compact('product', 'avgRating'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => ['required', 'integer'],
            'desc' => ['required', 'string', 'max:255'],
            'prd_id' => ['required']
        ]);

        $review = Review::create([
            'rvw_rate' => $request->rating,
            'rvw_desc' => $request->desc,
            'rvw_prd_id' => $request->prd_id,
            'rvw_usr_id' => session('usr_id')
        ]);

        if ($request->page === 'review_page') {
            return redirect('/marketplace/detail/review/' . $request->prd_id)
            ->with('success', 'Review success!');
        }

        return redirect('/marketplace/detail/' . $request->prd_id)
            ->with('success', 'Review success!');
    }

    public function destroy($id)
    {
        $review = Review::where('rvw_id', $id)->first();

        if (!$review) {
            return redirect()->back()->with('error', 'Review not found or unauthorized!');
        }

        $review->delete();

        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
}
