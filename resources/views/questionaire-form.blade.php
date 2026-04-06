@extends('layouts.include')

@section('include-section')

<style>
    #g-recaptcha-response {
    display: block !important;
    position: absolute;
    margin: -78px 0 0 0 !important;
    width: 302px !important;
    height: 76px !important;
    z-index: -999999;
    opacity: 0;
   }
</style>
<body class="inner_pages">

<section class="banner_sec">
    <div id="" class="">
        <div class="banner_sec_img">
            <img src="images/contact-banner1.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>Get A Questionnaire</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bread-head">        
    <div class="bread-inner">
        <div class="container">
            <div class="row">
                <div class="bread-sec">
                    <ul class="bed-crown">
                        <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                        <li><a>Get A Questionnaire</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
</section>

<div class="cont_maas_welcome_sec">
<div class="cont_maas_welcome_sec_overlay"></div>
<section class="contact_sec">

    <div class="container">
    @if (session('success')) <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>  @endif
        <div class="row">
            <div class="col-lg-10 col-md-10 mx-auto">
                <div class="contact_sec_main">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="contact_sec_right">
                                <h3>Website Design Questionnaire</h3>
                                <p>FILL OUT THE BELOW FORM OR IF YOU DON’T LIKE FORMS EMAIL: <a href="mailto:info@maastrixsolutions.com"> info@maastrixsolutions.com</a> </p>
                                <form action="{{ url('questionaire-form-all') }}" id="maasContactForm" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="selecttype">Type</label>
                                                <select class="form_input dropdown" id="selecttype" name="type" required>
                                                    <option value="" disabled selected>Select Type</option>
                                                    <option value="website design">Website Design</option>
                                                    <option value="mobile apps">Mobile Apps</option>
                                                    <option value="CRM">CRM</option>
                                                    <option value="e-commerce">E-Commerce</option>
                                                    <option value="revamp website">Revamp Website</option>
                                                    <option value="improve website performance">Improve Website Performance</option>
                                                    <option value="desktop software">Desktop Software</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3">
                                            <div class="contact_sec_right_single">
                                                <button type="submit">Submit<i class="fas fa-arrow-right submit_data"></i></button>   
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<a href="#" class="back-to-top" style="display: none;"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

<script type="text/javascript">
    $("#cssmenu").menumaker({
        title: "",
        format: "multitoggle"
    });
</script>


<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
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
        margin:0,
        responsiveClass: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplay:true,
        autoplayTimeout:3500,
        autoplayHoverPause:false,
        autoHeight: true,
        mouseDrag: true,
        touchDrag: true,
        smartSpeed: 1000,
        nav: true,
        dots:false,
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
        margin:10,
        responsiveClass: true,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        autoplay:true,
        // autoplayTimeout:1000,
        autoplayHoverPause:false,
        autoHeight: true,
        mouseDrag: true,
        touchDrag: true,
        smartSpeed: 1000,
        nav: false,
        dots:false,
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
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
</script> 


<script>
    $(document).ready(function() {
    var owl = $('#owl-carousel1');
    owl.owlCarousel({
    margin:20,
    nav: false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
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
     window.onload = function() {
      var $recaptcha = document.querySelector('#g-recaptcha-response');
        if($recaptcha) {
            $recaptcha.setAttribute("required", "required");
        }
     };
   </script>




@endsection