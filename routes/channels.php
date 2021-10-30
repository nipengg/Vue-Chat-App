<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $room_id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('chat.{room_id}', function ($user, $id) {
    if (Auth::check()) {
        return ['id' => $user->id, 'name' => $user->name];
    }
});
