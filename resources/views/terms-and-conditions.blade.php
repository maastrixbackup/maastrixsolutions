@extends('layouts.include')

@section('include-section')
<section class="banner_sec">
    <div id="" class="">
        <div class="banner_sec_img">
            <img src="images/contact-banner1.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>Terms & Conditions</h1>
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
                        <li><a>Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
</section>

<section class="ptb-50">
    <div class="container">
        <div class="row">
           <h1>Terms & Conditions</h1>

           <p>The following “Terms and Conditions” govern the use of the web service, maasinfotech24x7.com or any other web service or site owned and/or operated by Maastrix Solutions Pvt. Ltd., (the Service) and by accessing , viewing, or using the material and functionality on the service, you indicate that you understand and intend these Terms and Conditions to be the legal equivalent of a signed, written contract, and equally binding, and that you accept such Terms and Conditions and agree to be legally bound to them. If you do not agree to these Terms and Conditions, you are not granted to use the Service, and should exit immediately.</p><br>
           <p>Proprietary Law:-</p><br>
           <p>All material contained in this Service is protected by law, including , but not limited to Indian Copyright Act. Except as indicated, the entire content of Maastrix Solutions Pvt. Ltd. and its family of services is (c) 2015 Maastrixsolutions | All Rights Reserved. Removing or altering the copyright notice on any material on the service is prohibited. All trademarks used at this website that are not intellectual property of Maastrix Solutuons are property of their respective holders.</p><br>
           <p>Communications With Our Web Services:-</p><br>
           <p>Maastrix Solutions Pvt. Ltd. welcomes your feedback and suggestions about how to improve our Services. By transmitting any suggestion, information material or other content to Maastrix Solutions Pvt. Ltd., you automatically grant Maastrix Solutions Pvt. Ltd. the royalty-free, perpetual, irrevocable, non-exclusive rights and license to use, reproduce, modify, adapt, publish, translate, create derivative work from, distribute, redistribute, transmit, perform and display such content(as a whole or part) worldwide.</p><br>
           <p>Privacy Statement:-</p><br>
           <p>Maastrix Solutions Pvt. Ltd. has a privacy policies disclosing what information we collect about visitors, how we use such information, and steps we take to secure such information.</p><br>
           <p>Disclaimer of Warranty and Liability:-</p><br>
           <p>Use of this service is entirely at your own risk. Neither Maastrix Solutions Pvt. Ltd. nor its affiliates is responsible for the consequences of reliance on any information contained in or submitted to the service, and the risk of injury from the foregoing rests entirely with you. These materials are provided “as is” without warranty of any kind, either express or implied.Maastrix Solutions Pvt. Ltd. shall not be liable for any direct, special, indirect, incidental, consequential, or punitive damages, including without limitation, lost revenues or lost profits, which may result from the use of, access to, or inability to use these materials. Under no circumstances will the total liability of Maastrix Solutions Pvt. Ltd. to you exceed the price paid for use of the service.</p>
           <br>
           <p>Corrections and Changes:-</p><br>
           <p>Maastrix Solutions Pvt. Ltd. futher does not warrent the accuracy or completeness of the information , text, graphics, links or other items contained within this materials. Maastrix Solutions Pvt. Ltd. may make change to these materials, or to the products and services described herein, at any time without any notice, and makes no commitment to update the information contained herein.Maastrix Solutions Pvt. Ltd. reserves the right to terminate the access to the website in the event that you violate the, Terms and Conditions, for, whatever, reasons it maybe.</p><br>
           <p>
               Indemnification:-
           </p><br>
           <p>You agree to defend, indemnify, and hold harmless Maastrix Solutions Pvt. Ltd., its affiliates and subsidiaries, and all of their respective directors, officers, employees, representatives, proprietors, partners, shareholders, servants, principals, agents, predecessors, successors, assigns, and attorneys from and against any and all claims, proceedings, damages, injuries, liabilities, losses, costs, and expenses (including attorney’s fees and litigation expenses) relating to or arising from your use of the Service and any breach by you of these Terms and Conditions.</p><br>
           <p>Links to Other Web Services.</p><br>
           <p>This Service may, from time to time, contain links to other Internet web services for the convenience of users in locating one of our clients’ services, information, or services that may be of interest. These services are maintained by organizations over which Maastrix Solutions Pvt. Ltd. exercises no control, and Maastrix Solutions Pvt. Ltd. expressly disclaims any responsibility for the content, the accuracy of the information and/or quality of products or services provided by or advertised on these third-party services. Maastrix Solutions Pvt. Ltd. does not control, endorse, promote, or have any affiliation with any other web service unless expressly stated herein.</p>
           <br>
           <p>Governing Law and Jurisdiction.</p><br>
           <p>These Terms and Conditions will be governed by and construed in accordance with the laws of the State of Odisha, India without reference to its choice of law rules. By accessing, viewing, or using the material on the Service, you consent to the jurisdiction of the High Court and Supreme Court presiding in Odisha, India, and agree to accept service of process by mail and hereby waive any and all jurisdictional and venue defenses otherwise available. This Service is controlled and operated by Maastrix Solutions Pvt. Ltd. from its offices within India. Maastrix Solutions Pvt. Ltd. makes no representation that materials in the Service are appropriate or available for use in other locations, and access to them from territories where their contents are illegal is prohibited. Those who choose to access this Service from other locations do so of their own volition and are responsible for compliance with applicable local laws.</p>
           <p>These Terms and Conditions constitute the entire agreement between you and Maastrix Solutions Pvt. Ltd. with respect to your use of the Service. You acknowledge that, in providing you access to and use of the Service, Maastrix Solutions Pvt. Ltd. has relied on your agreement to be legally bound by these Terms and Conditions.</p><br>

           <p>Contact Information:-</p><br>
           <p>Maastrix Solutions Pvt. Ltd. welcomes your comments regarding this Terms of Use, please contact us by e-mail, or postal mail.</p><br>
           <p>Maastrix Solutions Pvt. Ltd.plot no:- L3/60, Third Floor
                MBM Silver Building

                Acharya Vihar

                Bhubaneswar- 751013

                Odisha, India.

                Email-id:- info@maastrixsolutions.com</p><br>
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
