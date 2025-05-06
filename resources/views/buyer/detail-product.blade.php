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
                                {{ $product->avgRating() }}
                            </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-1 ps-1 fw-semibold">{{ $product->user->usr_fullname }}</h5>
                            <p class="fw-semibold">
                                Rp {{ number_format($product->prd_price, 0, ',', '.') }}</p>
                        </div>
                        <p class="mb-1">
                            <i
                                class="bi bi-geo-alt-fill pe-1"></i>{{ $product->user->usr_dorm != null ? $product->user->usr_dorm : $product->user->usr_address }}
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
                            <a href="{{ url('/marketplace') }}" class="btn btn-secondary me-2 px-2"><i
                                    class="bi bi-caret-left-fill"></i></a>
                            <a href="{{ route('message.start', $product->prd_id) }}" class="btn btn-primary">Chat Now</a>
                        </div>
                        <div class="pe-1">
                            <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                                <p class="mb-0 fw-bold">Product Review</p>
                                <button type="button" class="btn p-0 ps-3 py-1" data-bs-toggle="modal"
                                    data-bs-target="#modalAddReview"><i class="bi bi-plus-circle"></i>
                                </button>
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
                                    <a href="{{ route('reviews.detail', $product->prd_id) }}"
                                        style="font-size: 10pt; color: black;">Show More Review..</a>
                                </div>
                            @else
                                <p class="text-muted" style="font-size: 10pt;">Product has no review. Have been try this product? Add your
                                    review's right now!</p>
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

    <!-- Modal Add Review -->
    <div class="modal fade" id="modalAddReview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('/marketplace/detail/addreview') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Your Review's</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="rating">
                                <input type="radio" name="rating" id="star5" value="5" required><label for="star5"><i
                                        class="bi bi-star-fill"></i></label>
                                <input type="radio" name="rating" id="star4" value="4" required><label for="star4"><i
                                        class="bi bi-star-fill"></i></label>
                                <input type="radio" name="rating" id="star3" value="3" required><label for="star3"><i
                                        class="bi bi-star-fill"></i></label>
                                <input type="radio" name="rating" id="star2" value="2" required><label for="star2"><i
                                        class="bi bi-star-fill"></i></label>
                                <input type="radio" name="rating" id="star1" value="1" required><label for="star1"><i
                                        class="bi bi-star-fill"></i></label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="desc" placeholder="Review Desc" name="desc"
                                value="{{ old('desc') }}" style="height: 100px;" required>
                            <label for="desc">Type Here</label>
                        </div>
                        <input type="hidden" value="{{ $product->prd_id }}" name="prd_id">
                        <input type="hidden" value="product_page" name="page">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Upload Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection