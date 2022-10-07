<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BookingController extends Controller
{   
    public function index() 
    {
        return view('booking.index', [
            'bookings' => Booking::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'contact_no' => 'required',
            'address' => 'required',
            'event_type' => 'required',
            'event_place' => 'required',
            'photographer' => 'required',
            'event_date' => 'required' 
        ]);
        Booking::create([
            'user_id' => auth()->user()->id,
            'contact_no' => $request->contact_no,
            'address' => $request->address,
            'event_type' => $request->event_type,
            'event_place' => $request->event_place,
            'photographer_id' => $request->photographer,
            'date' => $request->event_date
        ]);
        return redirect(RouteServiceProvider::HOME)->with('message', 'Your booking has been succesfully placed, Thankyou!');
    }

    public function create()
    {
        $photographers = User::whereRoleIs('photographer')->get();
        if (auth()->user()->hasRole('user'))
        {
            return view('booking.create', [
                'photographers' => $photographers
            ]);
        }else
        {
            abort(403, 'Opps');
        }
    }
}
 