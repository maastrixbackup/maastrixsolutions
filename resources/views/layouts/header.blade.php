<!--------------------------------------------------------------------- HEADER ------------------------------------------------------------------------->
<header class="head_sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="head_sec_main">
                    <div class="row">

                        <div class="col-lg-2 col-md-2">
                            <a href="/">
                                <div class="maas_logo">
                                    <img src="{{ url('images/logo.png') }}" alt="" title=""
                                        class="logo_img">
                                    <img src="{{ url('images/logo-blue.png') }}" alt="" title=""
                                        class="blue_logo">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="row">
                                <div class="col-xl-12 col-md-12">

                                    <div class="social-box">
                                        <div class="iso-head">
                                            <img src= "{{ asset('images/iso-head.png') }}" alt="">
                                        </div>
                                        <div class="mail-box">
                                            @foreach ($contact_details as $contact)
                                                <a href="mailto:info@maastrixsolutions.com">
                                                    <i class="far fa-envelope"></i>
                                                    {{ $contact->email }}
                                                </a>
                                            @endforeach
                                        </div>
                                        <div class="social-icon-item">
                                            <ul>
                                                @foreach ($social_media as $social)
                                                    <li><a href="{{ $social->facebook }}"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="{{ $social->twitter }}"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="{{ $social->linkedin }}"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="maas_menu" id="cssmenu">
                                        <ul>
                                            <li>
                                                <a href="/"
                                                    class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('about-us') }}"
                                                    class="{{ request()->is('about-us') ? 'active' : '' }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('services') }}"
                                                    class="{{ request()->is('services') ? 'active' : '' }}">Services</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('portfolio') }}"
                                                    class="{{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('clients') }}"
                                                    class="{{ request()->is('clients') ? 'active' : '' }}">clients</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('design-demo') }}"
                                                    class="{{ request()->is('design-demo') ? 'active' : '' }}">Design
                                                    Demo</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('careers') }}"
                                                    class="{{ request()->is('careers') ? 'active' : '' }}">Careers</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('contact-us') }}"
                                                    class="{{ request()->is('contact-us') ? 'active' : '' }}">Contact</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ url('contact-form') }}" class="get_btn">Get A Quote</a>
                                            </li>

                                            <!--<li class="">
                                                <a href="{{ url('questionaire-form') }}" class="get_btn">Get A Questionnaire</a>
                                            </li>-->
                                            <!-- <li class="search_btn_list">
                                                <a href="javascript:void(0);" class="myBtn search_btn"><i class="fas fa-search"></i></a>
                                            </li> -->
                                            <li class="call_anytime_sec">
                                                @foreach ($contact_details as $contact)
                                                    <a href="#" class="call_anytime">
                                                        <i class="far fa-comment-dots"></i>
                                                        <span>
                                                            <p>CALL ANYTIME</p>{{ $contact->phone }}
                                                        </span>
                                                    </a>
                                                @endforeach
                                            </li>

                                    </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>

<!------------------------------------------------------------------------------- HEADER --------------------------------------------------------------->

<!-- Script -->


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
