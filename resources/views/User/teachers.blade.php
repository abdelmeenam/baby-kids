
@include('User.assets.navbar')

<div class="nicdark_section nicdark_navigation fade-down">

    <div class="nicdark_menu_boxed">

        <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">
            <div class="nicdark_container nicdark_clearfix">
                <div class="grid grid_6">
                    <div class="nicdark_focus">
                        <h6 class="white">
                            <i class="icon-calendar-outlilne"></i>&nbsp;&nbsp;<a class="white" href="events.html">OUR EVENTS</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="icon-pencil-1"></i>&nbsp;&nbsp;<a class="white" href="blog-masonry.html">NEWS</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="icon-phone-outline"></i>&nbsp;&nbsp;(00) +51278934
                        </h6>
                    </div>
                </div>
                <div class="grid grid_6 right">
                    <div class="nicdark_focus right">
                        <h6 class="white">
                            <i class="icon-globe-alt-outline"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_window" href="#nicdark_window">LANGUAGES</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="icon-plus-outline"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_ajax" href="form-register.html">REGISTER</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="icon-lock-1"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_ajax" href="form-login.html">LOG IN</a>
                        </h6>
                    </div>
                </div>

                <!--info window for languages-->
                <div id="nicdark_window" class="nicdark_bg_white nicdark_radius zoom-anim-dialog mfp-hide">

                    <div class="nicdark_textevidence nicdark_bg_red nicdark_radius_top">
                        <div class="nicdark_margin20">
                            <h4 class="white">LANGUAGES</h4>
                        </div>
                    </div>

                    <div class="nicdark_margin20">

                        <ul class="nicdark_list border">

                            <li class="nicdark_border_grey">
                                <p><a class="grey" href="index.html">ENGLISH</a><a href="index.html" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="img/flag/img1.png"></a></p>
                                <div class="nicdark_space15"></div>
                            </li>

                            <li class="nicdark_border_grey">
                                <div class="nicdark_space15"></div>
                                <p><a class="grey" href="index.html">RUSSIAN</a><a href="index.html" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="{{asset('EnduserAssets/img/flag/img2.png ')}}"></a></p>
                                <div class="nicdark_space15"></div>
                            </li>

                            <li class="nicdark_border_grey">
                                <div class="nicdark_space15"></div>
                                <p><a class="grey" href="index.html">ARABIC</a><a href="index.html" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="{{asset('EnduserAssets/img/flag/img3.png ')}}"></a></p>
                                <div class="nicdark_space15"></div>
                            </li>

                            <li class="nicdark_border_grey">
                                <div class="nicdark_space15"></div>
                                <p><a class="grey" href="index.html">ITALIAN</a><a href="index.html" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="{{asset('EnduserAssets/img/flag/img4.png ')}}"></a></p>
                            </li>

                        </ul>

                    </div>
                </div>
                <!--end window-->

            </div>
        </div>

        <div class="nicdark_space3 nicdark_bg_gradient"></div>

        <div class="nicdark_section nicdark_bg_grey nicdark_shadow nicdark_radius_bottom">
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_12 percentage">

                    <div class="nicdark_space20"></div>

                    <div class="nicdark_logo nicdark_marginleft10">
                        <a href="index.html"><img alt="" src="{{asset('EnduserAssets/img/logo.png')  }}"></a>
                    </div>

                    <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right"><i class="icon-basket-1"></i></a>

                    <nav>
                        <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                            <li class="orange">
                                <a href="index.html">HOME</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home Default</a></li>
                                    <li><a href="index-2.html">Color Sections</a></li>
                                    <li><a href="index-3.html">Home Boxed</a></li>
                                </ul>
                            </li>
                            <li class="red">
                                <a href="#">PAGES</a>
                                <ul class="sub-menu">
                                    <li><a href="prices.html">Prices</a></li>
                                    <li>
                                        <a href="teachers.html">Teachers</a>
                                        <ul class="sub-menu">
                                            <li><a href="teachers.html">All Teachers</a></li>
                                            <li><a href="single-teacher.html">Single Teacher</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="excursions.html">Excursion</a>
                                        <ul class="sub-menu">
                                            <li><a href="excursions.html">All Excursion</a></li>
                                            <li><a href="single-excursion.html">Single Excursion</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="courses.html">Courses</a>
                                        <ul class="sub-menu">
                                            <li><a href="courses.html">All Courses</a></li>
                                            <li><a href="single-course.html">Single Course</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="events.html">Events</a>
                                        <ul class="sub-menu">
                                            <li><a href="events.html">All Events</a></li>
                                            <li><a href="single-event.html">Single Event</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Products</a></li>
                                            <li><a href="shop-cart.html">Cart</a></li>
                                            <li><a href="shop-checkout.html">Checkout</a></li>
                                            <li><a href="single-product.html">Single Product</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="components.html">Some Components</a>
                                        <ul class="sub-menu">
                                            <li><a href="components-forms.html">Forms Solutions</a></li>
                                            <li><a href="components-archives.html">Archives Solutions</a></li>
                                            <li><a href="components-focus.html">Focus Solutions</a></li>
                                            <li><a href="components-widgets.html">Widgets Solutions</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="blue">
                                <a href="courses.html">COURSES</a>
                                <ul class="sub-menu">
                                    <li><a href="courses.html">All Courses</a></li>
                                    <li><a href="single-course.html">Single Course</a></li>
                                </ul>
                            </li>
                            <li class="yellow nicdark_megamenu">
                                <a href="#">MEGA MENU</a>
                                <ul class="sub-menu">
                                    <li class="mm_grid mm_grid_3">
                                        <a href="#">Lorem Ipsum Dolor</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mm_grid mm_grid_3">
                                        <a href="#">Lorem Ipsum Dolor</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mm_grid mm_grid_3">
                                        <a href="#">Lorem Ipsum Dolor</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mm_grid mm_grid_3">
                                        <a href="#">Lorem Ipsum Dolor</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                            <li><a href="#">Lorem Ipsum Dolor</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="green">
                                <a href="blog-masonry.html">BLOG</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-masonry.html">Masonry Layout</a></li>
                                    <li>
                                        <a href="single-post-right-sidebar.html">Single Post</a>
                                        <ul class="sub-menu">
                                            <li><a href="single-post-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="single-post-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="single-post-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="orange">
                                <a href="events.html">EVENTS</a>
                                <ul class="sub-menu">
                                    <li><a href="events.html">All Events</a></li>
                                    <li><a href="single-event.html">Single Event</a></li>
                                </ul>
                            </li>
                            <li class="grey">
                                <a href="contact-1.html">CONTACTS</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="nicdark_space20"></div>

                </div>

            </div>
            <!--end container-->

        </div>
        <!--end header-->

    </div>

