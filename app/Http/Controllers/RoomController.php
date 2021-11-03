<?php

namespace App\Http\Controllers;
use App\Models\ChatRoom;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function newRoom(Request $request)
    {
        $newRoom = new ChatRoom;
        $newRoom->name = $request->name;
        $newRoom->save();

        return $newRoom;
    }

    public function destroy($id)
    {
        $room = ChatRoom::find($id);
        $messages = ChatMessage::where('chat_room_id', $id)->get();

        if ($room || $messages)
        {
            $room->delete();

            if ($messages)
            {
                DB::delete("
                    DELETE FROM chat_messages
                    WHERE
                    chat_room_id = ?
                ", [$id]);
            }
            return "Room and Room Message Deleted Successfully";
        }

        return "Item not found";
    }
}
