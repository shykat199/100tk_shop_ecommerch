
<?php $__env->startSection('title','FAQ Category - '); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container">
        <?php echo $__env->make('backend.pages.faq_manager.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Tab Manu End -->
        </div>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-category" role="tabpanel" Area-labelledby="add-category-tab">
                <div class="container content-title">
                    <h4><?php echo e(__('FAQ Category Information')); ?></h4>
                </div>
                <div class="container">
                    <form id="faqForm" method="post" action="<?php echo e(route('backend.faq_category.store')); ?>" enctype="multipart/form-data" class="add-brand-form">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('backend.pages.faq_manager.faq_categories.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="col-lg-7 offset-3">
                            <div class="from-submit-btn">
                                <button class="submit-btn" type="submit"><?php echo e(__('Save')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/my/100_shop/resources/views/backend/pages/faq_manager/faq_categories/create.blade.php ENDPATH**/ ?>