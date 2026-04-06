@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<script type="text/javascript">
  function submit_form(){  
  var fb = document.getElementById('facebook').value;
  var tw = document.getElementById('twitter').value;
  var insta = document.getElementById('instagram').value;
  var linked = document.getElementById('linkedin').value;
  // alert(img);
    if(fb == ""){
      alert("Please Enter facebooklink");
      return false;
    }
    if(tw == ""){
      alert("Please Enter twitter link");
      return false;
    }
    if(insta == ""){
      alert("Please Enter Instagram Link");
      return false;
    }
    if(linked == ""){
      alert("Please Enter Linkedin Link");
      return false;
    }
  }
</script>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
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
              <h1 class="m-0 text-dark">Contact Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Contact</li>
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
              <h3 class="card-title">Manage Contact Details</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
                @foreach($social_media_links as $social)
              <form method="POST" id="socialmediaform" action="{{ url('savesocialmedia/'.$social->id)}}">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">FacebookLink</label>
                        <input type="text" name="facebook" class="form-control" id="facebook" placeholder="FacebookLink" value="{{$social->facebook}}">
                    </div>
                    <div class="form-group">
                      <label>TwitterLink</label>
                        <input type="text" name="twitter" class="form-control" id="twitter" value="{{$social->twitter   }}" placeholder="TwitterLink">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>LinkedIn Link</label>
                        <input type="text" name="linkedin" class="form-control" id="linkedin" value="{{$social->linkedin}}" placeholder="LinkedIn Link">
                    </div>
                    <div class="form-group">
                      <label>InstagramLink</label>
                        <input type="text" name="instagram" class="form-control" id="instagram" value="{{$social->instagram}}" placeholder="InstagramLink">
                    </div>
                  </div>
                  <input class="btn btn-success" onclick="return submit_form()"  type="submit" name="submit" value="Submit"/> 
                </div>
              </form>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 @endsection