@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="card p-4">
        <h3 class="mb-3">Edit Meal</h3>
        <form action="{{ route('meal.update', $meal->meal_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="meal_name" class="form-label">Recipe Name</label>
                <input type="text" class="form-control" id="meal_name" name="meal_name" value="{{ $meal->meal_name }}" required>
            </div>
            <div class="mb-3">
                <label for="meal_material" class="form-label">Ingredients</label>
                <textarea class="form-control" id="meal_material" name="meal_material" rows="3" required>{{ $meal->meal_material }}</textarea>
            </div>
            <div class="mb-3">
                <label for="meal_step" class="form-label">Steps</label>
                <textarea class="form-control" id="meal_step" name="meal_step" rows="3" required>{{ $meal->meal_step }}</textarea>
            </div>
            <div class="mb-3">
                <label for="meal_image" class="form-label">Meal Image</label>
                <input type="file" class="form-control" id="meal_image" name="meal_image">
                @if($meal->meal_image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $meal->meal_image) }}" alt="Meal Image" width="100">
                </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection