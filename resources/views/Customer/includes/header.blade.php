<!-- =========== Nav Area Start ============ -->
<header class="pixinav responsive-nav transparent dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- brand logo start -->
                <div class="brand-logo">
                    <a href="index.html"><img src="assets/images/logo-white.png" alt="logo-img"></a>
                </div>
                <!-- Responsive nav button start -->
                <div class="nav-icon"></div>
                <!-- canvas button start -->
                <div class="offcanvas in_menubar">
                    <button class="offcanvas_btn"> <span></span> <span></span> <span></span> </button>
                </div>
                <!-- search area -->
                {{--<div class="search_button">--}}
                {{--<i class="fa fa-search"></i>--}}
                {{--</div>--}}
                <div class="search-form">
                    <form>
                        <input type="text" name="search" placeholder="Type to search">
                        <button class="search-submit" type="submit"><i class="fa fa-search"></i>
                        </button>
                    </form>
                    <span class="search-close">✕</span>
                </div>
                <!-- nav start -->
                <div class="nav-wrapper">
                    <span class="nav-button-close">✕</span>
                    <ul>
                        <li class="active"><a href="#">

                                {{ trans('menu.Home') }}


                                <i class="fa fa-angle-down"></i></a>
                            {{--<ul class="dropdown_menu">--}}
                            {{--<li><a href="index.html">Home - 1</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="home-2.html">Home - 2</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="home-3.html">Home - 3</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </li>
                        <li><a href="#">{{ trans('menu.About') }}<i class="fa fa-angle-down"></i></a>
                            {{--<ul class="dropdown_menu">--}}
                            {{--<li><a href="about-company.html">About Company</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="our-history.html">Our History</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="management_team.html">Our Team</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="resources.html">Our Resources</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </li>
                        <li><a href="{{ URL::to('profile') }}">{{ trans('menu.Services') }}<i class="fa fa-angle-down"></i></a>
                            {{--<ul class="dropdown_menu">--}}
                            {{--<li><a href="service-1.html">Service - 1</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="service-2.html">Service - 2</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="service-3.html">Service - 3</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="service-details1.html">Service Details - 1</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="service-details2.html">Service Details - 2</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </li>
                        <li><a href="{{ URL::to('offer') }}">{{ trans('menu.Offers') }}<i class="fa fa-angle-down"></i></a>
                            {{--<ul class="dropdown_menu">--}}
                            {{--<li><a href="our-work.html">Project Showcase</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="case-studies.html">Project Details</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </li>
                        {{--<li><a href="#">Career<i class="fa fa-angle-down"></i></a>--}}
                        {{--<ul class="dropdown_menu">--}}
                        {{--<li><a href="career.html">Career</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="career-details.html">Career Details</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="application_form.html">Application Form</a>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="#">Blog<i class="fa fa-angle-down"></i></a>--}}
                        {{--<ul class="dropdown_menu">--}}
                        {{--<li><a href="blog-full.html">Blog Full</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="blog-full-sildebar.html">Blog Full Sidebar</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="blog-gird.html">Blog Grid </a>--}}
                        {{--</li>--}}
                        {{--<li><a href="blog-gird-sidebar.html">Blog Grid Sidebar</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="single_blog.html">Blog Details Default</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="single_blog-carousel.html">Blog Details Carousel</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="single_blog-video.html">Blog Details Video</a>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        <li><a href="#">{{ trans('menu.Contact') }}<i class="fa fa-angle-down"></i></a>
                            {{--<ul class="dropdown_menu">--}}
                            {{--<li><a href="contact_1.html">Contact Us 1</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="contact_2.html">Contact Us 2</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="contact_3.html">Contact Us 3</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="planner.html">Contact Planner</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </li>
                        <li><a href="#">{{ trans('menu.Language') }}<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown_menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li><a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                    </ul>

                </div>
                <!-- canvas menu start -->
                <div class="offcanvas_container">
                    <div class="single_canvas offcanvas1 right canvas_dark no_canvas_xs">
                        <div class="single_canvas_inner">
                            <div class="single_canvas_top">
                                <div class="site_logo">
                                    <a href="#"> <img id="clogo1" src="assets/images/logo-white.png" alt=""> </a>
                                </div>
                                <div class="canvas_cancel"> </div>
                            </div>
                            <div class="canvas_menu_pages">
                                <ul class="list-unstyled">
                                    <li> <a href="#">About</a> </li>
                                    <li> <a href="#">Work</a> </li>
                                    <li> <a href="#">Services</a> </li>
                                    <li> <a href="#">Career</a> </li>
                                    <li> <a href="#">Contact</a> </li>
                                </ul>
                            </div>
                            <div class="canvas-social">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-youtube"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-google-plus"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="canvas_info">
                                <h6>Talk to us:</h6>
                                <ul class="list-unstyled">
                                    <li> contact@avace.com </li>
                                    <li> +88 1245 124 </li>
                                </ul>
                            </div>
                            <div class="canvas_location">
                                <h6>Visit us:</h6>
                                <p> 55 Washington St. Floor 5 Brooklyn, NY 11201 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- canvas menu end -->
            </div>
        </div>
    </div>
</header>
<!-- =========== Nav Area End ============ -->