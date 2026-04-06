@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<script type="text/javascript">
  function submit_form(){  
  var message = document.getElementById('message').value;
  var content = document.getElementById('content').value;

  // alert(banner);
    if(message == ""){
      alert("Please Enter Message");
      return false;
    }
    if(content == ""){
      alert("Please write Content");
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
              <h1 class="m-0 text-dark">Website Introduction Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Website introduction</li>
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
              <h3 class="card-title">Add Welcome Content</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <form method="POST" id="upload-file" action="{{ url('saveintroduction') }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      <div class="form-group">
                        <label for="exampleInputEmail1">Welcome Message</label>
                        <input type="text" name="message" class="form-control" id="message" placeholder="Enter Welcome Message">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Content</label>
                        <textarea name="content" class="form-control" id="content" placeholder="Enter content"></textarea>
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