
<?php $__env->startSection('heading', 'Edit Car'); ?>
<?php $__env->startSection('button'); ?>
    <a href="<?php echo e(route('admin_car_show')); ?>" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>

    <div class="section-body">
        <form action="<?php echo e(route('admin_car_update', $car_single->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Name *</label>
                                        <input type="text" class="form-control" name="name"
                                            value="<?php echo e($car_single->name); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group mb-3">
                                        <label>Model *</label>
                                        <input type="text" class="form-control" name="model"
                                            value="<?php echo e($car_single->model); ?>">
                                    </div>
                                </div>


                                <div class="col-md-6">

                                    <div class="form-group mb-3">
                                        <label>Price *</label>
                                        <input type="text" class="form-control" name="price"
                                            value="<?php echo e($car_single->price); ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group mb-3">
                                        <label>Select Category *</label>
                                        <select name="category_id" class="form-control">
                                            <option value=""> Select Category
                                            </option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($cat->id); ?>"
                                                    <?php if($cat->id == $car_single->category_id): ?> selected <?php endif; ?>>
                                                    <?php echo e($cat->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                

                        

                                <div class="col-md-6">


                                    <label>Car Image Change</label>
                                    <div>
                                        <input type="file" class="" name="image1">
                                    </div>
                                </div>


                                <div class="col-md-6">

                                    <label>Status *</label>
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if($car_single->status == 1): ?> selected <?php endif; ?>>Active
                                        </option>
                                        <option value="0" <?php if($car_single->status == 0): ?> selected <?php endif; ?>>Inactive
                                        </option>
                                    </select>
                                </div>

                          <div class="col-md-6">
                          <div class="form-group mb-3">
                            <label>Existing Post Photo</label>
                            <div>
                                <img src="<?php echo e(asset('uploads/' . $car_single->image1)); ?>" style="width: 200px;" />

                            </div>
                        </div>
                          </div>


                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label>Description *</label>
                                        <textarea name="description" class="form-control snote" cols="30" rows="10"><?php echo e($car_single->description); ?></textarea>
                                    </div>

                                </div>

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

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Website\carRental\Car_Rent\car_rent_admin\resources\views/admin/car/car_edit.blade.php ENDPATH**/ ?>