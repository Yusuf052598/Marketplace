<div class="am-sideleft">
    <ul class="nav am-sideleft-tab">
        <li class="nav-item">
            <a href="#mainMenu" class="nav-link active"><i class="icon ion-ios-home-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"></a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="mainMenu" class="tab-pane active">
            <ul class="nav am-sideleft-menu">
                @role('moderator_role|super_admin_role')
                    <li class="nav-item">
                        <a href="{{route('admin')}}" class="nav-link text-dark">
                            <i class="fa fa-home"></i>Dashboard
                        </a>
                    </li><!-- nav-item -->
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="{{route('slider')}}" class="nav-link text-dark">
                        <i class="fa fa-sliders"></i>Slider
                    </a>
                </li><!-- nav-item -->
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="{{route('notify')}}" class="nav-link text-dark">
                        <i class="fa fa-sticky-note"></i>Notify
                    </a>
                </li><!-- nav-item -->
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="{{route('announce')}}" class="nav-link text-dark">
                        <i class="fa fa-sticky-note"></i>Announce
                    </a>
                </li><!-- nav-item -->
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="{{route('ad')}}" class="nav-link text-dark">
                        <i class="fa fa-safari"></i>Advertisement
                    </a>
                </li><!-- nav-item -->
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="{{route('articles')}}" class="nav-link text-dark">
                        <i class="fa fa-money"></i>Articles
                    </a>
                </li><!-- nav-item -->
                @endrole
                @role('moderator_role|super_admin_role')
                    <li class="nav-item">
                        <a href="{{route('news')}}" class="nav-link text-dark">
                            <i class="fa fa-newspaper-o"></i> News
                        </a>
                    </li><!-- nav-item -->
                @endrole
                 @role('super_admin_role')
                    <li class="nav-item">
                        <a href="{{route('users')}}" class="nav-link text-dark">
                            <i class="fa fa-user"></i>Users
                        </a>
                    </li>
                @endrole
                @role('super_admin_role')
                    <li class="nav-item">
                        <a href="{{route('categories')}}" class="nav-link text-dark">
                            <i class="fa fa-hacker-news"></i>Categories
                        </a>
                    </li>
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="{{route('permission')}}" class="nav-link text-dark">
                        <i class="fa fa-key"></i>Permission
                    </a>
                </li>
                @endrole
                @role('super_admin_role')
                   <li class="nav-item">
                       <a href="{{route('role')}}" class="nav-link text-dark">
                             <i class="fa fa-rocket"></i>Role
                       </a>
                  </li>
                @endrole
                @role('super_admin_role')
                    <li class="nav-item">
                        <a href="{{route('permission_user')}}" class="nav-link text-dark">
                            <i class="fa fa-bank"></i>User Give Permission
                        </a>
                    </li>
                @endrole
                @role('super_admin_role')
                    <li class="nav-item">
                        <a href="{{route('user_role')}}" class="nav-link text-dark">
                            <i class="fa fa-gear"></i> User Give Role
                        </a>
                    </li>
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="{{route('marketplace')}}" class="nav-link text-dark">
                        <i class="fa fa-gear"></i>Marketplace
                    </a>
                </li>
                @endrole
            </ul>
        </div><!-- #mainMenu -->
    </div><!-- tab-content -->
</div><!-- am-sideleft -->

