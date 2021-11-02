<?php

namespace App\Http\Controllers;
use App\Models\ChatRoom;
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
        $data = ChatRoom::find($id);
        if ($data)
        {
            $data->delete();
            return "Deleted Successfully";
        }

        return "Item not found";
    }
}
