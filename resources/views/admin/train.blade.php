@extends('admin')
@section('train_content')
    <div class="panel  panel-default" style="max-width: 1000px;direction: rtl;">
        <div class="panel-heading">
            <button class="btn btn-info btn-xs pull-right" id="read_train" style="margin-bottom: 5px">قراءة القطارات</button>
            <button type="button" class="btn btn-info btn-xs pull-left" data-toggle="modal" data-target="#createTrainModal" style="margin-bottom: 5px">
                قطار جديد
            </button>
        </div>
        <div class="panel-body table-responsive-lg table-responsive-md table-responsive-xl">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">رقم القطار</th>
                    <th scope="col">اسم القطار</th>

                    <th scope="col">الحدث</th>
                </tr>
                </thead>
                <tbody id="train_tbody_id">
                @foreach($trains as $train)
                    <tr scope="row" id="{{$train->id}}">
                        <td scope="col">{{$train->id}}</td>
                        <td scope="col">{{$train->train_name}}</td>

                        <td scope="col">
                            <a id="edite" data-toggle="modal"  data-target="#updateTrainModal" class="btn btn-success btn-xs" data-id="{{$train->id}}"><i class="fa fa-edit" style="color: white"></i></a>
                            <a id="delete" class="btn btn-danger btn-xs" data-id="{{$train->id}}"><i class="fa fa-trash"  style="color: white"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection