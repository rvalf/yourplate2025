@extends('layouts.app')

@section('content')
    <div style="padding-top: 5rem">
        <section id="meals">
            <div class="mt-4 mb-4" style="padding: 0 10rem;">
                <h5 class="text-center mb-5">{{ $meal->meal_name }}</h5>
                <div class="d-flex justify-content-between">
                    <div class="img-cont" style="width: 20%;">
                        <img src="{{ asset($meal->meal_image) }}" class="w-100 rounded-4">
                    </div>
                    <div class="row" style="width: 80%;">
                        <div class="col-sm-6">
                            <div class="card-resep card-resep2 rounded-4">
                                <div class="bg-light text-center rounded">
                                    <p class="fw-semibold">Materials</p>
                                </div>
                                {!! $meal->meal_material !!}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card-resep card-resep2 rounded-4">
                                <div class="bg-light text-center rounded">
                                    <p class="fw-semibold">Steps</p>
                                </div>
                                {!! $meal->meal_step !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <a href="/recipe" class="btn btn-primary mb-4">
                        Show More Recipe
                    </a>
                    <h5>Search your comfort food at <span><a href="/marketplace">Yourplate Marketplace</a></span></h5>
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