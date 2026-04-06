
<div class="wrapper">
  
  <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link header_icon" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-align-left bars"></i></a>
      </li>
      
    </ul>
    
    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->  
      <li class="nav-item dropdown">
        <a class="nav-link header_icon" data-toggle="dropdown" href="#">
          <i class="far fa-user" style="color: #37d159;"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
              </div>
            </div>
            <!-- Message End -->
          </a>
        </div>
      </li>
  <!-- /.navbar -->
</div>