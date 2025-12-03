<div class="row">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-3">
                    <p><?php echo e(__('Category')); ?>  <span class="text-red">*</span></p>
                </div>
                <div class="col-lg-7">
                    <div class="input-group">
                        <select class="form-control select2 form-select<?php echo e($errors->has('category_id') ? ' is-invalid' : ''); ?>" required id="category_id"
                                name="category_id">
                            <option value=""><?php echo e(__('Select Category')); ?></option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php if($blog->blog_category_id==$category->id ||old('category_id')==$category->id): ?> selected <?php endif; ?>><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <label class="error" id="category_id-error" for="category_id"><?php echo e($message); ?></label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <span class="title"><?php echo e(__('Title')); ?> <span class="text-red">*</span></span>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" class="form-control <?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" name="title"
                               value="<?php if($blog->title): ?><?php echo e($blog->title); ?><?php else: ?><?php echo e(old('title')); ?><?php endif; ?>"
                               placeholder=" Title" required>
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <label class="error" id="title-error" for="title"><?php echo e($message); ?></label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <span class="description"><?php echo e(__('Description')); ?></span></div>
                <div class="col-md-7">
                    <div class="input-group">
                        <textarea name="description" class="editor form-control"><?php echo e($blog->description); ?></textarea>
                    </div>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <label class="error" id="description-error" for="description"><?php echo e($message); ?></label>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-3">
                    <span class="tag"><?php echo e(__('Tag')); ?></span></div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" name="tag" class="form-control" value="<?php echo e($blog->tag); ?>">
                    </div>
                    <?php $__errorArgs = ['tag'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <label class="error" id="tag-error" for="tag"><?php echo e($message); ?></label>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-md-3">
                    <span class="image"><?php echo e(__('Image')); ?>

                        <span class="text-red">*</span></span>
                </div>
                <div class="col-md-7">
                    <img id="image" src="<?php echo e(URL::to('uploads/blogs/'.$blog->image)); ?>" alt="image" width="100">
                    <div class="input-group">
                        <input type="file" name="image" accept="image/*" type="file" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" class="form-control <?php $__errorArgs = ['favicon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php if($blog->image): ?><?php echo e($blog->image); ?><?php else: ?><?php echo e(old('image')); ?><?php endif; ?>">
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <label class="error" id="image-error" for="image"><?php echo e($message); ?></label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('js'); ?>
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {

                // validate form on keyup and submit
                $("#announcementsForm").validate({
                    ignore: ".note-editor *"
                });

                $('.editor').summernote({
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['codeview', 'help']]
                    ]
                });
            });
        })(jQuery);

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/my/100_shop/resources/views/backend/pages/blog/form.blade.php ENDPATH**/ ?>