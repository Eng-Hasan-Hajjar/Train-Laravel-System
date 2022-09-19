$(document).ready(function () {

    // Read
    $("#read_train").on('click',function () {
        $.get('read_train_url',function (data) {
            $("#train_tbody_id").empty().html(data);
            // $.each(data,function (i,value) {
            //     var tr=$("<tr/>",{id:value.id});
            //     tr.append($('<td/>',{text:value.id}))
            //         .append($('<td/>',{text:value.empty_seat}))
            //         .append($('<td/>',{text:value.full_seat}))
            //         .append($('<td/>',{text:value.all_seat}))
            //         .append($('<td/>',{html:'<a class="fa fa-edit btn btn-success btn-xs" id="edite" data-id="'+value.id+'" style="color: white"></a>&nbsp;<a class="fa fa-trash btn btn-danger btn-xs" id="delete" data-id="'+value.id+'" style="color: white"></a>'}));
            //     $("#train_tbody_id").append(tr);
            // })
        })
    })
    // Create
    $("#create_trian_form").on('submit',function (e) {
        e.preventDefault();

        var url=$(this).attr('action');
        var post=$(this).attr('method');
        var data=$(this).serialize();
        $.ajax({
            url:url,
            data:data,
            type:post,
            dataType:"json",
            success:function (data) {
                  if(data.message=='success'){
                      var tr=$("<tr/>",{id:data.data.id});
                          tr.append($('<td/>',{text:data.data.id}))
                              .append($('<td/>',{text:data.data.train_name}))
                              // .append($('<td/>',{text:data.data.full_seat}))
                              // .append($('<td/>',{text:data.data.all_seat}))
                              .append($('<td/>',{html:'<a class="btn btn-danger btn-xs" id="delete" data-id="'+data.data.id+'" style="color: white"><i class="fa fa-trash"></i></a><a class="btn btn-success btn-xs" id="edite" data-id="'+data.data.id+'" style="color: white"><i class="fa fa-edit"></i></a>'}));
                          $("#train_tbody_id").append(tr);

                  }else {
                      $(".message").addClass('alert');
                      $(".message").addClass('alert-danger');
                      $(".message").append(data.data.train_name);

                  }
            }

        })
    })
    // Delete
    $('body').delegate('#train_tbody_id #delete','click',function () {

        var id=$(this).data('id');
        $.get('delete_train_url',{id:id},function () {
            $("tr#"+id).remove();
        })
    })
    // Edite
    $('body').delegate('#train_tbody_id #edite','click',function () {
        var id=$(this).data('id');
        $.get('edite_train_url',{id:id},function (data) {
            console.log(data)
            $("#update_trian_form").find("#id").val(data.id);
            $("#train_name").val(data.train_name);
        })
    })
    // Update
    $("#update_trian_form").on('submit',function (e) {
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

                        .append($("<td/>",{text:data.data.train_name}))

                        .append($("<td/>",{html:'<a id="edite" class="btn btn-success btn-xs" data-id="'+data.data.id+'"><i class="fa fa-edit" style="color: white"></a><a id="delete" data-id="'+data.data.id+'" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="color: white"></a>'}));
                    $("#train_tbody_id tr#"+data.data.id).replaceWith(tr);
                }else {
                    $(".message").addClass('alert');
                    $(".message").addClass('alert-danger');
                    $(".message").append(data.data.train_name);

                }

            }
        })

    })
})