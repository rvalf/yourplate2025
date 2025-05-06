@extends('layouts.admin')

@section('content')
    <div class="d-flex flex-column">
        <!-- Meal Input Form -->
        <div class="card p-4">
            <h5 class="text-center mb-3">Seller Need Approval</h5>
            <div class="row">
                <div class="col-sm-6">
                    <div class="bg-light p-2 ps-3 rounded-4 shadow-sm mb-2">
                        <small>Seller ID</small>
                        <p class="fw-semibold mb-0">{{ $actUser->userSeller->usr_id }}</p>
                    </div>
                    <div class="bg-light p-2 ps-3 rounded-4 shadow-sm mb-2">
                        <small>Seller Fullname</small>
                        <p class="fw-semibold mb-0">{{ $actUser->userSeller->usr_fullname }}</p>
                    </div>
                    <div class="bg-light p-2 ps-3 rounded-4 shadow-sm mb-2">
                        <small>Payment Transaction</small>
                        <p class="fw-semibold mb-0">{{ $actUser->created_at->format('d M Y H:i') }}</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-end mt-4">
                        <form action="{{ route('actseller.reject', $actUser->act_id) }}" method="POST"
                            onsubmit="return confirm('Are you sure want to Reject this payment seller?');">
                            @csrf
                            <button type="submit" class="btn btn-danger me-3">Reject</button>
                        </form>
                        <form action="{{ route('actseller.approve', $actUser->act_id) }}" method="POST"
                            onsubmit="return confirm('Are you sure want to Approve this payment seller?');">
                            @csrf
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset($actUser->act_image) }}" class="w-100">
                </div>
            </div>
        </div>
    </div>
@endsection