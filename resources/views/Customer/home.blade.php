
<!DOCTYPE html>
<html lang="en">
@include('Customer.includes/head')

<body class="color_1">
<!-- =========== Loader Start ============ -->
<div class="loader-wrapper">
    <div class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
    </div>
</div>
<!-- =========== Loader end ============ -->

<!-- =========== Color Switcher Start ============ -->
<div class="switcher">
    <div class="color-canvas">
        <h4>AVACE COLOR SCHEMES</h4>
        <p>Avace comes with awesome color schemes. Changing color or creating your own color is very simple and easy with Avace, no need to coding knowledge</p>

        <ul class="color-box">
            <h4>Primary Color</h4>
            <li class="color-01"></li>
            <li class="color-02"></li>
            <li class="color-03"></li>
            <li class="color-04"></li>
            <li class="color-05"></li>
            <li class="color-06"></li>
            <li class="color-07"></li>
            <li class="color-08"></li>
            <li class="color-09"></li>
            <li class="color-10"></li>
            <li class="color-11"></li>
            <li class="color-12"></li>
            <hr>
            <h4>Secondary Color</h4>
            <li class="sc-3"></li>
            <li class="sc-1"></li>
            <li class="sc-2"></li>
            <p>You can also create your own color scheme in a minute.</p>
            <hr>
            <h4>Navigation Menu Style</h4>
            <li class="light-nav">Light</li>
            <li class="dark-nav">Dark</li>
        </ul>
        <a class="btn btn__lg transition mt-30" href="#">purchase now </a>
    </div>
    <div class="color-toggle">
        <i class="fa fa-cog fa-spin"></i>
    </div>
</div>
<!-- =========== Color Switcher End ============ -->

@include('Customer.includes.header')
<!-- =========== Hero Area Start ============ -->
<section class="hero_area_3" data-vide-bg="assets/videos/hero-vid.jpg" data-vide-options="position: 0% 50%">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="hero_content container__mid mw-770 center">

                    <h2>{{ trans('menu.Title') }}</h2></div>
            </div>
        </div>
    </div>
