@foreach($users as $user)
    <tr scope="row" id="{{$user->id}}">
        <td scope="col">{{$user->id}}</td>
        <td scope="col">{{$user->name}}</td>
        <td scope="col">{{$user->email}}</td>
        <td></td>


        @if($user->user_type==1)
            <td>ADMIN</td>
            @else
            <td>USER</td>
            @endif
        <td scope="col">{{$user->national_number}}</td>
        <td scope="col">
            <a id="edite" class="btn btn-success btn-xs" data-id="{{$user->id}}"><i class="fa fa-edit" style="color: white"></i></a>
            <a id="delete" class="btn btn-danger btn-xs" data-id="{{$user->id}}"><i class="fa fa-trash"  style="color: white"></i></a>
        </td>

    </tr>
    @endforeach