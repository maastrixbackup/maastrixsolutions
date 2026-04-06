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
                        <!-- <h6>{{$banner->banner_subheading}}</h6> -->
                    </div>
                </div>
            </div>
        @endforeach
        <!-- <div class="banner_sec_img">
            <img src="images/careers-banner.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>Careers</h1>
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
                        <li><a>Careers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
</section>


<section class="carrers_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="carrers_sec_main">
                   <div class="row">
                       <div class="col-lg-6 col-md-12">
                           <div class="carrers_sec_left">
                               <img src="images/02.png" alt="" title="">
                           </div>
                       </div>
                       <div class="col-lg-6 col-md-12">
                           <div class="carrers_sec_left_right">
                               <h6>Careers</h6>
                               <h1>More than 17+ years we provide<br> <span>IT solutions</span></h1>
                               <p>Maastrix, as a fast growing Web Development Company seeks Professionals to explore cutting edge of Web Technology. We have a sense of certainty of a successful career that would be driven by boundless growth opportunities. We offer the maximum remunerated commission program in the industry and hands on experience. Maastrix is so much more than just a job. It's a place where you can be creative and work with other intelligent, talented, and motivated people. As an organization needs the right talent to achieve its objectives, people need the right environment to achieve their career goals. Maastrix is the right place where you have global exposure and work-life balance.</p>
                               <div>
                                    <a href="{{url('contact-form')}}" class="get_start_btn">Get A Quote</a>
                                </div>
                           </div>
                       </div>
                   </div>
               </div> 
            </div>
        </div>
    </div>
</section>

<section class="career_service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="career_service_main">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="career_service_single text-center">
                                <div class="career_service_single_icn">
                                    <i class="fal fa-laptop-code"></i>
                                </div>
                                <div class="career_service_single_text">
                                    <h3>Culture</h3>
                                    <p>As an organization strive to exemplify an atmosphere of mutual trust, fair remuneration long-term benefits and career..</p>
                                    <!-- <a href="#"> Read more <i class="far fa-long-arrow-right"></i> </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="career_service_single text-center">
                                <div class="career_service_single_icn">
                                    <i class="fal fa-laptop-code"></i>
                                </div>
                                <div class="career_service_single_text">
                                    <h3>Methodology</h3>
                                    <p>Maastrix is at the leading edge. We help technical experts to define their expertise in the field of Web-Technology. </p>
                                    <!-- <a href="#"> Read more <i class="far fa-long-arrow-right"></i> </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="career_service_single text-center">
                                <div class="career_service_single_icn">
                                    <i class="fal fa-laptop-code"></i>
                                </div>
                                <div class="career_service_single_text">
                                    <h3>Vision</h3>
                                    <p>Our vision serves as the framework for our roadmap and guides every aspect of our business in order to continue.</p>
                                    <!-- <a href="#"> Read more <i class="far fa-long-arrow-right"></i> </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="car_apply_sec">
    <div class="car_apply_sec_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="car_apply_sec_main">
                    <div class="car_apply_sec_sec">
                        <div class="car_apply_sec_sec_img_cont">
                            <img src="images/call.png" alt="" title="">
                            <h5>Are you ready for a better</h5>
                            <h3>Opportunity?</h3>
                            <a href="job-apply" class="apply_now_btn">Apply Now</a>
                        </div>
                    </div>
                    <div class="circle-border circle-border1 none-767"></div>
                    <div class="circle-border circle-border2 none-767"></div>
                    <div class="circle-border circle-border3 none-767"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="next_level_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="next_level_sec_main">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 wow fadeInLeftBig" data-wow-duration="1.4s">
                            <div class="next_level_sec_img_cont pl-40">
                                <div class="sub_title">
                                    <h1><span>Fun At Work.</span></h1>
                                   
                                    <p>There is a proper facility for the employees to relax themselves from the hectic schedule and after a tiresome day, the need to have some fun quotient is most desired. We know very well the various manners to keep things interesting and adaptable for our employees. The people serving us can have a fun session once a week or depending on their mood. The work session is on the beanbags and there are restrictions on the way of dressings. We also understand that since our employees have come from various cultures and trends, we intend to maintain a balance in the various cultural activities organized within the boundary. The birthday and similar occasions of the employees is celebrated with full fervor and passion where all the employees participate. Outings and functions organized in the office premises are also given a keen attention and we tend to bring a new flavor every new time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInRightBig" data-wow-duration="1.6s">
                            <div class="next_level_sec_img">
                                <img src="images/b11.jpg" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="spacer80px">
                <div class="next_level_sec_main">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 wow fadeInLeftBig" data-wow-duration="1.4s">
                            <div class="next_level_sec_img">
                                <img src="images/b2.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInRightBig" data-wow-duration="1.6s">
                            <div class="next_level_sec_img_cont">
                                <div class="sub_title">
                                    <h1><span>Our Work Culture</span></h1>
                                    <p>The organization thaws on the visions of a group of innovative and passionate individuals who relentlessly are trying hard to make a big mark in terms of online shopping and e-commerce growth. This is just to provide the optimum facility to the consumer. The technology is generally utilized in such a manner that the client satisfaction is considered the best. There are certain critical factors around which the core values are closely woven.</p>
                                    <ul>
                                        <li>Customer Satisfaction</li>
                                        <li>Honesty</li>
                                        <li>Ownership</li>
                                        <li>Leadership</li>
                                        <li>Entrepreneur skill set</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="spacer80px">
                <div class="next_level_sec_main">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 wow fadeInLeftBig" data-wow-duration="1.4s">
                            <div class="next_level_sec_img_cont pl-40">
                                <div class="sub_title">
                                    <h1><span>Work With Us</span></h1>
                                   
                                    <p>India is fast emerging as the front runners in the field of ecommerce and latest technology have made their presence felt in a tough way. Going along with the trends, we would like to keep our organization at the threshold and pave way for newer trends. We have come a long way since our olden days and have emerged as one of the fastest growing mid-sized company. With a stupendous funding by our side we have open our wings towards our expansion. The Admin team, development team and an ever-enthusiastic customer support team have helped us to grow our tentacles everywhere. As per the plans of the expansion, we have hired talented resources across all departments that belong to web designing, planning, Enterprise Resource Planning (ERP), and Business Development professionals. This is not the limit and to further drive the force ahead, we are in constant hunt for better professionals who can hold the baton and led the company to its path of success. We are in constant lookout for such individuals and professionals who want to make a difference in the field of ecommerce. So this could be a unique opportunity to join a team that is constantly cruising ahead and have left a mark behind for others to follow.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInRightBig" data-wow-duration="1.6s">
                            <div class="next_level_sec_img">
                                <img src="images/b3.jpg" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="spacer80px">
                <div class="next_level_sec_main">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 wow fadeInLeftBig" data-wow-duration="1.4s">
                            <div class="next_level_sec_img">
                                <img src="images/b4.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInRightBig" data-wow-duration="1.6s">
                            <div class="next_level_sec_img_cont">
                                <div class="sub_title">
                                    <h1><span>Benefits</span></h1>
                                    <ul>
                                        <li>Success Incentive Plan</li>
                                        <li>International Exposure</li>
                                        <li>High-end remuneration on skill sets</li>
                                        <li>Hands on experience</li>
                                        <li>Hands on Training Program</li>
                                    </ul>
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