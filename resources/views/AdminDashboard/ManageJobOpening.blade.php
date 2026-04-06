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
      background-color: #5ca31b;
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
            url:'/updatejobstatus',
            type:'post',
            data:{id:id,status:1},
            success:function(res){
              // console.log(res);
              alert("Job Activated !");
            }
          });
        }
        else{      
          $.ajax({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url:'/updatejobstatus',
            type:'post',
            data:{id:id,status:0},
            success:function(res){
              console.log(res);
              alert("Job Deactivated!");

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
              <h1 class="m-0 text-dark">Job  Management</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Manage Job Opening</li>
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
              <h3 class="card-title">All Job List</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <a class="btn btn-info" href="{{url('AddJob')}}">Add New Job</a><br><br>
             <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Job Title</th>
                    <th>Job Description</th>
                    <th>Job Location</th>
                    <th>Status</th>
                    <th style="width:146px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($All_job_list as $job_list)
                    <tr>
                      <td>{{$job_list->id}}</td>
                      <td>{{$job_list->job_title}}</td>
                      <td>{{$job_list->job_description}}</td>
                      <td>{{$job_list->location}}</td>
                      <td>
                        <label class="switch">
                          <input type="checkbox" <?php if($job_list->status==1){ ?> checked <?php } ?> id="{{$job_list->id}}">Activate
                          <span class="slider round"></span>
                        </label>
                      </td>
                      <td>                      
                        <a class="btn btn-app" href="editjob/{{$job_list->id}}" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-edit"></i> 
                      </a>
                        <a class="btn btn-app" href="deletejob/{{$job_list->id}}" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                      <a class="btn btn-app" href="{{url('viewjob/'.$job_list->id)}}" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-eye"></i>
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