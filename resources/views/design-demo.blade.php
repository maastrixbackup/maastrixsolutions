@extends('layouts.include')
<body class="inner_pages">
@section('include-section')
<section class="banner_sec">
    <div id="" class="">
        @foreach($banner as $banner)
           <div class="banner_sec_img">
             <img src="{{ url('homebanners/'.$banner->banner_name) }}">
                <div class="banner_sec_img_cont">
                    <div class="banner_sec_img_cont_inner">
                        <h1>{!!$banner->banner_heading!!}</h1>
                      <!--   <h6>{{$banner->banner_subheading}}</h6> -->
                    </div>
                </div>
            </div>
        @endforeach
        <!-- <div class="banner_sec_img">
            <img src="images/demo-banner.jpg" alt="" title="">
            <div class="banner_sec_img_cont">
                <div class="banner_sec_img_cont_inner">
                    <h1>Design Demo</h1>
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
                        <li><a>Design Demo</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
</section>

   <section class="portfolio_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="tab_cont_main">
                        <div class="row list-wrapper">
<!--added by khushi 11-02-2023-->

                             <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/Interior-Decoration-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/Interior-Decoration.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title"> Interior Decoration </span>
                                            <h4><a class="title" href="#">Interior Decoration</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
<!--added by khushi 11-02-2023-->
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/A2D-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/A2D.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Car Service</span>
                                            <h4><a class="title" href="#">A2D</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('public/images/portfolio/ABBY-Homes-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/ABBY-Homes.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Property Service</span>
                                            <h4><a class="title" href="#">ABBY Homes</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item ">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/AnytimeGive-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/AnytimeGive.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Charity </span>
                                            <h4><a class="title" href="#">Anytime Give</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4  list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/arain-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/arain.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Insurance</span>
                                            <h4><a class="title" href="#">Arain Agency</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/Atstaxaccounting-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/Atstaxaccounting.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Property Service</span>
                                            <h4><a class="title" href="#">ATS Tax & Accounting</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/Axiom-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/Axiom.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Home Care </span>
                                            <h4><a class="title" href="#">Axiom</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/bbndry-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/bbndry.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Digital Marketing</span>
                                            <h4><a class="title" href="#">BBNDRY</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/blacklist-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/blacklist.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Car Wash</span>
                                            <h4><a class="title" href="#">Black List</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/BLDG_ArtWebsite-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/BLDG_ArtWebsite.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Talend and Design </span>
                                            <h4><a class="title" href="#">Building Art</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/Consumer-Advocacy-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/Consumer-Advocacy.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Contact Local Agent </span>
                                            <h4><a class="title" href="#">Consumer Advocacy</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/DayBreak-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/DayBreak.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Poultry Products </span>
                                            <h4><a class="title" href="#">Daybreak</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/Drivex-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/Drivex.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Drivers Information Management System </span>
                                            <h4><a class="title" href="#">Drivex</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/Easy-Button-Homes-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/Easy-Button-Homes.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Dream House </span>
                                            <h4><a class="title" href="#">Easy Button Homes</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/Eternal-City-Trading-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/Eternal-City-Trading.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Transport</span>
                                            <h4><a class="title" href="#">Eternal City Transport</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/FairCashClose-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/FairCashClose.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Learning Program</span>
                                            <h4><a class="title" href="#">Fair Cash Close</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/HomeMata-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/HomeMata.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Buying & Selling </span>
                                            <h4><a class="title" href="#">Homemata</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/RVrental-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/RVrental.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Travelling</span>
                                            <h4><a class="title" href="#">RV RentalGuru</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/Seva_group-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/Seva_group.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Charity</span>
                                            <h4><a class="title" href="#">Seva Group</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/WNRL-home-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/WNRL-home.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Buys & Sells Heavy Equipments </span>
                                            <h4><a class="title" href="#">Warehouse</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/waiiv-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/waiiv.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Radio Station</span>
                                            <h4><a class="title" href="#">Waiiv</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/ZerolessHub-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/ZerolessHub.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Marketing Promotion</span>
                                            <h4><a class="title" href="#">Zeroless Hub</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--added by khushi 10-02-2023-->
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/Startupbranding-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/Startupbranding.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Startup Sales and Branding</span>
                                            <h4><a class="title" href="#">Startup Sales and Branding</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 list-item">
                                <div class="sc-project-item sc-mb-15">
                                    <img src="{{url('images/portfolio/Triskelelabs-small.jpg')}}" alt="" title="">
                                    <div class="sc-project-content-box">
                                        <div class="sc-project-icon">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                                data-title="" data-image="{{url('images/portfolio/Triskelelabs.jpg')}}"
                                                data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="sc-project-text">
                                            <span class="sub-title">Cyber Security</span>
                                            <h4><a class="title" href="#">Triskelelabs</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-lg-4 col-md-4 list-item">-->
                            <!--    <div class="sc-project-item sc-mb-15">-->
                            <!--        <img src="{{url('images/portfolio/VTlab-Security-Testing-small.jpg')}}" alt="" title="">-->
                            <!--        <div class="sc-project-content-box">-->
                            <!--            <div class="sc-project-icon">-->
                            <!--                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"-->
                            <!--                    data-title="" data-image="{{url('images/portfolio/VTlab-Security-Testing.jpg')}}"-->
                            <!--                    data-target="#image-gallery"><i class="fal fa-long-arrow-right"></i></a>-->
                            <!--            </div>-->
                            <!--            <div class="sc-project-text">-->
                            <!--                <span class="sub-title">Security Testing</span>-->
                            <!--                <h4><a class="title" href="#">VT Lab</a></h4>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                         
                            <!--added by khushi 10-02-2023-->
                            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" id="image-gallery-title"></h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                     </button>
                                  </div>
                             <div class="modal-body">
                               <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                             </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                            </button>

                          <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
					
                        </div>
                         <div id="pagination-container"></div>



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



<!--added by khushi -->

<script type="text/javascript">
let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

       
    </script>

<!--added by khushi-->
@endsection
</body>
</html>