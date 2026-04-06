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
              <h1 class="m-0 text-dark">Quote Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Quote Management</li>
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
              <h3 class="card-title">Get A Quote</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#Id</th>
                    <th>User Name</th>
                
                    <th>Email</th>
                    <th>Contact Details</th>
                    <th>Company Name</th>
                    
                    <th>Subject of Client mail</th>
                    <th>Offered Money By Client</th>
                   
                    <th>Client Message</th>
                   
                  </tr>
                </thead>
                <tbody>
                  @foreach($Get_a_Quote as $Client)
                  <tr>
                  <td>{{($Client->id)}}</td>
                    <td>{{($Client->Username)}}</td>
                    <td>{{($Client->email)}}</td>
                    <td>{{($Client->PhoneNum)}}</td>
                    <td>{{($Client->CName)}}</td>
                    <td>{{($Client->Subject)}}</td>
                    <td >{{($Client->Money)}}</td>
                    <td>{{($Client->msgs)}}</td>
                    
                   
                    
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