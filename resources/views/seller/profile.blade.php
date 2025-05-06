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
                        <div class="text-center mb-3">
                            <a href="{{ url('/seller/profile/change-password') }}" class="btn btn-danger">Change Password
                            </a>
                        </div>
                        <div class="mx-auto" style="width: 80%;">
                            <div class="bg-light p-2 ps-3 rounded-4 shadow-sm mb-2">
                                <small>Fullname</small>
                                <p class="fw-semibold mb-0">{{ $user->usr_fullname }}</p>
                            </div>
                            <div class="bg-light p-2 ps-3 rounded-4 shadow-sm mb-2">
                                <small>Address</small>
                                <p class="fw-semibold mb-0">{{ $user->usr_address }}</p>
                            </div>
                            <div class="bg-light p-2 ps-3 rounded-4 shadow-sm mb-2">
                                <small>Dorm</small>
                                <p class="fw-semibold mb-0">{{ $user->usr_dorm ? $user->usr_dorm : '-' }}</p>
                            </div>
                            <div class="bg-light p-2 ps-3 rounded-4 shadow-sm mb-3">
                                <small>Phone</small>
                                <p class="fw-semibold mb-0">{{ $user->usr_phone }}</p>
                            </div>
                            <div class="text-center">
                                <a href="{{ url('/seller/profile/edit') }}" class="btn btn-primary">Change Profile
                                </a>
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