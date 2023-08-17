<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function store(BookingRequest $request)
    {
        $date = Carbon::createFromFormat('m/d/Y', $request->date);
        $time = Carbon::createFromFormat('g:ia', $request->time);
    
       Booking::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'date' => $date->format('Y-m-d'),
            'time' => $time->format('H:i:s'),
            'message' => $request->message,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('home')->with('success', 'Booking has been made!');
    }
}
