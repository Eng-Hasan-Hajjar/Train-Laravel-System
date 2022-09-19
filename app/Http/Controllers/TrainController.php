<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrainController extends Controller
{
    //
    public function train(){
        $trains=Train::all();

        return view('admin.train',compact('trains'));
    }
    public  function read_train(){
        $trains=Train::all();
        return view('trains.read',compact('trains'));
    }
    public function create_trian(Request $request){
       $validation=Validator::make($request->all(),[
           'train_name'=>'required',

       ]);
       if($validation->fails()){
           $output=array(
               'message'=>'error',
               'data'=>$validation->errors()
           );
           return $output;

       }else{
          $train=new Train();
          $train->train_name=$request->train_name;
//          $train->full_seat=$request->full_seat;
//          $train->all_seat=$request->all_seat;
          $train->save();
           $output=array(
               'message'=>'success',
               'data'=>$train
           );
           return $output;
     }
    }
    public  function delete_train(Request $request){
        $train=Train::find($request->id);
        $train->delete();
    }
    public  function edite_train(Request $request){
        $train=Train::find($request->id);
        return response($train);
    }
    public  function update_trian(Request $request)
    {
        $validation=Validator::make($request->all(),[
            'train_name'=>'required',

        ]);
        if($validation->fails()){
            $output=array(
                'message'=>'error',
                'data'=>$validation->errors()
            );
            return $output;

        }else{
            $train=Train::find($request->id);
            $train->train_name=$request->train_name;
            $train->save();
            $output=array(
                'message'=>'success',
                'data'=>$train
            );
            return $output;
        }
    }
}
