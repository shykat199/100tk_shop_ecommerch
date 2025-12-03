<?php $__env->startSection('title','Pixels Create'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!-- end page title -->

        <div class="content-body">
            <div class="container">
                <div class="content-tab-title d-flex justify-content-between align-items-center">
                    <h4><?php echo e(__('Tag Pixels Create')); ?></h4>
                    <div class="page-title-right">
                        <a href="<?php echo e(route('backend.pixels.index')); ?>" class="btn btn-primary text-white">
                            Manage Pages
                        </a>
                    </div>
                </div>
            </div>
            <!-- Tab Content Start -->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="add-category" role="tabpanel"
                     Area-labelledby="add-category-tab">
                    <div class="container">
                        <form action="<?php echo e(route('backend.pixels.store')); ?>" method="POST" class=row
                              data-parsley-validate="" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="code" class="form-label">Tag Manager ID *</label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                           name="code" value="<?php echo e(old('code')); ?>" id="code" required="">
                                    <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <!-- col-end -->
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="status" class="d-block">Status</label>
                                    <label class="switch">
                                        <input type="checkbox" value="1" name="status" checked>
                                        <span class="slider round"></span>
                                    </label>
                                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <!-- col end -->
                            <button type="submit" class="btn btn-success text-white" value="Submit">Create GMT</button>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Tab Content End -->
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('public/backEnd/')); ?>/assets/libs/parsleyjs/parsley.min.js"></script>
<script src="<?php echo e(asset('public/backEnd/')); ?>/assets/js/pages/form-validation.init.js"></script>
<script src="<?php echo e(asset('public/backEnd/')); ?>/assets/libs/select2/js/select2.min.js"></script>
<script src="<?php echo e(asset('public/backEnd/')); ?>/assets/js/pages/form-advanced.init.js"></script>
<script src="<?php echo e(asset('public/backEnd/')); ?>/assets/js/switchery.min.js"></script>
<script>
    $(document).ready(function(){
        var elem = document.querySelector('.js-switch');
        var init = new Switchery(elem);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/100_shop/resources/views/backend/pages/pixels/create.blade.php ENDPATH**/ ?>