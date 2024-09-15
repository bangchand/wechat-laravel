<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function no_chat(): mixed
    {
        $users = User::all();

        return view('no_chat', compact('users'));
    }

    public function chat(): mixed
    {
        $users = User::all();

        return view('chat', compact('users'));
    }
}
