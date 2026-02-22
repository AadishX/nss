<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;

class AttendeesController extends Controller
{
    function register(Request $request) {
        $attendee = Attendee::where('roll_number', $request->input('roll_number'))->first();
        $attendee = $attendee ?? new Attendee();
        $attendee->name = $request->input('name');
        $attendee->roll_number = $request->input('roll_number');
        $attendee->phone_number = $request->input('phone_number');
        $attendee->email = $request->input('email');
        $attendee->course = $request->input('course');
        $attendee->year = $request->input('year');
        $attendee->save();

        return redirect('/')->with('status', 'Successfully Registered!');
    }
}
