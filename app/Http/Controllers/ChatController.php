<?php

namespace App\Http\Controllers;
use App\Models\ChatMessage;
use App\Models\ChatRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function rooms(Request $request)
    {
        return ChatRoom::all();
    }

    public function messages(Request $request, $room_id)
    {
        return ChatMessage::where('chat_room_id', $room_id)->with('user')->orderBy('created_at', 'DESC')->get();
    }

    public function newMessage(Request $request, $room_id)
    {
        $newMessage = new ChatMessage;
        $newMessage->user_id = Auth::id();
        $newMessage->chat_room_id = $room_id;
        $newMessage->message = $request->message;
        $newMessage->save();
        return $newMessage;
    }
}
