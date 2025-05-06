<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::where('chat_usr_id_buyer', session('usr_id'))
            ->with(['seller', 'lastMessage'])
            ->latest()
            ->get();

        return view('buyer.chats', compact('chats'));
    }

    public function indexSeller()
    {
        $chats = Chat::where('chat_usr_id_seller', session('usr_id'))
            ->with(['seller', 'lastMessage'])
            ->latest()
            ->get();

        return view('seller.chats', compact('chats'));
    }
}
