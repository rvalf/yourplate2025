@extends('layouts.app')

@section('content')
    <div>
        <section id="chats">
            <div class="mt-5 mb-4" style="padding: 0 20rem;">
                <div class="pt-4">
                    @forelse($chats as $chat)
                        <div class="card card-chat shadow-sm mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5 class="mb-2">{{ $chat->seller->usr_fullname }}</h5>
                                        @if($chat->lastMessage)
                                            <p class="mb-0 text-muted">
                                                <span>{{ $chat->lastMessage->sender->usr_id === session('usr_id') ? 'You' : $chat->lastMessage->sender->usr_fullname }}</span>:
                                                {{ $chat->lastMessage->msg_text }}</p>
                                        @endif
                                    </div>
                                    <div class="col-sm-3 text-end">
                                        <p class="mb-1" style="font-size: 10pt;">
                                            {{ $chat->lastMessage->created_at->format('d/m/y H:i') }}</p>
                                        <a href="{{ route('message.show', $chat->chat_id) }}" class="btn btn-secondary px-2"><i
                                                class="bi bi-caret-right-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted text-center">Produk tidak ditemukan.</p>
                    @endforelse
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