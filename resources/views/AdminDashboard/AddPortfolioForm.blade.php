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
              <h1 class="m-0 text-dark">Portfolio Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Portfolio</li>
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
              <h3 class="card-title">Add New Portfolio</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('savePortfolio') }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      <div class="form-group">
                       <label for="portfolio_for">Portfolio For</label>
                       <select name="portfolio_for[]" class="form-control" id="portfolio_for" multiple>
                          <option value="wordpress">Word Press</option>
                          <option value="cake_php">Cake Php</option>
                          <option value="phalcon">Phalcon</option>
                          <option value="laravel">Laravel</option>
                          <option value="flyer">Flyer</option>
                          <option value="logo">Logo</option>
                          <option value="yii">Yii</option>
                          <option value="react">React</option>
                          <option value="mobile">Mobile App</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="heading">Portfolio Heading</label>
                        <input type="text" name="heading" class="form-control" id="heading" placeholder="Enter Portfolio Heading">
                      </div>
                      <div class="form-group">
                       <label for="content"><strong>Portfolio Content</strong></label>
                        <textarea name="content" class="ckeditor form-control" id="content" placeholder="Enter Portfolio Content"></textarea>
                      </div>
                      <div class="form-group">
                       <label for="features"><strong>Portfolio Features</strong></label>
                        <textarea name="features" class="ckeditor form-control" id="features" placeholder="Enter portfolio features"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="technology">Technology</label>
                        <input type="text" name="technology" class="form-control" id="technology" placeholder="Enter Technology">
                      </div>
                      <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Enter Type">
                      </div>
                      <div class="form-group">
                        <label for="url">Website</label>
                        <input type="text" name="url" class="form-control" id="url" placeholder="Enter Website">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Portfolio Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Portfolio Large Image</label>
                        <input type="file" name="large_image" class="form-control" id="large_image">
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