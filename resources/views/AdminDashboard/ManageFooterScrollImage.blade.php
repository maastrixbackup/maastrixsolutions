@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<style type="text/css">
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #2a8513;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<script>
  $(document).ready(function(){
    // alert("checking");
    $(':checkbox').click(function (){
      var id = $(this).attr('id');
        if ($(this).prop('checked')){   
          $.ajax({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url:'/Scrollstatus',
            type:'post',
            data:{id:id,status:1},
            success:function(res){
              // console.log(res);
              alert("Image Enabled!");
            }
          });
        }
        else{      
          $.ajax({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url:'/Scrollstatus',
            type:'post',
            data:{id:id,status:0},
            success:function(res){
              console.log(res);
              alert("Image Disabled !");

            }
          });
        }
    });
  });
</script>

<script>
  function myfun(obj){
   // var _obj = $(obj);
   var id =$(obj).attr('data-id'); 
   var text = "Are you Sure to Delete!!";
   // alert(id);
    if(confirm(text) == true){
      $.ajax({
        headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:'deleteBanner',
        type:'post',
        data:{id:id},
        success:function(response){
          console.log(response);
        }
      });
    }
 }
</script>
<script>
  $(document).ready(function(){
    // alert("check");
  });
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
              <h1 class="m-0 text-dark">Footer Scroll Image Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Footer Scroll Image</li>
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
              <h3 class="card-title">All Scrolling Image List</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <a class="btn btn-info" href="{{url('AddScrollImage')}}">Add New Scroll Image</a><br><br>
             <table class="table table-bordered" id="table_id">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($all_scroll_image as $scrl_img)
                 <tr>
                   <td>{{$scrl_img->id}}</td>
                   <td><img src="{{ url('Footer_Scroll_Images/'.$scrl_img->scroll_image) }}" width="10px" height="50"></td>
                    <td>
                      <label class="switch">
                        <input type="checkbox" <?php if($scrl_img->status==1){ ?> checked <?php } ?> id="{{$scrl_img->id}}">Activate
                        <span class="slider round"></span>
                      </label>
                    </td>
                    <td>
                       <a class="btn btn-app" href="{{url('delete/'.$scrl_img->id)}}" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                    </td>
                 </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 @endsection