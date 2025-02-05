@extends('layouts.app')

@section('content')
<div>
    <section id="landing">
        <div class="row ps-5 mb-0">
            <div class="col-sm-1 pt-3">
                <img src="{{ asset('images/home-food-1.png') }}" style="width: 125%; z-index: 0;">
            </div>
            <div class="col-sm-6 py-5 ps-5">
                <div class="">
                    <h1 class="fw-normal">Found Delicious <br> Food at <span class="font-logo ps-2"
                            style="color: #FF5E00; font-size: 40pt;">Your Plate!</span></h1>
                    <p class="fw-light mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.  Found Delicious Food at</p>
                    <button type="button" class="btn btn-secondary">Start now</button>
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
                    <div class="col-sm-4">
                        <h1 class="font-itim fw-bold mb-4" style="color: #FF5E00">Special Menu <br> Option</h1>
                        <p class="fw-light pe-3 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <div class="btn btn-primary">
                            Show More
                        </div>
                    </div>
                    <div class="col-sm-8 p-4">
                        <div class="row g-4 d-flex justify-content-center">
                            <div class="col-sm-6">
                                <div class="card card-product shadow-sm">
                                    <div class="card-body">
                                        <div class="row d-0">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('images/img-resep-ayam.png') }}"
                                                    style="width: 100%;">
                                            </div>
                                            <div class="col-sm-8 ps-0">
                                                <h5 class="card-title">Chicken Leg</h5>
                                                <p class="mb-0">Zakia Amalia</p>
                                                <p class="mb-0">SBH-29</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card card-product shadow-sm">
                                    <div class="card-body">
                                        <div class="row d-0">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('images/img-resep-ayam.png') }}"
                                                    style="width: 100%;">
                                            </div>
                                            <div class="col-sm-8 ps-0">
                                                <h5 class="card-title">Chicken Leg</h5>
                                                <p class="mb-0">Zakia Amalia</p>
                                                <p class="mb-0">SBH-29</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card card-product shadow-sm">
                                    <div class="card-body">
                                        <div class="row d-0">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('images/img-resep-ayam.png') }}"
                                                    style="width: 100%;">
                                            </div>
                                            <div class="col-sm-8 ps-0">
                                                <h5 class="card-title">Chicken Leg</h5>
                                                <p class="mb-0">Zakia Amalia</p>
                                                <p class="mb-0">SBH-29</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card card-product shadow-sm">
                                    <div class="card-body">
                                        <div class="row d-0">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('images/img-resep-ayam.png') }}"
                                                    style="width: 100%;">
                                            </div>
                                            <div class="col-sm-8 ps-0">
                                                <h5 class="card-title">Chicken Leg</h5>
                                                <p class="mb-0">Zakia Amalia</p>
                                                <p class="mb-0">SBH-29</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card card-product shadow-sm">
                                    <div class="card-body">
                                        <div class="row d-0">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('images/img-resep-ayam.png') }}"
                                                    style="width: 100%;">
                                            </div>
                                            <div class="col-sm-8 ps-0">
                                                <h5 class="card-title">Chicken Leg</h5>
                                                <p class="mb-0">Zakia Amalia</p>
                                                <p class="mb-0">SBH-29</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card card-product shadow-sm">
                                    <div class="card-body">
                                        <div class="row d-0">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('images/img-resep-ayam.png') }}"
                                                    style="width: 100%;">
                                            </div>
                                            <div class="col-sm-8 ps-0">
                                                <h5 class="card-title">Chicken Leg</h5>
                                                <p class="mb-0">Zakia Amalia</p>
                                                <p class="mb-0">SBH-29</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="optimatch">
        <div class="text-center p-5" style="width: 35%; margin: auto;">
            <h5 class="fw-light mt-3">Find your match with</h5>
            <img src="{{ asset('images/optimatch-logo.png') }}" style="width: 100%; z-index: 0; padding: 0 !important;">
            <p class="fw-light mt-4 mb-5">Optimatch is a fiture to lorem ipsum dolor sit amet, consectetur adipisicing.
            </p>
            <div class="btn btn-primary mb-3"><img src="{{ asset('images/optimatch-logo-white.png') }}" style="width: 30%;">
            </div>
        </div>
    </section>
    <section id="menuRec">
        <div class="bg-cream p-5">
            <h2 class="text-center font-itim mb-4 pt-2">Let's Create Your Own Meal!</h2>
            <div id="carouselMenuRecommendation" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-4">
                                <div class="card card-resep shadow">
                                    <div class="img-container">
                                        <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Tumis Kangkung</h5>
                                        <p class="text-center" style="font-size: 10pt;"><a href="#"
                                                class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Lihat
                                                selengkapnya</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card card-resep shadow">
                                    <div class="img-container">
                                        <img src="{{ asset('images/img-resep-tempe.png') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Tempe Mendoan</h5>
                                        <p class="text-center" style="font-size: 10pt;"><a href="#"
                                                class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Lihat
                                                selengkapnya</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card card-resep shadow">
                                    <div class="img-container">
                                        <img src="{{ asset('images/img-resep-ayam.png') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Korean Fried Chicken</h5>
                                        <p class="text-center" style="font-size: 10pt;"><a href="#"
                                                class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Lihat
                                                selengkapnya</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-4">
                                <div class="card card-resep shadow">
                                    <div class="img-container">
                                        <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Tumis Kangkung</h5>
                                        <p class="text-center" style="font-size: 10pt;"><a href="#"
                                                class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Lihat
                                                selengkapnya</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card card-resep shadow">
                                    <div class="img-container">
                                        <img src="{{ asset('images/img-resep-tempe.png') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Tempe Mendoan</h5>
                                        <p class="text-center" style="font-size: 10pt;"><a href="#"
                                                class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Lihat
                                                selengkapnya</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card card-resep shadow">
                                    <div class="img-container">
                                        <img src="{{ asset('images/img-resep-ayam.png') }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Korean Fried Chicken</h5>
                                        <p class="text-center" style="font-size: 10pt;"><a href="#"
                                                class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Lihat
                                                selengkapnya</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev justify-content-start" type="button"
                    data-bs-target="#carouselMenuRecommendation" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next justify-content-end" type="button"
                    data-bs-target="#carouselMenuRecommendation" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
</div>
@endsection