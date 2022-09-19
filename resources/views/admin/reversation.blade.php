@extends('admin')
@section('reversation_content')
    <div class="panel  panel-default" style="max-width: 1000px;direction: rtl;">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped" style="width: 1000px">
                <thead>
                <tr>
                    <th scope="col">رقم التعريف</th>
                    <th scope="col">الرقم الوطني</th>
                    <th scope="col">تاريخ الحجز </th>
                    <th scope="col">تاريخ السفر </th>
                    <th scope="col">من </th>
                    <th scope="col"> الى </th>
                    <th scope="col">عدد التذاكر </th>
                    <th scope="col">الايميل </th>
                    <th scope="col">الهاتف </th>

                </tr>
                </thead>
                <tbody id="user_tbody_id">
                @foreach($reversations as $reversation)
                    <tr scope="row" id="{{$reversation->id}}">
                        <td scope="col">{{$reversation->id}}</td>
                        <td scope="col">{{$reversation->national_number}}</td>
                        <td scope="col">{{$reversation->reservation_time}}</td>
                        <td scope="col">{{$reversation->travell_time}}</td>
                        <td scope="col">{{$reversation->FROM}}</td>
                        <td scope="col">{{$reversation->TO}}</td>



                        <td scope="col">{{$reversation->num_of_ticket}}</td>
                        <td scope="col">{{$reversation->email}}</td>
                        <td scope="col">{{$reversation->phone}}</td>







                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection