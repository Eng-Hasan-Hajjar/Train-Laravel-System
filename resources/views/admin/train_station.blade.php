@extends('admin')
@section('trains_stations_content')
    <div class="panel  panel-default" style="max-width: 1000px;direction: rtl;">
        <div class="panel-heading">
            <button class="btn btn-info btn-xs pull-right" id="read_train_station" style="margin-bottom: 5px">جدولة القطارات</button>
            <button type="button" class="btn btn-info btn-xs pull-left" data-toggle="modal" data-target="#createTrainStationModal" style="margin-bottom: 5px">
                جدولة جديدة
            </button>
        </div>
        <div class="panel-body table-responsive-lg table-responsive-md table-responsive-xl">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">رقم التعريف</th>
                    <th scope="col">رقم القطار </th>
                    <th scope="col">اسم محطة القيام</th>
                    <th scope="col">اسم محطة الوصول</th>

                    <th scope="col">زمن المغادرة</th>
                    <th scope="col">زمن الوصول</th>

                    <th scope="col" style="width: 80px">الحدث</th>
                </tr>
                </thead>
                <tbody id="train_station_tbody_id">
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
                </tbody>
            </table>
        </div>
    </div>
    @include('trains_stations.create')
    @include('trains_stations.update')
@endsection