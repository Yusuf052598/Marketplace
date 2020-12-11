<div class="header-top-area">
    <div class="fixed-header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="admin-logo logo-wrap-pro">
                        <a href="#"><img src="/Back/img/logo/log.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                    <div class="header-top-menu tabl-d-n">
                        <ul class="nav navbar-nav mai-top-nav">
                            <li class="nav-item"><a href="#" class="nav-link">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle" >
                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                    <span class="admin-name">
                                        @auth
                                        {{auth()->user()->name}}
                                        @endauth
                                    </span>
                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                </a>
                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                    <li><a href="#"><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>My Account</a>
                                    </li>
                                    <li><a href="#"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                    </li>
                                    <li><a href="#"><span class="adminpro-icon adminpro-money author-log-ic"></span>User Billing</a>
                                    </li>
                                    <li><a href="#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
                                    </li>
                                    <li>
                                       <a class="nav-link pr-2" href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <span class="adminpro-icon adminpro-locked author-log-ic"></span>
                                            Logout
                                            <form id="logout-form" action="{{route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('my-admin')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Dashboard</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcome End-->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul class="collapse dropdown-header-top">
                                    <li>
                                        <a href="#">Dashboard v.1</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Categories <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li>
                                        <a href="#">Inbox</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#others" href="#">Interface <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="others" class="collapse dropdown-header-top">
                                    <li>
                                        <a href="#">Profile</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Breadcome start-->
<div class="breadcome-area des-none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('my-admin')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Dashboard</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcome End-->
