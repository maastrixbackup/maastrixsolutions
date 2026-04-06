  @extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<script type="text/javascript">
  function submit_form(){  
  var fld_cat = document.getElementById('fld_cat').value;
  var fld_name = document.getElementById('fld_name').value;
  var fld_type = document.getElementById('fld_type').value;
  // alert(img);
    if(fld_cat == ""){
      alert("Please Enter Field Category");
      return false;
    }
    if(fld_name == ""){
      alert("Please Enter Field Name");
      return false;
    }
    if(fld_type == ""){
      alert("Please Enter Field Type");
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
              <h1 class="m-0 text-dark">Questionnaire</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Questionnaire</li>
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
              <h3 class="card-title">Edit Questionnaire</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              @foreach($questionnaire as $questionnaire)
                <form method="POST" enctype="multipart/form-data" id="upload-file  " action="{{ url('updateQuestionnaire/'.$questionnaire->id) }}">
                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
                     <label> 
                      <div class="form-group">
                        <label for="fld_cat">Field category</label>
                        <input type="text" name="fld_cat" class="form-control" id="fld_cat" placeholder="Enter Field Category" value="{{$questionnaire->fld_cat}}">
                      </div>
                      <div class="form-group">
                        <label for="fld_cat">Type</label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Enter Development Type" value="{{$questionnaire->type}}">
                      </div>
                      <div class="form-group">
                        <label for="fld_name">Field Name</label>
                        <input type="text" name="fld_name" class="form-control" id="fld_name" placeholder="Enter Field Name" value="{{$questionnaire->fld_name}}">
                      </div>
                      <div class="form-group">
                        <label for="fld_type">Field Type</label>
                        <input type="text" name="fld_type" class="form-control" id="fld_type" placeholder="Enter Field Type" value="{{$questionnaire->fld_type}}">
                      </div>
                      <div class="form-group">
                        <label for="fld_type">Placeholder</label>
                        <input type="text" name="placeholder" class="form-control" id="placeholder" placeholder="Enter placeholder" value="{{$questionnaire->placeholder}}">
                      </div>
                      <div class="form-group">
                        <label for="fld_type">Input Name</label>
                        <input type="text" name="input_name" class="form-control" id="input_name" placeholder="Enter Input Name" value="{{$questionnaire->input_name}}">
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