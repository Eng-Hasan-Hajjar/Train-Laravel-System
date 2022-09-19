@foreach($seats as $seat)
    <tr scope="row" id="{{$seat->id}}">

        <td scope="col">{{$seat->id}}</td>
        <td scope="col">{{$seat->train_id}}</td>
        <td scope="col">{{$seat->vehicle_num}}</td>
        <td scope="col">{{$seat->class}}</td>
        <td scope="col">{{$seat->empty_seat}}</td>
        <td scope="col">{{$seat->full_seat}}</td>
        <td scope="col">{{$seat->price}}</td>



        <td scope="col">
            <a id="edite" data-toggle="modal"  data-target="#updateSeatModal" class="btn btn-success btn-xs" data-id="{{$seat->id}}"><i class="fa fa-edit" style="color: white"></i></a>
            <a id="delete" class="btn btn-danger btn-xs" data-id="{{$seat->id}}"><i class="fa fa-trash"  style="color: white"></i></a>
        </td>

    </tr>
    @endforeach