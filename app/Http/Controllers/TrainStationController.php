<?php

namespace App\Http\Controllers;

use App\Station;
use App\Train;
use App\TrainStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class TrainStationController extends Controller
{

    public function trains_stations(){
        $stations=Station::all();
        $trains=Train::all();
        $trains_stations= DB::table('trains_stations AS Table1')
            ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
            ->join("stations AS Table2","Table2.id","=","Table1.station_id_from")
            ->join("stations AS Table3","Table3.id","=","Table1.station_id_to")

            ->get();
        return view('admin.train_station',compact('stations','trains','trains_stations'));
    }
    public  function read_train_station(){
//        $trains_stations = DB::table('trains_stations AS TS')
//            ->select('TS.*','S.station_name')
//            ->join('stations AS S', 'S.id', '=', 'TS.station_id')->get();
//
        $trains_stations= DB::table('trains_stations AS Table1')
            ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
            ->join("stations AS Table2","Table2.id","=","Table1.station_id_from")
            ->join("stations AS Table3","Table3.id","=","Table1.station_id_to")

            ->get();
        return view('trains_stations.read',compact('trains_stations'));
    }
    public  function create_train_station(Request $request){

        $validator = Validator::make($request->all(), [

            'arrival_time' => 'required',
            'leave_time' => 'required',
        ]);

        if($validator->fails()){

            $output=array(
                "message"=>"error",
                "data"=>$validator->errors()
            );
            return $output;
        }else{
            $train_station=new TrainStation();
            $train_station->train_id=$request->train_id;
            $train_station->station_id_from=$request->station_id_from;
            $train_station->station_id_to=$request->station_id_to;
            $train_station->arrival_time=$request->arrival_time;
            $train_station->leave_time=$request->leave_time;
            $train_station->save();
            $data=DB::table('trains_stations AS Table1')
                ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
                ->join("stations AS Table2","Table2.id","=","Table1.station_id_from")
                ->join("stations AS Table3","Table3.id","=","Table1.station_id_to")
                ->where("Table1.id","=",$train_station->id)
                ->get();
            $output=array(
                "message"=>"success",
                "data"=>$data
            );
            return $output;
        }
    }
    public  function delete_train_station(Request $request){
        $user=TrainStation::find($request->id);
        $user->delete();
    }
    public  function edite_train_station(Request $request){
        $train_station=TrainStation::find($request->id);
        return response($train_station);
    }
    public  function update_train_station(Request $request){
        $validator = Validator::make($request->all(), [

            'arrival_time' => 'required',
            'leave_time' => 'required',
        ]);

        if($validator->fails()){

            $output=array(
                "message"=>"error",
                "data"=>$validator->errors()
            );
            return $output;
        }else{
            $train_station=TrainStation::find($request->id);
            $train_station->train_id=$request->train_id;
            $train_station->station_id_from=$request->station_id_from;
            $train_station->station_id_to=$request->station_id_to;
            $train_station->arrival_time=$request->arrival_time;
            $train_station->leave_time=$request->leave_time;
            $train_station->save();
            $data=DB::table('trains_stations AS Table1')
                ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
                ->join("stations AS Table2","Table2.id","=","Table1.station_id_from")
                ->join("stations AS Table3","Table3.id","=","Table1.station_id_to")
                ->where("Table1.id","=",$train_station->id)
                ->get();
            $output=array(
                "message"=>"success",
                "data"=>$data
            );
            return $output;
        }
    }

}
