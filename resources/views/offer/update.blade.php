<!-- The Modal -->
<div class="modal fade" id="updateOfferModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">تعديل عرض </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="update_offer_form" action="{{URL::to('update_offer_url')}}" method="post" >
                <!-- Modal body -->
                <div class="modal-body" style="direction: rtl;text-align: right">

                    {{csrf_field()}}
                    <div class="message"></div>
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label>اسم محطة القيام</label>
                        <select name="station_id_from" class="form-control" id="station_id_from">
                            @foreach($stations as $station)
                                <option value="{{$station->id}}">{{$station->station_city}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>اسم محطة الوصول</label>
                        <select name="station_id_to" class="form-control" id="station_id_to">
                            @foreach($stations as $station)
                                <option value="{{$station->id}}">{{$station->station_city}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label> القطار</label>
                        <select name="train_id" class="form-control" id="train_id">
                            @foreach($trains as $train)
                                <option value="{{$train->id}}">{{$train->train_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>زمن الانطلاق</label>
                            <br>
                            <input type="text" id="demo6" name="arrival_time" id="arrival_time"/>

                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label>زمن المغادرة</label>
                            <br>
                            <input type="text" id="demo7" name="leave_time" id="leave_time"/>

                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>
                    <!-- /.form group -->



                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
                    <input type="submit" class="btn btn-success" value="حفظ">
                </div>
            </form>


        </div>
    </div>
</div>

