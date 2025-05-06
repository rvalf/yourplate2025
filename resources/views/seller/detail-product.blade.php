@extends('layouts.app')

@section('content')
    <div>
        <section id="header-product">
            <img src="{{ asset('images/marketplace-bg.png') }}" style="width: 100%">
        </section>
        <section id="product">
            <div class="mt-5 mb-4" style="padding: 0 10rem;">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset($product->prd_image) }}" class="w-100 rounded-4">
                    </div>
                    <div class="col-sm-5 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>{{ $product->prd_name }}</h3>
                            <p class="mb-1 fw-semibold"><i class="bi bi-star-fill text-warning"></i>
                                {{ $product->avgRating() }}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-1 ps-1 fw-semibold">{{ $user->usr_fullname }}</h5>
                            <p class="fw-semibold">
                                Rp {{ number_format($product->prd_price, 0, ',', '.') }}</p>
                        </div>
                        <p class="mb-1">
                            <i
                                class="bi bi-geo-alt-fill pe-1"></i>{{ $user->usr_dorm != null ? $user->usr_dorm : $user->usr_address }}
                        </p>
                        @if ($product->prd_closed_po)
                            <p class="mb-1">
                                <i class="bi bi-clock-fill"></i> Closed :
                                {{ \Carbon\Carbon::parse($product->prd_closed_po)->format('H.i') }} WIB
                            </p>
                        @endif
                        <div class="mt-4 ps-1">
                            {!! $product->prd_desc !!}
                        </div>
                    </div>
                    <div class="col-sm-3 ps-3">
                        <div class="d-flex justify-content-end mt-2">
                            <a href="{{ url('/seller/marketplace') }}" class="btn btn-secondary me-2 px-2"><i
                                    class="bi bi-caret-left-fill"></i></a>
                        </div>
                        <div class="pe-1">
                            <div class="mt-3 mb-3">
                                <p class="mb-0 fw-bold">Product Review</p>
                            </div>
                            @if($product->reviews->isNotEmpty())
                                <!-- Card Review - Detail -->
                                @foreach($product->reviews as $review)
                                    <div class="border rounded p-2 mb-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 fw-semibold me-2" style="font-size: 10pt;">
                                                    {{ $review->user->usr_fullname }}
                                                </p>
                                                <p class="mb-0" style="font-size: 10pt;"><i
                                                        class="bi bi-star-fill text-warning"></i>
                                                    {{ $review->rvw_rate }}/5
                                                </p>
                                            </div>
                                            <p class="mb-0" style="font-size: 8pt;">{{ $review->created_at->format('d/m/y') }}</p>
                                        </div>
                                        <p class="mb-0" style="font-size: 8pt;">{{ $review->rvw_desc }}</p>
                                    </div>
                                @endforeach
                                <div class="text-end">
                                    <a href="{{ route('reviews.detailseller', $product->prd_id) }}"
                                        style="font-size: 10pt; color: black;">Show More Review..</a>
                                </div>
                            @else
                                <p class="text-muted" style="font-size: 10pt;">Product has no review. Have been try this
                                    product? Add your review's right now!</p>
                            @endif
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