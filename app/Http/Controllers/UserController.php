<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    //
    public function user(){
        $users = User::all();
        return view('admin.user',compact('users'));
    }

      public  function read_user(){
        $users = User::all();
        return view('users.read',compact('users'));
      }
      public  function create_user(Request $request){
              $validator = Validator::make($request->all(), [
                  'name' => 'required|string',
                  'email' => 'required|email|unique:users',
                  'password' => 'required',
                  'national_number' => 'required',
              ]);

              if($validator->fails()){

                  $output=array(
                      "message"=>"error",
                      "data"=>$validator->errors()
                  );
                  return $output;
              }else{
                  $user=new User();
                  $user->name=$request->name;
                  $user->email=$request->email;
                  $user->password=Hash::make($request->password);
                  $user->user_type=$request->user_type;
                  $user->national_number=$request->national_number;
                  $user->save();
                  $output=array(
                      "message"=>"success",
                      "data"=>$user
                  );
                  return $output;
              }
      }
      public  function delete_user(Request $request){
        $user=User::find($request->id);
        $user->delete();
      }
      public  function edite_user(Request $request){
          $user=User::find($request->id);
          return response($user);
      }
      public  function update_user(Request $request){
          $validator = Validator::make($request->all(), [
              'name' => 'required|string',
              'email' => 'required|email',
              'password' => 'required',
              'national_number' => 'required',
          ]);

          if($validator->fails()){

              $output=array(
                  "message"=>"error",
                  "data"=>$validator->errors()
              );
              return $output;
          }else{
              $user=User::find($request->id);
              $user->name=$request->name;
              $user->email=$request->email;
              $user->password=Hash::make($request->password);
              $user->user_type=$request->user_type;
              $user->national_number=$request->national_number;
              $user->save();
              $output=array(
                  "message"=>"success",
                  "data"=>$user
              );
              return $output;
          }
      }

}
