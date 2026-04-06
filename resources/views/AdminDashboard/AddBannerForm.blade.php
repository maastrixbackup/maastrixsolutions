@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<script type="text/javascript">
  function submit_form(){  
  var banner_page = document.getElementById('banner_for').value;
  var b_heading = document.getElementById('banner_heading').value;
  var b_sheading = document.getElementById('banner_subheading').value;
  var img = document.getElementById('banner_name').value;
  // alert(banner);
    if(banner_page == ""){
      alert("Please Select page");
      return false;
    }
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
              <h1 class="m-0 text-dark">Banner Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Banner</li>
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
              <h3 class="card-title">Add New Banner</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('store') }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      <div class="form-group">
                       <label for="exampleInputEmail1">Banner For</label>
                       <select name="banner_for" class="form-control" id="banner_for">
                        <option selected disabled value="">Select Page</option>
                          <option value="home_page">Home Page</option>
                          <option value="about">About</option>
                          <option value="services">Services</option>
                          <option value="portfolio">PortFolio</option>
                          <option value="clients">Clients</option>
                          <option value="design_demo">Design Demo</option>
                          <option value="careers">Careers</option>
                          <option value="contact">Contact</option>
                          <option value="feedback">Feedback</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Banner Heading</label>
                        <input type="text" name="banner_heading" class="form-control" id="banner_heading" placeholder="Enter Banner Heading">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Banner SubHeading</label>
                        <textarea name="banner_subheading" class="form-control" id="banner_subheading" placeholder="Enter Banner Sub-Heading"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Banner Image</label>
                        <input type="file" name="banner_name" class="form-control" id="banner_name">
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