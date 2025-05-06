@extends('layouts.admin')

@section('content')
    <div class="d-flex flex-column">
        @if (session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif

        <!-- Button Add -->
        <div class="mb-3">
            <a href="{{ url('/meal/create') }}" class="btn btn-primary">Add Recipe</a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Recipe Name</th>
                        <th>Ingredients</th>
                        <th>Steps</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($meals as $index => $meal)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $meal->meal_name }}</td>
                            <td>{!! $meal->meal_material !!}</td>
                            <td>{!! $meal->meal_step !!}</td>
                            <td>
                                <a href="{{ route('meal.edit', $meal->meal_id) }}" class="btn btn-warning btn-sm"><i
                                        class="bi bi-pencil-fill"></i></a>
                                <form action="{{ route('meal.destroy', $meal->meal_id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this Recipe?')">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection