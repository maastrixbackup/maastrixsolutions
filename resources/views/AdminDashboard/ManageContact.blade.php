@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<script>
  // $(document).ready(function(){
  //   // alert("checking");
  //   $(':checkbox').click(function (){
  //     var id = $(this).attr('id');
  //       if ($(this).prop('checked')){   
  //         $.ajax({
  //           headers: {
  //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //           },
  //           url:'/updateBanner',
  //           type:'post',
  //           data:{id:id,status:1},
  //           success:function(res){
  //             // console.log(res);
  //             alert("Banner Activated !");
  //           }
  //         });
  //       }
  //       else{      
  //         $.ajax({
  //           headers: {
  //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //           },
  //           url:'/updateBanner',
  //           type:'post',
  //           data:{id:id,status:0},
  //           success:function(res){
  //             console.log(res);
  //             alert("Banner Disabled !");

  //           }
  //         });
  //       }
  //   });
  // });
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
              <h3 class="card-title">Contact Details</h3>
            </div>
          </div>
          <div class="">
            <div class="card-body">
              <a class="btn btn-info" href="{{url('AddContact')}}">Add New Contact</a><br><br>
             <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Address</th>
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th style="width: 172px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($All_contact as $contact)
                 <tr>
                   <td>{{$contact->id}}</td>
                   <td>{{$contact->address}}</td>
                   <td>{{$contact->phone}}</td>
                   <td>{{$contact->email}}</td>
                   <td>{{$contact->website}}</td>
                   <td>
                    <a class="btn btn-app" href="editcontact/{{$contact->id}}"  style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-edit"></i> 
                    </a>
                    <a class="btn btn-app" href="deletecontact/{{$contact->id}}" style="height:38px;min-width:20px;padding: 8px 5px;">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                      <a class="btn btn-app" href="" style="height:38px;min-width:20px;padding: 8px 5px;">
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