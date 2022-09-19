<?php

namespace App\Http\Controllers;

use App\Station;
use Illuminate\Http\Request;
use Validator;

class StationController extends Controller
{
    //
    public function station(){
        $stations = Station::all();
        return view('admin.station',compact('stations'));
    }
    public  function read_station(){
        $stations = Station::all();
//        return response($users);
        return view('station.read',compact('stations'));
    }
    public  function create_station(Request $request){
        $validator = Validator::make($request->all(), [

            'station_city' => 'required|string',
            'station_name' => 'required|string',
        ]);

        if($validator->fails()){

            $output=array(
                "message"=>"error",
                "data"=>$validator->errors()
            );
            return $output;
        }else{
            $station=new Station();
            $station->station_city=$request->station_city;
            $station->station_name=$request->station_name;
            $station->save();
            $output=array(
                "message"=>"success",
                "data"=>$station
            );
            return $output;
        }
    }
    public  function delete_station(Request $request){
        $user=Station::find($request->id);
        $user->delete();
    }
    public  function edite_station(Request $request){
        $user=Station::find($request->id);
        return response($user);
    }
    public  function update_station(Request $request){
        $validator = Validator::make($request->all(), [

            'station_city' => 'required|string',
            'station_name' => 'required|string',
        ]);

        if($validator->fails()){

            $output=array(
                "message"=>"error",
                "data"=>$validator->errors()
            );
            return $output;
        }else{
            $station=Station::find($request->id);
            $station->station_city=$request->station_city;
            $station->station_name=$request->station_name;
            $station->save();
            $output=array(
                "message"=>"success",
                "data"=>$station
            );
            return $output;
        }
    }


}
