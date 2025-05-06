@extends('layouts.app')

@section('content')
    <div>
        <section id="header-product">
            <img src="{{ asset('images/marketplace-bg.png') }}" style="width: 100%">
        </section>
        <section id="product">
            <div class="mt-4 mb-4" style="padding: 0 10rem;">
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
                            @forelse($products as $product)
                                <div class="col-sm-6">
                                    <div class="card card-product card-product2 shadow-sm"
                                        onclick="window.location='{{ route('products.detail', $product->prd_id) }}';">
                                        <div class="card-body d-flex justify-content-between">
                                            <div class="ps-1" style="width: 65%">
                                                <p class="mb-0 fw-semibold">{{ $product->prd_name }}</p>
                                                <div class="d-flex justify-content-between">
                                                    <div style="width: 60%">
                                                        <p style="font-size: 9pt; margin: 0;" class="text-elipsis">
                                                            {{ $product->user->usr_fullname }}
                                                        </p>
                                                        <p style="font-size: 9pt; margin: 0;" class="text-elipsis">
                                                            <i class="bi bi-geo-alt-fill pe-1"></i>{{ $product->user->usr_dorm ?? $product->user->usr_address }}
                                                        </p>
                                                    </div>
                                                    <div style="width: 40%">
                                                        <p style="font-size: 9pt; margin: 0;" class="fw-semibold">
                                                            Rp {{ number_format($product->prd_price, 0, ',', '.') }}</p>
                                                        <p style="font-size: 9pt; margin: 0;"><i
                                                                class="bi bi-star-fill text-warning"></i>
                                                                {{ $product->avgRating() }}</p>
                                                    </div>
                                                </div>
                                                @if ($product->prd_closed_po)
                                                    <p style="font-size: 9pt; margin: 0;" class="text-elipsis">
                                                        <i class="bi bi-clock-fill"></i> Closed :
                                                        {{ \Carbon\Carbon::parse($product->prd_closed_po)->format('H.i') }} WIB
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end" style="width: 35%">
                                                <img src="{{ asset($product->prd_image) }}" style="width: 70%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-muted text-center">Product not found</p>
                            @endforelse
                        </div>

                        @if ($products->hasPages())
                            <div class="mt-3">
                                {{ $products->links() }}
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
                        style="font-size: 8pt;"></i>
                    2025</p>
            </div>
        </section>
    </div>
@endsection