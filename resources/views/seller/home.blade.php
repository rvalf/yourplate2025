@extends('layouts.app')

@section('content')
    <div style="padding-top: 5rem">
        <section id="landing">
            <div class="row ps-5 mb-0">
                <div class="col-sm-1 pt-3">
                    <img src="{{ asset('images/home-food-1.png') }}" style="width: 125%; z-index: 0;">
                </div>
                <div class="col-sm-6 py-5 ps-5">
                    <div class="">
                        <h1 class="fw-normal">Found Delicious <br> Food at <span class="font-logo ps-2"
                                style="color: #FF5E00; font-size: 40pt;">Your Plate!</span></h1>
                        <p class="fw-light mb-4">Welcome to YourPlate’s Seller Hub—your business gateway to a wider
                            audience. Manage your products, engage with customers, and watch your brand grow in a
                            food-centric community built for success.</p>
                        <a href="/seller/marketplace" class="btn btn-secondary">Start now</a>
                    </div>
                </div>
                <div class="col-sm-5 text-end">
                    <img src="{{ asset('images/home-food-2.png') }}" style="width: 80%; z-index: 0; padding: 0 !important;">
                </div>
            </div>
        </section>
        <section id="productRec">
            <div class="bg-cream p-5">
            <div class="px-5 mx-5">
                    <div class="row d-flex justify-content-center align-items-center pt-2">
                        <div class="col-sm-5">
                            <h1 class="font-itim fw-bold mb-4" style="color: #FF5E00">Special Menu Option</h1>
                            <p class="fw-light pe-3 mb-5">
                                Craving something unique? Explore our Special Menu—featuring curated dishes, seasonal
                                highlights, and exclusive partner offers tailored just for you.
                            </p>
                            <a href="/seller/marketplace" class="btn btn-primary">
                                Show More
                            </a>
                        </div>
                        <div class="col-sm-7 p-4">
                            <div class="row g-3 d-flex justify-content-center">
                                @forelse($products as $product)
                                    <div class="col-sm-6">
                                        <div class="card card-product shadow-sm"
                                            onclick="window.location='{{ route('products.detail', $product->prd_id) }}';">
                                            <div class="card-body d-flex justify-content-between">
                                                <div class="ps-1" style="width: 70%">
                                                    <p class="mb-0">{{ $product->prd_name }}</p>
                                                    <p style="font-size: 9pt; margin: 0;">{{ $product->user->usr_fullname }}</p>
                                                    <p style="font-size: 9pt; margin: 0;">
                                                        {{ $product->user->usr_dorm ?? $product->user->usr_address }}
                                                    </p>
                                                </div>
                                                <div class="text-end" style="width: 30%">
                                                    <img src="{{ asset($product->prd_image) }}" style="width: 70%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-sm-6">
                                        <div class="card card-product shadow-sm">
                                            <div class="card-body d-flex justify-content-between">
                                                <div class="ps-1" style="width: 70%">
                                                    <p class="mb-0">Chicken Leg</p>
                                                    <p style="font-size: 9pt; margin: 0;">Zakia Amalia</p>
                                                    <p style="font-size: 9pt; margin: 0;">Cikarang Selatan | SBH-29</p>
                                                </div>
                                                <div class="text-end" style="width: 30%">
                                                    <img src="{{ asset('images/img-resep-ayam.png') }}" style="width: 70%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card card-product shadow-sm">
                                            <div class="card-body d-flex justify-content-between">
                                                <div class="ps-1" style="width: 70%">
                                                    <p class="mb-0">Chicken Leg</p>
                                                    <p style="font-size: 9pt; margin: 0;">Zakia Amalia</p>
                                                    <p style="font-size: 9pt; margin: 0;">Cikarang Selatan | SBH-29</p>
                                                </div>
                                                <div class="text-end" style="width: 30%">
                                                    <img src="{{ asset('images/img-resep-ayam.png') }}" style="width: 70%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card card-product shadow-sm">
                                            <div class="card-body d-flex justify-content-between">
                                                <div class="ps-1" style="width: 70%">
                                                    <p class="mb-0">Chicken Leg</p>
                                                    <p style="font-size: 9pt; margin: 0;">Zakia Amalia</p>
                                                    <p style="font-size: 9pt; margin: 0;">Cikarang Selatan | SBH-29</p>
                                                </div>
                                                <div class="text-end" style="width: 30%">
                                                    <img src="{{ asset('images/img-resep-ayam.png') }}" style="width: 70%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card card-product shadow-sm">
                                            <div class="card-body d-flex justify-content-between">
                                                <div class="ps-1" style="width: 70%">
                                                    <p class="mb-0">Chicken Leg</p>
                                                    <p style="font-size: 9pt; margin: 0;">Zakia Amalia</p>
                                                    <p style="font-size: 9pt; margin: 0;">Cikarang Selatan | SBH-29</p>
                                                </div>
                                                <div class="text-end" style="width: 30%">
                                                    <img src="{{ asset('images/img-resep-ayam.png') }}" style="width: 70%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card card-product shadow-sm">
                                            <div class="card-body d-flex justify-content-between">
                                                <div class="ps-1" style="width: 70%">
                                                    <p class="mb-0">Chicken Leg</p>
                                                    <p style="font-size: 9pt; margin: 0;">Zakia Amalia</p>
                                                    <p style="font-size: 9pt; margin: 0;">Cikarang Selatan | SBH-29</p>
                                                </div>
                                                <div class="text-end" style="width: 30%">
                                                    <img src="{{ asset('images/img-resep-ayam.png') }}" style="width: 70%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card card-product shadow-sm">
                                            <div class="card-body d-flex justify-content-between">
                                                <div class="ps-1" style="width: 70%">
                                                    <p class="mb-0">Chicken Leg</p>
                                                    <p style="font-size: 9pt; margin: 0;">Zakia Amalia</p>
                                                    <p style="font-size: 9pt; margin: 0;">Cikarang Selatan | SBH-29</p>
                                                </div>
                                                <div class="text-end" style="width: 30%">
                                                    <img src="{{ asset('images/img-resep-ayam.png') }}" style="width: 70%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
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