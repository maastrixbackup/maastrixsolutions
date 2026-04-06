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
              <h1 class="m-0 text-dark">Blog Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Blog</li>
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
              <h3 class="card-title">Edit Blog</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
                @foreach($edit_blog as $blog)
                <form method="POST" enctype="multipart/form-data" id="upload-file  " action="{{ url('update-blog/'.$blog->id) }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
                     <label>   
                     <div class="form-group">
                       <label for="portfolio_for">Blog Category</label>
                       <input type="text" class="form-control" name="blog_category" id="blog_category" value="{{$blog->blog_category}}">
                      </div>
                      <div class="form-group">
                       <label for="portfolio_for">Blog Title</label>
                       <input type="text" class="form-control" name="blog_title" id="blog_title" value="{{$blog->blog_title}}">
                      </div>
                    <label for="exampleInputEmail1">Blog Content</label><br>
                    <div class="card-body pad">
                      <div class="mb-8">
                        <textarea class="textarea" name="blog_content" id="blog_content"placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        {{$blog->blog_content}}
                         </textarea>
                      </div>
                    </div>
                     <input class="btn btn-success"  type="submit" name="submit" value="Update"/> 
                </form>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 @endsection