</div>
<!--start-->

<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-teachers-1">

    <div class="nicdark_filter orange">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">OUR TEACHERS</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">KNOW OUR BEST EDUCATORS</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->

    </div>

</section>
<!--end section-->


<!--start section-->

<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">ORANGE CLASS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">FULL TIME · AGE: 3-6 YEARS OLD</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_orange nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        @foreach($teachers as $teacer)
        <div class="grid grid_6">

            <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width100_responsive">
                    <img alt=""  class="nicdark_radius_left nicdark_opacity" style="width: 200px ; height: 200px" src="{{$teacer->image}}">
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">

                        <h4 class="white"><a class="white" href="single-teacher.html">{{$teacer->name}}</a></h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">{{$teacer->description}}</p>
                        <div class="nicdark_space20"></div>
                        <a href="single-teacher.html" class="white nicdark_btn"><i class="icon-graduation-cap-1"></i> Know Me :)</a>

                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage10 nicdark_displaynone_responsive">
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_space5"></div>
                    <a title="CURRICULUM" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-download-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="DOCUMENTS" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-attach-outline"></i></a>
                    <div class="nicdark_space20"></div>
                    <a title="COURSES" href="single-teacher.html" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-mic-outline"></i></a>
                    <div class="nicdark_space20"></div>
                </div>

            </div>

        </div>
        @endforeach



        <div class="nicdark_space50"></div>


    </div>
    <!--end nicdark_container-->
    <section id="nicdark_parallax_counter" class=" nicdark_section nicdark_imgparallax nicdark_parallax_img1 ">

        <div class="nicdark_filter greydark">

            <!--start nicdark_container-->
            <div class="nicdark_container nicdark_clearfix">

                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>


                <div class="grid grid_3">
                    <div class="nicdark_textevidence center">
                        <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_blue nicdark_bg_bluedark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="69" data-speed="1000">69</a>
                        <div class="nicdark_space20"></div>
                        <h4 class="white">TEACHERS</h4>
                    </div>
                </div>
                <div class="grid grid_3">
                    <div class="nicdark_textevidence center">
                        <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_green nicdark_bg_greendark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="32" data-speed="1000">32</a>
                        <div class="nicdark_space20"></div>
                        <h4 class="white">COURSES</h4>
                    </div>
                </div>
                <div class="grid grid_3">
                    <div class="nicdark_textevidence center">
                        <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="48" data-speed="1000">48</a>
                        <div class="nicdark_space20"></div>
                        <h4 class="white">LESSONS</h4>
                    </div>
                </div>
                <div class="grid grid_3">
                    <div class="nicdark_textevidence center">
                        <a href="#" class="nicdark_width50 white nicdark_btn nicdark_bg_violet nicdark_bg_violetdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="72" data-speed="1000">72</a>
                        <div class="nicdark_space20"></div>
                        <h4 class="white">ACTIVITIES</h4>
                    </div>
                </div>

                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>

            </div>
            <!--end nicdark_container-->

        </div>

    </section>
    <!--end section--><!--start section-->

    <!--end section--><!--end-->
</section>


@include('User.assets.footer')
