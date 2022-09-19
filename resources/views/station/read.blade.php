@foreach($stations as $station)
    <tr scope="row" id="{{$station->id}}">
        <td scope="col">{{$station->id}}</td>
        <td scope="col">{{$station->station_name}}</td>
        <td scope="col">{{$station->station_city}}</td>

        <td scope="col">
            <a id="edite" data-toggle="modal"  data-target="#updateStationModal" class="btn btn-success btn-xs" data-id="{{$station->id}}"><i class="fa fa-edit" style="color: white"></i></a>
            <a id="delete" class="btn btn-danger btn-xs" data-id="{{$station->id}}"><i class="fa fa-trash"  style="color: white"></i></a>
        </td>

    </tr>
@endforeach