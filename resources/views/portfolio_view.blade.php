@extends('layouts.include')

@section('include-section')

<body class="inner_pages">
    <section class="banner_sec">
        @foreach($banner as $banner)
        <div class="banner_sec_img">
            <img src="{{ url('homebanners/'.$banner->banner_name) }}">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>{!!$banner->banner_heading!!}</h1>
                    <!-- <h6>{{$banner->banner_subheading}}</h6> -->
                </div>
            </div>
        </div>
        @endforeach
        <!-- <div id="" class="">
        <div class="banner_sec_img">
            <img src="images/portofolio-banner.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>Portfolio</h1>
                </div>
            </div>
        </div>
    </div> -->
    </section>
    <section class="bread-head">
        <div class="bread-inner">
            <div class="container">
                <div class="row">
                    <div class="bread-sec">
                        <ul class="bed-crown">
                            <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                            <li><a>Portfolio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio-details">
        <div class="container">
            <nav class="portfolio_view_device">
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-desktop"></i></a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="far fa-mobile"></i></a>

                </div>
            </nav>
            @foreach($view_port as $view)
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="tab_cont_main">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="laptop-display">
                                    <div class="p-details-img">
                                        @if ($view->large_image != null || $view->large_image != '')
                                        <img src="{{url('Portfolio_images/largeportfolio/'.$view->large_image)}}" alt="men">

                                        @else

                                        <img src="{{url('assets/no-image-available-icon-6.png')}}" alt="men">

                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="tab_cont_main">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mobile-display">
                                    <div class="p-details-img">
                                        <img src="{{url('Portfolio_images/mobile_view_portfolio/'.$view->mob_view_image)}}" alt="men">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row r-m-b">
                <div class="col-lg-12">
                    <div class="service-detail-text">
                        <h3>The Workflow</h3>
                        <p>
                            {{$view->content}}
                        </p>
                    </div>

                    <!-- <div class="service-quote portfolio-quote">
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div> -->
                </div>

                <!-- <div class="col-lg-5 mt-top">
                    <div class="p-details-meta">
                        <div class="p-detail-list">
                            <span><i class="fas fa-user-tie"></i>Client:</span>
                            <p>{{$view->heading}}</p>
                        </div>
                        <div class="p-detail-list">
                            <span>Date:</span>
                            <p>{{date("d-m-Y", strtotime($view->created_at))}}</p>
                        </div>
                        <div class="p-detail-list">
                            <span><i class="fas fa-suitcase"></i>Type:</span>
                            <p>{{$view->type}}</p>
                        </div>
                        <div class="p-detail-list">
                            <span><i class="fas fa-globe-americas"></i>Website:</span>
                            @if($view->url != '')
                            <p><a href="{{$view->url}}" target="_blank">{{$view->url}}</a></p>
                            @else
                            <p>{{ 'Not Found'}}</p>
                            @endif
                        </div>
                        <div class="p-detail-list">
                            <span><i class="fal fa-desktop-alt"></i>Technology:</span>
                            <p>{{implode(', ', [$view->technology])}}</p>
                        </div>
                    </div>
                </div> -->

            </div>
            @endforeach

            <!-- <div class="row service-list-wrapper portfolio-list-wrapper">
        <div class="col-lg-4 col-md-6">  
          <div class="list design">
            <h4>Design</h4>
            <div class="list-desc">
              <i class="fas fa-check-circle"></i>
              <p>Lorem Ipsum is simply dummy text of the printing and.</p>
            </div>
  
            <div class="list-desc">
              <i class="fas fa-check-circle"></i>
              <p>Lorem Ipsum is simply dummy text of the printing and.</p>
            </div>
  
            <div class="list-desc">
             <i class="fas fa-check-circle"></i>
              <p>Lorem Ipsum is simply dummy text of the printing and.</p>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6">
          <div class="list development">
            <h4>Development</h4>
            <div class="list-desc">
             <i class="fas fa-check-circle"></i>
              <p>Lorem Ipsum is simply dummy text of the printing and.</p>
            </div>
  
            <div class="list-desc">
              <i class="fas fa-check-circle"></i>
             <p>Lorem Ipsum is simply dummy text of the printing and.</p>
            </div>
  
            <div class="list-desc">
              <i class="fas fa-check-circle"></i>
             <p>Lorem Ipsum is simply dummy text of the printing and.</p>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6">
          <div class="list">
            <h4>Product Marketing</h4>
            <div class="list-desc">
             <i class="fas fa-check-circle"></i>
              <p>Lorem Ipsum is simply dummy text of the printing and.</p>
            </div>
  
            <div class="list-desc">
              <i class="fas fa-check-circle"></i>
              <p>Lorem Ipsum is simply dummy text of the printing and.</p>
            </div>
  
            <div class="list-desc">
              <i class="fas fa-check-circle"></i>
              <p>Lorem Ipsum is simply dummy text of the printing and.</p>
            </div>
          </div>
  
        </div>
  
        <div class="col-lg-12 mt-2">
          <div class="strategy">
            <h3>The Workflow</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
      </div> -->

            <!-- <div class="row mt-52">
        <div class="col-lg-6">
            <div class="p-detail-img-grid">
                <img src="images/banner-2.jpg" alt="men">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="p-detail-img-grid">
                <img src="images/banner-2.jpg" alt="men">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="p-detail-img-grid">
                <img src="images/banner-2.jpg" alt="men">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="p-detail-img-grid">
                <img src="images/banner-2.jpg" alt="men">
            </div>
        </div>
      </div> -->


        </div>
    </section>
    <section class="portfoliodtls-otherprojects">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12 col-md-12"> -->

                <div class="client_logo_sec_head">
                    <span class="logo_span">Related Projects</span>
                </div>


                <div class="otherprojects owl-carousel" id="otherprojects_slide">
                    @if($related_projects)
                    @foreach($related_projects as $projects)
                    <!-- <div class="col-lg-4 col-md-4 list-item"> -->
                    <div class="sc-project-item sc-mb-15">
                        <img src="{{url('Portfolio_images/'.$projects->image)}}" alt="" title="">
                        <div class="sc-project-content-box">
                            <div class="sc-project-icon">
                                <a class="thumbnail" href="{{url('portfolio-view/'.$projects->id)}}" data-image-id="" data-image="{{url('Portfolio_images/'.$projects->image)}}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <div class="sc-project-text">
                                <span class="sub-title">{{$projects->heading}}</span>
                                <h4><a class="title" href="#">{{$projects->heading}}</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    @endforeach
                    @endif
                </div>
                <!-- </div> -->
            </div>
        </div>
    </section>

    <div class="fixed-project">
        @if($max)
        <span class="previous-prj"><a href="<?php echo $max->id; ?>" class="">Previous</a></span>
        @endif
        @if($min)
        <span class="next-prj"><a href="<?php echo $min->id; ?>" class="">Next</a></span>
        @endif
    </div>




    <div class="sidebar-contact">
        <div class="toggle"></div>
        <div class="scroll">
            <div class="p-details-meta">
                <div class="p-detail-list">
                    <span><i class="fas fa-user-tie"></i></span>
                    <p>{{$view->heading}}</p>
                </div>

                <div class="p-detail-list">
                    <span><i class="fas fa-suitcase"></i></span>
                    <p>{{$view->type}}</p>
                </div>

                <div class="p-detail-list">
                    <span><i class="fas fa-globe-americas"></i></span>
                    @if($view->url != '')
                    <p><a href="{{$view->url}}" target="_blank">{{$view->url}}</a></p>
                    @else
                    <p>{{ 'Not Found'}}</p>
                    @endif
                </div>

                <div class="p-detail-list">
                    <span><i class="fal fa-desktop-alt"></i></span>
                    <p>{{implode(', ', [$view->technology])}}</p>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('.toggle').click(function() {
                $('.sidebar-contact').toggleClass('active')
                $('.toggle').toggleClass('active')
            })
        })
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
        jQuery("#testimonial_slide").owlCarousel({
            stagePadding: 80,
            lazyLoad: true,
            loop: true,
            margin: 10,
            responsiveClass: true,
            // animateOut: 'fadeOut',
            // animateIn: 'fadeIn',
            autoplay: true,
            autoplayTimeout: 1000,
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
        jQuery("#otherprojects_slide").owlCarousel({
            lazyLoad: true,
            loop: true,
            margin: 30,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: false,
            autoHeight: true,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 1000,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 0
                },

                600: {
                    items: 2
                },

                1024: {
                    items: 3
                },

                1366: {
                    items: 3
                }
            }
        });
    </script>


    @endsection