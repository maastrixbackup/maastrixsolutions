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
              <h1 class="m-0 text-dark">Client View</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Client View</li>
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
          @foreach($view_clients as $client)
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Details of Client</h3>
            </div>
            <div class="card-body">
              <h6><u>Client Name:</u><br>{{$client->client_name}}</h6>
                <h6><u>Client Location:</u><br>{{$client->loaction}}</h6>
                <h6><u>Image:</u><br></h6>
                <div>
                  <img src="{{url('Client_images/'.$client->client_image)}}" style="width: 250px; height: 100px;">
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



