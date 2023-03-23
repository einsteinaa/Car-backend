
<?php $__env->startSection('heading', 'News Posts'); ?>
<?php $__env->startSection('button'); ?>
<a href="<?php echo e(route('admin_post_create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Create New Posts</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Thumbnail</th>
                                <th>Post Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Author</th>
                                <th>Admin</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                             
                                <td><?php echo e($loop->iteration); ?></td>
                                <td>
                                    <img src="<?php echo e(asset('uploads/'.$row->post_photo)); ?>" alt="" style="width:100px">
                                </td>
                                <td><?php echo e($row->post_title); ?></td>

                                <td><?php echo e($row->rAllCategory->category_name); ?></td>
                            

                                <td><?php if(isset($row->rSubCategory->sub_category_name)): ?>
                                   <?php echo e($row->rSubCategory->sub_category_name); ?>

                                <?php endif; ?></td>
                                
                                <td><?php if($row->author_id != 0): ?>
                                    <?php echo e(\App\Models\Author::where('id',$row->author_id)->first()->name); ?>

                                    <?php endif; ?>
                                    </td>

                                <td><?php if($row->admin_id != 0): ?>
                                    <?php echo e(Auth::guard('admin')->user()->name); ?>

                                    <?php endif; ?>
                                    </td>
                            


                                <td class="pt_10 pb_10">
                                    <?php if($row->admin_id!=0): ?>
                                    <a href="<?php echo e(route('admin_post_edit',$row->id)); ?>" class="btn btn-primary">Edit</a>
                                  
                                    <a href="<?php echo e(route('admin_post_delete',$row->id)); ?>" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                    <?php endif; ?>
                                </td>
                               
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\News\news_admin\resources\views/admin/post/post_show.blade.php ENDPATH**/ ?>