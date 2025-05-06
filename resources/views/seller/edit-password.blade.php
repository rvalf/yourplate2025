@extends('layouts.app')

@section('content')
    <div>
        <section id="profile">
            <div class="mt-5 mb-1" style="padding: 0 20rem;">
                <div class="pt-4">
                    <!-- Card Utama -->
                    <div class="card card-profile shadow-sm p-3 py-4 mx-auto" style="width: 70%;">
                        <div class="text-center mb-2">
                            <img class="rounded-circle shadow-sm" style="width: 25%;" alt="avatar"
                                src="{{ asset('images/profile.jpg') }}" />
                        </div>
                        <h5 class="fw-bold text-center mb-1">{{ $user->usr_id }}</h5>
                        <p class="fw-semibold text-center mb-3">{{ $user->usr_email }}</p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('profile.change-password') }}" method="post">
                            @csrf
                            <div class="form-floating mb-2">
                                <input type="password" class="form-control" id="old_password" required placeholder="old_password"
                                    name="old_password">
                                <label for="old_password">Old Password<span class="text-danger">*</span></label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="password" class="form-control" id="new_password" required placeholder="new_password"
                                    name="new_password">
                                <label for="new_password">New Password<span class="text-danger">*</span></label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="password" class="form-control" id="new_password2" required placeholder="new_password2"
                                    name="new_password2">
                                <label for="new_password2">Re-Type New Password<span class="text-danger">*</span></label>
                            </div>
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <a href="{{ url('/seller/profile') }}" class="btn btn-secondary me-2">Back
                                </a>
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
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