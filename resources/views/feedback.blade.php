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
    .captcha-allign{
        margin-bottom: 33px;
        margin-top: 31px;
    }
</style>
<div class="fullScreen">
    <div class="inputBox">
        <input type="text" 
               placeholder="Search here...">
        <button type="submit">
          <i class="fas fa-arrow-right"></i>
        </button>
    </div>
    <div class="closeBtn">
      <i class="fas fa-times"></i>
    </div>
</div>

<section class="banner_sec">
    @foreach($banner as $banner)
       <div class="banner_sec_img">
         <img src="{{ url('homebanners/'.$banner->banner_name) }}">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>{!!$banner->banner_heading!!}</h1>
                    <h6>{{$banner->banner_subheading}}</h6>
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
                        <li><a>Feedback</a></li>
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
                                <h3>Post your feedback here</h3>
                                <form action="{{ url('contact-form/contactFormSend') }}" id="maasContactForm" method="POST">
                                    @csrf
                         
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact_sec_right_single">
                                                <label>Name</label>
                                                <input type="text" name="Username" placeholder="Name*" class="form_input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact_sec_right_single">
                                                <label>Email</label>
                                                <input type="text" name="email" placeholder="Email*" class="form_input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact_sec_right_single">
                                                <label>Phone No.</label>
                                                <input type="text" name="PhoneNum" placeholder="Phone No*" class="form_input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact_sec_right_single">
                                                <label>Fax No.</label>
                                                <input type="text" name="CName" placeholder="Fax No" class="form_input">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact_sec_right_single">
                                                <label>Address</label>
                                               <textarea name="msgs" id="message" class="form_input" placeholder="Your Address.." cols="30" rows="5" required="" data-error="Please enter your message"></textarea>     
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact_sec_right_single">
                                                <label>Your FeedBack</label>
                                               <textarea name="feedback" id="message" class="form_input" placeholder="Your Feedback.." cols="30" rows="5" required="" data-error="Please enter your message"></textarea>     
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 captcha-allign">
                                           <div class="g-recaptcha" data-sitekey="6LchUD4iAAAAANQFkOOMenAXbq9iSqysajf0LAa-"></div><br>
                                        </div>
                                        <hr class="spacer30px">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact_sec_right_single">
                                              <button type="submit">Send<i class="fas fa-arrow-right"></i></button>   
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
<script type="text/javascript">
    const btn =
document.querySelector(".myBtn")
const searchBox =
document.querySelector(".fullScreen")
const closeBtn = 
document.querySelector(".closeBtn")
  
  
closeBtn.addEventListener("click", ()=>{
    searchBox.style.display = "none"
})
  
btn.addEventListener('click', ()=>{
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
    $( ".gee_cross" ).hide();
        $( ".gee_menu" ).hide();
            $( ".gee_hamburger" ).click(function() {
                $( ".gee_menu" ).slideToggle( "slow", function() {
                    $( ".gee_hamburger" ).hide();
                        $( ".gee_cross" ).show();
                        });
                        });
                        
                        $( ".gee_cross" ).click(function() {
                    $( ".gee_menu" ).slideToggle( "slow", function() {
                $( ".gee_cross" ).hide();
            $( ".gee_hamburger" ).show();
        });
    });
</script> -->

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
    jQuery("#logo_banner").owlCarousel({
        lazyLoad: true,
        loop: true,
        margin:0,
        responsiveClass: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplay:true,
        autoplayTimeout:1500,
        autoplayHoverPause:true,
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
                items: 3,
                margin:0,
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
        margin:10,
        responsiveClass: true,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        autoplay:true,
        autoplayTimeout:1000,
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
    function resize() {
        if ($(window).width() < 767) {
            $('.project_completed_main1').addClass('sm-meet-team-slider owl-carousel');
            $('.sm-meet-team-slider').owlCarousel({
                loop:true,
                margin:0,
                autoplay:false,
                autoplayTimeout:3000,
                smartSpeed:2000,
                responsiveClass:true,
                autoHeight:true,
                responsive:{

                    0:{

                        items:1,
                        nav:false,
                        dots:false
                    },
                    600:{

                        items:1,
                        nav:false,
                        dots:false
                    },
                    1000:{

                        items:1 ,
                        nav:false,
                        loop:false,
                        dots:false
                    }
                }
            })
        }
        else {$('.project_completed_main1').removeClass('sm-meet-team-slider owl-carousel');}
    }

    $(document).ready( function() {
        $(window).resize(resize);
        resize();
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