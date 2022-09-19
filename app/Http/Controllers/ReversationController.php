<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReversationController extends Controller
{
    //
    public  function admin_reversation()
    {
        $reversations= DB::table('reservations AS Table1')
            ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
            ->join("stations AS Table2","Table2.id","=","Table1.station_from")
            ->join("stations AS Table3","Table3.id","=","Table1.station_to")
            ->get();
        return view('admin.reversation',compact('reversations'));
    }
}
