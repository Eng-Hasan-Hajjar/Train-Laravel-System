<!-- The Modal -->
<div class="modal fade" id="updateSeatModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">مقعد جديد</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="update_seat_form" action="{{URL::to('update_seat_url')}}" method="post" >
                <!-- Modal body -->
                <div class="modal-body" style="direction: rtl;text-align: right">

                    {{csrf_field()}}
                    <div class="message">

                    </div>
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label> القطار</label>
                        <select name="train_id" class="form-control" id="train_id">
                            @foreach($trains as $train)
                                <option value="{{$train->id}}">{{$train->train_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>العربة</label>
                        <input name="vehicle_num" class="form-control" id="vehicle_num">
                    </div>

                    <div class="form-group">
                        <label>الدرجة</label>
                        <input name="class" class="form-control" id="class">
                    </div>
                    <div class="form-group">
                        <label>عدد المقاعد الفارغة</label>
                        <input name="empty_seat" class="form-control" id="empty_seat">
                    </div>
                    <div class="form-group">
                        <label>عدد المقاعد الممتلئة</label>
                        <input name="full_seat" class="form-control" id="full_seat">
                    </div>
                    <div class="form-group">
                        <label>عدد المقاعد الكلي</label>
                        <input name="all_seat" class="form-control" id="all_seat">
                    </div>
                    <div class="form-group">
                        <label>السعر</label>
                        <input name="price" class="form-control" id="price">
                    </div>


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

