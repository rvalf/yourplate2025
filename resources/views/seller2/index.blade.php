@extends('layouts.admin')

@section('content')
    <div class="d-flex flex-column">
        @if (session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif
        <h5 class="text-center mb-3">Seller Need Approval</h5>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Seller ID</th>
                        <th>Seller Fullname</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activeSellers->where('act_approval', 0) as $index => $actseller)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $actseller->userSeller->usr_id }}</td>
                            <td>{{ $actseller->userSeller->usr_fullname }}</td>
                            <td>
                                <a href="{{ route('actseller.show', $actseller->act_id) }}"
                                    class="btn btn-warning btn-sm">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h5 class="text-center mt-5 mb-3">Seller Active</h5>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Seller ID</th>
                        <th>Seller Fullname</th>
                        <th>Start Active Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($confirmedSellers as $index => $actseller)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $actseller->usr_id }}</td>
                            <td>{{ $actseller->usr_fullname }}</td>
                            <td>{{ $actseller->latestActiveSeller->updated_at->format('d M Y H:i') }}</td>
                            <td>
                                <form action="{{ route('actseller.nonactive') }}" method="POST"
                                    onsubmit="return confirm('Are you sure want to Nonactive this seller?');">
                                    @csrf
                                    <input type="hidden" value="{{ $actseller->usr_id }}" name="usr_id">
                                    <button type="submit" class="btn btn-danger">Non-active</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection