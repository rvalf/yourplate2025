@extends('layouts.admin')

@section('content')
<div class="d-flex flex-column">
    <!-- Button Back -->
    <div class="mb-3">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </div>
    
    <!-- Meal Input Form -->
    <div class="card p-4">
        <h3 class="mb-3">Add New Meal</h3>
        <form action="/Meal" method="GET">
            @csrf
            <div class="mb-3">
                <label for="recipe_name" class="form-label">Recipe Name</label>
                <input type="text" class="form-control" id="recipe_name" name="recipe_name" required>
            </div>
            <div class="mb-3">
                <label for="ingredients" class="form-label">Ingredients</label>
                <textarea class="form-control" id="ingredients" name="ingredients" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="cooking_time" class="form-label">Cooking Time (minutes)</label>
                <input type="number" class="form-control" id="cooking_time" name="cooking_time" required>
            </div>
            <div class="mb-3">
                <label for="difficulty" class="form-label">Difficulty</label>
                <select class="form-select" id="difficulty" name="difficulty" required>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
