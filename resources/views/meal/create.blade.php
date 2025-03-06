@extends('layouts.admin')

@section('content')
<div class="container">
    <!-- Button Back -->
    <div class="mb-3">
        <a href="{{ route('meal.index') }}" class="btn btn-secondary">Back</a>
    </div>
    
    <!-- Meal Input Form -->
    <div class="card p-4">
        <h3 class="mb-3">Add New Meal</h3>
        <form action="{{ route('meal.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="meal_name" class="form-label">Recipe Name</label>
                <input type="text" class="form-control" id="meal_name" name="meal_name" required>
            </div>
            <div class="mb-3">
                <label for="meal_material" class="form-label">Ingredients</label>
                <textarea class="form-control" id="meal_material" name="meal_material" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="meal_step" class="form-label">Cooking Steps</label>
                <textarea class="form-control" id="meal_step" name="meal_step" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="meal_image" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="meal_image" name="meal_image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
