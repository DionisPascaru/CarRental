<?php


namespace App\Http\Controllers;


use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function sendOrder(Request $request)
    {
        $reservation = new Reservations;

        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->age = $request->age;
        $reservation->article_id = $request->article_id;
        $reservation->reservation_start = $request->resStart;
        $reservation->reservation_end = $request->resEnd;
        $reservation->status = $request->status;
        $reservation->save();
        return response()->json('New reservation added');
    }
}
