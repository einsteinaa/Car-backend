<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo e(route('admin_home')); ?>">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo e(route('admin_home')); ?>"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="<?php echo e(Request::is('admin/home') ? 'active' : ''); ?>"><a class="nav-link"
                    href="<?php echo e(route('admin_home')); ?>"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a>
            </li>
            <li class="<?php echo e(Request::is('admin/setting') ? 'active' : ''); ?>"><a class="nav-link"
                    href="<?php echo e(route('admin_setting')); ?>"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a>
            </li>

            <li class="nav-item dropdown  <?php echo e(Request::is('admin/author/*') ? 'active' : ''); ?>">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Client Section</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('admin/author/all') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_client_show')); ?>"><i class="fas fa-angle-right"></i> Client List</a>
                    </li>

                </ul>
            </li>

            <li class="<?php echo e(Request::is('admin/category/*') ? 'active' : ''); ?>"><a class="nav-link"
                href="<?php echo e(route('admin_category_show')); ?>"><i class="fas fa-hand-point-right"></i> <span>Category</span></a>
        </li>

        <li class="<?php echo e(Request::is('admin/car/*') ? 'active' : ''); ?>"><a class="nav-link"
            href="<?php echo e(route('admin_car_show')); ?>"><i class="fas fa-hand-point-right"></i> <span>Car</span></a>
    </li>



            

   




 
        </ul>
    </aside>
</div>
<?php /**PATH D:\Website\carRental\Car_Rent\car_rent_admin\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>