@extends('layouts.include')
@section('include-section')
<style>
    .img-cls {
        margin-left: 340px;
    }
</style>

<body class="inner_pages">
    <section class="banner_sec">
        @foreach($banner as $banner)
        <div class="banner_sec_img">
            <img src="{{ url('homebanners/'.$banner->banner_name) }}">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>{!!$banner->banner_heading!!}</h1>
                    <p>{{$banner->banner_subheading}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    </section>
    <section class="bread-head">
        <div class="bread-inner">
            <div class="container">
                <div class="row">
                    <div class="bread-sec">
                        @foreach($all_services as $servis)
                        <ul class="bed-crown">
                            <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                            <li><a>Services</a></li>
                            <li><a href="">{{$servis->heading}}</a></li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our_services_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service_detail_page">
                        @foreach($all_services as $service)
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <h2><span>{{$service->heading}}</span></h2>
                            </div>
                        </div>
                        <div class="row">




                            <div class="col-lg-6 col-md-12 ">
                                <div class="service_detail_page_left">
                                    <img class="img-cls2" src="{{url('ServiceImages/'.$service->image)}}" alt="" title="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                            <div class="service_detail_page_right"><p>{!!$service->content!!}</p>
                            </div>
                            </div>



                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
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
@endsection