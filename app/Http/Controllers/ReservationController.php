<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reserve(Request $request){
        /*$this->validate($request,[
           'name' => 'require',
           'date' => 'require',
           'person' => 'require',
            'time' => 'require',
            'email' => 'require',
            'phone_number' => 'require',
        ]);*/

        $reservation = new Reservation();
        $reservation->name = $request-> name;
        $reservation->date = $request-> date;
        $reservation->person = $request-> person;
        $reservation->time = $request-> time;
        $reservation->email = $request-> email;
        $reservation->phone_number = $request-> phone_number;
        $reservation->status = false;
        $reservation->save();

        return redirect()->back();

    }
}
