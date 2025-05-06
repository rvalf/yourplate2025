@extends('layouts.app')

@section('content')
    <div style="padding-top: 5rem">
        <section id="meals">
            <div class="mt-2 mb-4" style="padding: 0 10rem;">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{ asset('images/marketplace.jpg') }}" class="w-100 h-100 rounded-4">
                    </div>
                    <div class="col-sm-9">
                        <div class="d-flex justify-content-between">
                            <form class="d-flex" method="GET" role="search" style="width: 100%">
                                <input class="form-control me-2" type="search" name="s" value="{{ $s }}"
                                    placeholder="Search" aria-label="Search">
                                <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                        <div class="row g-3 mt-1">
                            @forelse($meals as $meal)
                                <div class="col-sm-4">
                                    <div class="card card-product card-product2 shadow-sm"
                                        onclick="window.location='{{ route('recipe.show', $meal->meal_id) }}';">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="img-cont" style="width: 25%;">
                                                <img src="{{ asset($meal->meal_image) }}"
                                                    style="width: 100%; height: auto; object-fit: cover;">
                                            </div>
                                            <div class="ps-2">
                                                <p class="mb-0 fw-semibold text-truncate" style="max-width: 150px;">
                                                    {{ $meal->meal_name }}</p>
                                                <p class="mb-0" style="font-size: 8pt;">Show Recipe & Steps</p>
                                                <p class="mb-0" style="font-size: 8pt;"><a
                                                        href="{{ route('recipe.show', $meal->meal_id) }}">Lihat Selengkapnya</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-muted text-center">Recipe not found.</p>
                            @endforelse
                        </div>

                        @if ($meals->hasPages())
                            <div class="mt-3">
                                {{ $meals->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="p-4 d-flex justify-content-center align-items-center">
                <p class="fw-light mb-0" style="margin-right: 50px;">Follow Us on Instagram<i class="bi bi-instagram ps-3"
                        style="font-size: 10pt;"></i><span class="fw-normal ps-1">yourplate_id</span></p>
                <img src="{{ asset('images/cdginnary-logo.png') }}" style="width: 2%">
                <p class="fw-medium ps-2 mb-0">CDG INNARY</p>
                <p class="fw-light ps-2 mb-0" style="font-size: 10pt;"><i class="bi bi-c-circle"
                        style="font-size: 8pt;"></i> 2025</p>
            </div>
        </section>
    </div>
@endsection