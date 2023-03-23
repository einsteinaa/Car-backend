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
                        class="fas fa-hand-point-right"></i><span>Author Section</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('admin/author/all') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_author_show')); ?>"><i class="fas fa-angle-right"></i> Author List</a>
                    </li>


                


                </ul>
            </li>


            <li
                class="nav-item dropdown <?php echo e(Request::is('admin/top-advertisement') || Request::is('admin/home-advertisement') || Request::is('admin/sidebar-advertisement-*') ? 'active' : ''); ?>">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Advertisements</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('admin/top-advertisement') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_top_ad_show')); ?>"><i class="fas fa-angle-right"></i> Top
                            Advertisement</a></li>
                    <li class="<?php echo e(Request::is('admin/home-advertisement') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_home_ad_show')); ?>"><i class="fas fa-angle-right"></i> Home
                            Advertisement</a></li>
                    <li class="<?php echo e(Request::is('admin/sidebar-advertisement-*') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_sidebar_ad_show')); ?>"><i class="fas fa-angle-right"></i> Sidebar
                            Advertisement</a></li>

                </ul>
            </li>

            <li
                class="nav-item dropdown  <?php echo e(Request::is('admin/category/*') || Request::is('admin/sub-category/*') || Request::is('admin/post/*') ? 'active' : ''); ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>News
                        Category</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('admin/category/*') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_category_show')); ?>"><i class="fas fa-angle-right"></i> Categories</a>
                    </li>
                    <li class="<?php echo e(Request::is('admin/sub-category/*') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_sub_category_show')); ?>"><i class="fas fa-angle-right"></i> Sub
                            Categories</a></li>

                    <li class="<?php echo e(Request::is('admin/post/*') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_post_show')); ?>"><i class="fas fa-angle-right"></i> Posts</a></li>


                </ul>
            </li>

            <li class="<?php echo e(Request::is('admin/photo/*') ? 'active' : ''); ?>"><a class="nav-link"
                    href="<?php echo e(route('admin_photo_show')); ?>"><i class="fas fa-hand-point-right"></i> <span>Photo
                        Gallery</span></a>
            </li>


            <li class="nav-item dropdown <?php echo e(Request::is('admin/page/*') ? 'active' : ''); ?>">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('admin/page/about') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_page_about')); ?>"><i class="fas fa-angle-right"></i> About</a></li>
                    <li class="<?php echo e(Request::is('admin/page/faq') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_page_faq')); ?>"><i class="fas fa-angle-right"></i> FAQ</a></li>
                    <li class="<?php echo e(Request::is('admin/page/terms') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_page_terms')); ?>"><i class="fas fa-angle-right"></i> Terms and
                            Condition</a></li>
                    <li class="<?php echo e(Request::is('admin/page/privacy') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_page_privacy')); ?>"><i class="fas fa-angle-right"></i> Privacy
                            Policy</a></li>
                    <li class="<?php echo e(Request::is('admin/page/desclaimar') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_page_desclaimar')); ?>"><i class="fas fa-angle-right"></i> Desclaimar
                        </a></li>

                    <li class="<?php echo e(Request::is('admin/page/login') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_page_login')); ?>"><i class="fas fa-angle-right"></i> Login
                        </a></li>

                    <li class="<?php echo e(Request::is('admin/page/contact') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_page_contact')); ?>"><i class="fas fa-angle-right"></i> Contact
                        </a></li>


                </ul>
            </li>

            <li class="nav-item dropdown  <?php echo e(Request::is('admin/subscriber/*') ? 'active' : ''); ?>">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Subscribers</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('admin/subscriber/all') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_subscribers')); ?>"><i class="fas fa-angle-right"></i> All
                            Subscribers</a>
                    </li>


                    <li class=" <?php echo e(Request::is('admin/subscriber/send-email') ? 'active' : ''); ?>"><a class="nav-link"
                            href="<?php echo e(route('admin_subscribers_send_email')); ?>"><i class="fas fa-angle-right"></i> Send
                            Email to all</a></li>


                </ul>
            </li>

            <li class="<?php echo e(Request::is('admin/live-channel/*') ? 'active' : ''); ?>"><a class="nav-link"
                    href="<?php echo e(route('admin_live_channel_show')); ?>"><i class="fas fa-hand-point-right"></i> <span>Live
                        Channel</span></a>
            </li>
            <li class="<?php echo e(Request::is('admin/social-item/*') ? 'active' : ''); ?>"><a class="nav-link"
                href="<?php echo e(route('admin_social_item_show')); ?>"><i class="fas fa-hand-point-right"></i> <span>Social Icons</span></a>
        </li>

 
        </ul>
    </aside>
</div>
<?php /**PATH D:\Website\News\news_admin\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>