</section>
<!-- =========== Hero Area End ============ -->
<!-- =========== Feature Area Start ============ -->
<section class="feature_area pb-60 pt-80">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="feature_details pb-xs-30">
                    <div class="feature_icon inline-block"><i class="icon-fill-love-user"></i></div>
                    <div class="feature_content inline-block">
                        <h4>{{trans('menu.TravelFreeTitle')}}</h4>
                        <p>{{trans('menu.TravelFree')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="feature_details pb-xs-30">
                    <div class="feature_icon inline-block"><i class="icon-fill-idea-2"></i></div>
                    <div class="feature_content inline-block">
                        <h4>{{trans('menu.CreativIdeaTitle')}}</h4>
                        <p> {{trans('menu.CreativIdea')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="feature_details">
                    <div class="feature_icon inline-block"><i class="icon-fill-heart-2"></i></div>
                    <div class="feature_content inline-block">
                        <h4>{{trans('menu.EasyWayTitle')}}</h4>
                        <p>{{trans('menu.EasyWay')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== Feature Area End ============ -->
<!-- =========== Service 4 Start ============ -->
<section class="service_4 pb-100 pt-100 pb-xs-80 pb-xs-80">
    <div class="container">
        <div class="row service_masonry">
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
                <div class="service_content pb-30"> <img src="assets/images/4.jpg" alt="" style="height: 320px;width: 370px">
                    <div class="service_shadow"> <span>{{trans('menu.subTitle')}} </span> <a href="#"><h4 class="pt-10 pb-10">We Have Special Speeds </h4></a>
                        <a href="#">
                            <p>{{trans('menu.paragraph')}}</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
                <div class="service_content pb-30"> <img src="assets/images/10.jpg" alt="" style="height: 320px;width: 370px">
                    <div class="service_shadow"> <span>Best safety Travill for You</span> <a href="#"><h4 class="pt-10 pb-10">Best safety Travill Way</h4></a>
                        <a href="#">
                            <p>We Always Cares ِbout Our Customer During The Travilling In Aِddition Save Them And There Comfort  With Our Trians You Will Say That .</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
                <div class="service_content pb-30"> <img src="assets/images/13.jpg" alt="" style="height: 320px;width: 370px">
                    <div class="service_shadow"> <span>Best Cosultation Service for You</span> <a href="#"><h4 class="pt-10 pb-10">Search Service Optimization</h4></a>
                        <a href="#">
                            <p> optimization service Is The Main Goal In Our Job With Our Customer From Our Employee And Our Renewed Offers.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-6 col-xxs-12">
                <ul class="list-unstyled mb-xxs-30">
                    <li><img class="svc_img" src="assets/images/11.jpg" alt="" style="height: 525px;width: 350px"></li>
                    <li> <span>We Are Best At Investment Planning</span> <a href="#"><h4 class="pt-10 pb-10">Strong Railroad Network</h4></a>
                        <a href="#">
                            <p>We Have Strong Railroad Network Connect All Our Counties With Each Other And All Of Them IS Savity Each Time You Will Travill With Our Trians You Will Say That .</p>
                        </a>
                    </li>
                </ul>
            </div>
            {{--<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">--}}
                {{--<div class="service_cta text-center">--}}
                    {{--<h3>Create Virality. Expand Your Reach. Maximize Lead Generation.</h3> <a class="btn btn__sm btn__black transition mt-30" href="#">Request a Quote</a> </div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>
<!-- =========== Service 4 End ============ -->
<!-- =========== Content Block Start ============ -->
{{--<section class="content_block pb-100 pt-100 pb-xs-80 pb-xs-80">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                {{--<div class="content_block_title mw-650 pb-70">--}}
                    {{--<h2>Why do you need a social media management company?</h2> </div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                {{--<div class="content_block_cont_01 mb-30">--}}
                    {{--<h4>Your customers are on social media.</h4>--}}
                    {{--<p>Regardless of what industry your company is in, your customers are using social media on a daily basis. It is important that you keep them engaged is important that you keep them engaged and connected to your brand so that you’re always their first option.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                {{--<div class="content_block_cont_01 mb-30">--}}
                    {{--<h4>Increase Social Media Engagement.</h4>--}}
                    {{--<p>Your fans, followers and subscribers are more likely to engage with your brand when it has plenty to offer. A social media manager will make sure that your business's social outlets are filled with interesting and helpful content as well as social media engagement.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                {{--<div class="content_block_cont_01 mb-xs-30">--}}
                    {{--<h4>People are talking about your company on social media.</h4>--}}
                    {{--<p>You need to listen to what your customers are saying about your company on social media and respond to their concerns. Our social media management services focus on highlighting the positive aspects of what your company has to offer and responds sincerely  remarks.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                {{--<div class="content_block_cont_01">--}}
                    {{--<h4>There are people searching for your company.</h4>--}}
                    {{--<p>If your company is offering a product or service, you can bet that there are people talking about it and looking for companies that provide it. Our social media management service will help your business to join the conversation and generate new leads.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- =========== Content Block End ============ -->
<!-- =========== Image Block Start ============ -->
<!--Right Side Image-->
<section class="img-block right">
    <div class="media-content">
        <img class="media-content-img" src="assets/images/9.jpg" alt="img" style="width: 1920px;height: 1280px">
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12">
                    <div class="text-content pt-140 pb-140 pt-xs-50 pb-xs-70">
                        <h2>We allocate a dedicated team</h2>
                       <p>We Always Cares ِbout Our Customer During The Travilling In Aِddition Save Them And There Comfort  With Our Trians You Will Say That . optimization service Is The Main Goal In Our Job With Our Customer From Our Employee And Our Renewed Offers.We Have Strong Railroad Network Connect All Our Counties With Each Other And All Of Them IS Savity Each Time You Will Travill With Our Trians You Will Say That .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Left Side Image-->
<section class="img-block left">
    <div class="media-content">
        <img class="media-content-img" src="assets/images/14.jpg" alt="img" style="width: 1920px;height: 1280px">
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12">
                    <div class="text-content pt-140 pb-140 pt-xs-50 pb-xs-70">
                        <h2>We increase your company’s social presence.</h2>
                        <p>Other companies will run pointless automation that does little to increase your sphere of influence online while still costing you a lot of money. With Social Vantage, you are assigned a Social Media Manager who will only create content and posts relevant to your business and your objective, and drive organic traffic to your brand.
                            <br>
                            <br> Want to Generate more leads? Spread Awareness? Drive Sales? Let our Social Media Managers give your business the social media presence it deserves!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== Image Block End ============ -->

<!-- =========== Process Area Start ============ -->
<section class="process_area pb-100 pt-100 pb-xs-80 pt-xs-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home_title mw-540 text-center m-auto pb-60">
                    <h2>The process of getting started</h2>
                    <p>The Setup Process Takes 1-2 Business Days. We Keep The Setup Process Easy And Simple.</p>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="process_content container__mid pb-90">
                    <div class="process_icon inline-block text-center transition">
                        <i class="icon-fill-file-txt"></i>
                    </div>
                    <div class="inline-block mw-555 ml-40 ml-xs-25 mt-xs-30">
                        <h5>Search About Your Travill</h5>
                        {{--<p>Every client deserves a custom campaign to achieve their marketing goals. We will present a proposal custom to your business and your needs. When our clients win, we win.</p>--}}
                    </div>
                </div>
                <div class="process_content container__mid pb-90">
                    <div class="process_icon inline-block text-center transition">
                        <i class="icon-fill-handshake"></i>
                    </div>
                    <div class="inline-block mw-555 ml-40 ml-xs-25 mt-xs-30">
                        <h5>Select One Of  Search Result Travill</h5>
                        {{--<p>We will compose a contract and ensure you are well informed of all of the services we will provide. We require a 3 month minimum contract period for services.</p>--}}
                    </div>
                </div>
                <div class="process_content container__mid pb-90">
                    <div class="process_icon inline-block text-center transition">
                        <i class="icon-fill-knight"></i>
                    </div>
                    <div class="inline-block mw-555 ml-40 ml-xs-25 mt-xs-30">
                        <h5>Enter The Details Of Reversing</h5>
                        {{--<p>Based upon your proposal, we will develop a custom strategy for your business based on your goals and objectives</p>--}}
                    </div>
                </div>
                <div class="process_content container__mid">
                    <div class="process_icon border_none inline-block text-center">
                        <i class="icon-fill-fingerprint-2"></i>
                    </div>
                    <div class="inline-block mw-555 ml-40 ml-xs-25 mt-xs-30">
                        <h5>Insurance The Reversation</h5>
                        {{--<p>Sit back and watch the strategy be implemented for your business! Watch your social channels grow and the leads pour in!</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== Process Area End ============ -->
<!-- =========== Client Experience Start ============ -->
{{--<section class="client_experience text-center pb-40 pt-70 pb-xs-20">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="client_experience_title pb-45">--}}
                    {{--<h2>Client experience</h2>--}}
                {{--</div>--}}
                {{--<div class="client_experience_wrapper">--}}
                    {{--<div class="client_experience_img"> <img src="assets/images/client-experince01.png" alt=""> </div>--}}
                    {{--<div class="client_experience_img"> <img src="assets/images/client-experince02.png" alt=""> </div>--}}
                    {{--<div class="client_experience_img"> <img src="assets/images/client-experince03.png" alt=""> </div>--}}
                    {{--<div class="client_experience_img"> <img src="assets/images/client-experince04.png" alt=""> </div>--}}
                    {{--<div class="client_experience_img"> <img src="assets/images/client-experince05.png" alt=""> </div>--}}
                    {{--<div class="client_experience_img"> <img src="assets/images/client-experince06.png" alt=""> </div>--}}
                    {{--<div class="client_experience_img"> <img src="assets/images/client-experince07.png" alt=""> </div>--}}
                    {{--<div class="client_experience_img"> <img src="assets/images/client-experince08.png" alt=""> </div>--}}
                    {{--<div class="client_experience_img"> <img src="assets/images/client-experince09.png" alt=""> </div>--}}
                    {{--<div class="client_experience_img"> <img src="assets/images/client-experince10.png" alt=""> </div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- =========== Client Experience End ============ -->
<!-- =========== Client Experience End ============ -->
<section class="cta_3 pt-80 pb-80 text-center">
    <div class="container">
        <div class="row">
            <div class="container__mid flex__col m-auto mw-770 center">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="pb-10">Ready To Get Started With US?</h2> <a class="btn btn__lg btn__black transition mt-30" href="#">Register</a> </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== Client Experience End ============ -->
@include('Customer.includes.footer')
</body>

</html>