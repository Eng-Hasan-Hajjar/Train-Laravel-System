<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Station;
use App\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class OfferController extends Controller
{
    //
    public  function offer()
    {
        $offers= DB::table('offers AS Table1')
            ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
            ->join("stations AS Table2","Table2.id","=","Table1.station_id_from")
            ->join("stations AS Table3","Table3.id","=","Table1.station_id_to")

            ->get();
        return view('Customer.offer',compact('offers'));
    }

    public function admin_offer(){
        $offers= DB::table('offers AS Table1')
            ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
            ->join("stations AS Table2","Table2.id","=","Table1.station_id_from")
            ->join("stations AS Table3","Table3.id","=","Table1.station_id_to")

            ->get();
        $stations=Station::all();
        $trains=Train::all();
        return view('admin.offer',compact('offers','stations','trains'));
    }

    public  function read_offer(){
        $offers= DB::table('offers AS Table1')
            ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
            ->join("stations AS Table2","Table2.id","=","Table1.station_id_from")
            ->join("stations AS Table3","Table3.id","=","Table1.station_id_to")

            ->get();
        return view('offer.read',compact('offers'));
    }
    public  function create_offer(Request $request){
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
            $offer=new Offer();
            $offer->train_id=$request->train_id;
            $offer->station_id_from=$request->station_id_from;
            $offer->station_id_to=$request->station_id_to;
            $offer->arrival_time=$request->arrival_time;
            $offer->leave_time=$request->leave_time;
            $offer->save();
            $data=DB::table('offers AS Table1')
                ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
                ->join("stations AS Table2","Table2.id","=","Table1.station_id_from")
                ->join("stations AS Table3","Table3.id","=","Table1.station_id_to")
                ->where("Table1.id","=",$offer->id)
                ->get();
            $output=array(
                "message"=>"success",
                "data"=>$data
            );
            return $output;
        }
    }
    public  function delete_offer(Request $request){
        $user=Offer::find($request->id);
        $user->delete();
    }
    public  function edite_offer(Request $request){
        $offer=Offer::find($request->id);
        return response($offer);
    }
    public  function update_offer(Request $request){
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
            $offer=Offer::find($request->id);
            $offer->train_id=$request->train_id;
            $offer->station_id_from=$request->station_id_from;
            $offer->station_id_to=$request->station_id_to;
            $offer->arrival_time=$request->arrival_time;
            $offer->leave_time=$request->leave_time;
            $offer->save();
            $data=DB::table('offers AS Table1')
                ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
                ->join("stations AS Table2","Table2.id","=","Table1.station_id_from")
                ->join("stations AS Table3","Table3.id","=","Table1.station_id_to")
                ->where("Table1.id","=",$offer->id)
                ->get();
            $output=array(
                "message"=>"success",
                "data"=>$data
            );
            return $output;
        }
    }

}
