@extends('admin')
@section('seat_content')
    <div class="panel  panel-default" style="max-width: 1000px;direction: rtl;">
        <div class="panel-heading">
            <button class="btn btn-info btn-xs pull-right" id="read_seat" style="margin-bottom: 5px">قراءة المقاعد</button>
            <button type="button" class="btn btn-info btn-xs pull-left" data-toggle="modal" data-target="#createSeatModal" style="margin-bottom: 5px">
                مقعد جديد
            </button>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped" style="width: 1000px">
                <thead>
                <tr>
                    <th scope="col">الرقم </th>
                    <th scope="col">رقم القطار</th>
                    <th scope="col">العربة </th>
                    <th scope="col">الدرجة </th>
                    <th scope="col">المقاعد الفارغة </th>
                    <th scope="col">المقاعد الممتلئة </th>
                    <th scope="col">السعر  </th>

                    <th scope="col" style="width: 80px">الحدث</th>
                </tr>
                </thead>
                <tbody id="seat_tbody_id">
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
                </tbody>
            </table>
        </div>
    </div>
    @include('seats.create')
    @include('seats.update')
@endsection