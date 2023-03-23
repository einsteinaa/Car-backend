

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Photo Gallery</h2>
                <nav class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="photo-gallery">
                <div class="row">
                    <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="photo-thumb">
                            <img src="<?php echo e(asset('uploads/'.$item->photo)); ?>" alt="">
                            <div class="bg"></div>
                            <div class="icon">
                                <a href="<?php echo e(asset('uploads/'.$item->photo)); ?>" class="magnific"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="photo-caption">
                            <a href=""><?php echo e($item->caption); ?></a>
                        </div>
                        <div class="photo-date">
                            <?php
                            $ts = strtotime($item->created_at);
                            $updated_date= date('d F Y',$ts);

                    ?>
                  
                            <i class="fas fa-calendar-alt"></i>  <?php echo e($updated_date); ?>

                        </div>
                    </div>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
 
                    <div class="col-md-12">
                        <?php echo e($photos->links()); ?>

                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\News\news_admin\resources\views/front/photo_gallery.blade.php ENDPATH**/ ?>