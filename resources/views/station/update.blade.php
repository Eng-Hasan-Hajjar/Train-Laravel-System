<!-- The Modal -->
<div class="modal fade" id="updateStationModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">تعديل محطة</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="update_station_form" action="{{URL::to('update_station_url')}}" method="post" >
                <!-- Modal body -->
                <div class="modal-body" style="direction: rtl;text-align: right">
                    <input type="hidden" id="id" name="id">
                    <div class="message"></div>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>الاسم</label>
                        <input name="station_name" class="form-control" id="station_name">
                    </div>
                    <div class="form-group">
                        <label>اسم المدينة</label>
                        <input name="station_city" class="form-control" id="station_city">
                    </div>


                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
                    <input type="submit" class="btn btn-success" value="تعديل">
                </div>
            </form>

        </div>
    </div>
</div>

