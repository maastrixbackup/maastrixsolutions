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
              <h1 class="m-0 text-dark">Home Page Management</h1>
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
              <h3 class="card-title">Add New Contents</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('home/Section2/SaveContent') }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      <div class="form-group">
                        <label for="exampleInputEmail1">Heading</label>
                        <input type="text" name="heading" class="form-control" id="heading" placeholder="Enter Banner Heading">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Content1</label>
                        <textarea name="content1" class="form-control" id="content1" placeholder="Enter Banner Sub-Heading"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Content2</label>
                        <textarea name="content2" class="form-control" id="content2" placeholder="Enter Banner Sub-Heading"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Content3</label>
                        <textarea name="content3" class="form-control" id="content3" placeholder="Enter Banner Sub-Heading"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Content4</label>
                        <textarea name="content4" class="form-control" id="banner_subheading" placeholder="Enter Banner Sub-content4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Content5</label>
                        <textarea name="content5" class="form-control" id="content5" placeholder="Enter Banner Sub-Heading"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Enter Banner Heading">
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