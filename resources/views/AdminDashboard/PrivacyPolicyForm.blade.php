@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<script type="text/javascript">
  function submit_form(){  
  var heading = document.getElementById('heading').value;
  var poilcy = document.getElementById('policy').value;
//   alert(poilcy);
   if(heading == ""){
      alert("Please Enter poilcy Heading");
      return false;
    }
    if(poilcy == ""){
      alert("Please Enter poilcy");
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
              <h1 class="m-0 text-dark">Privacy Ploicy Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Privacy Ploicy</li>
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
              <h3 class="card-title">Add Privacy Ploicy</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
            <form method="POST" id="upload-file" action="{{ url('saveprivacypolicy') }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      <div class="form-group">
                      <label for="heading">Policy Heading</label>
                      <input type="text" name="heading" id="heading" class="form-control" placeholder="Enter Privacy Policy Heading">
                    </div>
                      <div class="form-group">
                        <label for="policy">Policy</label>
                        <textarea name="policy" class="form-control" id="policy" placeholder="Enter Client location"></textarea>
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