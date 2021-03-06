<div class="am-header">
    <div class="am-header-left">
        <a id="naviconLeft" href="" class="am-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconLeftMobile" href="" class="am-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
        <a href="#" class="am-logo">Alife.uz</a>
    </div><!-- am-header-left -->

    <div class="am-header-right">

        <div class="dropdown dropdown-profile">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                <img src="/Back/img/img3.jpg" class="wd-32 rounded-circle" alt="">
                <span class="logged-name"><span class="hidden-xs-down">{{auth()->user()->name}}</span> <i class="fa fa-angle-down mg-l-3"></i></span>
            </a>
            <div class="dropdown-menu wd-200">
                <ul class="list-unstyled user-profile-nav">
                    <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                    <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                    <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                    <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                    <li>
                        <a href="">
                            <i class="icon ion-ios-folder-outline"></i> Collections
                        </a>
                    </li>
                    <li>
                        <a  href="{{ route('logout')}}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            <i class="icon ion-power"></i>
                            Exit
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </a>
                    </li>
                </ul>
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
    </div><!-- am-header-right -->
</div><!-- am-header -->
