<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="#"><img src="/Back/img/message/1.jpg" alt="" />
            </a>
            <h3>{{auth()->user()->name}}</h3>
            <p>Developer</p>
            <strong>AP+</strong>
        </div>
        <div class="left-custom-menu-adp-wrap">
            <ul class="nav navbar-nav left-sidebar-menu-pro">
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                       class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-toggle-off"></i>
                        <span class="mini-dn">Fields</span>
                    </a>
                </li>
                @role('super_admin_role|moderator_role')
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                       class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i>
                        <span class="mini-dn">Markets</span> <span class="indicator-right-menu mini-dn">
                            <i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{route('market.product')}}" class="dropdown-item">Markets menu</a>
                    </div>
                </li>
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-envelope"></i>
                        <span class="mini-dn">Categories</span>
                        <span class="indicator-right-menu mini-dn">
                            <i class="fa indicator-mn fa-angle-left"></i>
                        </span>
                    </a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{route('categories')}}" class="dropdown-item">Categories menu</a>
                    </div>
                </li>
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-money"></i>
                        <span class="mini-dn">Orders</span>
                        <span class="indicator-right-menu mini-dn">
                            <i class="fa indicator-mn fa-angle-left"></i>
                        </span>
                    </a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{route('order')}}" class="dropdown-item">Orders menu</a>
                    </div>
                </li>
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                       class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i>
                        <span class="mini-dn">Products</span>
                        <span class="indicator-right-menu mini-dn">
                            <i class="fa indicator-mn fa-angle-left"></i>
                        </span>
                    </a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{route('products')}}" class="dropdown-item">Products menu</a>
                    </div>
                </li>
                @endrole
                @role('super_admin_role|moderator_role')
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-car"></i>
                        <span class="mini-dn">Drivers</span>
                        <span class="indicator-right-menu mini-dn">
                            <i class="fa indicator-mn fa-angle-left"></i>
                        </span>
                    </a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="#" class="dropdown-item">Drivers menu</a>
                    </div>
                </li>
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-credit-card"></i>
                        <span class="mini-dn">Cards</span>
                        <span class="indicator-right-menu mini-dn">
                            <i class="fa indicator-mn fa-angle-left"></i>
                        </span>
                    </a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{route('cards.menu')}}" class="dropdown-item">Cards menu</a>
                    </div>
                </li>
                @endrole
                @role('super_admin_role')
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-building"></i>
                        <span class="mini-dn">Countries</span>
                        <span class="indicator-right-menu mini-dn">
                            <i class="fa indicator-mn fa-angle-left"></i>
                        </span>
                    </a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{route('regions')}}" class="dropdown-item">Regions menu</a>
                        <a href="{{route('cities')}}" class="dropdown-item">Cities menu</a>
                    </div>
                </li>
                @endrole
            </ul>
        </div>
    </nav>
</div>
