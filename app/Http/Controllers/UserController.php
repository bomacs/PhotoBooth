<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        // 
    }

    public function show() {
        dd(Auth::user());

        $user = User::findOrFail();
    }
}
