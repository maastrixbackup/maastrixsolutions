@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <section class="admin_user">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="admin_user_head">
            <div class="admin_user_head_tag">
                <h1 class="m-0 text-dark">Why Choose Us View</h1>
              </div>
              <div class="admin_user_head_cont">
                <ul>
                  <li><a href="" class="active">Home</a></li>
                  <li>/</li>
                  <li><a href=""></a>Why Choose Us View</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="admin_user_table">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            @foreach($view_content as $view_content)
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Details of Whychoose Us </h3>
              </div>
              <div class="card-body">
                <h2><u>Content Heading:</u><br>{!!$view_content->heading!!}</h2>
                  <h6><u>Content Sub-Heading:</u><br>{{$view_content->sub_heading}}</h6>
                  <h6><u>Content</u><br>{!!$view_content->content!!}</h6>
                  <h6><u>Points:</u><br>{{$view_content->points}}</h6>
                  <h6><u>Image:</u><br></h6> 
                  <div>
                    <img src="{{url('whychooseus/'.$view_content->image)}}" style="width: 225px;height: 100px;">
                  </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection



