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
              <h1 class="m-0 text-dark">HomePage Banner Card Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Card</li>
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
              <h3 class="card-title">Add Card Details</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('savecarddetails') }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      <div class="form-group">
                        <label for="card_heading">Card Heading</label>
                        <input type="text" name="card_heading" class="form-control" id="card_heading" placeholder="Enter Card Heading">
                      </div>
                      <div class="form-group">
                        <label for="card_sub_heading">Card SubHeading</label>
                        <input type="text" name="card_sub_heading" class="form-control" id="card_sub_heading" placeholder="Enter Card Sub-Heading">
                      </div>
                      <div class="form-group">
                        <label for="image">Card Image</label>
                        <input type="file" name="image" class="form-control" id="image">
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