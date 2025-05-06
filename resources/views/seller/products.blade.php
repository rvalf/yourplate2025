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
                    <div class="d-flex justify-content-between align-items-start">
                        <form method="GET" class="d-flex mb-3" role="search" style="width: 85%;">
                            <input type="text" name="s" value="{{ $s }}" class="form-control me-2" placeholder="Search">
                            <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                        </form>
                        <a href="{{ $user->usr_seller_confirmed == 0 ? '#' : url('/seller/marketplace/create') }}"
                            class="btn btn-primary mb-3 {{ $user->usr_seller_confirmed == 0 ? 'disabled' : '' }}"
                            style="white-space: nowrap; height: 38px;">
                            Upload
                        </a>
                    </div>
                    <div class="row g-3 mt-1">
                        @if($user->latestActiveSeller->act_approval == 0)
                            <div class="px-2">
                                <div class="text-center alert alert-success">
                                    <h5>Your Payment status: Pending</h5>
                                    <p class="fw-light">Pembayaran-mu sedang dikonfirmasi oleh pihak YourPlate.</p>
                                </div>
                            </div>
                        @endif

                        @if($user->usr_seller_confirmed == 0)
                            <div class="text-center">
                                <h5>Seller Information!</h5>
                                <p class="fw-light">Untuk menjual produk, Anda harus membayar Rp 25.000 dengan
                                    durasi tayang 30 hari sejak
                                    pembayaran diterima, Anda dapat melakukan pembayaran lagi dengan jumlah yang sama untuk
                                    memperpanjang durasi tayang.
                                    Dengan melakukan transaksi ini, anda menyetujui syarat dan
                                    menyadari bahwa produk produk yang tidak diperpanjang akan secara otomatis tidak tayang
                                    setelah
                                    waktu tayang berakhir.</p>
                                <p>Lakukan aktivasi pada halaman Activate Seller</p>
                                <a href="/seller/activate" class="btn btn-primary">Activate Seller</a>
                            </div>
                        @endif

                        @if($user->usr_seller_confirmed == 1)
                        @forelse($products as $product)
                        <div class="col-sm-6">
                            <div class="card card-product card-product2 shadow-sm">
                                <div class="card-body d-flex justify-content-between">
                                    <div class="ps-1" style="width: 60%">
                                        <p class="mb-0 fw-semibold">{{ $product->prd_name }}</p>
                                        <div class="d-flex justify-content-between">
                                            <div style="width: 60%">
                                                <p style="font-size: 9pt; margin: 0;" class="text-elipsis">
                                                    {{ $user->usr_fullname }}
                                                </p>
                                                <p style="font-size: 9pt; margin: 0;" class="text-elipsis">
                                                    <i
                                                        class="bi bi-geo-alt-fill pe-1"></i>{{ $user->usr_dorm != null ? $user->usr_dorm : $user->usr_address }}
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
                                    <div class="d-flex align-items-center justify-content-end" style="width: 30%">
                                        <img src="{{ asset($product->prd_image) }}" style="width: 70%">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center align-items-end"
                                        style="width: 10%">
                                        <a href="{{ route('products.edit', $product->prd_id) }}"
                                            class="btn btn-primary p-0 px-1 mb-1">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('products.destroy', $product->prd_id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure want to delete this product?');">
                                            @csrf
                                            <button type="submit" class="btn btn-primary p-0 px-1"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="me-2 mb-2 text-end">
                                    <a href="{{ route('products.show', $product->prd_id) }}"
                                        class="btn btn-sm btn-primary">See Detail</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    @if($products->hasPages())
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