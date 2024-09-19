<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function no_chat(): mixed
    {
        $users = User::all();

        return view('no_chat', compact('users'));
    }

    public function chat($uuid): mixed
    {
        $chat = Chat::where('uuid', $uuid)->first();

        if (!$chat) {
            return redirect()->route('home')->with('error', 'Chat tidak ditemukan.');
        }

        $users = User::all();

        return view('chat', compact('users'));
    }
}
