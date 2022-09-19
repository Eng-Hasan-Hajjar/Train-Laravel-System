<?php

namespace App\Http\Controllers;

use App\Reservations;
use App\ReservationsDetails;
use App\Seat;
use App\Station;
use App\TrainStation;
use App\User;
use PDF;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Validator;

class CustomerController extends Controller
{
    //
    public  function index()
    {
        return view('Customer.home');
    }


    public  function ticket_view()
    {
        $cities=Station::all();
        return view('Customer.ticket',compact('cities'));

    }
    public function first_step(Request $request)
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

        $output='';
        foreach ($result as $tr)
        {
            $output.='<tr id="'.$tr->seat_id.'" >
                            <td><input type="radio" name="train" id="'.$tr->seat_id.'" value="'.$tr->seat_id.'" data-id="'.$tr->leave_time.'"></td>
                            <td>'.$tr->id.'</td>
                            <td>'.$tr->FROM.'</td>
                            <td>'.$tr->TO.'</td>
                            <td>'.$tr->class.'</td>
                            <td>'.$tr->leave_time.'</td>
                            <td>'.$tr->price.'</td>
                            
                      </tr>';
        }
        $output.='<input type="hidden" name="seat_id" id="seat_id"><input type="hidden" name="tarrival_time_hidden" id="tarrival_time_hidden">';

        return response($output);


    }

    public  function last_step(Request $request)
    {
//
        $validator = Validator::make($request->all(), [
            'num_ticket' => 'required|numeric',
            'seat_id' => 'required',
            'email' => 'required|email',
            'national_number' => 'required|numeric',
            'phone' => 'required|numeric',
            'leave_time' => 'required',
        ]);

        if($validator->fails())
        {
            $output=array(
                "message"=>"error",
                "data"=>$validator->errors()
            );

        }else
        {
            $user_id = User::Select('id')->where('national_number','=',$request->national_number)->first();
//        $train_id = Seat::Select('train_id')->where('id','=',$request->seat_id)->first();


            $date = new DateTime();
            $reservation_time= $date->format('Y-m-d H:i:s');

            $reservations=new Reservations();
            $reservations->user_id=$user_id->id;
            $reservations->national_number=$request->national_number;
            $reservations->seat_id=$request->seat_id;
            $reservations->reservation_time=$reservation_time;
            $reservations->travell_time=$request->tarrival_time_hidden;
            $reservations->num_of_ticket=$request->num_ticket;

            $reservations->station_from=$request->FROM;
            $reservations->station_to=$request->TO;

            $reservations->email=$request->email;
            $reservations->phone=$request->phone;
            $reservations->save();

            $table='<table class="table table-bordered table-striped"><thead><tr><th>Ticket Number</th><th>Seat Number</th></tr></thead><tbody>';
            for($i=0;$i<$request->num_ticket;$i++)
            {
                $reservationsdetails=new ReservationsDetails();
                $reservationsdetails->reservation_id=$reservations->id;

                $reservationsdetails->ticket_randum_number=rand();
                $seat=Seat::find($request->seat_id);
                $full_seat=$seat->full_seat;
                $reservationsdetails->seat_sequence_number=$i+$full_seat+1;
                $reservationsdetails->save();
                $table.='<tr>
                            <td>'.$reservationsdetails->ticket_randum_number.'</td>
                            <td>'.$reservationsdetails->seat_sequence_number.'</td>
                         </tr>';
            }
            $table.='</tbody></table>';
            $seat=Seat::find($request->seat_id);
            $full_seat=$seat->full_seat;
            $empty_seat=$seat->empty_seat;
            $seat->full_seat=$full_seat+$request->num_ticket;
            $seat->empty_seat=$empty_seat-$request->num_ticket;
            $seat->save();
            $output=array(
                "message"=>"success",
                "data"=>$table
            );


        }
        return $output;

    }
    public  function pdf_generate()
    {
        $reversation_id=DB::table('reservations')->orderBy('id', 'DESC')->pluck('id')->first();
       // $reservationsdetails=DB::table('reservations_details')->where("reservation_id",$reversation_id)->get();

        $reservationsdetails=
            DB::table('reservations  AS Table1')
                ->select('Table1.*','Table2.*','Table3.vehicle_num AS vehicle','Table3.class AS class')
                ->join("reservations_details AS Table2","Table1.id","=","Table2.reservation_id")
                ->join("seats AS Table3","Table3.id","=","Table1.seat_id")

                ->where("Table1.id",$reversation_id)
                ->get();

        $reversation= DB::table('reservations AS Table1')
            ->select('Table1.*','Table2.station_city AS FROM','Table3.station_city AS TO')
            ->join("stations AS Table2","Table2.id","=","Table1.station_from")
            ->join("stations AS Table3","Table3.id","=","Table1.station_to")
            ->where("Table1.id",$reversation_id)
            ->get()->toArray();







       $pdf = PDF::loadView('Customer.pdf',compact('reversation','reservationsdetails'));
       return $pdf->download('reversation1.pdf');
    }



}
