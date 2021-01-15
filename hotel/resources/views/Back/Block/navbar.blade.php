<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a class="nav-link pr-2" href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="adminpro-icon adminpro-locked author-log-ic"></span>
                Logout
                <form id="logout-form" action="{{route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
               </a>

            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
