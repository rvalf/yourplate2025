@extends('layouts.app')

@section('content')
    <div>
        <section id="chats">
            <div class="mt-5 mb-1" style="padding: 0 20rem;">
                <div class="pt-4">
                    <!-- Card Utama -->
                    <div class="card card-roomchat shadow-sm">
                        <div class="card-header ps-3 py-2 pe-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">{{ $product->user->usr_fullname }}</h5>
                                <a href="{{ url('/marketplace') }}" class="btn px-2" style="background-color: #faedd8;"><i
                                        class="bi bi-caret-left-fill"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Card Product -->
                            <div class="row mb-3">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="card card-product card-product2 card-product3 shadow-sm">
                                        <div class="card-body d-flex justify-content-between">
                                            <div class="ps-1" style="width: 65%">
                                                <p class="mb-0 fw-semibold">{{ $product->prd_name }}</p>
                                                <div class="d-flex justify-content-between">
                                                    <div style="width: 60%">
                                                        <p style="font-size: 9pt; margin: 0;" class="text-elipsis">
                                                            {{ $product->user->usr_fullname }}
                                                        </p>
                                                        <p style="font-size: 9pt; margin: 0;" class="text-elipsis">
                                                            <i
                                                                class="bi bi-geo-alt-fill pe-1"></i>{{ $product->user->usr_dorm != null ? $product->user->usr_dorm : $product->user->usr_address }}
                                                        </p>
                                                    </div>
                                                    <div style="width: 40%">
                                                        <p style="font-size: 9pt; margin: 0;" class="fw-semibold">
                                                            Rp {{ number_format($product->prd_price, 0, ',', '.') }}</p>
                                                        <p style="font-size: 9pt; margin: 0;"><i
                                                                class="bi bi-star-fill text-warning"></i>
                                                            {{ $product->avgRating && $product->avgRating > 0
                                                            ? number_format($product->avgRating, 1)
                                                            : '-' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <p style="font-size: 9pt; margin: 0;" class="text-elipsis">
                                                    <i class="bi bi-clock-fill"></i> Closed :
                                                    {{ \Carbon\Carbon::parse($product->prd_closed_po)->format('H.i') }} WIB
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end" style="width: 35%">
                                                <img src="{{ asset($product->prd_image) }}" style="width: 70%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <form class="d-flex" action="{{ url('/chats/startmessage') }}" method="post" style="width: 100%">
                                    @csrf
                                    <!-- Hidden Value -->
                                     <input type="hidden" name="seller_id" value="{{ $product->user->usr_id }}">
                                     <input type="hidden" name="prd_id" value="{{ $product->prd_id }}">
                                     
                                    <input class="form-control me-2" type="text" name="textmessage" placeholder="Type Here" required>
                                    <button type="submit" class="btn btn-primary px-3 "><i class="bi bi-send-fill"></i></i></button>
                                </form>
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
                        style="font-size: 8pt;"></i>
                    2025</p>
            </div>
        </section>
    </div>
@endsection