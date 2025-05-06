@extends('layouts.app')

@section('content')
    <div style="padding-top: 5rem">
        <section id="optimatchQuiz" class="mt-5">
            <h5 class="fw-light mb-3 text-center">Confused about what to eat? Find your match with</h5>
            <div class="img-container text-center mx-auto pb-1 rounded-4 mb-5"
                style="width: fit-content; background-color: #FF5E00;">
                <img src="{{ asset('images/optimatch-logo-white.png') }}" style="width: 50%;">
            </div>
            <div id="optimatchContainer" class="text-center">
                <div class="mb-5">
                    <h4 id="optimatchQuestion">Question?</h4>
                </div>
                <div id="optimatchChoices" class="mb-5"></div>
            </div>

            <div id="optimatchResult" class="text-center" style="display:none;">
                <h4 class="mb-5">Your Match</h4>
                <div class="mb-4">
                    <div class="resultOpt-container mx-auto rounded-4">
                        <h5>Result 1</h5>
                    </div>
                </div>
                <div class="mt-3">
                    <h5>Search your comfort food at <span><a href="/marketplace">Yourplate Marketplace</a></span></h5>
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
                        style="font-size: 8pt;"></i> 2025</p>
            </div>
        </section>
    </div>
@endsection