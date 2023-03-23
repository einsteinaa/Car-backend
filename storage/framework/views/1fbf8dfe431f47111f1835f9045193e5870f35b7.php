
<?php $__env->startSection('heading', 'Edit Sub Category'); ?>
<?php $__env->startSection('button'); ?>
    <a href="<?php echo e(route('admin_sub_category_show')); ?>" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>


    <div class="section-body">
        <form action="<?php echo e(route('admin_sub_category_update', $sub_category_single->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>Sub Category Name *</label>
                                <input type="text" class="form-control" name="sub_category_name"
                                    value="<?php echo e($sub_category_single->sub_category_name); ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label>Show on menu?</label>
                                <select name="show_on_menu" class="form-control">
                                    <option value="Show" <?php if($sub_category_single->show_on_menu == 'Show'): ?> selected <?php endif; ?>>Show</option>
                                    <option value="Hide" <?php if($sub_category_single->show_on_menu == 'Hide'): ?> selected <?php endif; ?>>Hide</option>


                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label>Show on Home?</label>
                                <select name="show_on_home" class="form-control">
                                    <option value="Show" <?php if($sub_category_single->show_on_home == 'Show'): ?> selected <?php endif; ?>>Show</option>
                                    <option value="Hide" <?php if($sub_category_single->show_on_home == 'Hide'): ?> selected <?php endif; ?>>Hide</option>


                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label>Sub Category Order *</label>
                                <input type="number" class="form-control" name="sub_category_order"
                                    value="<?php echo e($sub_category_single->sub_category_order); ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label>Select Category *</label>
                                <select name="category_id" class="form-control">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id); ?>"
                                            <?php if($sub_category_single->category_id == $row->id): ?> selected <?php endif; ?>><?php echo e($row->category_name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

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

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\News\news_admin\resources\views/admin/sub_category_edit.blade.php ENDPATH**/ ?>