<?php 
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class AuthApiController extends Controller
{
	public function register(Request $request)
	{
	    $validation=Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
	    $output=array();
	    if($validation->fails())
        {
            $output=
                array(
                      "message"=>"error",
                       "error"  =>$validation->errors()->first()
                  );

        }else
        {
            $user=new User();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->national_number=$request->national_number;
            $user->password=Hash::make($request->password);
            $user->user_type=2;
            $user->api_tocken=Str::random(6);
            $user->save();
            $output=
                array(
                    "message"=>"success",
                    "data"  =>""
                );
        }
        return json_encode($output);

	}
	public function login(Request $request)
    {
        if(auth()->attempt([
                 'email'    => $request->input('email'),
                 'password' => $request->input('password')
        ]))
        {
            $user=auth()->user();
            $user->api_tocken=Str::random(6);
            $user->save();
            $output=
                array(
                    "message"=>"success",
                    "data"  =>"Welcom You Logged Successfully"
                );
        }else
        {
            $output=
                array(
                    "message"=>"error",
                    "error"  =>"Your Email Or Password Incorresct"
                );
        }
        return json_encode($output);
    }
    public function travells(Request $request)
    {
        $validation=Validator::make($request->all(),[
            'class' => 'required',
            'FROM' => 'required',
            'TO' => 'required',
            'leave_time' => 'required',
            'num_ticket' => 'required',
        ]);
	    $output=array();
	    if($validation->fails())
        {
            $output=
                array(
                      "message"=>"error",
                       "data"  =>$validation->errors()->first()
                  );

        }else
        {
            $result = DB::table( 'trains' )

                ->select( 'trains.id','seats.id AS seat_id','seats.price','seats.class',
                    'station_from.station_name AS FROM','station_to.station_name AS TO','train_runway.leave_time')

                ->join( 'seats', 'trains.id', '=', 'seats.train_id' )
                ->join( 'trains_stations AS train_runway', 'trains.id', '=', 'train_runway.train_id' )
                ->join( 'stations AS station_from', 'station_from.id', '=', 'train_runway.station_id_from' )
                ->join( 'stations AS station_to', 'station_to.id', '=', 'train_runway.station_id_to' )

                ->where('seats.class','=',$request->class)
                ->where('train_runway.station_id_from','=',$request->FROM)
                ->where('train_runway.station_id_to','=',$request->TO)

                ->whereDate('train_runway.leave_time','>=',$request->leave_time)

                ->where('seats.empty_seat','>',$request->num_ticket)
                ->get();
            $output=
                array(
                    "message"=>"success",
                    "data"  =>$result
                );
        }

        return json_encode($output);
    }

}

?>

