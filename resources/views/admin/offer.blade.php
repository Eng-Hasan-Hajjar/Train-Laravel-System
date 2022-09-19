@extends('admin')
@section('offer_content')
    <div class="panel  panel-default" style="max-width: 1000px;direction: rtl;">
        <div class="panel-heading">
            <button class="btn btn-info btn-xs pull-right" id="read_offer" style="margin-bottom: 5px">العروض </button>
            <button type="button" class="btn btn-info btn-xs pull-left" data-toggle="modal" data-target="#createOfferModal" style="margin-bottom: 5px">
                عرض جديد
            </button>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped" style="width: 1000px">
                <thead>
                <tr>
                    <th scope="col">رقم التعريف</th>
                    <th scope="col">الفطار</th>
                    <th scope="col"> محطة الانطلاق</th>
                    <th scope="col">محطة الوصول </th>
                    <th scope="col">زمن الوصول </th>
                    <th scope="col">زمن المغادرة </th>

                    <th scope="col" style="width: 80px">الحدث</th>
                </tr>
                </thead>
                <tbody id="offer_tbody_id">
                @foreach($offers as $offer)
                    <tr scope="row" id="{{$offer->id}}">
                        <td scope="col">{{$offer->id}}</td>
                        <td scope="col">{{$offer->train_id}}</td>
                        <td scope="col">{{$offer->FROM}}</td>
                        <td scope="col">{{$offer->TO}}</td>
                        <td scope="col">{{$offer->arrival_time}}</td>
                        <td scope="col">{{$offer->leave_time}}</td>

                        <td scope="col">
                            <a id="edite" data-toggle="modal"  data-target="#updateOfferModal" class="btn btn-success btn-xs" data-id="{{$offer->id}}"><i class="fa fa-edit" style="color: white"></i></a>
                            <a id="delete" class="btn btn-danger btn-xs" data-id="{{$offer->id}}"><i class="fa fa-trash"  style="color: white"></i></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('offer.create')
    @include('offer.update')
@endsection