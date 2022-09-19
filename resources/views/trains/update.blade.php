

<!-- The Modal -->
<div class="modal fade" id="updateTrainModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">تعديل قطار </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="update_trian_form" action="{{URL::to('update_trian_url')}}" method="post" >
                <!-- Modal body -->
                <div class="modal-body" style="direction: rtl;text-align: right">
                    <input type="hidden" name="id" class="form-control" id="id">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>اسم قطار</label>
                        <input name="train_name" class="form-control" id="train_name">
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

