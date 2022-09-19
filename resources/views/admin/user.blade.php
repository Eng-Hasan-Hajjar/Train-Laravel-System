@extends('admin')
@section('user_content')
    <div class="panel  panel-default" style="max-width: 1000px;direction: rtl;">
        <div class="panel-heading">
            <button class="btn btn-info btn-xs pull-right" id="read_user" style="margin-bottom: 5px">قراءة المستخدمين</button>
            <button type="button" class="btn btn-info btn-xs pull-left" data-toggle="modal" data-target="#createUserModal" style="margin-bottom: 5px">
                مستخدم جديد
            </button>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped" style="width: 1000px">
                <thead>
                <tr>
                    <th scope="col">رقم التعريف</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">البريد الالكتروني</th>
                    <th scope="col">كلمة المرور</th>
                    <th scope="col">نوع المستخدم</th>
                    <th scope="col">الرقم الوطني</th>
                    <th scope="col" style="width: 80px">الحدث</th>
                </tr>
                </thead>
                <tbody id="user_tbody_id">
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
                                <a id="edite" data-toggle="modal"  data-target="#updateUserModal" class="btn btn-success btn-xs" data-id="{{$user->id}}"><i class="fa fa-edit" style="color: white"></i></a>
                                <a id="delete" class="btn btn-danger btn-xs" data-id="{{$user->id}}"><i class="fa fa-trash"  style="color: white"></i></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection