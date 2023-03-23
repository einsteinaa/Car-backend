

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($sub_category_data->sub_category_name); ?></h2>
                <nav class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
               
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($sub_category_data->sub_category_name); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                        
                <div class="category-page">
                    <div class="row">
                        <?php if(count($post_data)): ?>
                        <?php $__currentLoopData = $post_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-lg-6 col-md-12">
                            <div class="category-page-post-item">
                                <div class="photo">
                                    <img src="<?php echo e(asset('uploads/'.$item->post_photo)); ?>" alt="">
                                </div>
                                <div class="category">
                                    <span class="badge bg-success"><?php echo e($sub_category_data->sub_category_name); ?></span>
                                </div>
                                <h3><a href="<?php echo e(route('news_detail',$item->id)); ?>"><?php echo e($item->post_title); ?></a></h3>
                                <div class="date-user">
                         
                                    <div class="user">
                                        <?php if($item->author_id==0): ?>
                                            <?php $user_data = \App\Models\Admin::where('id',$item->admin_id)->first();
                                             ?>
                                        <?php else: ?>
                                        

                                        <?php endif; ?>
                                        <a href=""><?php echo e($user_data->name); ?></a>
                                    </div>
                          
                                    <div class="date">
                                        <?php
                                        $ts = strtotime($item->updated_at);
                                        $updated_date= date('d F Y',$ts);
        
                                ?>
                               
                                        <a href=""> <?php echo e($updated_date); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <span class="text-danger">No News Found </span>
                            <?php endif; ?>


                        <div class="col-md-12">
                            <?php echo e($post_data->links()); ?>

                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 sidebar-col">
                <?php echo $__env->make('front.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\News\news_admin\resources\views/front/sub_category.blade.php ENDPATH**/ ?>