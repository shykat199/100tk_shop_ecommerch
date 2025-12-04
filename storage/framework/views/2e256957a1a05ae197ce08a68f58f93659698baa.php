
<?php $__env->startSection('title','Payment Gateway - '); ?>
<?php $__env->startSection('content'); ?>

    <div class="content-body">
        <div class="container">
            <div class="main-content default-manu">
                <div class="content-tab-title">
                    <h4><?php echo e(__('Payment Gateway')); ?></h4>
                </div>
                <!-- Tab Manu End  -->
                <!-- Tab Content Start -->
                <div class="tab-content default-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="appearance" Area-labelledby="appearance-tab">
                        <div class="container">
                            <div class="card-group">
                                <?php $__currentLoopData = $payment_gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $payment_gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo e(ucfirst($payment_gateway->name)); ?></h5>
                                            <form id="paymentGatewayForm" class="add-brand-form"
                                                  action="<?php echo e(route('backend.payment_gateway.update',$payment_gateway->id)); ?>"
                                                  method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <div class="row">
                                                    <?php $__currentLoopData = json_decode($payment_gateway->configuration,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $config): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-lg-3">
                                                            <p><?php echo e($index); ?></p>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="input-group">
                                                                <input type="text"
                                                                       name="<?php echo e('configuration'.'['.$index.']'); ?>"
                                                                       class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                       value="<?php echo e($config??old($index)); ?>"
                                                                       placeholder="<?php echo e($index); ?>"
                                                                       required>

                                                                <?php $__errorArgs = [$index];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-lg-3">
                                                        <p><?php echo e(__('Status')); ?></p>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="input-group">
                                                            <div class="form-check form-switch btn-one-off">
                                                                <input type="hidden" value="0" name="status">
                                                                <input name="status"
                                                                       <?php if($payment_gateway->status || old('status')): ?>checked
                                                                       <?php endif; ?> class="form-check-input" value="1"
                                                                       type="checkbox">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 offset-2">
                                                    <div class="from-submit-btn">
                                                        <button class="submit-btn" type="submit"><?php echo e(__('Save')); ?></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab Content End  -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/100_shop/resources/views/backend/pages/payment_gateway/index.blade.php ENDPATH**/ ?>