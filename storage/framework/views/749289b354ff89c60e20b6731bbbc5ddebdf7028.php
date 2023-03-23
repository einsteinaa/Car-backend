
<?php $__env->startSection('heading', 'Add Client'); ?>
<?php $__env->startSection('button'); ?>
<a href="<?php echo e(route('admin_client_show')); ?>" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>


    <div class="section-body">
        <form action="<?php echo e(route('admin_client_store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label>Photo </label>
                            <div>
                            <input type="file" name="photo">

                            </div>
                        </div>
                      
                        <div class="form-group mb-3">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                            <div class="form-group mb-3">
                                <label>Email *</label>
                                <input type="text" class="form-control" name="email"
                                    value="">
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\carRental\Car_Rent\car_rent_admin\resources\views/admin/client/client_create.blade.php ENDPATH**/ ?>