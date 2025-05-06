<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function startMessage($id)
    {
        $product = Product::findOrFail($id);
        $product->avgRating = $product->reviews->avg('rvw_rate');

        return view('buyer.start-messages', compact('product'));
    }

    public function storeFirstMessage(Request $request)
    {
        $request->validate([
            'textmessage' => ['required', 'string', 'max:255'],
        ]);

        $chat = Chat::where('chat_usr_id_seller', $request->seller_id)
            ->where('chat_usr_id_buyer', session('usr_id'))
            ->first();

        if (!$chat) {
            $chat = Chat::create([
                'chat_usr_id_seller' => $request->seller_id,
                'chat_usr_id_buyer' => session('usr_id')
            ]);
        }

        $message = Message::create([
            'msg_text' => $request->textmessage,
            'msg_prd_id' => $request->prd_id,
            'msg_chat_id' => $chat->chat_id,
            'msg_usr_id_sender' => session('usr_id')
        ]);

        return redirect('/marketplace')->with('success', 'Product uploaded successfully!');
    }

    public function getMessageByChat($id)
    {
        $messages = Message::with('chat')
            ->where('msg_chat_id', $id)
            ->orderBy('created_at', 'asc')
            ->get();

        $chat = $messages->first()?->chat;

        return view('buyer.messages', compact('messages', 'chat'));
    }

    public function getMessageByChatSeller($id)
    {
        $messages = Message::with('chat')
            ->where('msg_chat_id', $id)
            ->orderBy('created_at', 'asc')
            ->get();

        $chat = $messages->first()?->chat;

        return view('seller.messages', compact('messages', 'chat'));
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'textmessage' => ['required', 'string', 'max:255'],
        ]);

        $message = Message::create([
            'msg_text' => $request->textmessage,
            'msg_prd_id' => $request->prd_id ? $request->prd_id : null,
            'msg_chat_id' => $request->chat_id,
            'msg_usr_id_sender' => session('usr_id')
        ]);

        return redirect()->back()->with('success', 'Message stored successfully!');
    }
}
