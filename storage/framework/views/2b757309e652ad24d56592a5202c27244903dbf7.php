
<?php $__env->startSection('heading','Dashboard'); ?>
<?php $__env->startSection('main_content'); ?>

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Active News</h4>
                </div>
                <div class="card-body">
                    12
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-book-open"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Pending News</h4>
                </div>
                <div class="card-body">
                    45
                </div>
            </div>
        </div>
    </div>
  
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('author.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\News\news_admin\resources\views/author/home.blade.php ENDPATH**/ ?>