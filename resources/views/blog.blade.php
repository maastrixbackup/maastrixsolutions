@extends('layouts.include')

@section('include-section')
<body class="inner_pages">
<section class="banner_sec">
    <div id="" class="">
        <div class="banner_sec_img">
            <img src="images/blog-banner.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>Blog</h1>
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
                        <li><a>Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
</section>

<section class="blog_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog_sec_main">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 content-side">
                            @foreach($all_blog as $blog)
                            <div class="blog_sec_left">
                                <div class="blog_sec_left_img">
                                    <img src="{{url('blog_images/'.$blog->image)}}" alt="" title="">
                                    <?php $date =$blog->created_at;
                                      $month = date("M",strtotime($date));
                                       $day = date("d",strtotime($date));     
                                     ?>
                                    <div class="post-date"><?= $day;?> <span><?= $month; ?></span></div>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li><span class="author-image"><img src="images/author-4.jpg" alt=""></span>By: Admin</li>
                                        <li>Category: <span class="theme_color">{{$blog->blog_category}}</span></li>
                                        <!-- <li>Comments: 150</li> -->
                                    </ul>
                                    <h3>{{$blog->blog_title}}</h3>
                                    <div class="text">
                                        <p><?php $contnt= $blog->blog_content; 
                                            $concise = substr($contnt,0,500);
                                            echo $concise;
                                            ?>
                                        </p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{url('blog-view/'.$blog->id)}}" class="read-more theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

<!--                             <div class="pagination-outer">
                                <div class="styled-pagination text-center">
                                    <ul class="clearfix">
                                        <li class="prev"><a href="#"><span class="fa fa-angle-double-left"></span> </a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="next"><a href="#"><span class="fa fa-angle-double-right"></span> </a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-lg-4 col-md-12 sidebar-side">
                            <div>
                                <div class="sidebar-widget search-widget">
                                    <div class="widget-content">
                                        <div class="sidebar-title">
                                            <h5>Search Blog</h5>
                                        </div>
                                        <form method="post" action="contact">
                                            <div class="form-group">
                                                <input type="search" name="search-field" value="" placeholder="Type keyword" required="">
                                                <button type="submit"><span class="icon fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-widget category-widget-two">
                                    <div class="widget-content">
                                        <div class="sidebar-title">
                                            <h5>Categories</h5>
                                        </div>
                                         @foreach($all_blog as $blog)
                                        <ul class="cat-list-two">
                                            <li><a href="#">{{$blog->blog_category}}</a></li>
                                        </ul>
                                         @endforeach
                                    </div>
                                </div>
                                <div class="sidebar-widget popular-posts">
                                    <div class="widget-content">
                                        <div class="sidebar-title"><h5>Recent news</h5></div>
                                         @foreach($recent_blogs as $rb)
                                        <div class="post">
                                            <figure class="post-thumb"><img src="{{url('blog_images/'.$rb->image)}}" alt=""><a href="#" class="overlay-box"><i class="fas fa-link"></i></a></figure>
                                            <div class="text"><a href="{{url('blog-view/'.$rb->id)}}">{{$rb->blog_title}}</a></div>
                                            <div class="post-info">
                                                <?php 
                                                    $date =$rb->created_at;
                                                    $year = date("Y",strtotime($date));
                                                   $month = date("F",strtotime($date));
                                                   $day = date("d",strtotime($date));
                                                   echo $month." ".$day.",".$year;
                                                ?>
                                            </div>
                                        </div>
                                        @endforeach  
                                        <!--<div class="post">
                                            <figure class="post-thumb"><img src="images/post-thumb-2.jpg" alt=""><a href="#" class="overlay-box"><i class="fas fa-link"></i></a></figure>
                                            <div class="text"><a href="#">Bacterias Removal: How to do safely</a></div>
                                            <div class="post-info">July 25, 2021</div>
                                        </div>
                                        
                                        <div class="post">
                                            <figure class="post-thumb"><img src="images/post-thumb-3.jpg" alt=""><a href="#" class="overlay-box"><i class="fas fa-link"></i></a></figure>
                                            <div class="text"><a href="#">Questions to ask for sanitizer company</a></div>
                                            <div class="post-info">July 25, 2021</div>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <div class="sidebar-widget popular-tags">
                                    <div class="widget-content">
                                        <div class="sidebar-title">
                                            <h5>Popular Tags</h5>
                                        </div>
                                        <a href="#">Disinfection</a>
                                        <a href="#">Business</a>
                                        <a href="#">COVID 19</a>
                                        <a href="#">Sanatize</a>
                                        <a href="#">Virus</a>
                                        <a href="#">Bacteria</a>
                                        <a href="#">Mold</a>
                                        <a href="#">Odour Control</a>
                                        <a href="#">Germs</a>
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
