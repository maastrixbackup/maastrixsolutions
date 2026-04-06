@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<script type="text/javascript">
  function submit_form(){  
  var c_name = document.getElementById('client_name').value;
  var c_location = document.getElementById('loaction').value;
  // alert(img);
    if(c_name == ""){
      alert("Please Enter Client Name");
      return false;
    }
    if(c_location == ""){
      alert("Please Enter Client location");
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
              <h1 class="m-0 text-dark">Client Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Client</li>
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
              <h3 class="card-title">Add New Client</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              @foreach($clients as $clients)
              <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('updateclient/'.$clients->id) }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Client Name</label>
                        <input type="text" name="client_name" class="form-control" id="client_name" placeholder="Enter Client Name" value="{{$clients->client_name}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Location</label>
                        <input type ="text" name="loaction" class="form-control" id="location" placeholder="Enter Client location" value="{{$clients->loaction}}">
                      </div>
<!--                       <div class="form-group">
                        <label for="exampleInputEmail1">Client Image</label>
                        <input type="file" name="client_image" class="form-control" id="client_image">
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