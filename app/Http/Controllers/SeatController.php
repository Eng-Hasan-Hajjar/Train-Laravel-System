<?php

namespace App\Http\Controllers;

use App\Seat;
use App\Train;
use Illuminate\Http\Request;
use Validator;

class SeatController extends Controller
{
    //
    public function seats(){
        $trains=Train::all();
        $seats = Seat::all();
        return view('admin.seat',compact('trains','seats'));
    }

    public  function read_seat(){
        $seats = Seat::all();
        return view('seats.read',compact('seats'));
    }
    public  function create_seat(Request $request){
        $validator = Validator::make($request->all(), [
            'vehicle_num' => 'required',
            'class' => 'required',
            'empty_seat' => 'required',
            'full_seat' => 'required',
            'all_seat' => 'required',
            'price' => 'required',
        ]);

        if($validator->fails()){

            $output=array(
                "message"=>"error",
                "data"=>$validator->errors()
            );
            return $output;
        }else{
            $seat=new Seat();
            $seat->train_id=$request->train_id;
            $seat->vehicle_num=$request->vehicle_num;
            $seat->class=$request->class;
            $seat->empty_seat=$request->empty_seat;
            $seat->full_seat=$request->full_seat;
            $seat->all_seat=$request->all_seat;
            $seat->price=$request->price;
            $seat->save();
            $output=array(
                "message"=>"success",
                "data"=>$seat
            );
            return $output;
        }
    }
    public  function delete_seat(Request $request){
        $user=Seat::find($request->id);
        $user->delete();
    }
    public  function edite_seat(Request $request){
        $seat=Seat::find($request->id);
        return response($seat);
    }
    public  function update_seat(Request $request){
        $validator = Validator::make($request->all(), [
            'vehicle_num' => 'required',
            'class' => 'required',
            'empty_seat' => 'required',
            'full_seat' => 'required',
            'all_seat' => 'required',
            'price' => 'required',
        ]);

        if($validator->fails()){

            $output=array(
                "message"=>"error",
                "data"=>$validator->errors()
            );
            return $output;
        }else{
            $seat=new Seat();
            $seat->train_id=$request->train_id;
            $seat->vehicle_num=$request->vehicle_num;
            $seat->class=$request->class;
            $seat->empty_seat=$request->empty_seat;
            $seat->full_seat=$request->full_seat;
            $seat->all_seat=$request->all_seat;
            $seat->price=$request->price;
            $seat->save();
            $output=array(
                "message"=>"success",
                "data"=>$seat
            );
            return $output;
        }
    }

}
