@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
  
  <section class="admin_user">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="admin_user_head">
          <div class="admin_user_head_tag">
              <h1 class="m-0 text-dark">Posted Job View</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Job View</li>
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
          @foreach($viewcontent as $viewcontent)
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Details of Services</h3>
            </div>
            <div class="card-body">
              <h2><u>Services Heading:</u><br>{{$viewcontent->heading}}</h2>
                <h6><u>Content:</u><br>{{$viewcontent->content1}}</h6>
                <h6><u>Image:</u><br></h6>
                <div>
                  <img src="{{url('home_section2/'.$viewcontent->image)}}"style="width: 225px;height: 100px;">
                </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2020 Quiq Claim.</strong>
    All rights reserved.
    
  </footer> -->



@endsection



