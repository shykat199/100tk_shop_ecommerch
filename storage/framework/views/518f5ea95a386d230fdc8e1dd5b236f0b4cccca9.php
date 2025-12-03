<div class="content-tab-title">
    <h4><?php echo e(__('Blog List')); ?></h4>
</div>
<!-- Tab Manu Start  -->
<div class="nav nav-tabs p-tab-manu" id="nav-tab" role="tablist">
    <button class="nav-link <?php if(Request::is('admin/blog/category','admin/blog/category/*')): ?>active <?php endif; ?>" id="header-tab" data-bs-toggle="tab" data-bs-target="#header"
            type="button" role="tab" Area-controls="header" Area-selected="true"
            <?php if(url()->full()!=route('backend.blog.category.index')): ?> onclick="location.href='<?php echo e(route('backend.blog.category.index')); ?>'" <?php endif; ?>
    ><?php echo e(__('Category')); ?>

    </button>
    <button class="nav-link <?php if(Request::is('admin/blog','admin/blog/*')): ?>active <?php endif; ?>" id="blog-category-tab" data-bs-toggle="tab" data-bs-target="#blog-category" type="button"
            role="tab" Area-controls="blog-category" Area-selected="false"
            <?php if(url()->full()!=route('backend.blog.index')): ?> onclick="location.href='<?php echo e(route('backend.blog.index')); ?>'" <?php endif; ?>
    ><?php echo e(__('blog')); ?>

    </button>

</div>
<?php /**PATH /var/www/my/100_shop/resources/views/backend/pages/blog/nav.blade.php ENDPATH**/ ?>