
<?php $__env->startSection('title','Brands - '); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
    <?php echo $__env->make('productmanagement::includes.product_management', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Tab Content Start -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="add-brand" role="tabpanel" Area-labelledby="add-brand-tab">
                <div class="container">
                    <form class="add-brand-form" id="brandsForm" action="<?php if(auth()->guard('admin')->check()): ?><?php echo e(route('backend.brands.update',$brand->id)); ?><?php elseif(auth()->guard('seller')->check()): ?><?php echo e(route('seller.brands.update',$brand->id)); ?><?php endif; ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <?php echo $__env->make('productmanagement::brands.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="col-lg-7 offset-lg-3">
                            <div class="from-submit-btn">
                                <button class="submit-btn" type="submit"><?php echo e(__('Update')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u849325218/domains/100tkshop.com/public_html/app/Modules/Backend/ProductManagement/Resources/views/brands/edit.blade.php ENDPATH**/ ?>