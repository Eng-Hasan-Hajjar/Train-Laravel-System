<!-- The Modal -->
<div class="modal fade" id="createStationModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">محطة جديدة</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="create_station_form" action="{{URL::to('create_station_url')}}" method="post" >
                <!-- Modal body -->
                <div class="modal-body" style="direction: rtl;text-align: right">
                    <div class="message"></div>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>الاسم</label>
                        <input name="station_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>اسم المدينة</label>
                        <input name="station_city" class="form-control">
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

