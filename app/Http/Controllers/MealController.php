<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use Storage;

class MealController extends Controller
{
    public function index()
    {
        $meals = Meal::all();

        return view('meal.index', compact('meals'));
    }

    public function indexBuyer(Request $request)
    {
        $s = $request->query('s');

        $meals = Meal::when($s, function ($query, $s) {
                $query->where('meal_name', 'like', '%' . $s . '%');
            })
            ->paginate(9)
            ->withQueryString();

        return view('buyer.meal', compact('meals', 's'));
    }

    public function create()
    {
        return view('meal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'recipe_name' => ['required', 'string', 'max:255'],
            'ingredients' => ['required', 'string'],
            'steps' => ['required', 'string'],
            'picture' => ['mimes:jpg,png,jpeg', 'image', 'max:4096'],
        ]);

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('images', 'public');
            $picturePath = 'storage/' . $path;
        } else {
            $picturePath = null;
        }

        Meal::create([
            'meal_name' => $request->recipe_name,
            'meal_material' => $request->ingredients,
            'meal_step' => $request->steps,
            'meal_image' => $picturePath,
        ]);

        return redirect('/meal')->with('success', 'Meal added successfully!');
    }

    public function show($id)
    {
        $meal = Meal::findOrFail($id);

        return view('buyer.meal-show', compact('meal'));
    }

    public function edit($id)
    {
        $meal = Meal::findOrFail($id);

        return view('meal.edit', compact('meal'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'recipe_name' => ['required', 'string', 'max:255'],
            'ingredients' => ['required', 'string'],
            'steps' => ['required', 'string'],
            'picture' => ['nullable', 'mimes:jpg,png,jpeg', 'image', 'max:4096'],
        ]);
    
        $meal = Meal::findOrFail($id);
    
        $meal->meal_name = $request->recipe_name;
        $meal->meal_material = $request->ingredients;
        $meal->meal_step = $request->steps;
    
        if ($request->hasFile('picture')) {
            if ($meal->meal_image && Storage::exists(str_replace('storage/', 'public/', $meal->meal_image))) {
                Storage::delete(str_replace('storage/', 'public/', $meal->meal_image));
            }
        
            $path = $request->file('picture')->store('images', 'public');
            $meal->meal_image = 'storage/' . $path;
        }
        
        $meal->save();
    
        return redirect('/meal')->with('success', 'Recipe updated successfully!');
    }
    
    public function destroy($id)
    {
        $meal = Meal::where('meal_id', $id)->first();

        if (!$meal) {
            return redirect()->back()->with('error', 'Recipe not found or unauthorized!');
        }

        if ($meal->meal_image) {
            $imagePath = storage_path('app/public/' . $meal->meal_image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $meal->delete();

        return  redirect('/meal')->with('success', 'Recipe deleted successfully!');
    }
}
