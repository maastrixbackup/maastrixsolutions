  <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">



          <!-- Main Sidebar Container -->
          <aside class="main-sidebar sidebar-dark-primary elevation-4">
              <!-- Brand Logo -->
              <a href="{{ url('dashboard') }}" class="brand-link">


                  <div class="maas_logo">

                      <img src="{{ url('images/logo-blue.png') }}" alt="" title="" class=""
                          width="30px" height="100px">
                  </div>

              </a>

              <!-- Sidebar -->
              <div class="sidebar">
                  <!-- Sidebar user panel (optional) -->
                  <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

                  <!-- Sidebar Menu -->
                  <nav class="mt-2">
                      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                          data-accordion="false">
                          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                          <li class="nav-item">
                              <a href="{{ url('dashboard') }}"
                                  class="nav-link  {{ request()->is('dashboard') ? 'active' : '' }}">
                                  <i class="fas fa-tv"></i>
                                  <p>Dashboard</p>
                              </a>
                          </li>
                          <li
                              class="nav-item has-treeview {{ request()->is(['Managecarddetails', 'home/Section2', 'home/WhyChooseUs']) ? 'menu-open' : '' }}">
                              <a href="#" class="nav-link">
                                  <i class="fas fa-home"></i>
                                  <p>Manage Home Page<i class="fas fa-angle-right right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ url('Managecarddetails') }}"
                                          class="nav-link {{ request()->is(['Managecarddetails']) ? 'active' : '' }}">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Report Card</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('siteintroduction') }}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Wesite Introduction</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('home/Section2') }}"
                                          class="nav-link {{ request()->is(['home/Section2']) ? 'active' : '' }}">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Services</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('home/WhyChooseUs') }}"
                                          class="nav-link {{ request()->is(['home/WhyChooseUs']) ? 'active' : '' }}">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>WhyChoose Us</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li
                              class="nav-item has-treeview {{ request()->is(['manageaboutMaastrix', 'Managecarddetails']) ? 'menu-open' : '' }}">
                              <a href="#" class="nav-link">
                                  <i class="fas fa-user"></i>
                                  <p>Manage About Us<i class="fas fa-angle-right right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ url('manageaboutMaastrix') }}"
                                          class="nav-link {{ request()->is(['manageaboutMaastrix']) ? 'active' : '' }}">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>About Maastrix</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('Managecarddetails') }}"
                                          class="nav-link {{ request()->is(['Managecarddetails']) ? 'active' : '' }}">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Who we are</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('siteintroduction') }}"
                                          class="nav-link {{ request()->is(['siteintroduction']) ? 'active' : '' }}">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>How We Work</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('siteintroduction') }}"
                                          class="nav-link {{ request()->is(['siteintroduction']) ? 'active' : '' }}">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Our Team</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li
                              class="nav-item has-treeview {{ request()->is(['services/about', 'home/Services']) ? 'menu-open' : '' }}">
                              <a href="#" class="nav-link">
                                  <i class="fas fa-diagnoses"></i>
                                  <p>Manage Services<i class="fas fa-angle-right right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ url('services/about') }}"
                                          class="nav-link {{ request()->is(['services/about']) ? 'active' : '' }}">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Services About</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ url('home/Services') }}"
                                          class="nav-link {{ request()->is(['home/Services']) ? 'active' : '' }}">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Services</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('home/Portfolio') }}"
                                  class="nav-link {{ request()->is('home/Portfolio') ? 'active' : '' }}">
                                  <i class="fas fa-users"></i>
                                  <p>Manage Portfolio</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('home/Clients') }}"
                                  class="nav-link {{ request()->is('home/Clients') ? 'active' : '' }}">
                                  <i class="fas fa-users"></i>
                                  <p>Manage Clients</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('ContactUsList') }}"
                                  class="nav-link  {{ request()->is('ContactUsList') ? 'active' : '' }}">
                                  <i class="fas fa-envelope"></i>
                                  <p>Contact Us</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('GetAQuoteList') }}"
                                  class="nav-link  {{ request()->is('GetAQuoteList') ? 'active' : '' }}">
                                  <i class="fas fa-tasks"></i>
                                  <p>Get a Quote</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('CarrersListApplyJob') }}"
                                  class="nav-link  {{ request()->is('CarrersListApplyJob') ? 'active' : '' }}">
                                  <i class="fas fa-briefcase"></i>
                                  <p>Careers</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('ManageBanner') }}"
                                  class="nav-link {{ request()->is('ManageBanner') ? 'active' : '' }}">
                                  <i class="fas fa-flag"></i>
                                  <p>Manage All Banners</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('Testimonial') }}"
                                  class="nav-link {{ request()->is('Testimonial') ? 'active' : '' }}">
                                  <i class="fas fa-user"></i>
                                  <p>Manage Testimonials</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('AddContact') }}"
                                  class="nav-link  {{ request()->is('AddContact') ? 'active' : '' }}">
                                  <i class="fas fa-envelope"></i>
                                  <p>Manage Contact Details</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('managesocialmedia') }}"
                                  class="nav-link  {{ request()->is('managesocialmedia') ? 'active' : '' }}">
                                  <i class="fas fa-envelope"></i>
                                  <p>Manage SocialMedia Details</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('ManageJobOpening') }}"
                                  class="nav-link  {{ request()->is('ManageJobOpening') ? 'active' : '' }}">
                                  <i class="fas fa-id-card"></i>
                                  <p>Manage Job Openings</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('page/DesignDemo') }}"
                                  class="nav-link {{ request()->is('page/DesignDemo') ? 'active' : '' }}">
                                  <i class="fas fa-flag"></i>
                                  <p>Manage Design Demo</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('home/Portfolio') }}"
                                  class="nav-link {{ request()->is('home/Portfolio') ? 'active' : '' }}">
                                  <i class="fas fa-users"></i>
                                  <p>Manage Careers</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('ManageScrollImage') }}"
                                  class="nav-link  {{ request()->is('ManageScrollImage') ? 'active' : '' }}">
                                  <i class="fas fa-id-card"></i>
                                  <p>Manage Footer scroling image</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('managefaq') }}"
                                  class="nav-link  {{ request()->is('managefaq') ? 'active' : '' }}">
                                  <i class="fas fa-id-card"></i>
                                  <p>Manage FAQ's</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('manageprivacypolicy') }}"
                                  class="nav-link  {{ request()->is('manageprivacypolicy') ? 'active' : '' }}">
                                  <i class="fas fa-id-card"></i>
                                  <p>Manage Privacy Policy</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('blog-manage') }}"
                                  class="nav-link  {{ request()->is('blog-manage') ? 'active' : '' }}">
                                  <i class="fas fa-id-card"></i>
                                  <p>Manage Blogs</p>
                              </a>
                          </li>
                      </ul>
                      </li>
                      </ul>
                  </nav>
                  <div class="nav_left_img">
                      <img src="{{ url('dist/img/nav_left_img-bg.png') }}">
                      <h5>Maastrix Admin Dashboard</h5>
                      <p>© 2022 All Rights Reserved</p>
                  </div>
                  <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
          </aside>

          <!-- Content Wrapper. Contains page content -->
          <!-- Content Header (Page header) -->

          <!-- /.content-header -->



          <div class="driver_regd_cont">

          </div>



          <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2020 Quiq Claim.</strong>
    All rights reserved.

  </footer> -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="{{ url('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
          $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- ChartJS -->
      <script src="{{ url('plugins/chart.js/Chart.min.js') }}"></script>
      <!-- Sparkline -->
      <script src="{{ url('plugins/sparklines/sparkline.js') }}"></script>
      <!-- JQVMap -->
      <script src="{{ url('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
      <script src="{{ url('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
      <!-- jQuery Knob Chart -->
      <script src="{{ url('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
      <!-- daterangepicker -->
      <script src="{{ url('plugins/moment/moment.min.js') }}"></script>
      <script src="{{ url('plugins/daterangepicker/daterangepicker.js') }}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{ url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
      <!-- Summernote -->
      <script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
      <!-- overlayScrollbars -->
      <script src="{{ url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
      <!-- AdminLTE App -->
      <script src="{{ url('dist/js/adminlte.js') }}"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="{{ url('dist/js/pages/dashboard.js') }}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{ url('dist/js/demo.js') }}"></script>
  </body>

  </html>

  <style>
      .nav-items {
          border: none;

          font-size: 20px;
          color: #fff;
          padding: 10px 20px;
          cursor: pointer;
      }
  </style>



  <script>
      let lis = document.querySelectorAll('li');
      lis.forEach(li => {
          li.addEventListener('click', function() {
              lis.forEach(E => E.classList.remove('active'));
              this.classList.add('active');
          });
      });
  </script>
