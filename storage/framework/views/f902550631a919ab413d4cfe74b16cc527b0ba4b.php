
<?php $__env->startSection('heading', 'Add Social Item'); ?>
<?php $__env->startSection('button'); ?>
<a href="<?php echo e(route('admin_social_item_show')); ?>" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>


    <div class="section-body">
        <form action="<?php echo e(route('admin_social_item_store')); ?>" method="post">
            <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                      
                        <div class="form-group mb-3">
                            <label>Icon *</label>
                            <input type="text" class="form-control" name="icon">
                        </div>

                            <div class="form-group mb-3">
                                <label>URL *</label>
                                <input type="text" class="form-control" name="url"
                                    value="">
                            </div>
               
                    </div>
                </div>
            </div>

           
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\News\news_admin\resources\views/admin/social/social_item_create.blade.php ENDPATH**/ ?>