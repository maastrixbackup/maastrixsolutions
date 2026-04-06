@extends('layouts.include')

@section('include-section')
<section class="banner_sec">
    <div id="" class="">
        <div class="banner_sec_img">
            <img src="images/contact-banner1.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>Site Map</h1>
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
                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                        <li><a>Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
</section>

<section class="ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h3>Sitemap</h3>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="sub-title">
                    <div class="main-title">
                        <h4>Home</h4>
                    </div>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                        <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                        <li><a href="{{url('clients')}}">Clients</a></li>
                        <li><a href="{{url('feedback')}}">Feedback</a></li>
                        <li><a href="{{url('blog')}}">Blog</a></li>
                        <li><a href="{{url('faq')}}">FAQ</a></li>
                        <li><a href="{{url('careers')}}">Career</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="sub-title">
                    <div class="main-title">
                        <h4>About Us</h4>
                    </div>
                    <ul>
                        <li><a href="{{url('about-us')}}">Who We Are</a></li>
                        <li><a href="{{url('about-us')}}">Our Team</a></li>
                        <li><a href="{{url('about-us')}}">How We Work</a></li>
                        <li><a href="{{url('about-us')}}">Strength</a></li>
                        <li><a href="{{url('about-us')}}">Our Vision</a></li>
                        <li><a href="{{url('about-us')}}">Customer Support</a></li>
                        <li><a href="{{url('about-us')}}">Expertise</a></li>
                        <li><a href="{{url('about-us')}}">About Maastrix</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="sub-title">
                    <div class="main-title">
                        <h4>Services</h4>
                    </div>
                    <ul>
                        <li><a href="services">Web Design</a></li>
                        <li><a href="services">IT Outsourcing</a></li>
                        <li><a href="services">Web Application</a></li>
                        <li><a href="services">E-Commerce Solutions</a></li>
                        <li><a href="services">SEOk</a></li>
                        <li><a href="services">Mobile Application</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="sub-title">
                    <div class="main-title">
                        <h4>Courses</h4>
                    </div>
                    <ul>
                        <li><a href="#">Jquery</a></li>
                        <li><a href="#">Drupal</a></li>
                        <li><a href="#">Magento</a></li>
                        <li><a href="#">MySQL</a></li>
                        <li><a href="#">joomla</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Js angular</a></li>
                        <li><a href="#">Phalcon</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- <div class="fullScreen">
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
</div> -->
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
