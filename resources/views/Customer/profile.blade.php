<html>
@include('Customer.includes.head')
    <body>
    <section style="background: #141415;height: 80px">
        @include('Customer.includes.header')
    </section>

    <section style="min-height: 500px;margin: 50px auto;width: 50%">
        <div id="cansel_reversation_message" class="alert"></div>
        {{--<table class="table table-bordered table-striped" style="width: 1000px">--}}
            {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th scope="col">Reversation ID</th>--}}
                    {{--<th scope="col">Date & Time</th>--}}
                    {{--<th scope="col">From</th>--}}
                    {{--<th scope="col">To</th>--}}

                    {{--<th scope="col" style="width: 80px">Cancel</th>--}}
                {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody id="">--}}
            @foreach($reversations as $reversation)
            <div class="card text-center">
                <div class="card-header">Featured</div>
                <div class="card-body">
                    <h5 class="card-title">Reversation Date {{$reversation->reservation_time}}</h5>
                    <p class="card-text">
                        From {{$reversation->FROM}} To {{$reversation->TO}}
                    </p>
                    <a href="#" class="btn btn-primary cancle" data-id="{{$reversation->id}}" >Cancel</a>
                </div>
                <div class="card-footer text-muted">2 days ago</div>
            </div><br><br>
                {{--<tr id="{{$reversation->id}}">--}}

                    {{--<th scope="col">{{$reversation->id}}</th>--}}
                    {{--<th scope="col">{{$reversation->reservation_time}}</th>--}}
                    {{--<th scope="col">{{$reversation->FROM}}</th>--}}
                    {{--<th scope="col">{{$reversation->TO}}</th>--}}
                    {{--<th scope="col" style="width: 80px"><botton class="btn btn-success cancle" data-id="{{$reversation->id}}" >cancle</botton></th>--}}
                {{--</tr>--}}
               @endforeach
            {{--</tbody>--}}
        {{--</table>--}}

    </section>
    @include('Customer.includes.footer')
    <script>
        $(".cancle").on("click",function () {
            var reversation_id=$(this).data("id");
            $.ajax({
                url:"cancle_reversation",
                type:"get",
                data:{reversation_id:reversation_id},
                success:function (data) {
                    $("#cansel_reversation_message").html("");
                   if(data.message=="error")
                   {

                       $("#cansel_reversation_message").addClass("alert-danger");



                   }else
                   {

                       $("#cansel_reversation_message").addClass("alert-success");


                   }

                    $("#cansel_reversation_message").html("<p>"+data.data+"</p>");
                }
            })
        })
    </script>
    </body>
</html>