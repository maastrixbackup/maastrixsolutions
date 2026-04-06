@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')



@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
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
              <h1 class="m-0 text-dark">Service Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Service</li>
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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Services About List</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <a class="btn btn-info" href="{{url('services/about/add')}}">Add New About </a><br><br>
             <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Heading</th>
                    <th>Content</th>
                    <th style="width: 146px;">Image</th>
                    <!-- <th>Status</th> -->
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($service_about as $about)
                  <tr>
                    <td>{{$about->id}}</td>
                    <td>{{$about->about_heading}}</td>
                    <td>{{$about->about_content}}</td>
                    <td><img src="{{url('service_about/'.$about->about_image)}}" width="50px" height="35px"></td>
                    <td>
                    <a class="btn btn-app" href="{{url('editserviceabout/'.$about->id)}}" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-edit"></i> 
                      </a>
                      <a href="{{url('deleteserviceabout/'.$about->id)}}" class="btn btn-app" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                      <a class="btn btn-app" href="{{url('viewserviceabout/'.$about->id)}}" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-eye"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 @endsection