<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request) {

        if (Auth::user()->hasRole('user')){
            return view('user.userdashboard');
        }elseif (Auth::user()->hasRole('photographer')) {
            return view('photographer.photographerdash');
        }elseif (Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
        }else {
            Auth::guard('web')->logout();

            $request->session()->invalidate();
    
            $request->session()->regenerateToken();
            return redirect('/');
        }
    }
}
