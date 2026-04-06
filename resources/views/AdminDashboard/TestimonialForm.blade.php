@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<script type="text/javascript">
  function submit_form(){  
  var name = document.getElementById('name').value;
  var remark = document.getElementById('remark').value;
  var img = document.getElementById('photo').value;
  // alert(img);
    if(name == ""){
      alert("Please Enter Name");
      return false;
    }
    if(remark == ""){
      alert("Please Enter Remark");
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
              <h1 class="m-0 text-dark">Testimonial Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Testimonial</li>
                <li>/</li>
                <li><a href=""></a>Add Testimonial</li>
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
              <h3 class="card-title">Add New Testimonial</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" id="testinomial-form" action="{{ url('saveTestimonial') }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
                     <label>   
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Remark  </label>
                        <textarea name="remark" class="form-control" id="remark" placeholder="Enter your Remark"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="photo" class="form-control" id="photo">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Country</label>
                        <input type="text" name="country" class="form-control" id="country" placeholder="Enter your Country">
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