
<?php $__env->startSection('title', 'Colors - '); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <?php echo $__env->make('productmanagement::includes.product_management', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-brand" role="tabpanel" Area-labelledby="add-brand-tab">
                <div class="container">
                    <div class="row bg-white d-flex justify-content-center gap-5">
                        <div class="col-lg-8 col-sm-12">
                            <div class="mb-2">
                                <h4 class="text-center">Color</h4>
                            </div>
                            <form action="<?php echo e(route('backend.variant.store')); ?>" class="d-flex gap-1" style="width: 100%" method="POST">
                                <?php echo csrf_field(); ?>
                                <div style="width: 50%">
                                    <input type="text" class="form-control" name="color" placeholder="Color Name" value="<?php echo e(old('color')); ?>">
                                    <span class="text-danger"><?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </div>
                                <div style="width: 50%">
                                    <input type="text" class="form-control" name="hex" placeholder="Hex Code" value="<?php echo e(old('hex')); ?>">
                                    <span class="text-danger"><?php $__errorArgs = ['hex'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success text-white">Add</button>
                                </div>
                            </form>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Hex Code</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($color->id); ?></th>
                                            <td><?php echo e($color->name); ?></td>
                                            <td><?php echo e($color->hex); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                <?php echo e($colors->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u849325218/domains/100tkshop.com/public_html/app/Modules/Backend/ProductManagement/Resources/views/variants/colors.blade.php ENDPATH**/ ?>