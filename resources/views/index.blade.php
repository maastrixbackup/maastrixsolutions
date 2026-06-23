@extends('layouts.include')
@section('meta_title', '')
@section('meta_description', 'Transform your online presence with Maastrix Solutions’ complete web solutions — expert
    web design, development, SEO, and digital marketing that drives traffic, engagement, and growth')
@section('meta_keyword',
    'custom website development company in the USA,ecommerce website development agency in the
    UK,mobile app development services in the UK,professional digital marketing company in Bhubaneswar, India,local SEO
    services in India for service-based businesses,responsive web design agency in the UK,custom web application development
    services in the USA,cross-platform mobile app developers in India,UI/UX design services in the USA for mobile apps,CMS
    website development company in India,best SEO service provider for small businesses,ecommerce website development in
    India for UK-based brands,best ecommerce development company in India with global reach,iOS app design and development
    for USA businesses')
@section('include-section')

    <div class="fullScreen">
        <div class="inputBox">
            <input type="text" placeholder="Search here...">
            <button type="submit">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="closeBtn">
            <i class="fas fa-times"></i>
        </div>
    </div>

    <section class="banner_sec">
        <div id="hm_banner" class="owl-carousel">
            @foreach ($banner as $banner)
                <div class="banner_sec_img">
                    <img src="{{ url('homebanners/' . $banner->banner_name) }}">
                    <div class="banner_sec_img_cont">
                        <div class="banner_sec_img_cont_inner">
                            <h1>{!! $banner->banner_heading !!}</h1>
                            <h6>{{ $banner->banner_subheading }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- <div class="banner_sec_img">
                <img src="images/banner-2.jpg">
                <div class="banner_sec_img_cont">
                    <div class="banner_sec_img_cont_inner">

                        <h1>Highly creative top-notch web<br> designs for next generation1.</h1>
                        <h6>Creating websites with state of the art applications like web2.0, W3C compliance which are appreciable.</h6>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <section class="project_completed">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="project_completed_main">
                        <div class="row project_completed_main1">
                            @foreach ($cards as $card)
                                <div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-duration="1.2s">
                                    <div class="project_completed_single">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5">
                                                <div class="pro_img_sec">
                                                    <img src="{{ url('Home_banner_card_images/' . $card->image) }}"
                                                        alt="" title="">
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-7">
                                                <div class="pro_cont_sec">
                                                    <h1>{{ $card->card_heading }}</h1>
                                                    <h6>{{ $card->card_sub_heading }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4 col-md-4 wow fadeInDown" data-wow-duration="1.6s">
                                <div class="project_completed_single">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5">
                                            <div class="pro_img_sec">
                                                <img src="images/clients_image.jpg" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                            <div class="pro_cont_sec">
                                                <h1>3.7K+</h1>
                                                <h6>Satisfied Clients</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 wow fadeInRight" data-wow-duration="1.8s">
                                <div class="project_completed_single">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5">
                                            <div class="pro_img_sec">
                                                <img src="images/country_image.png" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                            <div class="pro_cont_sec">
                                                <h1>45+</h1>
                                                <h6>Countries Served</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="maas_welcome_sec">
        <div class="maas_welcome_sec_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="maas_welcome_sec_contents">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-duration="1.4s">
                                <div class="maas_welcome_sec_contents_left">
                                    <h2>{!! $siteintro->message !!}</h2>
                                    <!-- <h2>Welcome To Maastrix !</h2><br><h2>Thank You For Visiting Our Site!</h2> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-duration="1.8s">
                                <div class="maas_welcome_sec_contents_right">
                                    <p>{{ $siteintro->content }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="wlcm_under_sec">
        <div class="container">
            <div class="client_logo_sec_head">
                <span class="logo_span">Services:</span>
            </div>
            <div class="row justify-content-center">
                @foreach ($section2imgs as $contnts)
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                        <div class="service-card style4">
                            <div class="service-info">
                                <div class="service-title">
                                    <span>
                                        <img src="{{ url('home_section2/' . $contnts->image) }}" alt=""
                                            title="">
                                    </span>
                                    <h3>
                                        {{ $contnts->heading }}
                                    </h3>
                                </div>
                                <p><?php $con = $contnts->content1;
                                $con1 = substr($con, 0, 85);
                                echo $con1 . '...';
                                ?></p>
                                <a href="{{ url('Services_view/' . $contnts->id) }}" class="link style1">More Info <i
                                        class="fas fa-chevron-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="recent_work_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mx-auto">
                    <div class="recent_work_sec_head">
                        <span class="logo_span">Recent Work:</span>
                        <a href="{{ url('portfolio') }}" class="all_projects"><i
                                class="fas fa-long-arrow-alt-right"></i>View All Projects</a>
                    </div>
                    <div class="recent_work_sec_body">
                        @foreach ($portfolio as $portfolio)
                            <div class="recent_work_sec_body_single">
                                <img src="{{ url('Portfolio_images/' . $portfolio->image) }}" alt="" title="">
                                <a href="{{ url('portfolio-view/' . $portfolio->id) }}"
                                    portfolio-id="{{ $portfolio->id }}" portfolio-heading="{{ $portfolio->heading }}"
                                    portfolio-content="{{ $portfolio->content }}"
                                    portfolio-image="{{ $portfolio->image }}">
                                    <div class="recent_work_sec_body_single_overlay">
                                        <div class="recent_work_sec_body_single_overlay_cont">
                                            <div class="recent_work_sec_body_single_overlay_cont_inner">
                                                <h4>{{ $portfolio->heading }}</h4>
                                                <p><?php
                                                $text = $portfolio->content;
                                                $text1 = substr($text, 0, 75);
                                                echo $text1 . '...';
                                                ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Portfolio View:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Project Name:</h4><span id="project_name"></span>
                        <h4>Project Details:</h4>
                        <p id="content_details"></p>
                        <div id="portfolio_img"></div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> -->
                </div>
            </div>
        </div>
    </section>



    <section class="client_logo_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="client_logo_sec_head">
                        <span class="logo_span">Best Featured Clients:</span>
                    </div>
                    <div class="client_logo_sec_main owl-carousel" id="logo_banner">
                        @foreach ($all_client as $clint_logo)
                            <div class="client_logo_sec_single">
                                <img src="{{ url('Client_images/' . $clint_logo->client_image) }}" alt=""
                                    title="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="next_level_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @foreach ($all_contents as $why_chose)
                        <div class="next_level_sec_main">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 wow fadeInLeftBig" data-wow-duration="1.4s">
                                    <div class="next_level_sec_img">
                                        <span class="why_span">Why Choose Us</span>
                                        <img src="{{ url('whychooseus/' . $why_chose->image) }}" alt=""
                                            title="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInRightBig" data-wow-duration="1.6s">
                                    <div class="next_level_sec_img_cont">
                                        <div class="sub_title">
                                            <h1>{!! $why_chose->heading !!}</h1>
                                            <p>{!! $why_chose->content !!}</p>
                                            <div class="get_btn_sec">
                                                <a href="contact-form" class="get_start_btn"><i
                                                        class="fas fa-file-pdf"></i>Get A Quote</a>
                                                <a href="{{ url('contact-us') }}" class="talk_btn"><i
                                                        class="fas fa-phone-alt"></i>Let's Talk</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="spacer80px">
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="we_believe">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="we_believe_main">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 wow fadeInDown" data-wow-duration="1.4s">
                                <div class="we_believe_left_main">
                                    <div class="we_believe_left">
                                        <img src="images/believe.jpg" alt="" title=""
                                            style="display: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-duration="1.6s">
                                <div class="we_believe_right">
                                    <div class="we_believe_right_inner">
                                        <div class="we_believe_right_inner_head">
                                            <h3>We Believe Our Brand</h3>
                                            <nav>
                                                <div class="believe_tabs nav nav-tabs nav-fill" id="nav-tab"
                                                    role="tablist">
                                                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab"
                                                        href="#nav-home" role="tab" aria-controls="nav-home"
                                                        aria-selected="true">Who We Are</a>
                                                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab"
                                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                        aria-selected="false">Our Team</a>
                                                    <a class="nav-link" id="nav-contact-tab" data-toggle="tab"
                                                        href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                        aria-selected="false">How We Work</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content tab_contents" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                    aria-labelledby="nav-home-tab">
                                                    <div class="tab_cont_sec">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4">
                                                                <div class="tab_left_img">
                                                                    <img src="images/who_we_are.png">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8">
                                                                <div class="tab_right_cont">
                                                                    <p>We are one of the top players leading the current web
                                                                        designing industry. Located and headquartered at
                                                                        Michigan, we have the solutions to offer which is
                                                                        tailor-made according to your requirements. We have
                                                                        also collaborated and have alliances with companies
                                                                        belonging to similar traditions and business across
                                                                        the globe.</p>
                                                                    <ul>
                                                                        <!--  <li><i class="far fa-check-circle"></i></li>
                                                                        <li><i class="far fa-check-circle"></i></li> -->
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                    aria-labelledby="nav-profile-tab">
                                                    <div class="tab_cont_sec">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4">
                                                                <div class="tab_left_img">
                                                                    <img src="images/our_team.png">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8">
                                                                <div class="tab_right_cont">
                                                                    <p>Our team is our strength and we closely follow the
                                                                        rule, which says, “You grow as your fellow grows”.
                                                                        We have entrusted our team for a long-time and they
                                                                        have always paid back to our trust and affection. At
                                                                        Maastrix, we have an intellectual team of
                                                                        technologists delivering high-end web solutions to
                                                                        some of the world’s largest companies, straddling
                                                                        web, mobile and app development.</p>
                                                                    <!-- <ul>
                                                                        <li><i class="far fa-check-circle"></i></li>
                                                                        <li><i class="far fa-check-circle"></i></li>
                                                                    </ul> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                                    aria-labelledby="nav-contact-tab">
                                                    <div class="tab_cont_sec">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4">
                                                                <div class="tab_left_img">
                                                                    <img src="images/how_we_work.png">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8">
                                                                <div class="tab_right_cont">
                                                                    <p>Unlike other, we have different style of work. Our
                                                                        project managers, engineers, and designers develop
                                                                        well-defined solutions that are focused on your
                                                                        challenges/pains. We know your web requirement is
                                                                        unique, as are your needs and objectives.</p>
                                                                    <!-- <ul>
                                                                        <li><i class="far fa-check-circle"></i></li>
                                                                        <li><i class="far fa-check-circle"></i></li>
                                                                    </ul> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial_sec">
        <div class="">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="testimonial_sec_main">
                        <div class="row">
                            <div class="col-lg-4 col-xl-4 col-md-4">
                                <div class="testimonial_left">
                                    <div class="default-section-title">
                                        <span>Testimonials</span>
                                        <h3>What Our Clients Say About Us</h3>
                                        <!-- <p>Lorem ipsum dolor sit co adipiscing elit, sed eiusmo accums facilisis.</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-8 col-md-8">
                                <div class="testi_right_sec owl-carousel" id="testimonial_slide">
                                    @foreach ($all_testimonial as $all_testimonial)
                                        <div class="testi_right_sec_single">
                                            <!-- <img src="{{ url('testimonial_photo/' . $all_testimonial->photo) }}" alt="image"> -->
                                            <div class="testimonial-card-text">
                                                <p>“{{ $all_testimonial->remark }}”</p>
                                                <div class="testimonial-intro-area">
                                                    <div class="testimonial-card-intro">
                                                        <h4>{{ $all_testimonial->name }}</h4>
                                                        <span>{{ $all_testimonial->country }}</span>
                                                    </div>
                                                    <div class="stars">
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!-- <div class="testi_right_sec_single">
                                        <img src="images/tc3.jpg" alt="image">
                                        <div class="testimonial-card-text">
                                            <p>“It is a long established fact that a reader will page when looking at its layout. The point of opposed to using 'Content here, content here', making it look like readable English.”</p>
                                            <div class="testimonial-intro-area">
                                                <div class="testimonial-card-intro">
                                                    <h4>Peter Smith</h4>
                                                    <span>Front End Developer</span>
                                                </div>
                                                <div class="stars">
                                                    <ul>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sticky-profile"><button class="btn-3" data-toggle="modal" data-target="#myModal"><i
                class="fas fa-download"></i> &nbsp;Download Profile</button></div>



    <!-- The Modal -->
    <div class="modal" id="myModal" style="display: none;" aria-hidden="true">
        <!-- @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif -->
        <div class="success" style="display: none;"></div>
        <div class="modal-dialog modal-lg profile-download-modal">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">×</button>


                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="download-profile-pics"><img src="images/profile-download.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="download-profile-form">
                                <div class="alert alert-danger" role="alert" style="display:none">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <strong>Please!</strong> Fill up all the fields!
                                </div>
                                <h2 class="modal-title">Download Our Profile</h2>
                                <ul>
                                    <li><input type="text" class="form-control" name="name" id="nameID"
                                            placeholder="Name"><i class="far fa-user"></i></li>
                                    <li><input type="text" class="form-control" name="email" id="emailID"
                                            placeholder="Email"><i class="fal fa-envelope"></i></li>
                                    <li><input type="text" class="form-control" name="phone" id="phoneID"
                                            placeholder="Phone"><i class="fal fa-phone-alt"></i></li>
                                    <li>
                                        <textarea class="form-control" name="msg" id="msgID" placeholder="Enter Your Message..."></textarea><i class="fal fa-comments-alt"></i>
                                    </li>
                                    <li><button type="button" class="get_start_btn btn-submit" name="submit"
                                            value="Submit">Submit</button></li>
                                </ul>
                            </div>

                            <div class="download-profile-form-success d-none">
                                <h2>Thank you</h2>
                                <!-- <button type="button" class="get_start_btn btn-submit" href="{{ '/profiledetails/Maastrix_Profile.pdf' }}" download value="Submit">Click Here to Download profile</button> -->
                                <!-- <a href="{{ '/profiledetails/Maastrix_Profile.pdf' }}" download class="get_btn">Click Here to Download profile</a> -->
                                <a href="{{ '/profiledetails/Maastrix_Profile.pdf' }}" download><button
                                        class="get_start_btn btn-submit">Click Here to Download profile</button></a>
                                <!-- <a href="{{ url('/profiledetails/Maastrix_Profile.pdf') }}" download class="get_btn">Click Here to Download profile</a> -->
                            </div>
                            <!-- <div class="download-profile-form-success d-none">
                                    <a href="{{ 'generate-pdf' }}">Click Here to Download profile</a>

                                </div> -->
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <script type="text/javascript">
        function submit_form() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var msg = document.getElementById('msg').value;
            // alert(img);
            if (name == "") {
                alert("Please Enter Name");
                return false;
            }
            if (email == "") {
                alert("Please Enter Email address");
                return false;
            }
            if (phone == "") {
                alert("Please Enter Phone number");
                return false;
            }
            if (msg == "") {
                alert("Please Enter Message");
                return false;
            }
        }
    </script>

    <script>
        function open_modal(obj) {
            var portfolio_id = $(obj).attr('portfolio-id');
            var portfolio_heading = $(obj).attr('portfolio-heading');
            var portfolio_content = $(obj).attr('portfolio-content');
            var portfolio_image = $(obj).attr('portfolio-image');
            // alert(portfolio_image);
            $('#project_name').html(portfolio_heading);
            $('#content_details').html(portfolio_content);
            $('#portfolio_img').html(
                `<img class="home-recentwork" src="Portfolio_images/${portfolio_image}" height="150px" width="264px">`);
        }
    </script>
    <script type="text/javascript">
        const btn =
            document.querySelector(".myBtn")
        const searchBox =
            document.querySelector(".fullScreen")
        const closeBtn =
            document.querySelector(".closeBtn")


        closeBtn.addEventListener("click", () => {
            searchBox.style.display = "none"
        })

        btn.addEventListener('click', () => {
            searchBox.style.display = "block"
        })
    </script>


    <!--=========================== Script Start ===========================-->

    <a href="#" class="back-to-top" style="display: none;"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

    <script type="text/javascript">
        $("#cssmenu").menumaker({
            title: "",
            format: "multitoggle"
        });
    </script>

    <!-- <script>
        $(".gee_cross").hide();
        $(".gee_menu").hide();
        $(".gee_hamburger").click(function() {
            $(".gee_menu").slideToggle("slow", function() {
                $(".gee_hamburger").hide();
                $(".gee_cross").show();
            });
        });

        $(".gee_cross").click(function() {
            $(".gee_menu").slideToggle("slow", function() {
                $(".gee_cross").hide();
                $(".gee_hamburger").show();
            });
        });
    </script> -->

    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 0,
            callback: function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();
        document.getElementById('moar').onclick = function() {
            var section = document.createElement('section');
            section.className = 'section--purple wow fadeInDown';
            this.parentNode.insertBefore(section, this);
        };
    </script>

    <script>
        jQuery("#hm_banner").owlCarousel({
            lazyLoad: true,
            loop: true,
            margin: 0,
            responsiveClass: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplay: true,
            autoplayTimeout: 3500,
            autoplayHoverPause: false,
            autoHeight: true,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 1000,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 1
                },

                1024: {
                    items: 1
                },

                1366: {
                    items: 1
                }
            }
        });
    </script>

    <script>
        jQuery("#logo_banner").owlCarousel({
            lazyLoad: true,
            loop: true,
            margin: 0,
            responsiveClass: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplay: true,
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            autoHeight: true,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 1000,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 1
                },

                1024: {
                    items: 3,
                    margin: 0,
                },

                1366: {
                    items: 5
                }
            }
        });
    </script>


    <script>
        jQuery("#testimonial_slide").owlCarousel({
            stagePadding: 80,
            lazyLoad: true,
            loop: true,
            margin: 10,
            responsiveClass: true,
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            autoplay: true,
            // autoplayTimeout:1000,
            autoplayHoverPause: false,
            autoHeight: true,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 0
                },

                600: {
                    items: 1
                },

                1024: {
                    items: 2
                },

                1366: {
                    items: 2
                }
            }
        });
    </script>



    <script>
        jQuery(document).ready(function() {
            var offset = 220;
            var duration = 500;
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });

            jQuery('.back-to-top').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({
                    scrollTop: 0
                }, duration);
                return false;
            })
        });
    </script>


    <script>
        $(document).ready(function() {
            var owl = $('#owl-carousel1');
            owl.owlCarousel({
                margin: 20,
                nav: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                loop: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 6
                    }
                }
            })
        })
    </script>

    <script type="text/javascript">
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 100) {
                $('.head_sec').addClass('sticky_header animated fadeInDown');
            } else {
                $('.head_sec').removeClass('sticky_header animated fadeInDown');
            }
        });
    </script>


    <script>
        function resize() {
            if ($(window).width() < 767) {
                $('.project_completed_main1').addClass('sm-meet-team-slider owl-carousel');
                $('.sm-meet-team-slider').owlCarousel({
                    loop: true,
                    margin: 0,
                    autoplay: false,
                    autoplayTimeout: 3000,
                    smartSpeed: 2000,
                    responsiveClass: true,
                    autoHeight: true,
                    responsive: {

                        0: {

                            items: 1,
                            nav: false,
                            dots: false
                        },
                        600: {

                            items: 1,
                            nav: false,
                            dots: false
                        },
                        1000: {

                            items: 1,
                            nav: false,
                            loop: false,
                            dots: false
                        }
                    }
                })
            } else {
                $('.project_completed_main1').removeClass('sm-meet-team-slider owl-carousel');
            }
        }

        $(document).ready(function() {
            $(window).resize(resize);
            resize();
        });
    </script>


    <script>
        $(document).ready(function() {
            $(".btn-submit").click(function(e) {
                // var selected_val = $(this).val();
                // var dataId = $(this).data("driver");
                var name = $("#nameID").val();
                var email = $("#emailID").val();
                var phone = $("#phoneID").val();
                var msg = $("#msgID").val();

                if (name == "" || email == "" || phone == "" || msg == "") {
                    window.setTimeout(function() {
                        $(".alert").removeAttr('style');
                        $(".alert").fadeOut(5000, function() {
                            // $(this).remove();
                        });
                    }, 2000);
                    return false;
                }
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    url: "{{ 'profile-detail' }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'name': name,
                        "email": email,
                        "phone": phone,
                        "msg": msg
                    },
                    beforeSend: function() {
                        $(".overlay1").show();
                    },
                    success: function(data) {
                        console.log(data);
                        $(".download-profile-form").hide();
                        $(".download-profile-form-success").removeClass("d-none");
                        $(".overlay1").hide();
                        // if (data.status) {
                        //     toastr.success(data.message.message, '');
                        // }else{
                        //     toastr.error(data.message.message, '');
                        // }

                        // toastr.success(data.message.message, 'Thank you! Your Message submitted successfully.');
                        // $("body").append("<div>"+data.message+"</div>");

                    }
                });

            });
        });
    </script>


    <!-- <script type="text/javascript">
        $(".btn-submit").click(function() {
            var data = '';
            $.ajax({
                type: 'GET',
                url: "{{ 'generate-pdf' }}",
                data: data,
                xhrFields: {
                    responseType: 'blob'
                },
                success: function(response) {
                    var blob = new Blob([response]);
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = "techsolutionstuff.pdf";
                    link.click();
                },
                error: function(blob) {
                    console.log(blob);
                }
            });
        });
    </script> -->



@endsection
