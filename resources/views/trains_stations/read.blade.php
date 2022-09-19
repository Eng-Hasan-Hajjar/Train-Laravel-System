@foreach($trains_stations as $train_station)
    <tr scope="row" id="{{$train_station->id}}">

        <td scope="col">{{$train_station->id}}</td>

        <td scope="col">{{$train_station->train_id}}</td>
        <td scope="col">{{$train_station->FROM}}</td>
        <td scope="col">{{$train_station->TO}}</td>
        <td scope="col">{{$train_station->arrival_time}}</td>
        <td scope="col">{{$train_station->leave_time}}</td>

        <td scope="col">
            <a id="edite" data-toggle="modal"  data-target="#updateTrainStationModal" class="btn btn-success btn-xs" data-id="{{$train_station->id}}"><i class="fa fa-edit" style="color: white"></i></a>
            <a id="delete" class="btn btn-danger btn-xs" data-id="{{$train_station->id}}"><i class="fa fa-trash"  style="color: white"></i></a>
        </td>

    </tr>
@endforeach