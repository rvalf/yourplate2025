@extends('layouts.admin')

@section('content')
<div class="container">
    <!-- Button Add -->
    <div class="mb-3">
        <a href="{{ route('meal.create') }}" class="btn btn-primary">Add Recipe</a>
    </div>

    <!-- Meal Cards -->
    <div class="row">
        @foreach($meals as $meal)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="text-center mt-3">
                    @if($meal->meal_image)
                    <img src="{{ asset('storage/' . $meal->meal_image) }}" class="rounded" alt="Meal Image" style="width:auto; height: 150px; object-fit: cover;">
                    @else
                    <img src="{{ asset('images/no-image.png') }}" class="rounded" alt="No Image" style="width: 150px; height: 150px; object-fit: cover;">
                    @endif
                </div>
                <div class="card-body p-3">
                    <h5 class="card-title text-center mb-2">{{ $meal->meal_name }}</h5>
                    <p class="card-text mb-1"><strong>Ingredients:</strong> {{ Str::limit($meal->meal_material, 50) }}</p>
                    <p class="card-text mb-1">
                        <strong>Steps:</strong>
                        <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#mealModal{{ $meal->meal_id }}">
                            View Details
                        </a>
                    </p>
                    @include('meal.detail', ['meal' => $meal])
                </div>
                <div class="d-flex justify-content-between px-2 pb-2">
                    <a href="{{ route('meal.edit', $meal->meal_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('meal.destroy', $meal->meal_id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm delete-btn" data-url="{{ route('meal.destroy', $meal->meal_id) }}">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Cegah tombol langsung menghapus data

            let url = this.getAttribute('data-url'); // Ambil URL dari tombol

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'X-Requested-With': 'XMLHttpRequest',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            _method: 'DELETE'
                        })
                    }).then(response => {
                        if (response.ok) {
                            Swal.fire(
                                'Deleted!',
                                'Your meal has been deleted.',
                                'success'
                            ).then(() => {
                                location.reload(); // Refresh halaman setelah sukses
                            });
                        } else {
                            Swal.fire(
                                'Error!',
                                'There was a problem deleting this meal.',
                                'error'
                            );
                        }
                    }).catch(error => {
                        Swal.fire(
                            'Error!',
                            'Something went wrong.',
                            'error'
                        );
                    });
                }
            });
        });
    });
</script>
@endsection