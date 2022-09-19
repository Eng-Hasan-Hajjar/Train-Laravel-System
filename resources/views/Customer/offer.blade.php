<html>
@include('Customer.includes.head')
<body>
<section style="background: #141415;height: 80px">
    @include('Customer.includes.header')
</section>

<section style="min-height: 500px;margin: 50px auto;width: 50%">
    {{--<table class="table table-bordered table-striped" style="width: 1100px">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th scope="col"> ID</th>--}}
            {{--<th scope="col">From</th>--}}
            {{--<th scope="col">To</th>--}}
            {{--<th scope="col">Arrive Time</th>--}}


            {{--<th scope="col" style="width: 80px">Leave Time</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody id="">--}}
        @foreach($offers as $offer)
        <div class="card text-center">
            <div class="card-header">Featured</div>
            <div class="card-body">
                <h5 class="card-title">Offer Details</h5>
                <p class="card-text">
                    From {{$offer->FROM}} To {{$offer->TO}} Arriaval Time<br> {{$offer->arrival_time}} And Leave Time {{$offer->leave_time}}
                </p>
                {{--<a href="#" class="btn btn-primary cancle" data-id="{{$reversation->id}}" >Cancel</a>--}}
            </div>
            <div class="card-footer text-muted"></div>
        </div><br><br>

        @endforeach
        {{--</tbody>--}}
    {{--</table>--}}

</section>
@include('Customer.includes.footer')

</body>
</html>