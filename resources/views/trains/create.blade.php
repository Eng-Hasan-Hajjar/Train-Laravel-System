<!-- The Modal -->
<div class="modal fade" id="createTrainModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">قطار جديد</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="create_trian_form" action="{{URL::to('create_trian_url')}}" method="post" >
                <!-- Modal body -->
                <div class="modal-body" style="direction: rtl;text-align: right">
                     <div class="message"></div>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>اسم القطار</label>
                        <input name="train_name" class="form-control">
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label>عدد المقاعد الممتلئة </label>--}}
                        {{--<input name="full_seat" class="form-control">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label>عدد المفاعد الكلي </label>--}}
                        {{--<input name="all_seat" class="form-control">--}}
                    {{--</div>--}}

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

