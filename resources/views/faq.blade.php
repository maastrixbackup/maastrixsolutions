@extends('layouts.include')

@section('include-section')

<section class="banner_sec">
    <div id="" class="">
        <div class="banner_sec_img">
            <img src="images/faq-banner.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>FAQs</h1>
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
                        <li><a>FAQs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
</section>
<section class="faq-section faq_sec">
    <div class="container">
        <?php //echo '<pre>'; print_r($faqs);exit ?>
        <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
                <div class="faq" id="accordion">
                    @foreach($faqs as $faq )
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse{{$faq->id}}" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">{{$faq->id}}</span>{{$faq->question}}
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse{{$faq->id}}" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                            <div class="card-body">
                                <p>{{$faq->answer}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="card">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                    <span class="badge">2</span> How can I be sure of high quality and timely-delivery of work?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                            <div class="card-body">
                                <p>We have a special team of site testing professionals. Once your project is completed, we give your site to our site testing experts who test your site and check its quality.We allow our clients to supervise the project development process entirely.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-3">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                    <span class="badge">3</span>What does website usability mean?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                            <div class="card-body">
                                <p>Website usually means your presence over the world wide web.It is a medium by which you can represent your business online.Thus helping you to grow your customer base and reputation very quickly. Website is like a marketing strategy for a business</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge">4</span> What does a good Website Design cost?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                            <div class="card-body">
                                <p>The number one question we get asked is how much does it cost for a Website Design. We believe that every client/customer is different and has different needs therefore we quote separately as it depends upon the size and scale of the project.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
