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
              <h1 class="m-0 text-dark"></h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Dashboard</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row dashbaord_mainboxes">
        <div class="col-lg-4 col-md-4">
          <div class="registration_box fl_w">
            <div class="registration_box_single fl_w">
              <div class="regd_cont">
                <div class="regd_cont_left">
                  <h5>Total No.of Contact</h5>
                  <h6>{{$count1}}</h6>
                </div>
                <div class="regd_cont_right">
                  <span class="pulse">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="registration_box fl_w">
            <div class="registration_box_single fl_w">
              <div class="regd_cont">
                <div class="regd_cont_left">
                  <h5>Total CV Submitted </h5>
                  <h6>{{$cv}}</h6>
                </div>
                <div class="regd_cont_right">
                  <span class="pulse1">
                    <i class="fas fa-wallet" style="color: #24e4ac;"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="registration_box fl_w">
            <div class="registration_box_single fl_w">
              <div class="regd_cont">
                <div class="regd_cont_left">
                  <h5>Total No of Feedback </h5>
                  <h6>50</h6>
                </div>
                <div class="regd_cont_right">
                  <span class="pulse1">
                    <i class="fas fa-wallet" style="color: #24e4ac;"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="registration_box fl_w">
            <div class="registration_box_single fl_w">
              <div class="regd_cont">
                <div class="regd_cont_left">
                  <h5>Total No Of Quotation </h5>
                  <h6>{{$quote}}</h6>
                </div>
                <div class="regd_cont_right">
                  <span class="pulse1">
                    <i class="fas fa-wallet" style="color: #24e4ac;"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="registration_box fl_w">
            <div class="registration_box_single fl_w">
              <div class="regd_cont">
                <div class="regd_cont_left">
                  <h5>Total No of Job Posted </h5>
                  <h6>{{$count}}</h6>
                </div>
                <div class="regd_cont_right">
                  <span class="pulse1">
                    <i class="fas fa-wallet" style="color: #24e4ac;"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection