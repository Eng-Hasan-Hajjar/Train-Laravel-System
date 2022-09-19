@foreach($trains as $train)
    <tr scope="row" id="{{$train->id}}">
        <td scope="col">{{$train->id}}</td>
        <td scope="col">{{$train->train_name}}</td>

        <td scope="col">
            <a data-toggle="modal"  data-target="#updateTrainModal" id="edite" class="btn btn-success btn-xs" data-id="{{$train->id}}"><i class="fa fa-edit" style="color: white"></i></a>
            <a id="delete" class="btn btn-danger btn-xs" data-id="{{$train->id}}"><i class="fa fa-trash"  style="color: white"></i></a>
        </td>
    </tr>
    @endforeach