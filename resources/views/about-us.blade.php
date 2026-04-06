@extends('layouts.include')
@section('meta_title', 'Who We Are – Maastrix Solutions | Complete Web Strategy & Development')
@section('meta_description',
    'About Maastrix Solutions: A trusted full-service web solutions company delivering professional web, mobile, and digital
    services to clients across the USA, UK, Europe, Australia and India.
    ')
@section('meta_keyword', '')





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
<!--     <div id="" class="">
        <div class="banner_sec_img">
            <img src="images/ab-banner.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>About us</h1>
                    <p>We are a highly effective, learning and fast growing organization. Up till now, our customers have their base in the USA, UK, Canada, Norway, Australia and India.</p>
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
                        <li><a>About us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
</section>


<section class="who_we_are">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="who_we_are_cont">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 wow fadeInLeft" data-wow-duration="1.2s">
                            <div class="who_we_are_cont_left">
                                <img src="images/who-we-are.jpg" alt="" title="">
                                <div class="iconbox-award">
                                    <span class="icon-trophy">
                                        <img src="images/trophy.png" alt="" title="">
                                    </span>
                                    <div class="spinning-circle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 wow fadeInRight" data-wow-duration="1.4s">
                            <div class="who_we_are_cont_right">
                                <div class="who_we_are_head">
                                    <h4>Who We Are</h4>
                                </div>
                                <div class="who_we_are_cont_right_head">
                                    <h4>Over <span>17</span>years experience</h4>
                                </div>
                                <p>We are one of the top players leading the current web designing industry. Located and headquartered at Michigan, we have the solutions to offer which is tailor-made according to your requirements. We have also collaborated and have alliances with companies belonging to similar traditions and business across the globe.</p>
                                <p>To spread our tentacles globally we required the much-needed tie-up with Michigan based Alpha Synopsys, an Inc of 500 listed IT company with the similar mindset and traditions, proved to be the best company to venture, yet keeping our own identity intact and maintained. Our Clients come from across the globe (US, Canada, UK, Australia, Switzerland and Europe) and from different industry. Their needs differ from each other and their sites are unique. However, all are having a common command i.e. high-quality and effectual website, site that brings visitors and leads, site that becomes customers’ favorite site, and finally we are the people who meet client’s business needs today and help them to achieve their goal for tomorrow.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_overview_sec new_padd_btm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="about_overview_sec_main">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-duration="1.6s">
                            <div class="about_overview_sec_right">
                                <h4>About Maastrix</h4>
                                <p><strong>“TO IMPROVE IS TO CHANGE AND TO BE PERFECT IS TO STRUGGLE”</strong></p>
                                <p>We have changed our name from Maas InfoTech to Maastrix, but our loyalty and assurance remains unaffected. Founded in 2004, Maastrix solutions is a professional web development company which has helped lift non-existent sites from obscurity to the top of their field. We are a US-based versatile web agency offering web strategy, design and development services. We have over 7 years experience in web design, from small promotional sites to major e-business projects, working on strategy, project management, content creation and site promotion as well as web design and development. </p>
                                <p>Being in the industry for more than seven years, we contemplated that it is a good time to transform our name in order to improve our services and brand recognition in the marketplace. Our main purpose is to reinforce our relationship with our clients as one of the trusted web development Companies on this globe. After embarking on a stimulating re-branding process, we are pleased to announce that our new official name is Maastrix. Soon we will do the registration with STPI.</p>
                                <p>A company’s business is motivated by the desire to achieve and we focus on six key terms i.e. VALUE, QUALITY, SERVICE, LOYALTY, SUPPORT AND PRICE. Maastrix has been delivering professional and cost-effective web development solutions to thousands of clients across the globe. Driven by morals and business ethics, Maastrix has a distinctive space among thousands of web development and web design companies offering the best - value added solution that meets our clients’ requirements and expectations. Our mission is to be a high performance and quality driven Web Services Company that goes beyond all customer expectations offers an inspirational and rewarding environment for employees supports the community and accomplishes and maintains a concrete financial performance.</p>
                               
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-duration="1.8s">
                            <div class="about_overview_sec_left">
                                <div class="row about_image">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_overview_sec_left_inner">
                                            <img src="images/about-img1.jpg" alt="" title="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_overview_sec_left_inner">
                                            <img src="images/about-img2.jpg" alt="" title="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_overview_sec_left_inner">
                                            <img src="images/about-img3.jpg" alt="" title="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_overview_sec_left_inner">
                                            <img src="images/about-img4.jpg" alt="" title="">
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
    <div class="rocket fadeInUp wow slow" style="visibility: visible;">
        <img src="images/rocket.png" alt="rocket">
    </div>
</section>

<section class="all_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="all_sec_main">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-duration="1.2s">
                            <div class="all_sec_left">
                                <img src="images/overview.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="all_sec_right">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.2s">
                                        <a href="#">
                                            <div class="all_sec_right_single">
                                                <div class="all_sec_right_single_icn">
                                                    <img src="images/promotion-new.png" alt="" title="">
                                                </div>
                                                <div class="all_sec_right_single_cont">
                                                    <h3>Strength</h3>
                                                    <p>As the proverb says “UNITY IS STRENGTH……….When there is teamwork and collaboration, wonderful things can be achieved”. Likewise, our Team is our major strength, which comprises of Top-Notch programmers and designers.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.4s">
                                        <a href="#">
                                            <div class="all_sec_right_single">
                                                <div class="all_sec_right_single_icn">
                                                    <img src="images/target.png" alt="" title="">
                                                </div>
                                                <div class="all_sec_right_single_cont">
                                                    <h3>Our Vision</h3>
                                                    <p>We started as an independent firm with no support from any corporate house or any sort of financial assistances from any firm. We just had a motto to make it big while serving our clients loyally. </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.6s">
                                        <a href="#">
                                            <div class="all_sec_right_single">
                                                <div class="all_sec_right_single_icn">
                                                    <img src="images/customer-service.png" alt="" title="">
                                                </div>
                                                <div class="all_sec_right_single_cont">
                                                    <h3>Customer Support</h3>
                                                    <p>Our sole business is purely based on our clients and their respective feedback on our services. The business generally dwells on testimonials and word of the mouth publicity.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.8s">
                                        <a href="#">
                                            <div class="all_sec_right_single">
                                                <div class="all_sec_right_single_icn">
                                                    <img src="images/user-experience.png" alt="" title="">
                                                </div>
                                                <div class="all_sec_right_single_cont">
                                                    <h3>Expertise</h3>
                                                    <p>We have the renowned faces and names from all over the software and IT related industry. Our expertise ranges from small time teachers to big corporate faces either work as visiting faculty or are full time employees. </p>
                                                </div>
                                            </div>
                                        </a>
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

<section class="about_overview_sec new_ab_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="about_overview_sec_main">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-duration="1.6s">
                            <div class="about_overview_sec_right">
                                <h4>About Maastrix</h4>
                                <p>Since we are a Web Technology Company with a large number of services, our gamut of design and development services comprise of database driven web applications, Wordpress, Ecommerce, Oscommerce, Joomla, Xcart and Zen Cart. We specialize in E2E web portal development such as shopping cart, travel portal, real estate using ASP.NET. Added to this we have a strong working experience on applications such as Real Estate Auctions, Learning Management Solutions (LMS), Interactive chat application, debt calculator, web-based Wedding applications, and online store. Our major expertise includes PHP/MYSQL/AJAX. Maastrix, as an excellence-driven company, ensures that every single job irrespective of size has to go through QA process. Here is our quality objective:</p>
                                <ul>
                                    <li>We document every activity such as email, brief, telecom and MoM</li>
                                    <li>We develop a strong work process</li>
                                    <li>We endeavor to meet quality benchmark that meets customer requirement</li>
                                    <li>We bring continuous improvement of technology and QMS that enhances the overall value of customer</li>
                                    <li>Reengineering the process and TAT to deliver hassle free job</li>
                                    <li>Direct involvement of seniors to examine the process</li>
                                    <li>We guide our employees time to time to perform their task in a better way</li>
                                </ul>
                                <p>We are now in a position where we can claim to be the front-runners in race of Top Web Development companies in our country and in terms of contented client base we can claim to be at the supreme position. There is only one success mantra that we have followed since our advent that caters to a humble approach towards our esteemed clients. It is an easy task to become a web development company but it is quite hard to acknowledge the challenge to survive. We have come up a long way now and hope to play an enduring role on this globe.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeInRight" data-wow-duration="1.8s">
                            <div class="about_overview_sec_left">
                                <div class="row about_image">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_overview_sec_left_inner">
                                            <img src="images/about-img5.jpg" alt="" title="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_overview_sec_left_inner">
                                            <img src="images/about-img6.jpg" alt="" title="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_overview_sec_left_inner">
                                            <img src="images/about-img7.jpg" alt="" title="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="about_overview_sec_left_inner">
                                            <img src="images/about-img8.jpg" alt="" title="">
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
    <div class="vector">
        <img src="images/vector-bg.png" alt="vector">
    </div>
</section>

<section class="how_we_work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="how_we_work_main">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-duration="1.8s">
                            <div class="how_we_work_right">
                                <img src="images/features-2.png">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-duration="2.0s">
                            <div class="who_we_are_cont_right pl-0">
                                <div class="who_we_are_head">
                                    <h4>How We Work</h4>
                                </div>
                                <p>Unlike other, we have different style of work. Our project managers, engineers, and designers develop well-defined solutions that are focused on your challenges/pains. We know your web requirement is unique, as are your needs and objectives. Therefore, by using our design expertise and programming insights we have helped businesses garner branding benefits. We drive a process-based model that is both disciplined and flexible. Whether we are designing a simple site or developing a mammoth web portal, we use systems/trackers that keep our work on track and within the budget. We know how to make our customers' projects successful and unique by leveraging our knowledge and skill and making a long lasting market impact.</p>
                                <p>Equivalent to the web and Software Application Development we have also launched our PHP training process in liaison with renowned trainers in the city. Our students and employees can avail the benefits from the training courses, which range from crash courses to Long-term courses with placement opportunity. There was much felt needs and requirement for an institute that not only provides employment benefits but can also prepare the work force for the same. We have been catering to the International clients with more zest, as a result of which our client base has now gone towards Africa, Europe, and Latin America. We use our Office as the Offshore Development Centre (ODC) or Global Delivery Center for all the projects that we get from our International clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how_we_work pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="how_we_work_main">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-duration="1.2s">
                            <div class="who_we_are_cont_right pl-0">
                                <div class="who_we_are_head">
                                    <h4>Our Team</h4>
                                </div>
                                <p>Our team is our strength and we closely follow the rule, which says, “You grow as your fellow grows”. We have entrusted our team for a long-time and they have always paid back to our trust and affection. At Maastrix, we have an intellectual team of technologists delivering high-end web solutions to some of the world’s largest companies, straddling web, mobile and app development. It is really proud and fortunate that we have maintained about 70 percent of the workforce who are with us since the inception of the company. This is very rare in today’s period where lay-offs are a common term.</p>
                                <p>We know that mounting great websites not only require creative and technical skills but also require large amount of ownership and dedication. It is about applying those knowledge and skills in a way, which will make significant difference to your company. We maintain a strict HR process and our hiring process just skims the best available talent from the sources. The resources have to undergo a rigorous session to enter the company and during the training period they are chiseled and sharpened. Result is a better quality product and an efficient delivery team. We assign a team on a project and make sure that there is a harmonious environment amidst the teammates. There is a sense of respect for the seniors. We have several faces in our team who are veterans of their field and who are an asset to our company.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeInLeft" data-wow-duration="1.4s">
                            <div class="how_we_work_right">
                                <img src="images/features-1.png">
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