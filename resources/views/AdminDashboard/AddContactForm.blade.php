@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<script type="text/javascript">
  function submit_form(){  
  var address = document.getElementById('address').value;
  var phone = document.getElementById('phone').value;
  var email = document.getElementById('email').value;
  var website = document.getElementById('website').value;
  // alert(img);
    if(address == ""){
      alert("Please Enter Address");
      return false;
    }
    if(phone == ""){
      alert("Please Enter Phone No");
      return false;
    }
    if(email == ""){
      alert("Please Enter Email");
      return false;
    }
    if(website == ""){
      alert("Please Enter Website");
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
                @foreach($contactdetails as $show_contact)
              <form method="POST" id="upload-file" action="{{ url('SaveContact/'.$show_contact->id)}}">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" value="{{$show_contact->address}}">
                    </div>
                    <div class="form-group">
                      <label>Phone No</label>
                        <input type="text" name="phone" class="form-control" id="phone" value="{{$show_contact->phone}}" placeholder="Enter Phone No">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="{{$show_contact->email}}" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                      <label>Website</label>
                        <input type="text" name="website" class="form-control" id="website" value="{{$show_contact->website}}" placeholder="Enter website">
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