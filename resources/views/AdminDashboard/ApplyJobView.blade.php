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
              <h1 class="m-0 text-dark">Application View</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Application view</li>
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
              <h3 class="card-title">Details of {{$ApplyForm->fname}} </h3>
            </div>
            <div class="card-body">
              <h1></h6>
                <h6>First Name: {{$ApplyForm->fname}}</h6>
                <h6>Email Id: {{$ApplyForm->email}}</h6>
                <h6>Contact Number: {{$ApplyForm->ContactNum}}</h6>
                <h6>Date Of Birth: {{$ApplyForm->DOB}}</h6>  
                <h6>Gender: {{$ApplyForm->gender}}</h6>
                <h6>Address: {{$ApplyForm->address}}</h6>  
                <h6>Country: {{$ApplyForm->country}}</h6>
                <h6>State: {{$ApplyForm->state}}</h6>  
                <h6>City: {{$ApplyForm->city}}</h6>
                <h6>Zip: {{$ApplyForm->Zip}}</h6>  
                <h6>Primary Skills: {{$ApplyForm->PrimarySkills}}</h6>
                <h6>Secondary Skills:{{$ApplyForm->SecondarySkills}}</h6>  
                <h6>Experience: {{$ApplyForm->experience}}</h6>
                <h6>CurrentEmployer: {{$ApplyForm->CurrentEmployer}}</h6>  
                <h6>Qualification: {{$ApplyForm->qualification}}</h6>
                <h6>Resume: {{$ApplyForm->resume}}</h6> 
            </div>
          </div>
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



