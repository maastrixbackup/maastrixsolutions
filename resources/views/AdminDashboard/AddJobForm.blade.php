@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<script type="text/javascript">
  function submit_form(){  
  var b_heading = document.getElementById('banner_heading').value;
  var b_sheading = document.getElementById('banner_subheading').value;
  var img = document.getElementById('banner_name').value;
  // alert(img);
    if(b_heading == ""){
      alert("Please Enter Banner Heading");
      return false;
    }
    if(b_sheading == ""){
      alert("Please Enter Banner Sub Heading");
      return false;
    }
    if(img == ""){
      alert("Please Select Image");
      return false;
    }
  }

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
              <h1 class="m-0 text-dark">Job Opening Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Job</li>
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
              <h3 class="card-title">Add New JobOpening</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" id="upload-file     " action="{{ url('savejob') }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
                     <label>   
                      <div class="form-group">
                        <label for="exampleInputEmail1">Job Title</label>
                        <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Enter Job Title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Job Description</label>
                        <textarea name="job_description" class="form-control" id="job_description" placeholder="Enter Job DEscription"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Skills</label>
                        <input type="text" name="skills" class="form-control" id="skills" placeholder="Enter Required Skills">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Experience</label>
                        <input type="text" name="experience" class="form-control" id="experience" placeholder="Enter Required Experience">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Job Location</label>
                        <input type="text" name="location" class="form-control" id="location" placeholder="Enter Job Loaction">
                      </div>
                     <input class="btn btn-success" onclick="return submit_form()"  type="submit" name="submit" value="Submit"/> 
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 @endsection