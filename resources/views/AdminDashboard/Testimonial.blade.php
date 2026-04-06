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
      background-color: #2bad22;
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
            url:'/Testimonialstatus',
            type:'post',
            data:{id:id,status:1},
            success:function(res){
              // console.log(res);
              alert("Testimonial Enabled !");
            }
          });
        }
        else{      
          $.ajax({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url:'/Testimonialstatus',
            type:'post',
            data:{id:id,status:0},
            success:function(res){
              console.log(res);
              alert("Testimonial Disabled !");
            }
          });
        }
    });
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
              <h1 class="m-0 text-dark">Testimonial Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Testimonial</li>
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
              <h3 class="card-title">All Testimonials</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <a class="btn btn-info" href="{{url('AddTestimonial')}}">Add New Testimoinial</a><br><br>
             <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Name</th>
                    <th>Remark</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th style="width:120px;">Action</th>

                  </tr>
                </thead>
                <tbody>
                 @foreach($All_testimonial as $testimonial)
                 <tr>
                   <td>{{$testimonial->id}}</td>
                   <td>{{$testimonial->name}}</td>
                   <td>{{$testimonial->remark}}</td>
                    <td><img src="{{ url('testimonial_photo/'.$testimonial->photo) }}" width="10" height="45"></td>
                    <td>
                      <label class="switch">
                        <input type="checkbox" <?php if($testimonial->status==1){ ?> checked <?php } ?> id="{{$testimonial->id}}">Activate
                        <span class="slider round"></span>
                      </label>
                    </td>
                    <td>
                      <a class="btn btn-app" href="{{url('edittestimonial/'.$testimonial->id)}}" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-edit"></i> 
                      </a>
                      <a class="btn btn-app" href="{{url('deletetestimonial/'.$testimonial->id)}}" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                      <!-- <a class="btn btn-app" href="" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-tasks"></i>
                      </a> -->
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