{{--<html>--}}
    {{--<head>--}}
        {{--<title></title>--}}
        {{--<!-- Bootstrap -->--}}
        {{--<link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.min.css')}}">--}}
        {{--<link rel="stylesheet" href="{{URL::to('css/wizard_style.css')}}">--}}

    {{--</head>--}}
    {{--<body>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-10 col-md-8 col-sm-6 col-xs-6 form-container" >--}}
                {{--<form method="post" action="">--}}
                    {{--{{csrf_field()}}--}}
                    {{--<fieldset class="scheduler-border">--}}
                         {{--<legend class="scheduler-border">الخطوة الأولى</legend>--}}
                                                {{--<button class="next pull-left">التالي</button>--}}
                    {{--</fieldset>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

       {{--<!-- vendor js -->--}}
       {{--<script src="{{URL::to('assets/js/jquery-1.12.4.min.js')}}"></script>--}}
       {{--<!-- bootstrap js -->--}}
       {{--<script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>--}}
    {{--</body>--}}
{{--</html>--}}
<html>
<head>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.min.css')}}">
    <meta name="_token" content="{{{ csrf_token() }}}"/>
    <style>
        /*custom font*/

        @import url(http://fonts.googleapis.com/css?family=Montserrat);
        /*basic reset*/
        * {
            margin: 0;
            padding: 0;
        }
        .form-control{
            height:55px !important;
        }
        html {
            /*height: 100%;*/
            /*Image only BG fallback*/
            /*background: url('http://thecodeplayer.com/uploads/media/gs.png');*/
            background: url('assets/images/4.jpg')no-repeat fixed center;
            background-size: cover;
            /*background = gradient + image pattern combo*/
            /*background: linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2)),  url('http://thecodeplayer.com/uploads/media/gs.png');*/
            /*background: linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2)),  url('assets/images/4.jpg');*/
        }
        body {
            font-family: montserrat, arial, verdana;
        }
        /*form styles*/
        #msform {
            width: 800px;
            margin: 50px auto;
            text-align: center;
            position: relative;
        }
        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 3px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            box-sizing: border-box;
            width: 80%;
            margin: 0 10%;
            /*stacking fieldsets above each other*/
            position: absolute;
        }
        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }
        /*inputs*/
        #msform input, #msform textarea,#msform select {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 13px;
        }
        /*buttons*/
        #msform .action-button {
            width: 100px;
            background: #27AE60;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 1px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }
        #msform .action-button:hover, #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
        }
        /*headings*/
        .fs-title {
            font-size: 15px;
            text-transform: uppercase;
            color: #2C3E50;
            margin-bottom: 10px;
        }
        .fs-subtitle {
            font-weight: normal;
            font-size: 13px;
            color: #666;
            margin-bottom: 20px;
        }
        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            /*CSS counters to number the steps*/
            counter-reset: step;
        }
        #progressbar li {
            list-style-type: none;
            color: white;
            text-transform: uppercase;
            font-size: 9px;
            width: 33.33%;
            float: left;
            position: relative;
        }
        #progressbar li:before {
            content: counter(step);
            counter-increment: step;
            width: 20px;
            line-height: 20px;
            display: block;
            font-size: 10px;
            color: #333;
            background: white;
            border-radius: 3px;
            margin: 0 auto 5px auto;
        }
        /*progressbar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: white;
            position: absolute;
            left: -50%;
            top: 9px;
            z-index: -1; /*put it behind the numbers*/
        }
        #progressbar li:first-child:after {
            /*connector not needed before the first step*/
            content: none;
        }
        /*marking active/completed steps green*/
        /*The number of the step and the connector before it = green*/
        #progressbar li.active:before, #progressbar li.active:after {
            background: #27AE60;
            color: white;
        }
    </style>
    <title>jQuery Multi-Step Form Example</title>
