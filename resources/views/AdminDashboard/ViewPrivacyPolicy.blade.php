@extends('AdminDashboard.layouts.DashInclude')
@section('DashInclude-section')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="admin_user">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="admin_user_head">
          <div class="admin_user_head_tag">
              <h1 class="m-0 text-dark">Privacy Policy View</h1>
            </div>
            <div class="admin_user_head_cont">
              <ul>
                <li><a href="" class="active">Home</a></li>
                <li>/</li>
                <li><a href=""></a>Privacy Policy View</li>
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
          @foreach($view_policy as $policy)
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Details of Privacy Policy</h3>
            </div>
            <div class="card-body">
              <h3><u>Policy Heading:</u></h3>{{$policy->heading}}
                <h3><u>Policy:</u></h3>{!!$policy->policy!!}
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  </div>


@endsection



