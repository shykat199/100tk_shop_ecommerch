<div class="row">
    <div class="col-lg-3">
        <p><?php echo e(__('Name')); ?> <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                   name="name" value="<?php if($faq_category->name): ?><?php echo e($faq_category->name); ?><?php else: ?><?php echo e(old('name')); ?><?php endif; ?>"
                   required placeholder="Name"
                   autofocus>

            <?php if($errors->has('name')): ?>
                <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('name')); ?></strong>
            </span>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-lg-3">
        <p><?php echo e(__('Slug')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group">
            <input id="slug" type="text" class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   name="slug"
                   value="<?php if($faq_category->slug): ?><?php echo e($faq_category->slug); ?><?php else: ?><?php echo e(old('slug')); ?><?php endif; ?>" placeholder="Slug"
                   autofocus>

            <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>)
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <p><?php echo e(('Ordering Number')); ?></p>
    </div>
    <div class="col-lg-7">
        <div class="sm-title-group">
            <div class="input-group oder-input">
                <input name="order" min="0" max="1000" type="number"
                       class="form-control <?php echo e($errors->has('order') ? ' is-invalid' : ''); ?>"
                       placeholder="Order Level"
                       value="<?php if($faq_category->order): ?><?php echo e($faq_category->order); ?><?php else: ?><?php echo e(old('order')); ?><?php endif; ?>">
                <?php if($errors->has('order')): ?>
                    <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('order')); ?></strong>
            </span>
                <?php endif; ?>
            </div>
            <span class="sm-text"><?php echo e(__('Higher number has high priority')); ?></span>
        </div>
    </div>

    <div class="col-lg-3">
        <p><?php echo e(__('Icon(200x200)')); ?> <span class="text-red">*</span></p>
    </div>
    <div class="col-lg-7">
        <div class="input-group file-upload overflow-visible">
            <label class="file-title">Browse</label>
            <input id="icon" type="file" class="form-control<?php echo e($errors->has('icon') ? ' is-invalid' : ''); ?>"
                   name="icon" accept="image/*"
                   autofocus <?php if(Request::is('admin/faq_category/create')): ?>required <?php endif; ?>>

            <?php if($errors->has('icon')): ?>
                <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('icon')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>


</div>

<?php $__env->startPush('js'); ?>
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {
                $('#name').keyup(function (event) {
                    $("input[name='slug']").val(clean($(this).val()));
                });
                // validate form on keyup and submit
                $("#faqForm").validate();


            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/my/100_shop/resources/views/backend/pages/faq_manager/faq_categories/form.blade.php ENDPATH**/ ?>