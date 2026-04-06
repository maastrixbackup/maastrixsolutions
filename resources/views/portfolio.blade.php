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
    <section class="portfolio_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="portfolio_sec_main portfolio-contents">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Word Press</a>
                                <a class="nav-item nav-link" id="nav-phal-tab" data-toggle="tab" href="#nav-phal" role="tab" aria-controls="nav-phal" aria-selected="false">Phalcon</a>
                                <a class="nav-item nav-link" id="nav-laravel-tab" data-toggle="tab" href="#nav-laravel" role="tab" aria-controls="nav-laravel" aria-selected="false">Laravel</a>
                                <a class="nav-item nav-link" id="nav-yii-tab" data-toggle="tab" href="#nav-yii" role="tab" aria-controls="nav-yii" aria-selected="false">Yii</a>
                                <a class="nav-item nav-link" id="nav-react-tab" data-toggle="tab" href="#nav-react" role="tab" aria-controls="nav-react" aria-selected="false">React</a>
                                <a class="nav-item nav-link" id="nav-flyer-tab" data-toggle="tab" href="#nav-flyer" role="tab" aria-controls="nav-flyer" aria-selected="false">Flyer</a>
                                <a class="nav-item nav-link" id="nav-logo-tab" data-toggle="tab" href="#nav-logo" role="tab" aria-controls="nav-logo" aria-selected="false">Logo</a>
                                <a class="nav-item nav-link" id="nav-mobile-tab" data-toggle="tab" href="#nav-mobile" role="tab" aria-controls="nav-mobile" aria-selected="false">Mobile App</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="tab_cont_main">
                                    <div class="row">
                                        @foreach($portfolio as $portfolio_all)
                                        <div class="col-lg-4 col-md-4 list-item">
                                            <div class="sc-project-item sc-mb-15">
                                                <img src="{{url('Portfolio_images/'.$portfolio_all->image)}}" alt="" title="">
                                                <div class="sc-project-content-box">
                                                    <div class="sc-project-icon">
                                                        <a class="thumbnail" href="{{url('portfolio-view/'.$portfolio_all->id)}}" data-image-id="" data-image="{{url('images/portfolio/Interior-Decoration.jpg')}}"><i class="fal fa-long-arrow-right"></i></a>
                                                    </div>
                                                    <div class="sc-project-text">
                                                        <span class="sub-title">{{$portfolio_all->heading}}</span>
                                                        <h4><a class="title" href="{{url('portfolio-view/'.$portfolio_all->id)}}">{{$portfolio_all->heading}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="tab_cont_main">
                                    <div class="row">
                                        @foreach($port_wordpress as $wordpress)
                                        <div class="col-lg-4 col-md-4 list-item">
                                            <div class="sc-project-item sc-mb-15">
                                                <img src="{{url('Portfolio_images/'.$wordpress->image)}}" alt="" title="">
                                                <div class="sc-project-content-box">
                                                    <div class="sc-project-icon">
                                                        <a class="thumbnail" href="{{url('portfolio-view/'.$wordpress->id)}}" data-image-id="" data-image="{{url('Portfolio_images/'.$wordpress->image)}}"><i class="fal fa-long-arrow-right"></i></a>
                                                    </div>
                                                    <div class="sc-project-text">
                                                        <span class="sub-title">{{$wordpress->heading}}</span>
                                                        <h4><a class="title" href="#">{{$wordpress->heading}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-flyer" role="tabpanel" aria-labelledby="nav-flyer-tab">
                                <div class="tab_cont_main">
                                    <div class="row">
                                        @foreach($port_flyer as $flyer)
                                        <div class="col-lg-4 col-md-4 thumb">
                                            <div class="sc-project-item sc-mb-15">
                                                <img src="{{url('Portfolio_images/small_flyer/'.$flyer->image)}}" alt="" title="">
                                                <div class="sc-project-content-box">
                                                    <div class="sc-project-icon">
                                                        <a class="thumbnail" href="#" data-image-id="1" data-toggle="modal" data-title="" data-image="{{url('Portfolio_images/large_flyer/'.$flyer->large_image)}}" data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                                    </div>
                                                    <div class="sc-project-text">
                                                        <span class="sub-title">{{$flyer->heading}}</span>
                                                        <h4><a class="title" href="#">{{$flyer->heading}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="image-gallery-title"></h4>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                            </button>

                                            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-logo" role="tabpanel" aria-labelledby="nav-logo-tab">
                                <div class="tab_cont_main">
                                    <div class="row">
                                        @foreach($port_logo as $logo)
                                        <div class="col-lg-4 col-md-4 thumb">
                                            <div class="sc-project-item sc-mb-15">
                                                <img src="{{url('Portfolio_images/logo/'.$logo->image)}}" alt="" title="">
                                                <div class="sc-project-content-box">
                                                    <div class="sc-project-icon">
                                                        <a class="thumbnail" href="#" data-image-id="1" data-toggle="modal" data-title="" data-image="{{url('Portfolio_images/logo/'.$logo->large_image)}}" data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                                    </div>
                                                    <div class="sc-project-text">
                                                        <span class="sub-title">{{$logo->type}}</span>
                                                        <h4><a class="title" href="#">{{$logo->heading}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="modal fade" id="logo-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="logo-gallery-title"></h4>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="logo-gallery-image" class="img-responsive col-md-12" src="">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                            </button>

                                            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="tab-pane fade" id="nav-phal" role="tabpanel" aria-labelledby="nav-phal-tab">
                                <div class="tab_cont_main">
                                    <div class="row">
                                        @foreach($port_phalcon as $phalcon)
                                        <div class="col-lg-4 col-md-4 list-item">
                                            <div class="sc-project-item sc-mb-15">
                                                <img src="{{url('Portfolio_images/'.$phalcon->image)}}" alt="" title="">
                                                <div class="sc-project-content-box">
                                                    <div class="sc-project-icon">
                                                        <a class="thumbnail" href="{{url('portfolio-view/'.$phalcon->id)}}" data-image-id="" data-image="{{url('Portfolio_images/'.$phalcon->image)}}"><i class="fal fa-long-arrow-right"></i></a>
                                                    </div>
                                                    <div class="sc-project-text">
                                                        <span class="sub-title">{{$phalcon->heading}}</span>
                                                        <h4><a class="title" href="#">{{$phalcon->heading}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-laravel" role="tabpanel" aria-labelledby="nav-laravel-tab">
                                <div class="tab_cont_main">
                                    <div class="row">
                                        @foreach($port_laravel as $laravel)
                                        <div class="col-lg-4 col-md-4 list-item">
                                            <div class="sc-project-item sc-mb-15">
                                                <img src="{{url('Portfolio_images/'.$laravel->image)}}" alt="" title="">
                                                <div class="sc-project-content-box">
                                                    <div class="sc-project-icon">
                                                        <a class="thumbnail" href="{{url('portfolio-view/'.$laravel->id)}}" data-image-id="" data-image="{{url('Portfolio_images/'.$laravel->image)}}"><i class="fal fa-long-arrow-right"></i></a>
                                                    </div>
                                                    <div class="sc-project-text">
                                                        <span class="sub-title">{{$laravel->heading}}</span>
                                                        <h4><a class="title" href="#">{{$laravel->heading}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-yii" role="tabpanel" aria-labelledby="nav-yii-tab">
                                <div class="tab_cont_main">
                                    <div class="row">
                                        @foreach($port_yii as $yii)
                                        <div class="col-lg-4 col-md-4 list-item">
                                            <div class="sc-project-item sc-mb-15">
                                                <img src="{{url('Portfolio_images/'.$yii->image)}}" alt="" title="">
                                                <div class="sc-project-content-box">
                                                    <div class="sc-project-icon">
                                                        <a class="thumbnail" href="{{url('portfolio-view/'.$yii->id)}}" data-image-id="" data-image="{{url('Portfolio_images/'.$yii->image)}}"><i class="fal fa-long-arrow-right"></i></a>
                                                    </div>
                                                    <div class="sc-project-text">
                                                        <span class="sub-title">{{$yii->heading}}</span>
                                                        <h4><a class="title" href="#">{{$yii->heading}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-react" role="tabpanel" aria-labelledby="nav-react-tab">
                                <div class="tab_cont_main">
                                    <div class="row">
                                        @foreach($port_react as $react)
                                        <div class="col-lg-4 col-md-4 list-item">
                                            <div class="sc-project-item sc-mb-15">
                                                <img src="{{url('Portfolio_images/'.$react->image)}}" alt="" title="">
                                                <div class="sc-project-content-box">
                                                    <div class="sc-project-icon">
                                                        <a class="thumbnail" href="{{url('portfolio-view/'.$react->id)}}" data-image-id="" data-image="{{url('Portfolio_images/'.$react->image)}}"><i class="fal fa-long-arrow-right"></i></a>
                                                    </div>
                                                    <div class="sc-project-text">
                                                        <span class="sub-title">{{$react->heading}}</span>
                                                        <h4><a class="title" href="#">{{$react->heading}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-mobile" role="tabpanel" aria-labelledby="nav-mobile-tab">
                                <div class="tab_cont_main">
                                    <div class="row">
                                        @foreach($port_mobile as $mobile)
                                        <div class="col-lg-4 col-md-4 thumb">
                                            <div class="sc-project-item sc-mb-15">
                                                <img src="{{url('Portfolio_images/mobileapp/'.$mobile->image)}}" alt="" title="">
                                                <div class="sc-project-content-box">
                                                    <div class="sc-project-icon">
                                                        <a class="thumbnail" href="#" data-image-id="1" data-toggle="modal" data-title="" data-image="{{url('Portfolio_images/mobileapp/'.$mobile->large_image)}}" data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                                    </div>
                                                    <div class="sc-project-text">
                                                        <span class="sub-title">{{$mobile->type}}</span>
                                                        <h4><a class="title" href="#">{{$mobile->heading}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="modal fade" id="mobile-gallery{{$mobile->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="mobile-gallery-title"></h4>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="mobile-gallery-image" class="img-responsive col-md-12" src="{{url('Portfolio_images/mobileapp/'.$mobile->large_image)}}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary float-left" id="show-previous-image" style="display: none;"><i class="fa fa-arrow-left"></i>
                                            </button>

                                            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-8 col-md-8">
                                <div class="testi_right_sec owl-carousel" id="testimonial_slide">
                                    @foreach($all_testimonial as $all_testimonial)

                                    <div class="testi_right_sec_single">
                                        <!-- <img src="{{ url('testimonial_photo/'.$all_testimonial->photo) }}" alt="image"> -->
                                        <div class="testimonial-card-text">
                                            <p>“{{$all_testimonial->remark}}”</p>
                                            <div class="testimonial-intro-area">
                                                <div class="testimonial-card-intro">
                                                    <h4>{{$all_testimonial->name}}</h4>
                                                    <span>{{$all_testimonial->country}}</span>
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
            // autoplayTimeout: 10000,
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

    <!--added by khushi -->



    <!--added by khushi-->

    <script type="text/javascript">
        let modalId = $('#image-gallery');

        $(document)
        .ready(function () {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image')
                .show();
            if (counter_max === counter_current) {
                $('#show-next-image')
                .hide();
            } else if (counter_current === 1) {
                $('#show-previous-image')
                .hide();
            }
            }

            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr) {
            let current_image,
                selector,
                counter = 0;

            $('#show-next-image, #show-previous-image')
                .click(function () {
                if ($(this)
                    .attr('id') === 'show-previous-image') {
                    current_image--;
                } else {
                    current_image++;
                }

                selector = $('[data-image-id="' + current_image + '"]');
                updateGallery(selector);
                });

            function updateGallery(selector) {
                let $sel = selector;
                current_image = $sel.data('image-id');
                $('#image-gallery-title')
                .text($sel.data('title'));
                $('#image-gallery-image')
                .attr('src', $sel.data('image'));
                disableButtons(counter, $sel.data('image-id'));
            }

            if (setIDs == true) {
                $('[data-image-id]')
                .each(function () {
                    counter++;
                    $(this)
                    .attr('data-image-id', counter);
                });
            }
            $(setClickAttr)
                .on('click', function () {
                updateGallery($(this));
                });
            }
        });

        // build key actions
        $(document)
        .keydown(function (e) {
            switch (e.which) {
            case 37: // left
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                $('#show-previous-image')
                    .click();
                }
                break;

            case 39: // right
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                $('#show-next-image')
                    .click();
                }
                break;

            default:
                return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });
    </script>


    <!-- <script type="text/javascript">
        let modalId2 = $('#logo-gallery');

        $(document)
        .ready(function () {

            loadGallery(true, 'a.thumbnail');

            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image')
                .show();
            if (counter_max === counter_current) {
                $('#show-next-image')
                .hide();
            } else if (counter_current === 1) {
                $('#show-previous-image')
                .hide();
            }
            }

            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr) {
            let current_image,
                selector,
                counter = 0;

            $('#show-next-image, #show-previous-image')
                .click(function () {
                if ($(this)
                    .attr('id') === 'show-previous-image') {
                    current_image--;
                } else {
                    current_image++;
                }

                selector = $('[data-image-id="' + current_image + '"]');
                updateGallery(selector);
                });

            function updateGallery(selector) {
                let $sel = selector;
                current_image = $sel.data('image-id');
                $('#logo-gallery-title')
                .text($sel.data('title'));
                $('#logo-gallery-image')
                .attr('src', $sel.data('image'));
                disableButtons(counter, $sel.data('image-id'));
            }

            if (setIDs == true) {
                $('[data-image-id]')
                .each(function () {
                    counter++;
                    $(this)
                    .attr('data-image-id', counter);
                });
            }
            $(setClickAttr)
                .on('click', function () {
                updateGallery($(this));
                });
            }
        });

        // build key actions
        $(document)
        .keydown(function (e) {
            switch (e.which) {
            case 37: // left
                if ((modalId2.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                $('#show-previous-image')
                    .click();
                }
                break;

            case 39: // right
                if ((modalId2.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                $('#show-next-image')
                    .click();
                }
                break;

            default:
                return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });
    </script> -->

    <!-- <script type="text/javascript">
        let modalId2 = $('#logo-gallery');

        $(document)
            .ready(function() {

                loadGallery(true, 'a.thumbnail');

                //This function disables buttons when needed
                function disableButtons(counter_max, counter_current) {
                    $('#show-previous-image, #show-next-image')
                        .show();
                    if (counter_max === counter_current) {
                        $('#show-next-image')
                            .hide();
                    } else if (counter_current === 1) {
                        $('#show-previous-image')
                            .hide();
                    }
                }

                /**
                 *
                 * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
                 * @param setClickAttr  Sets the attribute for the click handler.
                 */

                function loadGallery(setIDs, setClickAttr) {
                    let current_image,
                        selector,
                        counter = 0;

                    $('#show-next-image, #show-previous-image')
                        .click(function() {
                            if ($(this)
                                .attr('id') === 'show-previous-image') {
                                current_image--;
                            } else {
                                current_image++;
                            }

                            selector = $('[data-image-id="' + current_image + '"]');
                            updateGallery(selector);
                        });

                    function updateGallery(selector) {
                        let $sel = selector;
                        current_image = $sel.data('image-id');
                        $('#logo-gallery-title')
                            .text($sel.data('title'));
                        $('#logo-gallery-image')
                            .attr('src', $sel.data('large_image'));
                        disableButtons(counter, $sel.data('image-id'));
                    }

                    if (setIDs == true) {
                        $('[data-image-id]')
                            .each(function() {
                                counter++;
                                $(this)
                                    .attr('data-image-id', counter);
                            });
                    }
                    $(setClickAttr)
                        .on('click', function() {
                            updateGallery($(this));
                        });
                }
            });

        // build key actions
        $(document)
            .keydown(function(e) {
                switch (e.which) {
                    case 37: // left
                        if ((modalId2.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                            $('#show-previous-image')
                                .click();
                        }
                        break;

                    case 39: // right
                        if ((modalId2.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                            $('#show-next-image')
                                .click();
                        }
                        break;

                    default:
                        return; // exit this handler for other keys
                }
                e.preventDefault(); // prevent the default action (scroll / move caret)
            });
    </script> -->
    

    <!-- <script type="text/javascript">
        let modalId3 = $('#mobile-gallery');

        $(document)
            .ready(function() {

                loadGallery(true, 'a.thumbnail');

                //This function disables buttons when needed
                function disableButtons(counter_max, counter_current) {
                    $('#show-previous-image, #show-next-image')
                        .show();
                    if (counter_max === counter_current) {
                        $('#show-next-image')
                            .hide();
                    } else if (counter_current === 1) {
                        $('#show-previous-image')
                            .hide();
                    }
                }

                /**
                 *
                 * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
                 * @param setClickAttr  Sets the attribute for the click handler.
                 */

                function loadGallery(setIDs, setClickAttr) {
                    let current_image,
                        selector,
                        counter = 0;

                    $('#show-next-image, #show-previous-image')
                        .click(function() {
                            if ($(this)
                                .attr('id') === 'show-previous-image') {
                                current_image--;
                            } else {
                                current_image++;
                            }

                            selector = $('[data-image-id="' + current_image + '"]');
                            updateGallery(selector);
                        });

                    function updateGallery(selector) {
                        let $sel = selector;
                        current_image = $sel.data('image-id');
                        $('#mobile-gallery-title')
                            .text($sel.data('title'));
                        $('#mobile-gallery-image')
                            .attr('src', $sel.data('large_image'));
                        disableButtons(counter, $sel.data('image-id'));
                    }

                    if (setIDs == true) {
                        $('[data-image-id]')
                            .each(function() {
                                counter++;
                                $(this)
                                    .attr('data-image-id', counter);
                            });
                    }
                    $(setClickAttr)
                        .on('click', function() {
                            updateGallery($(this));
                        });
                }
            });

        // build key actions
        $(document)
            .keydown(function(e) {
                switch (e.which) {
                    case 37: // left
                        if ((modalId3.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                            $('#show-previous-image')
                                .click();
                        }
                        break;

                    case 39: // right
                        if ((modalId3.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                            $('#show-next-image')
                                .click();
                        }
                        break;

                    default:
                        return; // exit this handler for other keys
                }
                e.preventDefault(); // prevent the default action (scroll / move caret)
            });
    </script> -->

    @endsection