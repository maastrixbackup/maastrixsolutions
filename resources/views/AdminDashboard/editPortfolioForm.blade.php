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
              <h1 class="m-0 text-dark">Portfolio Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Portfolio</li>
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
              <h3 class="card-title">Edit Portfolio</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              @foreach($portfolio as $portfolio)
                <form method="POST" enctype="multipart/form-data" id="upload-file  " action="{{ url('updatePortfolio/'.$portfolio->id) }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
                     <label>   
                     <div class="form-group">
                       <label for="portfolio_for">Portfolio For</label>
                       <select name="portfolio_for" class="form-control" id="portfolio_for">
                          <option value="wordpress"<?php if($portfolio->portfolio_for == "wordpress"){ ?> selected <?php } ?>>Word Press</option>
                          <option value="cake_php" <?php if($portfolio->portfolio_for == "cake_php"){ ?> selected <?php } ?>>Cake Php</option>
                          <option value="core_php" <?php if($portfolio->portfolio_for == "core_php"){ ?> selected <?php } ?>>Core Php</option>
                          <option value="phalcon" <?php if($portfolio->portfolio_for == "phalcon"){ ?> selected <?php } ?>>Phalcon</option>
                          <option value="laravel" <?php if($portfolio->portfolio_for == "laravel"){ ?> selected <?php } ?>>Laravel</option>
                          <option value="codeigniter" <?php if($portfolio->portfolio_for == "codeigniter"){ ?> selected <?php } ?>>Codeigniter</option>
                          <option value="yii" <?php if($portfolio->portfolio_for == "yii"){ ?> selected <?php } ?>>Yii</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="heading">Portfolio Heading</label>
                        <input type="text" name="heading" class="form-control" id="heading" placeholder="Enter Portfolio Heading" value="{{$portfolio->heading}}">
                      </div>
                        <label for="exampleInputEmail1">Portfolio Content</label><br>
                  <div class="card-body pad">
                    <div class="mb-8">
                      <textarea class="textarea" name="content" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$portfolio->content}}
                       </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                        <label for="technology">Technology</label>
                        <input type="text" name="technology" class="form-control" id="technology" placeholder="Enter Technology" value="{{$portfolio->technology}}">
                      </div>
                      <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Enter Type" value="{{$portfolio->type}}">
                      </div>
                  <div class="form-group">
                        <label for="url">Website</label>
                        <input type="text" name="url" class="form-control" id="url" placeholder="Enter Website" value="{{$portfolio->url}}">
                      </div>
                  <div class="form-group">
                   <label for="features"><strong>Portfolio Features</strong></label>
                    <textarea name="features" class="ckeditor form-control" id="features" placeholder="Enter portfolio features"> {{$portfolio->features}}</textarea>
                  </div>
                     <input class="btn btn-success" onclick="return submit_form()"  type="submit" name="submit" value="Update"/> 
                </form>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 @endsection