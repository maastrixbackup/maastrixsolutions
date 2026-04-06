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
              <h3 class="card-title">Edit Banner</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
                @foreach($banner_details as $banner )
              <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('updatebanner/'.$banner->id) }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      <div class="form-group">
                       <label for="exampleInputEmail1">Banner For</label>
                       <select name="banner_for" class="form-control" id="banner_for">
                          <option value="home_page" <?php if($banner->banner_for =="home_page"){ ?> selected <?php }?>>Home Page</option>
                          <option value="about" <?php if($banner->banner_for =="about"){ ?> selected <?php }?>>About</option>
                          <option value="services" <?php if($banner->banner_for =="services"){ ?> selected <?php }?>>Services</option>
                          <option value="portfolio" <?php if($banner->banner_for =="portfolio"){ ?> selected <?php }?>>PortFolio</option>
                          <option value="clients" <?php if($banner->banner_for =="clients"){ ?> selected <?php }?>>Clients</option>
                          <option value="design_demo" <?php if($banner->banner_for =="design_demo"){ ?> selected <?php }?>>Design Demo</option>
                          <option value="careers" <?php if($banner->banner_for =="careers"){ ?> selected <?php }?>>Careers</option>
                          <option value="contact" <?php if($banner->banner_for =="contact"){ ?> selected <?php }?>>Contact</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Banner Heading</label>
                        <input type="text" name="banner_heading" class="form-control" id="banner_heading" placeholder="Enter Banner Heading" value="{{$banner->banner_heading}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Banner SubHeading</label>
                        <input type="text" name="banner_subheading" class="form-control" id="banner_subheading" placeholder="Enter Banner Sub-Heading" value="{{$banner->banner_subheading}}">
                      </div>
                     <input class="btn btn-success" onclick="return submit_form()"  type="submit" name="submit" value="Submit"/> 
                     @endforeach
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 @endsection