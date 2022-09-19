$( document ).ready(function() {
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
//Read
    $("#read_seat").on('click',function(){
        $.get("read_seat_url",function(data){
            $("#seat_tbody_id").empty().html(data);
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
    $("#create_seat_form").on('submit',function (e) {
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
                        .append($("<td/>",{text:data.data.train_id}))
                        .append($("<td/>",{text:data.data.vehicle_num}))
                        .append($("<td/>",{text:data.data.class}))
                        .append($("<td/>",{text:data.data.empty_seat}))
                        .append($("<td/>",{text:data.data.full_seat}))

                        .append($("<td/>",{text:data.data.price}))
                        .append($("<td/>",{html:'<a id="edite" class="btn btn-success btn-xs" data-id="'+data.data.id+'"><i class="fa fa-edit" style="color: white"></a><a id="delete" data-id="'+data.data.id+'" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="color: white"></a>'}));
                    $("#seat_tbody_id").append(tr);
                    $("#create_seat_form").reset();
                    $("#createSeatModal").modal('hide');
                }else {
                    $(".message").addClass('alert');
                    $(".message").addClass('alert-danger');
                    $(".message").append(data.data.train_id);
                    $(".message").append(data.data.vehicle_num);
                    $(".message").append(data.data.class);
                    $(".message").append(data.data.empty_seat);
                    $(".message").append(data.data.full_seat);
                    $(".message").append(data.data.all_seat);
                    $(".message").append(data.data.price);


                }

            }
        })
    })
// Delete
    $('body').delegate("#seat_tbody_id #delete","click",function () {
        var id=$(this).data('id');
        $.get("delete_seat_url",{id:id},function () {
            $("#seat_tbody_id tr#"+id).remove();
        })

    })
    // Edite

    $('body').delegate("#seat_tbody_id #edite","click",function () {
        var id=$(this).data('id');
        $.get("edite_seat_url",{id:id},function (data) {
            $("#update_seat_form").find('#id').val(data.id);
            $("#update_seat_form").find('#train_id').val(data.train_id);
            $("#update_seat_form").find('#vehicle_num').val(data.vehicle_num);
            $("#update_seat_form").find('#class').val(data.class);
            $("#update_seat_form").find('#empty_seat').val(data.empty_seat);
            $("#update_seat_form").find('#full_seat').val(data.full_seat);
            $("#update_seat_form").find('#all_seat').val(data.all_seat);
            $("#update_seat_form").find('#price').val(data.price);


        })

    })
    // Update
    $("#update_seat_form").on('submit',function (e) {
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
                        .append($("<td/>",{text:data.data.train_id}))
                        .append($("<td/>",{text:data.data.vehicle_num}))
                        .append($("<td/>",{text:data.data.class}))
                        .append($("<td/>",{text:data.data.empty_seat}))
                        .append($("<td/>",{text:data.data.full_seat}))

                        .append($("<td/>",{text:data.data.price}))
                        .append($("<td/>",{html:'<a id="edite" class="btn btn-success btn-xs" data-id="'+data.data.id+'"><i class="fa fa-edit" style="color: white"></a><a id="delete" data-id="'+data.data.id+'" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="color: white"></a>'}));
                    $("#seat_tbody_id tr#"+data.data.id).replaceWith(tr);
                    $("#create_seat_form").reset();
                    $("#createSeatModal").modal('hide');
                }else {
                    $(".message").addClass('alert');
                    $(".message").addClass('alert-danger');
                    $(".message").append(data.data.train_id);
                    $(".message").append(data.data.vehicle_num);
                    $(".message").append(data.data.class);
                    $(".message").append(data.data.empty_seat);
                    $(".message").append(data.data.full_seat);
                    $(".message").append(data.data.all_seat);
                    $(".message").append(data.data.price);


                }

            }
        })

    })

});