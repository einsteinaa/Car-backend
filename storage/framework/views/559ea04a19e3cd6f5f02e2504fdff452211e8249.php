<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo e(route('author_home')); ?>">Author Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo e(route('author_home')); ?>"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="<?php echo e(Request::is('author/home') ? 'active' : ''); ?>"><a class="nav-link"
                    href="<?php echo e(route('author_home')); ?>"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a>
            </li>

            <li class="<?php echo e(Request::is('author/post/*') ? 'active' : ''); ?>"><a class="nav-link"
                href="<?php echo e(route('author_post_show')); ?>"><i class="fas fa-hand-point-right"></i> <span>News Posts</span></a>
        </li>
            
                </ul>
            </li>
 
        </ul>
    </aside>
</div>
<?php /**PATH D:\Website\News\news_admin\resources\views/author/layout/sidebar.blade.php ENDPATH**/ ?>