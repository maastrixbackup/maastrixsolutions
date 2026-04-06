@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
  $(document).ready( function () {
    $('#table_career').DataTable();
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
              <h1 class="m-0 text-dark">  Candidate Details</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Candidate Details</li>
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
              <h3 class="card-title">Candidate Details</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
             <table class="table table-bordered" id="table_career">
                <thead>
                  <tr>
                    <th style="width: 10px">#Id</th>
                    <th>First Name</th>
                    <!-- <th>Last Name</th> -->
                    <th>Email</th>
                    <th>Contact Details</th>
                    <!-- <th>DOB</th> -->
                    <th>gender</th>
                    <!-- <th>Address</th> -->
                   
                    <!-- <th>Country</th> -->
                    <!-- <th>State</th> -->
                    <!-- <th>City</th> -->
                    <!-- <th>Zip</th> -->
                    <th>Primary Skills</th>
                    <!-- <th>Secondary Skills</th> -->
                    <th>experience(in year)</th>
                    <!-- <th>CurrentEmployer</th> -->
                   
                    <th>qualification</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ApplyForm as $Client)
                  <tr>
                  <td>{{($Client->id)}}</td>
                    <td>{{($Client->fname)}}</td>
                   
                    <!-- <td>{{($Client->lname)}}</td> -->
                    <td>{{($Client->email)}}</td>
                    <td>{{($Client->ContactNum)}}</td>
                    <!-- <td>{{($Client->DOB)}}</td> -->
                     <td>{{($Client->gender)}}</td> 
                    <!-- <td>{{($Client->address)}}</td> -->
                    <!-- <td>{{($Client->country)}}</td> -->
                    <!-- <td>{{($Client->state)}}</td> -->
                    <!-- <td>{{($Client->city)}}</td> -->
                    <!-- <td>{{($Client->Zip)}}</td> -->
                    <td>{{($Client->PrimarySkills)}}</td>
                    <!-- <td>{{($Client->SecondarySkills)}}</td> -->
                    <td>{{($Client->experience)}}</td>
                    <!-- <td>{{($Client->CurrentEmployer)}}</td> -->
                    <td>{{($Client->qualification)}}</td>
                    <td> <a class="btn btn-app" href="{{url('/ApplyJobView',$Client->id)}}" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-eye"></i> 
                      </a>
                    
                   
                    <a class="btn btn-app" href="{{route('download_file',$Client->id)}}" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-download"></i> 
                      </a></td>
                   
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