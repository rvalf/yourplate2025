@extends('layouts.admin')

@section('content')
    <div class="d-flex flex-column">
        <!-- Meal Input Form -->
        <div class="card p-4">
            @if ($errors->any())
                <div style="color: red;">
                    @foreach ($errors->all() as $error)
                        <p class="text-center">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <h3 class="mb-3">Add New Recipe</h3>
            <form action="{{ url('/meal/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="recipe_name" class="form-label">Recipe Name<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="recipe_name" name="recipe_name" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="picture" class="form-label">Image Cover<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="picture" name="picture" accept="image/*" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="ingredients" class="form-label">Ingredients<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="ingredients" name="ingredients"></textarea>
                </div>
                <div class="mb-3">
                    <label for="steps" class="form-label">Steps<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="steps" name="steps"></textarea>
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary me-3">Back</a>
                    <button type="submit" class="btn btn-primary">Save Recipe</button>
                </div>
            </form>
        </div>
    </div>
@endsection