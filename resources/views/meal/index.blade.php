@extends('layouts.admin')

@section('content')
<div class="d-flex flex-column">
    <!-- Button Add -->
    <div class="mb-3">
        <a href="Meal/Create" class="btn btn-primary">Add Recipe</a>
    </div>
    
    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Recipe Name</th>
                    <th>Ingredients</th>
                    <th>Cooking Time</th>
                    <th>Difficulty</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $recipes = [
                        ['name' => 'Spaghetti Carbonara', 'ingredients' => 'Pasta, Eggs, Cheese, Bacon', 'time' => '20 mins', 'difficulty' => 'Easy'],
                        ['name' => 'Chicken Curry', 'ingredients' => 'Chicken, Curry Powder, Coconut Milk, Onion', 'time' => '40 mins', 'difficulty' => 'Medium'],
                        ['name' => 'Beef Steak', 'ingredients' => 'Beef, Garlic, Butter, Salt, Pepper', 'time' => '30 mins', 'difficulty' => 'Hard'],
                        ['name' => 'Vegetable Salad', 'ingredients' => 'Lettuce, Tomato, Cucumber, Olive Oil', 'time' => '10 mins', 'difficulty' => 'Easy'],
                        ['name' => 'Pancakes', 'ingredients' => 'Flour, Eggs, Milk, Sugar', 'time' => '15 mins', 'difficulty' => 'Easy'],
                    ];
                @endphp
                @foreach($recipes as $index => $recipe)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $recipe['name'] }}</td>
                        <td>{{ $recipe['ingredients'] }}</td>
                        <td>{{ $recipe['time'] }}</td>
                        <td>{{ $recipe['difficulty'] }}</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
