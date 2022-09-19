@extends('admin')
@section('station_content')
    <div class="panel  panel-default" style="max-width: 1000px;direction: rtl;">
        <div class="panel-heading">
            <button class="btn btn-info btn-xs pull-right" id="read_station" style="margin-bottom: 5px">قراءة المحطات</button>
            <button type="button" class="btn btn-info btn-xs pull-left" data-toggle="modal" data-target="#createStationModal" style="margin-bottom: 5px">
                محطة جديدة
            </button>
        </div>
        <div class="panel-body table-responsive-lg table-responsive-md table-responsive-xl">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">رقم التعريف</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">اسم المدينة</th>

                    <th scope="col" style="width: 80px">الحدث</th>
                </tr>
                </thead>
                <tbody id="station_tbody_id">
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
                </tbody>
            </table>
        </div>
    </div>
@endsection