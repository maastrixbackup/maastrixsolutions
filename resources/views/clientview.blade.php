@extends('layouts.include')
@section('include-section')
    <section class="banner_sec">
        <div id="" class="">
            @foreach($banner as $banner)
            <div class="banner_sec_img">
                <img src="{{ url('homebanners/'.$banner->banner_name) }}">
                    <div class="banner_sec_img_cont">
                        <div class="banner_sec_img_cont_inner">
                            <h1>{!!$banner->banner_heading!!}</h1>
                        <!--  <h6>{{$banner->banner_subheading}}</h6> -->
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- <div class="banner_sec_img">
                <img src="images/clients-banner.jpg" alt="" title="">
                <div class="banner_sec_img_cont">
                    <div class="banner_sec_img_cont_inner">
                        <h1>Clients</h1>
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
                            <li><a>Clients</a></li>
                            <li><a>Client view</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>          
    </section>
    <section class="clients_sec_new">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="clients_sec_new_head">
                        <div class="row">
                            @foreach($client_view as $client)
                            <div class="col-lg-6 col-md-6">
                                <div class="clients_sec_new_head_left">
                                    <h3>{{$client->client_name}}</h3>
                                </div>
                                <div>
                                    <h5><i class="fas fa-map-marked-alt"></i>{{$client->loaction}}</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="clients_sec_new_head_right">
                                 <img src="{{url('Client_images/'.$client->client_image)}}">
                                </div>
                            </div>
                            <div>
                              <P>{!!$client->client_detail!!}</P>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="#" class="back-to-top" style="display: none;"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

    <script type="text/javascript">
        $("#cssmenu").menumaker({
            title: "",
            format: "multitoggle"
        });
    </script>

@endsection
