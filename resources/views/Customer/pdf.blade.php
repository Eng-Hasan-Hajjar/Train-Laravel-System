
<strong>Reversation Number {{$reversation[0]->id}}</strong><br>
<strong> Travell Time {{$reversation[0]->travell_time}}</strong><br>
<strong>  FROM {{$reversation[0]->FROM}}</strong><br>
<strong>  To {{$reversation[0]->TO}}</strong><br>

<table class="table table-bordered table-striped">
    <thead>
         <tr>
             <th>Reversation Number</th>
             <th>Ticket Number</th>
             <th>Seat Number</th>
             <th>vehicle</th>
             <th>Class</th>
         </tr>
    </thead>
    <tbody>



@foreach($reservationsdetails as $value)
    <tr>
        <td>{{$value->reservation_id}}</td>
        <td>{{$value->ticket_randum_number}}</td>
        <td>{{$value->seat_sequence_number}}</td>
        <td>{{$value->vehicle}}</td>
        <td>{{$value->class}}</td>
    </tr>
    @endforeach
    </tbody>
</table>