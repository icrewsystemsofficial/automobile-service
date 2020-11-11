<?php

namespace App\Http\Controllers;

use App\Mail\carMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CarRentController extends Controller
{
    public function showCar()
    {
        return view('carRentRequest');
    }

    public function sendRequest(Request $request)
    {
        $car = [
            'name' => $request->name,
            'phone' => $request->phone,
            'cartype' => $request->cartype,
            'addr' => $request->addr
        ];
        // change the mail address for checking
        Mail::to('billysautoservice765@gmail.com')->send(new carMail($car));
        
        return back()->with('message_sent','Thank you for your request');
    }
}
