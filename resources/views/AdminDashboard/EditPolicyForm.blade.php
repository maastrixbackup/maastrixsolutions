@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

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
                <li><a href=""></a>Manage Privacy Policy</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php //echo'<pre>';print_r($editpolicy);exit; ?>
  <section class="admin_user_table">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Add Privacy Policy</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              @foreach($editpolicy as $policy)
              <form method="POST" id="upload-file" action="{{ url('updateprivacypolicy/'.$policy->id)}}">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                  <div class="form-group">
                    <label for="heading">Policy Heading</label>
                    <input type="text" name="heading" id="heading" class="form-control" value="{{$policy->heading}}">
                  </div>
                  <div class="form-group">
                    <label for="policy">Policy</label>
                    <textarea name="policy" class="form-control" id="policy" placeholder="Enter Client location">{{$policy->policy}}</textarea>
                  </div>
                  <input class="btn btn-success" type="submit" name="submit" value="Update"/> 
              </form>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 @endsection