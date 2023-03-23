
<?php $__env->startSection('heading', 'Edit Social Item'); ?>
<?php $__env->startSection('button'); ?>
<a href="<?php echo e(route('admin_social_item_show')); ?>" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>


    <div class="section-body">
        <form action="<?php echo e(route('admin_social_item_update',$social_item_data->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Icon Preview</label>
                            <i class="<?php echo e($social_item_data->icon); ?>" style="font-size:30px"></i>
                        </div>
                      
                        <div class="form-group mb-3">
                            <label>Icon *</label>
                            <input type="text" class="form-control" name="icon" value="<?php echo e($social_item_data->icon); ?>">
                        </div>

                            <div class="form-group mb-3">
                                <label>URL *</label>
                                <input type="text" class="form-control" name="url"
                                value="<?php echo e($social_item_data->url); ?>">
                            </div>
               
                    </div>
                </div>
            </div>

           
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\News\news_admin\resources\views/admin/social/social_item_edit.blade.php ENDPATH**/ ?>