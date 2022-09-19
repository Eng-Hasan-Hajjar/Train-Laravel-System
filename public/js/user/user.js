$( document ).ready(function() {

    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
//Read
    $("#read_user").on('click',function(){
        $.get("read_user_url",function(data){
            $("#user_tbody_id").empty().html(data);
            // $.each(data,function(i,value){
            //   var tr=$("<tr/>");
            //   tr.append($("<td/>",{text:value.id}))
            //   .append($("<td/>",{text:value.name}))
            //   .append($("<td/>",{text:value.email}))
            //   .append($("<td/>",{text:value.password}))
            //   .append($("<td/>",{html:'<a class="fa fa-trash"></a> <a class="fa fa-edit"></a>'}));
            //   $("#user_tbody_id").append(tr);
            // })
        })
    })
    //Create
    $("#create_user_form").on('submit',function (e) {
        e.preventDefault();
        var data=$(this).serialize();
        var url=$(this).attr('action');
        var post=$(this).attr('method');
        $.ajax({
            data:data,
            url:url,
            type:post,
            dataType:"json",
            success:function (data) {
                if(data.message=='success'){
                    var tr=$("<tr/>",{id:data.data.id});
                    tr.append($("<td/>",{text:data.data.id}))
                        .append($("<td/>",{text:data.data.name}))
                        .append($("<td/>",{text:data.data.email}))
                        .append($("<td/>",{text:data.data.national_number}))
                        .append($("<td/>",{text:''}))
                        .append($("<td/>",{text:''}))
                        .append($("<td/>",{html:'<a id="edite" class="btn btn-success btn-xs" data-id="'+data.data.id+'"><i class="fa fa-edit" style="color: white"></a><a id="delete" data-id="'+data.data.id+'" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="color: white"></a>'}));
                    $("#user_tbody_id").append(tr);
                    $("#create_user_form").reset();
                    $("#createUserModal").modal('hide');
                }else {
                    $(".message").addClass('alert');
                    $(".message").addClass('alert-danger');
                    $(".message").append(data.data.name);
                    $(".message").append(data.data.email);
                    $(".message").append(data.data.password);
                    $(".message").append(data.data.national_number);


                }

            }
        })
    })
// Delete
    $('body').delegate("#user_tbody_id #delete","click",function () {
        var id=$(this).data('id');
        $.get("delete_user_url",{id:id},function () {
            $("#user_tbody_id tr#"+id).remove();
        })

    })
    // Edite

    $('body').delegate("#user_tbody_id #edite","click",function () {

        var id=$(this).data('id');

        $.get("edite_user_url",{id:id},function (data) {

            $("#update_user_form").find('#id').val(data.id);
            $("#update_user_form").find('#name').val(data.name);
            $("#update_user_form").find('#password').val(data.password);
            $("#update_user_form").find('#email').val(data.email);
            $("#update_user_form").find('#user_type').val(data.user_type);
            $("#update_user_form").find('#national_number').val(data.national_number);
            //$("#updateUserModal").modal('show');
        })

    })
    // Update
    $("#update_user_form").on('submit',function (e) {
        e.preventDefault();
        var data=$(this).serialize();
        var url=$(this).attr('action');
        var post=$(this).attr('method');
        $.ajax({
            data:data,
            url:url,
            type:post,
            dataType:"json",
            success:function (data) {
                if(data.message=='success'){
                    console.log(data)
                    var tr=$("<tr/>",{id:data.data.id});
                    tr.append($("<td/>",{text:data.data.id}))
                        .append($("<td/>",{text:data.data.id}))
                        .append($("<td/>",{text:data.data.name}))
                        .append($("<td/>",{text:data.data.email}))
                        .append($("<td/>",{text:''}))
                        .append($("<td/>",{text:''}))
                        .append($("<td/>",{text:data.data.national_number}))
                        .append($("<td/>",{html:'<a id="edite" class="btn btn-success btn-xs" data-id="'+data.data.id+'"><i class="fa fa-edit" style="color: white"></a><a id="delete" data-id="'+data.data.id+'" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="color: white"></a>'}));
                    $("#user_tbody_id tr#"+data.data.id).replaceWith(tr);
                }else {
                    $(".message").addClass('alert');
                    $(".message").addClass('alert-danger');
                    $(".message").append(data.data.name);
                    $(".message").append(data.data.email);
                    $(".message").append(data.data.password);
                }

            }
        })

    })

});