</head>
<body style="background: transparent">
{{--<div id="jquery-script-menu">--}}
    {{--<div class="jquery-script-center">--}}
        {{--<ul>--}}
            {{--<li><a href="http://www.jqueryscript.net/form/Creating-A-Modern-Multi-Step-Form-with-jQuery-CSS3.html">Download This Plugin</a></li>--}}
            {{--<li><a href="http://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>--}}
        {{--</ul>--}}
        {{--<div class="jquery-script-ads"><script type="text/javascript"><!----}}
                {{--google_ad_client = "ca-pub-2783044520727903";--}}
                {{--/* jQuery_demo */--}}
                {{--google_ad_slot = "2780937993";--}}
                {{--google_ad_width = 728;--}}
                {{--google_ad_height = 90;--}}
                {{--//-->--}}
            {{--</script>--}}
            {{--<script type="text/javascript"--}}
                    {{--src="http://pagead2.googlesyndication.com/pagead/show_ads.js">--}}
            {{--</script></div>--}}
        {{--<div class="jquery-script-clear"></div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<h1 style="margin-top:150px" align="center">jQuery Multi-Step Form Example</h1>--}}
<!-- multistep form -->
<form id="msform" method="post">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Account Setup</li>
        <li>Social Profiles</li>
        <li>Personal Details</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Travill Information</h2>
        <h3 class="fs-subtitle">This is step 1</h3>
        {{--<input type="text" name="email" placeholder="Email" />--}}
        {{--<input type="password" name="pass" placeholder="Password" />--}}
        {{--<input type="password" name="cpass" placeholder="Confirm Password" />--}}
        <div class="form-group">
            <label>محطة القيام</label>
            <select name="FROM" class="form-control">
                @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->station_city}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>محطة الوصول</label>
            <select  name="TO" class="form-control">
                @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->station_city}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>تاريخ السفر</label>
            <input type="date" class="form-control" name="leave_time">
        </div>
        <div class="form-group">
            <label>عدد التذاكر</label>
            <input name="num_ticket" class="form-control" >
        </div>
        <div class="form-group">
            <label> درجة لمقعد</label>
            <select name="class" class="form-control">
                <option value="A">A</option>
                <option value="B">B</option>

            </select>
        </div>
        <input type="button" name="next" class="next action-button" value="Next" id="first_step"/>
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Travill Information</h2>
        <h3 class="fs-subtitle">Choose One</h3>
        <table class="table table-condensed table-striped table-bordered">
            <thead>
              <tr>
                  <th>choos</th>
                  <th>train id</th>
                  <th>from</th>
                  <th>to</th>
                  <th>class</th>
                  <th>day</th>
                  <th>price</th>
              </tr>
            </thead>
            <tbody  id="secound_step_tbody">

            </tbody>
        </table>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" id="secound_step" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Travill Information</h2>
        <h3 class="fs-subtitle">Choose One</h3>
        <input type="text" name="email" placeholder=" Email" required/>
        <input type="text" name="national_number" placeholder="National Number" required/>
        <input type="text" name="phone" placeholder="Phone" required/>
        <textarea name="address" placeholder="Address"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button next" value="Submit" id="submit" />
    </fieldset>
    <fieldset>
       <div id="reersation_message"></div>
        <div id="PDF"></div>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" id="pdf_generate" class="action-button" value="PDF" />
    </fieldset>
</form>

<!-- jQuery -->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<!-- jQuery easing plugin -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.easing.min.js" type="text/javascript"></script>
<script>
    $(function() {

//jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50)+"%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'transform': 'scale('+scale+')'});
                    next_fs.css({'left': left, 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1-now) * 50)+"%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'left': left});
                    previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".submit").click(function(){
            return false;
        })

    });
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
$(document).ready(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    $("#first_step").on('click',function () {
        var data=$("#msform").serialize();

        $.ajax({
            data:data,
            // datatype:"json",
            url:"first_step_url",
            type:"get",
            success:function(data)
            {
                $("#secound_step_tbody").html(data);

            }

        })
    })
    $("#secound_step").on('click',function () {

           var seat_id=$('input[type=radio]:checked').val();
           var leave_time=$('input[type=radio]:checked').data('id');
           $("#seat_id").val(seat_id);
           $("#tarrival_time_hidden").val(leave_time);
           var data=$("#msform").serialize();
            console.log("after checkbox"+leave_time);
           console.log(data)
         //var id_2=$('input[type=radio]:checked').attr('id');

    })
    $("#submit").on("click",function () {

        var data=$("#msform").serialize();
        console.log("after submit");
        console.log(data)
        $.ajax({
            data:data,
            url:"last_step_url",
            type:"post",
            datatype:"json",
            success:function (data) {
              if(data.message=="success")
              {
                  $("#reersation_message").html("<div class='alert alert-success'>Reversation Successfully</div>")
                  $("#PDF").html(data.data)
              }else
              {
                  $("#reersation_message").append("<div class='alert alert-danger'>"+data.data.email+"</div>")
                  $("#reersation_message").append("<div class='alert alert-danger'>"+data.data.national_number+"</div>")
                  $("#reersation_message").append("<div class='alert alert-danger'>"+data.data.phone+"</div>")
                  $("#reersation_message").append("<div class='alert alert-danger'>"+data.data.seat_id+"</div>")
                  $("#reersation_message").append("<div class='alert alert-danger'>"+data.data.leave_time+"</div>")
                  $("#reersation_message").append("<div class='alert alert-danger'>"+data.data.num_ticket+"</div>")

              }
            }
        })
    })
    $("#pdf_generate").on("click",function () {
        $.ajax({
            url:"pdf_generate",
            type:"get",
            success:function (data) {
                console.log(data);
            }
        })
    })
})
</script>
</body>
</html>