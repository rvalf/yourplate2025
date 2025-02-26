@extends('layouts.app')

@section('content')
    <div>
        <section id="header-product">
            <img src="{{ asset('images/marketplace-bg.png') }}" style="width: 100%">
        </section>
        <section id="product">
            <div class="mt-5 mb-4" style="padding: 0 10rem;">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-5 mb-4" style="padding: 0 10rem;">
                <div class="row gy-5">
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="card card-marketplace bg-cream">
                            <img src="{{ asset('images/img-resep-kangkung.png') }}" class="card-img-top">
                            <div class="card-body p-0 pt-3">
                                <div class="text-center">
                                    <p class="fw-medium mb-1">Tumis Kangkung</p>
                                    <div id="star-rating" style="color: #FFA600; font-size: 10pt;">
                                        <i class="bi bi-star-fill" data-value="1"></i>
                                        <i class="bi bi-star-fill" data-value="3"></i>
                                        <i class="bi bi-star-fill" data-value="2"></i>
                                        <i class="bi bi-star-fill" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <p class="card-text fw-normal mb-0 mt-3" style="font-size: 10pt">Zakia Amalia</p>
                                <p class="card-text fw-light" style="font-size: 10pt">Cikarang Selatan | SBH-29</p>
                            </div>
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
            <p class="fw-light ps-2 mb-0" style="font-size: 10pt;"><i class="bi bi-c-circle" style="font-size: 8pt;"></i>
                2025</p>
        </div>
    </section>
    </div>
@endsection