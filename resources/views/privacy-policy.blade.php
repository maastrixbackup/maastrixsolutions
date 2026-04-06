@extends('layouts.include')

@section('include-section')

<section class="banner_sec">
    <div id="" class="">
        <div class="banner_sec_img">
            <img src="images/privacy-banner1.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>Privacy Policy</h1>
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
                        <li><a>Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
</section>

<?php //echo'<pre>';print_r($privacypolicy);exit; ?>
<section class="terms_conditions">
    <div class="container">
        @foreach($privacypolicy as $policy)
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="terms_conditions_main">
                    <h3>{{$policy->heading}}</h3>
                    <!-- <h3>Privacy Policy</h3> -->
                    <!-- <p>At <strong>Maastrix,</strong> we intend to give you as much control as possible over your personal information. You can visit maastrix on the Web without telling us who you are or revealing any information about yourself. There are times, however, when we may need information from you, such as your name, company and email address. It is our intent to let you know before we collect personal information from you on the Internet.</p> -->
                    <!-- <p>If you choose to give us personal information via the Internet that we or our business partners may need to correspond with you, process an information request or provide you with a download, for example - it is our intent to let you know how we will use such information. If you tell us that you do not wish to have this information used as a basis for further contact with you, we will respect your wishes. We do keep track of the domains from which people visit us. We analyze this data for trends and statistics, and then we discard it.</p> -->
                <p>{!! $policy->policy!!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

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
