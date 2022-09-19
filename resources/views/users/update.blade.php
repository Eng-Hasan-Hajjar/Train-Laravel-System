<!-- The Modal -->
<div class="modal fade" id="updateUserModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">تعديل مستخدم</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="update_user_form" action="{{URL::to('update_user_url')}}" method="post" >
                <!-- Modal body -->
                <div class="modal-body" style="direction: rtl;text-align: right">
                    <input type="hidden" id="id" name="id">
                    {{csrf_field()}}
                    <div class="message">

                    </div>
                    <div class="form-group">
                        <label>الاسم</label>
                        <input name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label>كلمة المرور</label>
                        <input name="password" class="form-control" id="password">
                    </div>

                    <div class="form-group">
                        <label>البريد الاكتروني</label>
                        <input name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label>الرقم الوطني</label>
                        <input name="national_number" class="form-control" id="national_number">
                    </div>
                    <div class="form-group">
                        <label>نوع المستخدم</label>
                        <select name="user_type" class="form-control" id="user_type">
                            <option value="1">ADMIN</option>
                            <option value="2">USER</option>
                        </select>

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

