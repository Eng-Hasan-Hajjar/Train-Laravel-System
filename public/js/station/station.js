$( document ).ready(function() {
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
//Read
    $("#read_station").on('click',function(){
        $.get("read_station_url",function(data){
            $("#station_tbody_id").empty().html(data);
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
    $("#create_station_form").on('submit',function (e) {
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
                        .append($("<td/>",{text:data.data.station_name}))
                        .append($("<td/>",{text:data.data.station_city}))

                        .append($("<td/>",{html:'<a id="edite" class="btn btn-success btn-xs" data-id="'+data.data.id+'"><i class="fa fa-edit" style="color: white"></a><a id="delete" data-id="'+data.data.id+'" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="color: white"></a>'}));
                    $("#station_tbody_id").append(tr);
                }else {
                    $(".message").addClass('alert');
                    $(".message").addClass('alert-danger');
                    $(".message").append(data.data.station_name);
                    $(".message").append(data.data.station_city);

                }

            }
        })
    })
// Delete
    $('body').delegate("#station_tbody_id #delete","click",function () {
        var id=$(this).data('id');
        $.get("delete_station_url",{id:id},function () {
            $("#station_tbody_id tr#"+id).remove();
        })

    })
    // Edite

    $('body').delegate("#station_tbody_id #edite","click",function () {
        var id=$(this).data('id');
        $.get("edite_station_url",{id:id},function (data) {
            $("#update_station_form").find('#id').val(data.id);
            $("#update_station_form").find('#station_name').val(data.station_name);
            $("#update_station_form").find('#station_city').val(data.station_city);

            //$("#updateStationModal").modal('show');
        })

    })
    // Update
    $("#update_station_form").on('submit',function (e) {
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
                        .append($("<td/>",{text:data.data.station_name}))
                        .append($("<td/>",{text:data.data.station_city}))

                        .append($("<td/>",{html:'<a id="edite" class="btn btn-success btn-xs" data-id="'+data.data.id+'"><i class="fa fa-edit" style="color: white"></a><a id="delete" data-id="'+data.data.id+'" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="color: white"></a>'}));
                    $("#station_tbody_id tr#"+data.data.id).replaceWith(tr);
                }else {
                    $(".message").addClass('alert');
                    $(".message").addClass('alert-danger');
                    $(".message").append(data.data.station_name);
                    $(".message").append(data.data.station_city);
                }

            }
        })

    })

});