$( document ).ready(function() {

    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });
//Read
    $("#read_offer").on('click', function () {
        $.get("read_offer_url", function (data) {
            $("#offer_tbody_id").empty().html(data);
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
    $("#create_offer_form").on('submit', function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');
        var post = $(this).attr('method');
        $.ajax({
            data: data,
            url: url,
            type: post,
            dataType: "json",
            success: function (data) {

                if (data.message == 'success') {
                    var tr = $("<tr/>", {id: data.data[0].id});
                    tr.append($("<td/>", {text: data.data[0].id}))
                        .append($("<td/>", {text: data.data[0].train_id}))
                        .append($("<td/>", {text: data.data[0].FROM}))
                        .append($("<td/>", {text: data.data[0].TO}))
                        .append($("<td/>", {text: data.data[0].arrival_time}))
                        .append($("<td/>", {text: data.data[0].leave_time}))

                        .append($("<td/>", {html: '<a id="edite" class="btn btn-success btn-xs" data-id="' + data.data[0].id + '"><i class="fa fa-edit" style="color: white"></a><a id="delete" data-id="' + data.data[0].id + '" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="color: white"></a>'}));
                    $("#offer_tbody_id").append(tr);
                } else {
                    $(".message").addClass('alert');
                    $(".message").addClass('alert-danger');
                    $(".message").append(data.data.arrival_time);
                    $(".message").append(data.data.leave_time);
                }

            }
        })
    })
// Delete
    $('body').delegate("#offer_tbody_id #delete", "click", function () {
        var id = $(this).data('id');
        $.get("delete_offer_url", {id: id}, function () {
            $("#offer_tbody_id tr#" + id).remove();
        })

    })
    // Edite

    $('body').delegate("#offer_tbody_id #edite", "click", function () {

        var id = $(this).data('id');

        $.get("edite_offer_url", {id: id}, function (data) {
            console.log(data)
            $("#update_offer_form").find('#id').val(data.id);
            $("#update_offer_form").find('#train_id').val(data.train_id);
            $("#update_offer_form").find('#station_id_from').val(data.station_id_from);
            $("#update_offer_form").find('#station_id_to').val(data.station_id_to);
            $("#update_offer_form").find('#demo6').val(data.arrival_time);
            $("#update_offer_form").find('#demo7').val(data.leave_time);
            //$("#updateUserModal").modal('show');
        })

    })
    // Update
    $("#update_offer_form").on('submit', function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');
        var post = $(this).attr('method');
        $.ajax({
            data: data,
            url: url,
            type: post,
            dataType: "json",
            success: function (data) {
                if (data.message == 'success') {
                    var tr = $("<tr/>", {id: data.data[0].id});
                    tr.append($("<td/>", {text: data.data[0].id}))
                        .append($("<td/>", {text: data.data[0].train_id}))
                        .append($("<td/>", {text: data.data[0].FROM}))
                        .append($("<td/>", {text: data.data[0].TO}))
                        .append($("<td/>", {text: data.data[0].arrival_time}))
                        .append($("<td/>", {text: data.data[0].leave_time}))

                        .append($("<td/>", {html: '<a id="edite" class="btn btn-success btn-xs" data-id="' + data.data[0].id + '"><i class="fa fa-edit" style="color: white"></a><a id="delete" data-id="' + data.data[0].id + '" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="color: white"></a>'}));
                    $("#offer_tbody_id").append(tr);
                } else {
                    $(".message").addClass('alert');
                    $(".message").addClass('alert-danger');
                    $(".message").append(data.data.arrival_time);
                    $(".message").append(data.data.leave_time);
                }
            }

        })


    })
})