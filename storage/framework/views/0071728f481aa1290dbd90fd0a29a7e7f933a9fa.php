
<?php $__env->startSection('heading', 'Setting'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('admin_setting_update')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                
                            <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="pt_0 tab-pane fade show active" id="v-1" role="tabpanel" aria-labelledby="v-1-tab">
                                        <!-- Photo Item Start -->
                                        <div class="form-group mb-3">
                                            <label>Company Name *</label>
                                            <input type="text" name="name"class="form-control" value="<?php echo e($setting_data->name); ?>">
                                        </div>
                                
                                        <div class="form-group mb-3">
                                            <label>Address *</label>
                                            <input type="text" name="address"class="form-control" value="<?php echo e($setting_data->address); ?>">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Email *</label>
                                            <input type="email" name="email"class="form-control" value="<?php echo e($setting_data->email); ?>">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Phone *</label>
                                            <input type="text" name="phone"class="form-control" value="<?php echo e($setting_data->phone); ?>">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>mobile </label>
                                            <input type="text" name="mobile"class="form-control" value="<?php echo e($setting_data->mobile); ?>">
                                        </div>
                                   
                                    </div>

                   
                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt_30">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\carRental\Car_Rent\car_rent_admin\resources\views/admin/setting/setting.blade.php ENDPATH**/ ?>