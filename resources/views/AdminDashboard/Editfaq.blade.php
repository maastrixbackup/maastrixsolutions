@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 <?php //echo'<pre>';print_r($editfaq);exit; ?>
  <div class="content-wrapper">

  <section class="admin_user">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="admin_user_head">
            <div class="admin_user_head_tag">
              <h1 class="m-0 text-dark">FAQ Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage FAQ's</li>
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
              <h3 class="card-title">Add FAQ's</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
             @foreach($editfaq as $edit)
              <form method="POST" id="upload-file" action="{{ url('updatefaq/'.$edit->id) }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                      <div class="form-group">
                        <label for="exampleInputEmail1">Question</label>
                        <input type="text" name="question" class="form-control" id="question" placeholder="Enter FAQ Question" value="{{$$edit->question}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Answer</label>
                        <textarea name="answer" class="form-control" id="answer" placeholder="Enter FAQ Answer">{{$$edit->answer}}</textarea>
                      </div>
                     <input class="btn btn-success" type="submit" name="submit" value="Submit"/> 
                </form>
             @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 @endsection