<?php

namespace App\Http\Controllers;

use App\Reservations;
use App\Station;
use App\Train;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class AdminController extends Controller
{
    //
    public function index(){
        $stations=Station::all();
        $trains=Train::all();


        $record = Reservations::select(DB::raw("COUNT(*) as count"), DB::raw("year(created_at) as day_name"), DB::raw("year(created_at) as day"))
            //->where('created_at', '>', Carbon::today()->subDay(6))
            ->groupBy('day_name','day')
            ->orderBy('day')
            ->get();
        $record_users = User::select(DB::raw("COUNT(*) as count"), DB::raw("year(created_at) as day_name"), DB::raw("year(created_at) as day"))
            //->where('created_at', '>', Carbon::today()->subDay(6))
            ->groupBy('day_name','day')
            ->orderBy('day')
            ->get();
          // dd($record);
        $data = [];
        $data_users = [];

        foreach($record as $row) {
            $data['label'][] = $row->day_name;
            $data['data'][] = (int) $row->count;
        }
        
        foreach($record_users as $row) {
            $data_users['label'][] = $row->day_name;
            $data_users['data'][] = (int) $row->count;
        }

        $data['chart_data'] = json_encode($data);
        $data_users['chart_data_users'] = json_encode($data_users);



    	return view('tables',$data,$data_users);

    }
    public function chartjs()
    {
       /* $viewer = View::select(DB::raw("SUM(numberofview) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("year(created_at)"))
            ->get()->toArray();
        $viewer = array_column($viewer, 'count');*/

        $click = Reservations::select(DB::raw("SUM(id) as count"))
            //->orderBy("created_at")
           // ->groupBy(DB::raw("year(created_at)"))
            ->get()->toArray();
        $click = array_column($click, 'count');


        return view('tables')
            //->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK))
            ->with('click',json_encode($click,JSON_NUMERIC_CHECK));
    }

}
