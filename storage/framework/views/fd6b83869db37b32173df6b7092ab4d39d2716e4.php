<?php $__env->startSection('title','SMS Manage'); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <!-- end page title -->

    <div class="content-body">
        <div class="container">
            <div class="content-tab-title d-flex justify-content-between align-items-center">
                <h4><?php echo e(__('SMS Gateway')); ?></h4>
            </div>
        </div>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-category" role="tabpanel" area-labelledby="add-category-tab">
                <div class="container">
                    <form action="<?php echo e(route('backend.smsgeteway.update')); ?>" method="POST" class="row" data-parsley-validate="" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e(@$sms->id); ?>">


                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label for="api_key" class="form-label">API Key *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['api_key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="api_key" value="<?php echo e(@$sms->api_key); ?>" id="api_key" required="" />
                                <?php $__errorArgs = ['api_key'];
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


                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label for="serderid" class="form-label">Senderid *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['serderid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="serderid" value="<?php echo e(@$sms->serderid); ?>" id="serderid" required="" />
                                <?php $__errorArgs = ['serderid'];
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
                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label for="status" class="d-block">Status</label>
                                <label class="switch">
                                    <input type="checkbox" value="1" <?php if(@$sms->status==1): ?>checked <?php endif; ?> name="status" />
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
                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label for="order" class="d-block">Order confirm </label>
                                <label class="switch">
                                    <input type="checkbox" value="1" <?php if(@$sms->order==1): ?>checked <?php endif; ?> name="order" />
                                    <span class="slider round"></span>
                                </label>
                                <?php $__errorArgs = ['order'];
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
                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label for="forget_pass" class="d-block">Forgot password </label>
                                <label class="switch">
                                    <input type="checkbox" value="1" <?php if(@$sms->forget_pass==1): ?>checked <?php endif; ?> name="forget_pass" />
                                    <span class="slider round"></span>
                                </label>
                                <?php $__errorArgs = ['forget_pass'];
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
                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label for="password_g" class="d-block">Password Generator </label>
                                <label class="switch">
                                    <input type="checkbox" value="1" <?php if(@$sms->password_g==1): ?>checked <?php endif; ?> name="password_g" />
                                    <span class="slider round"></span>
                                </label>
                                <?php $__errorArgs = ['password_g'];
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

                        <div>
                            <button type="submit" class="btn btn-success text-white" value="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/100_shop/resources/views/backend/pages/apiintegration/sms_manage.blade.php ENDPATH**/ ?>