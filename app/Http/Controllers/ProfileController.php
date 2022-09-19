<?php

namespace App\Http\Controllers;

use App\Reservations;
use App\Seat;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //
    public function profile()
    {
        if(Auth::check())
        {
            $national_number=Auth::user()->national_number;

            

            $reversations= DB::table('reservations AS Table1')
               ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
               ->join("stations AS Table2","Table2.id","=","Table1.station_from")
               ->join("stations AS Table3","Table3.id","=","Table1.station_to")
               ->where('Table1.national_number',"=",$national_number)
               ->get();
            

            return view('Customer.profile',compact('reversations'));
        }else
        {
            return redirect('login');
        }
    }
    public  function cancle_reversation(Request $request)
    {
        $reversation=Reservations::find($request->reversation_id);

        $mydate = $reversation->reservation_time;
        $daystosum = '1';
        $datesum = date('d-m-Y H:m', strtotime($mydate.' + '.$daystosum.' days'));

      if($datesum < $reversation->travell_time )
        {
            $out_put=array(
                "message"=>"error",
                "data"=>"you can not  cansel this  reversation"
            );
        }else
        {
             $seat=Seat::find($reversation->seat_id);
            $full_seat=$seat->full_seat;
            $empty_seat=$seat->empty_seat;
            $seat->full_seat=$full_seat-$reversation->num_of_ticket;
            $seat->empty_seat=$empty_seat+$reversation->num_of_ticket;

             $seat->save();
            $reversation->delete();
            $out_put=array(
                "message"=>"success",
                "data"=>"reversation has canseled successefully"
            );

        }
       return $out_put;

    }
}
