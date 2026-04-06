@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
  $(document).ready( function () {
    $('#tbl_contact').DataTable();
} );
</script>
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
              <h1 class="m-0 text-dark">Contact Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Contact Management</li>
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
              <h3 class="card-title">Contact Management</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
             <table class="table table-bordered" id="tbl_contact">
                <thead>
                  <tr>
                    <th style="width: 10px">#Id</th>
                    <th>Name</th>
                
                    <th>Email</th>
                    <th>Contact Details</th>
                    <th>Company Name</th>
                    <th>Subject of Client mail</th>
                    <th>Link of website</th>
                   
                    <th>Client Message</th>
                   
                  </tr>
                </thead>
                <tbody>
                  @foreach($Contact_u as $Client)
                  <tr>
                  <td>{{($Client->id)}}</td>
                    <td>{{($Client->fullname)}}</td>
                    <td>{{($Client->email)}}</td>
                    <td>{{($Client->Pnum)}}</td>
                    <td>{{($Client->Cname)}}</td>
                    <td>{{($Client->subject)}}</td>
                    <td ><a href="google.com">{{($Client->Weblink)}}</a></td>
                    <td>{{($Client->msg)}}</td>
                    
                   
                    
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