
<?php $__env->startSection('heading', 'Photos Gallery'); ?>
<?php $__env->startSection('button'); ?>
<a href="<?php echo e(route('admin_photo_create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Insert Photo</a>
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
                                <th>Photo</th>
                                <th>Caption</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                   
                                <td>
                                    <img src="<?php echo e(asset('uploads/'.$row->photo)); ?>" alt="" style="width: 150px"/>
                                </td>
                                <td><?php echo e($row->caption); ?></td>

                               

                                <td class="pt_10 pb_10">
                                    <a href="<?php echo e(route('admin_photo_edit',$row->id)); ?>" class="btn btn-primary">Edit</a>
                                  
                                    <a href="<?php echo e(route('admin_photo_delete',$row->id)); ?>" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\News\news_admin\resources\views/admin/photos/photo_show.blade.php ENDPATH**/ ?>