@extends('layouts.include')
@section('include-section')

<body class="inner_pages">
<section class="banner_sec">
    <div id="" class="">
        <div class="banner_sec_img">
            <img src="{{url('images/blog-banner.jpg')}}" alt="" title="">
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
                            @foreach($read_blog as $blog)
                            <div class="blog_sec_left">
                                <!-- <div class="blog_sec_left_img">
                                    <img src="images/news-8.jpg" alt="" title="">
                                    <div class="post-date">19 <span>JUL</span></div>
                                </div> -->
                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li><span class="author-image"><img src="images/author-4.jpg" alt=""></span>By: Admin</li>
                                        <li>Category: <span class="theme_color">{{$blog->blog_category}}</span></li>
                                        <li>Comments: <?php echo $count_comment ?></li>
                                    </ul>
                                    <h3>{{$blog->blog_title}}</h3>
                                    <div class="text">
                                        <p>{{$blog->blog_content}}</p>
                                        <div class="images-gallery">
                                            <div class="row clearfix">
                                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                                    <img src="images/news-13.jpg" alt="">
                                                </div>
                                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                                    <img src="images/news-14.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="post-share-options clearfix">
                                            <!-- <div class="pull-left">
                                                <div class="post-title">Post Tags</div>
                                                <ul class="tags">
                                                    <li><a href="#">Sanatize</a></li>
                                                    <li><a href="#">virus</a></li>
                                                    <li><a href="#">odour</a></li>
                                                </ul>                               
                                            </div> -->
                                            <div class="pull-right">
                                                <div class="post-title">Share This</div>
                                                <ul class="social-icon">
                                                    <li><a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fparse.com"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=maastrix.com&display=popup"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://www.gmail.com"><i class="far fa-envelope"></i></a></li>
                                                    <li><a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="comments-area">
                                <div class="group-title">
                                    <h5>Comments</h5>
                                </div>
                                 @foreach($blog_comment as $blog_comment)
                                <div class="comment-box comment-form">
                                    <div class="comment">
                                    <?php $date =$blog_comment->created_at;
                                        $year = date("Y",strtotime($date));
                                        $month = date("F",strtotime($date));
                                         $day = date("d",strtotime($date));
                                         $time = date('h:i A', strtotime($date));
                                         ?>
                                        <div class="author-thumb"><img src="images/author-5.jpg" alt=""></div>
                                        <div class="comment-info clearfix"><strong>{{$blog_comment->username}}</strong><div class="comment-time"><?= $day." ". $month." ".$year." ".$time ?></div></div>
                                        <div class="text">{{$blog_comment->message}}</div>
                                        <button type="button" class="theme-btn reply-btn alok" onclick="open_replybox(this)" id="{{$blog_comment->id}}" >reply</button>
                                    </div>
                                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-4 reply-post" box-id="box{{$blog_comment->id}}">
                                        <textarea class="" name="message" placeholder="Your Message"></textarea>
                                        <button type="button" class="theme-btn reply-btn">submit</button>
                                   </div> -->
                                </div>
                                @endforeach
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-4" id="reply-post">
                                        <textarea class="" name="message" placeholder="Your Message"></textarea>
                                        <button type="button" class="theme-btn reply-btn"  id="reply">reply</button>
                                </div> -->

                            </div>
                            <div class="comment-form">
                                <div class="group-title"><h5>Post Reply</h5></div>
                                  @foreach($read_blog as $blog)
                                    <form method="post" action="{{url('blog-comment/'.$blog->id)}}">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea class="" name="message" placeholder="Your Message"></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Your Name" required="">
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email" required="">
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">send comment</span></button>
                                            </div>
                                        </div>
                                    </form>
                                    @endforeach
                            </div>
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
                                          @foreach($all_blog as $all_blog)   
                                        <ul class="cat-list-two">
                                            <li><a href="#">{{$all_blog->blog_category}}</a></li>

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




<script>
function open_replybox(obj){

}
</script>

<!-- <script>
    $('.reply-post').hide();
    $( "#reply" ).click(function() {     
    $('#reply-post').toggle();
    });
</script> -->

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
