<?php $__env->startSection('title','Payment Manage'); ?>
<?php $__env->startSection('css'); ?>
<style xmlns="http://www.w3.org/1999/html">
  .increment_btn,
  .remove_btn {
    margin-top: -17px;
    margin-bottom: 10px;
  }
</style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <!-- end page title -->

    <div class="content-body">
        <div class="container">
            <div class="content-tab-title d-flex justify-content-between align-items-center">
                <h4><?php echo e(__('Bkash Payment Manager')); ?></h4>
            </div>
        </div>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-category" role="tabpanel" area-labelledby="add-category-tab">
                <div class="container">
                    <form action="<?php echo e(route('backend.paymentgeteway.update')); ?>" method="POST" class="row" data-parsley-validate="" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e(@$bkash->id); ?>">
                        <input type="hidden" name="type" value="bkash">
                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label for="username" class="form-label">User Name *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" value="<?php echo e(@$bkash->username); ?>" id="username" required="" />
                                <?php $__errorArgs = ['username'];
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
                                <label for="app_key" class="form-label">App Key *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['app_key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="app_key" value="<?php echo e(@$bkash->app_key); ?>" id="app_key" required="" />
                                <?php $__errorArgs = ['app_key'];
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
                                <label for="app_secret" class="form-label">App Secret *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['app_secret'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="app_secret" value="<?php echo e(@$bkash->app_secret); ?>" id="app_secret" required="" />
                                <?php $__errorArgs = ['app_secret'];
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
                                <label for="base_url" class="form-label">Base Url *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['base_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="base_url" value="<?php echo e(@$bkash->base_url); ?>" id="base_url" required="" />
                                <?php $__errorArgs = ['base_url'];
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
                                <label for="password" class="form-label">Password *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" value="<?php echo e(@$bkash->password); ?>" id="password" required="" />
                                <?php $__errorArgs = ['password'];
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
                                    <input type="checkbox" value="1" <?php if(@$bkash->status==1): ?>checked <?php endif; ?> name="status" />
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

                        <div>
                            <button type="submit" class="btn btn-success text-white" value="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>

    <div class="content-body">
        <div class="container">
            <div class="content-tab-title d-flex justify-content-between align-items-center">
                <h4><?php echo e(__('Uddokkata Payment Manager')); ?></h4>
            </div>
        </div>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-category" role="tabpanel" area-labelledby="add-category-tab">
                <div class="container">
                    <form action="<?php echo e(route('backend.paymentgeteway.update')); ?>" method="POST" class="row" data-parsley-validate="" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e(@$shurjopay->id); ?>">
                        <input type="hidden" name="type" value="shurjopay">

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label for="username" class="form-label">User Name *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" value="<?php echo e(@$shurjopay->username); ?>" id="username" required="" />
                                <?php $__errorArgs = ['username'];
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
                                <label for="prefix" class="form-label">Prefix *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['prefix'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="prefix" value="<?php echo e(@$shurjopay->prefix); ?>" id="prefix" required="" />
                                <?php $__errorArgs = ['prefix'];
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
                                <label for="success_url" class="form-label">Success Url *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['success_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="success_url" value="<?php echo e(@$shurjopay->success_url); ?>" id="success_url" required="" />
                                <?php $__errorArgs = ['success_url'];
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
                                <label for="return_url" class="form-label">Return Url *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['return_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="return_url" value="<?php echo e(@$shurjopay->return_url); ?>" id="return_url" required="" />
                                <?php $__errorArgs = ['return_url'];
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
                                <label for="base_url" class="form-label">Base Url *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['base_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="base_url" value="<?php echo e(@$shurjopay->base_url); ?>" id="base_url" required="" />
                                <?php $__errorArgs = ['base_url'];
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
                                <label for="password" class="form-label">Password *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" value="<?php echo e(@$shurjopay->password); ?>" id="password" required="" />
                                <?php $__errorArgs = ['password'];
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
                                    <input type="checkbox" value="1" <?php if(@$shurjopay->status==1): ?>checked <?php endif; ?> name="status" />
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


<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/100_shop/resources/views/backend/pages/apiintegration/pay_manage.blade.php ENDPATH**/ ?>