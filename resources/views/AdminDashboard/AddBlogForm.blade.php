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
              <h3 class="card-title">Add Blog</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" id="upload-file  " action="{{ url('save-blog') }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
                     <label>   
                     <div class="form-group">
                       <label for="portfolio_for">Blog Category</label>
                       <input type="text" class="form-control" name="blog_category" id="blog_category">
                      </div>
                      <div class="form-group">
                       <label for="portfolio_for">Blog Title</label>
                       <input type="text" class="form-control" name="blog_title" id="blog_title">
                      </div>
                    <label for="exampleInputEmail1">Blog Content</label><br>
                    <div class="card-body pad">
                      <div class="mb-8">
                        <textarea class="textarea" name="blog_content" id="blog_content"placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                         </textarea>
                      </div>
                    </div>
                  <div class="form-group">
                   <label for="features"><strong>Blog Image</strong></label>
                    <input type="file" name="blog_image" class=" form-control" id="blog_image">
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