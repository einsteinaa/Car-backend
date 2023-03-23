
<?php $__env->startSection('heading', 'Edit Posts'); ?>
<?php $__env->startSection('button'); ?>
    <a href="<?php echo e(route('author_post_show')); ?>" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>


    <div class="section-body">
        <form action="<?php echo e(route('author_post_update', $post_single->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>Post Title *</label>
                                <input type="text" class="form-control" name="post_title"
                                    value="<?php echo e($post_single->post_title); ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label>Post Detail *</label>
                                <textarea name="post_detail" class="form-control snote" cols="30" rows="10"><?php echo e($post_single->post_detail); ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label>Artical Source Name If Any </label>
                                <input type="text" class="form-control" name="post_detail_src"
                                    value="<?php echo e($post_single->post_detail_src); ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label>Existing Post Photo</label>
                                <div>
                                    <img src="<?php echo e(asset('uploads/' . $post_single->post_photo)); ?>" style="width: 200px;" />

                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Change Photo </label>
                                <div>
                                    <input type="file" class="" name="post_photo">

                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Artical Photo Source Name If Any </label>
                                <input type="text" class="form-control" name="post_photo_src"
                                    value="<?php echo e($post_single->post_photo_src); ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label>Select Category *</label>
                                <select name="category_id" class="form-control select2">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"
                                            <?php if($item->id == $post_single->category_id): ?> selected <?php endif; ?>><?php echo e($item->category_name); ?>

                                        </option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    

                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Is Shareable?</label>
                                <select name="is_share" class="form-control">
                                    <option value="1" <?php if($post_single->is_share == 1): ?> selected <?php endif; ?>>Yes</option>
                                    <option value="0" <?php if($post_single->is_share == 0): ?> selected <?php endif; ?>>No</option>

                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label>Is Comment?</label>
                                <select name="is_comment" class="form-control">
                                    <option value="1" <?php if($post_single->is_comment == 1): ?> selected <?php endif; ?>>Yes</option>
                                    <option value="0" <?php if($post_single->is_comment == 0): ?> selected <?php endif; ?>>No</option>

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

<?php echo $__env->make('author.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\News\news_admin\resources\views/author/post/post_edit.blade.php ENDPATH**/ ?>