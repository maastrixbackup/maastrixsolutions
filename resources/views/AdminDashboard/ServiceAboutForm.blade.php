@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<script type="text/javascript">
  function submit_form(){  
  var about_heading = document.getElementById('about_heading').value;
  var about_content = document.getElementById('about_content').value;
  var about_image = document.getElementById('about_image').value;
  // alert(banner);
    if(about_heading == ""){
      alert("Please Enter Heading");
      return false;
    }
    if(about_content == ""){
      alert("Please Enter Content");
      return false;
    }
    if(about_image == ""){
      alert("Please Select image");
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
              <h1 class="m-0 text-dark">Services Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Services About</li>
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
              <h3 class="card-title">Add Services About</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('services/about/save') }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      <div class="form-group">
                        <label for="exampleInputEmail1">About Heading</label>
                        <input type="text" name="about_heading" class="form-control" id="about_heading" placeholder="Enter  Heading">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">About Content</label>
                        <textarea name="about_content" class="form-control" id="about_content" placeholder="Enter Content"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="about_image" class="form-control" id="about_image">
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