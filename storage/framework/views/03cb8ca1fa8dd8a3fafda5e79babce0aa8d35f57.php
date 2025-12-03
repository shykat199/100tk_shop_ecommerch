
<?php $__env->startSection('title','FAQ Show - '); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="create-faq" role="tabpanel" Area-labelledby="create-faq-tab">
                <div class="container content-title">
                    <h4><?php echo e(__('FAQ Information')); ?></h4>
                </div>
                <div class="container">
                    <div class="row">
                        <form class="add-brand-form">
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><?php echo e(__('Category')); ?></p>
                                </div>
                                <div class="col-lg-7">
                                    <?php echo e($faq->category->name??''); ?>

                                </div>
                                <div class="col-lg-3">
                                    <p><?php echo e(__('Sub-Category')); ?></p>
                                </div>
                                <div class="col-lg-7">
                                    <?php echo e($faq->sub_category->name??''); ?>

                                </div>
                                <div class="col-lg-3">
                                    <p><?php echo e(__('Question')); ?></p>
                                </div>
                                <div class="col-lg-7">
                                    <?php echo e($faq->question??''); ?>

                                </div>
                                <div class="col-lg-3">
                                    <p><?php echo e(__('Answer')); ?></p>
                                </div>
                                <div class="col-lg-7">
                                    <?php echo e($faq->answer??''); ?>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/my/100_shop/resources/views/backend/pages/faq_manager/faq/show.blade.php ENDPATH**/ ?>