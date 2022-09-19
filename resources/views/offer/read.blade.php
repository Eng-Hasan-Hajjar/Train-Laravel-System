@foreach($offers as $offer)
    <tr scope="row" id="{{$offer->id}}">
        <td scope="col">{{$offer->id}}</td>
        <td scope="col">{{$offer->train_id}}</td>
        <td scope="col">{{$user->FROM}}</td>
        <td scope="col">{{$user->TO}}</td>
        <td scope="col">{{$user->arrival_time}}</td>
        <td scope="col">{{$user->leave_time}}</td>

        <td scope="col">
            <a id="edite" data-toggle="modal"  data-target="#updateOfferModal" class="btn btn-success btn-xs" data-id="{{$offer->id}}"><i class="fa fa-edit" style="color: white"></i></a>
            <a id="delete" class="btn btn-danger btn-xs" data-id="{{$offer->id}}"><i class="fa fa-trash"  style="color: white"></i></a>
        </td>

    </tr>
    @endforeach