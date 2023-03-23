<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/home') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_home') }}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('admin/setting') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_setting') }}"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a>
            </li>

            <li class="nav-item dropdown  {{ Request::is('admin/author/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Client Section</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/author/all') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_client_show') }}"><i class="fas fa-angle-right"></i> Client List</a>
                    </li>

                </ul>
            </li>

            <li class="{{ Request::is('admin/category/*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('admin_category_show') }}"><i class="fas fa-hand-point-right"></i> <span>Category</span></a>
        </li>

        <li class="{{ Request::is('admin/car/*') ? 'active' : '' }}"><a class="nav-link"
            href="{{ route('admin_car_show') }}"><i class="fas fa-hand-point-right"></i> <span>Car</span></a>
    </li>



            {{-- <li
                class="nav-item dropdown  {{ Request::is('admin/category/*') || Request::is('admin/sub-category/*') || Request::is('admin/post/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>News
                        Category</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/category/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_category_show') }}"><i class="fas fa-angle-right"></i> Categories</a>
                    </li>
                    <li class="{{ Request::is('admin/sub-category/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_sub_category_show') }}"><i class="fas fa-angle-right"></i> Sub
                            Categories</a></li>

                    <li class="{{ Request::is('admin/post/*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_post_show') }}"><i class="fas fa-angle-right"></i> Posts</a></li>


                </ul>
            </li> --}}

   




 
        </ul>
    </aside>
</div>
