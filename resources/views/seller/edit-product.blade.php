@extends('layouts.app')

@section('content')
    <div>
        <section id="header-product">
            <img src="{{ asset('images/marketplace-bg.png') }}" style="width: 100%">
        </section>
        <section id="product">
            <div class="mt-5 mb-4" style="padding: 0 10rem;">
                <form action="{{ route('products.update', $product->prd_id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-sm-8">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Product Name" name="name"
                                    value="{{ old('name', $product->prd_name) }}" required>
                                <label for="name">Product Name<span class="text-danger">*</span></label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="type" aria-label="Select Type" name="type">
                                    <option value="1" {{ $product->prd_type == 1 ? 'selected' : '' }}>Foods</option>
                                    <option value="2" {{ $product->prd_type == 2 ? 'selected' : '' }}>Drinks</option>
                                    <option value="3" {{ $product->prd_type == 3 ? 'selected' : '' }}>Services</option>
                                    <option value="4" {{ $product->prd_type == 4 ? 'selected' : '' }}>Etc</option>
                                </select>
                                <label for="type">Product Type<span class="text-danger">*</span></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="price" placeholder="Product Price" name="price"
                                    value="{{ number_format(old('price', $product->prd_price), 0, ',', '.') }}" required
                                    oninput="formatRupiah(this)">
                                <label for="price">Product Price<span class="text-danger">*</span></label>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Product Description" id="description"
                                    style="height: 100px"
                                    name="description">{{ old('description', $product->prd_desc) }}</textarea>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="closed_po" placeholder="Closed PO"
                                    value="{{ old('closedpo', $product->prd_closed_po ? \Carbon\Carbon::parse($product->prd_closed_po)->format('H:i') : '') }}"
                                    name="closedpo">
                                <label for="closed_po">Closed PO (Pre Order)</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <div class="mb-3 d-flex justify-content-center">
                                    <div class="imagereview-container">
                                        <img id="selectedImage" src="{{ asset($product->prd_image) }}"
                                            alt="example placeholder" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
                                        <label class="form-label text-white mb-0" for="customFile1">Choose file</label>
                                        <input type="file" class="form-control d-none" id="customFile1" name="picture"
                                            onchange="displaySelectedImage(event, 'selectedImage')" accept="image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-center">
                                <a href="{{ url('/seller/marketplace') }}" class="btn btn-secondary me-2">Back
                                </a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
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