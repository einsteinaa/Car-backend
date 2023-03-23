
<?php $__env->startSection('heading', 'Edit Client'); ?>
<?php $__env->startSection('button'); ?>
<a href="<?php echo e(route('admin_client_show')); ?>" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>


    <div class="section-body">
        <form action="<?php echo e(route('admin_client_update', $client_data->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Existing Photo </label>
                            <div>
                            <img src="<?php echo e(asset('uploads/'.$client_data->photo)); ?>" alt="" style="width:150px;">

                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Photo </label>
                            <div>
                            <input type="file" name="photo">

                            </div>
                        </div>
                      
                        <div class="form-group mb-3">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name" value="<?php echo e($client_data->name); ?>">
                        </div>

                            <div class="form-group mb-3">
                                <label>Email *</label>
                                <input type="text" class="form-control" name="email"
                                value="<?php echo e($client_data->email); ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password *</label>
                                <input type="text" class="form-control" name="password"
                                    value="">
                            </div>
                            <div class="form-group mb-3">
                                <label>Retype Password *</label>
                                <input type="text" class="form-control" name="retype_password"
                                    value="">
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

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\car rental system project\Car_Rent\car_rent_admin\resources\views/admin/client/client_edit.blade.php ENDPATH**/ ?>