@extends('layouts.include')

    @section('include-section')
    <body class="inner_pages">
<section class="banner_sec">
    <div id="" class="">
        @foreach($banner as $banner)
           <div class="banner_sec_img">
             <img src="{{ url('homebanners/'.$banner->banner_name) }}">
                <div class="banner_sec_img_cont">
                    <div class="banner_sec_img_cont_inner">
                        <h1>{!!$banner->banner_heading!!}</h1>
                       <!--  <h6>{{$banner->banner_subheading}}</h6> -->
                    </div>
                </div>
            </div>
        @endforeach
        <!-- <div class="banner_sec_img">
            <img src="images/clients-banner.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>Clients</h1>
                </div>
            </div>
        </div> -->
    </div>
</section>
<section class="bread-head">        
    <div class="bread-inner">
        <div class="container">
            <div class="row">
                <div class="bread-sec">
                    <ul class="bed-crown">
                        <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                        <li><a>Clients</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
</section>


<section class="clients_sec_new">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="clients_sec_new_head">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="clients_sec_new_head_left">
                                <h4>We have Large Number of Expert Premium Clients</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="clients_sec_new_head_right">
                                <p>Our goal is to help our Clients maintain or achieve best- in-class positions in their respective industries and our team works.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clients_sec_new_cont">
                    <div class="row">
                    @foreach($all_client as $clint)
                        <div class="col-lg-3 col-md-6">
                            <div class="clients_sec_new_cont_single">
                                <div class="clients_sec_new_cont_single_img">
                                    <a href="#"><img src="{{url('Client_images/'.$clint->client_image)}}" alt="" title=""></a>
                                </div>
                                <div class="lower-box">
                                    <div class="content">
                                        <h4><a href="{{url('client-view/'.$clint->id)}}">{{$clint->client_name}}</a></h4>
                                        <h5><i class="fas fa-map-marked-alt"></i>{{$clint->loaction}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
@endsection