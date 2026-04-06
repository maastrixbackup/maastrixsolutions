
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
                    <p>{{$banner->banner_subheading}}</p>
                </div>
            </div>
        </div>
    @endforeach
    <!-- <div id="" class="">
        <div class="banner_sec_img">
            <img src="images/services-banner.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>Services</h1>
                    <p>Maastrix, being a web technology company expertise on database driven web applications, Wordpress, Ecommerce, Oscommerce, Joomla, Xcart and Zen Cart. We specialize in E2E web portal development such as shopping cart, travel portal, real estate using ASP.NET.</p>
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
                        <li><a>Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
</section>

<section class="our_services_sec">
    <div class="container">
        @foreach($service_about as $as)
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="our_services_sec_main">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="our_services_sec_left">
                                <div class="our_services_sec_left_head">
                                    <h2>{!!$as->about_heading!!}</h2>
                                    <!-- <h2>Our IT Professionals<br><span>Over 10 Years Experience</span></h2> -->
                                    <p>{{$as->about_content}}</p>
                                    <!-- <p>Our years of experience makes us capable enough to handle various aspects related to your business, enabling you to reach out to the global audience. A greatly designed website is certainly the most important requisite for a business owner, who enters into the online business world and wants to offer 100% satisfaction to his customers. We create and implement end-to-end e-commerce solutions that are integrated with your business website impeccably.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="our_services_sec_right">
                                <img src="{{url('service_about/'.$as->about_image)}}">
                                <!-- <img src="images/hero.png" alt="" title=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="services_business">
    <div class="icon-layer" style="background-image: url(images/icon-2.png)"></div>
    <div class="icon-layer-two" style="background-image: url(images/icon-2.png)"></div>
    <div class="icon-layer-three" style="background-image: url(images/icon-3.png)"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="services_business_new">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11 col-md-12 mx-auto">
                                <div class="color-layer"></div>
                                <div class="color-layer-two"></div>
                                <div class="services_business_new_head">
                                    <h2>Here are some of <br> solutions suiting your business needs.</h2>
                                    <div class="text">Choose your coach training based on the program offerings, your instinct, <br> We are different from a traditional IT staffing agency</div>
                                </div>
                                <div class="services_business_conts">
                                    <div class="row">
                                        @foreach($all_services as $service)
                                        <div class="col-lg-6 col-md-12">
                                            <div class="services_business_conts_single inner-box">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="services_business_conts_single_left">
                                                            <img src="{{url('ServiceImages/'.$service->image)}}" alt="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <div class="services_business_conts_single_rgt">
                                                            <div class="code"></div>
                                                            <h3>{{$service->heading}}</h3>
                                                            <p><?php 
                                                            $str = $service->content;
                                                             $final = substr($str,0,105);echo $final.".."; ?></p>
                                                            <a class="explore" href="{{url('Services_view/'.$service->id)}}">Explore More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
 <!--                                        <div class="col-lg-6 col-md-12">
                                            <div class="services_business_conts_single inner-box">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="services_business_conts_single_left">
                                                            <img src="images/business-8.png" alt="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <div class="services_business_conts_single_rgt">
                                                            <div class="code"></div>
                                                            <h3>E-Commerce Solutions</h3>
                                                            <p>Ecommerce websites are a recent trend which is most sought after by most of the owners of shops ...</p>
                                                            <a class="explore" href="case-detail.html">Explore More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="services_business_conts_single inner-box">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="services_business_conts_single_left">
                                                            <img src="images/business-9.png" alt="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <div class="services_business_conts_single_rgt">
                                                            <div class="code"></div>
                                                            <h3>Web Application</h3>
                                                            <p>Maastrix’s Web Applications Development service allows you to build customized applications...</p>
                                                            <a class="explore" href="case-detail.html">Explore More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="services_business_conts_single inner-box">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="services_business_conts_single_left">
                                                            <img src="images/business-10.png" alt="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <div class="services_business_conts_single_rgt">
                                                            <div class="code"></div>
                                                            <h3>SEO</h3>
                                                            <p>SEO services or the Search Engine optimization services are the most sought after services which...</p>
                                                            <a class="explore" href="case-detail">Explore More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="services_business_conts_single inner-box">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="services_business_conts_single_left">
                                                            <img src="images/business-11.png" alt="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <div class="services_business_conts_single_rgt">
                                                            <div class="code"></div>
                                                            <h3>Mobile Application</h3>
                                                            <p>Maastrix Mobile Application Development center is aimed at designing apps for various...</p>
                                                            <a class="explore" href="case-detail.html">Explore More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="services_business_conts_single inner-box">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="services_business_conts_single_left">
                                                            <img src="images/business-12.png" alt="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <div class="services_business_conts_single_rgt">
                                                            <div class="code"></div>
                                                            <h3>IT Outsourcing</h3>
                                                            <p>IT outsourcing is the recent buzz in the IT sector and it has brought down the cost of web designing business to a drastic level.</p>
                                                            <a class="explore" href="case-detail.html">Explore More</a>
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
                </div>
            </div>
        </div>
    </div>
</section>

<section class="client_point">
    <div class="pattern-layer-one" style="background-image: url(images/pattern-11.jpg)"></div>
    <div class="pattern-layer-two" style="background-image: url(images/pattern-12.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="client_point_main">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="client_point_single">
                                <div class="number-box">01</div>
                                <h4>Secure & Reliable</h4>
                                <p class="">Maastrix delivers comprehensive Web services ranging from custom website design to development of complex enterprise Web applications. We carefully study each customer case to understand the client’s needs and objectives.</p>
                               <!--  <a href="#" class="rd_more">Read More<i class="fas fa-long-arrow-alt-right"></i></a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="client_point_single">
                                <div class="number-box">02</div>
                                <h4>Super Fast</h4>
                                <p class="">As a web development company, there are lots of important things you need to do when building a website. We need to ensure that the site looks great, loads fast, is responsive, and looks clean on all devices.</p>
                                <!-- <a href="#" class="rd_more">Read More<i class="fas fa-long-arrow-alt-right"></i></a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="client_point_single">
                                <div class="number-box">03</div>
                                <h4>Quality Control</h4>
                                <p class="">Website Quality Control (QC) is about making sure your site is working as expected. With regular quality control inspection in place, it's inevitable that broken or wearing parts of your website will be uncovered.</p>
                                <!-- <a href="#" class="rd_more">Read More<i class="fas fa-long-arrow-alt-right"></i></a> -->
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
@endsection