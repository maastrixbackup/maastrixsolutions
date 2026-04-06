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
              <h1 class="m-0 text-dark">Design Demo Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Design Demo</li>
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
              <h3 class="card-title">Edit Design Demo</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
             @foreach($design as $design_demo)
              <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('updatedesigndemo/'.$design_demo->id) }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      <div class="form-group">
                       <label for="exampleInputEmail1">Category</label>
                       <select name="category" class="form-control" id="category">
                          <option value="responsive" <?php if($design_demo->category == "responsive"){ ?>
                            selected <?php }?> >Responsive</option>
                          <option value="adminpanel" <?php if($design_demo->category== "adminpanel"){ ?>selected <?php }?>>Admin Panel</option>
                          <option value="logo" <?php if($design_demo->category== "logo"){ ?>selected <?php }?>>Logo</option>
                          <option value="ecommerce" <?php if($design_demo->category== "ecommerce"){ ?>selected <?php }?>>Ecommerce</option>
                          <option value="parallax" <?php if($design_demo->category== "parallax"){ ?>selected <?php }?>>Parallax</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Design Demo name" value="{{$design_demo->name}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Design ID</label>
                        <input type ="text" name="design_id" class="form-control" id="design_id" placeholder="Enter Design_id" value="{{$design_demo->design_id}}">
                      </div>
                      <!-- <img src="{{url('DesignDemo/'.$design_demo->image)}}" style="height: 27px; width:55px;"> -->
                     <!--  <div class="form-group">
                        <label for="exampleInputEmail1">Design Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                      </div> -->
                     <input class="btn btn-success" onclick="return submit_form()"  type="submit" name="submit" value="Submit"/> 
                </form>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 @endsection