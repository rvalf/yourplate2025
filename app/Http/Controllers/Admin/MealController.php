<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::all();
        return view('meal.index', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'meal_name' => 'required|string',
            'meal_material' => 'required|string',
            'meal_step' => 'required|string',
            'meal_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $meal = new Meal();
        $meal->meal_name = $request->meal_name;
        $meal->meal_material = $request->meal_material;
        $meal->meal_step = $request->meal_step;

        if ($request->hasFile('meal_image')) {
            $meal->meal_image = $request->file('meal_image')->store('meals', 'public');
        }

        $meal->save();
        return redirect()->route('meal.index')->with('success', 'Recipe added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meal = Meal::findOrFail($id);
        return view('meal.edit', compact('meal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'meal_name' => 'required|string',
            'meal_material' => 'required|string',
            'meal_step' => 'required|string',
            'meal_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $meal = Meal::findOrFail($id);
        $meal->meal_name = $request->meal_name;
        $meal->meal_material = $request->meal_material;
        $meal->meal_step = $request->meal_step;

        // Update Image Jika Ada
        if ($request->hasFile('meal_image')) {
            // Hapus gambar lama jika ada
            if ($meal->meal_image) {
                Storage::delete('public/' . $meal->meal_image);
            }

            // Simpan gambar baru
            $meal->meal_image = $request->file('meal_image')->store('meals', 'public');
        }

        $meal->save();

        return redirect()->route('meal.index')->with('success', 'Recipe updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meal = Meal::findOrFail($id);

        // Hapus gambar jika ada
        if ($meal->meal_image) {
            Storage::delete('public/' . $meal->meal_image);
        }

        // Hapus data dari database
        $meal->delete();

        return redirect()->route('meal.index')->with('success', 'Recipe deleted successfully');
    }
}
