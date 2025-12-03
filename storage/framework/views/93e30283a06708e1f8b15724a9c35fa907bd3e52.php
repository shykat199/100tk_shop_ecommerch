
<?php $__env->startSection('title','Website Pages - '); ?>
<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('backend.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container">
            <div class="main-content default-manu">
            <?php echo $__env->make('backend.pages.blog.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Tab Manu End  -->
                <!-- Tab Content Start -->
                <div class="tab-content default-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="blog-category" Area-labelledby="blog-category-tab">
                        <div class="row">
                            <div class="col">
                                <div class="float-md-end">
                                    <a href="<?php echo e(route('backend.blog.create')); ?>">
                                        <button class="btn btn-warning pull-right"> <?php echo e(__('Add Blog')); ?></button>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="content-table">
                            <table id="mDataTable" class="table p-table">
                                <thead>
                                <tr>
                                    <th scope="col"><?php echo e(__('Id')); ?></th>
                                    <th scope="col"><?php echo e(__('Title')); ?></th>
                                    <th scope="col"><?php echo e(__('Description')); ?></th>
                                    <th scope="col"><?php echo e(__('Image')); ?></th>
                                    <th scope="col"><?php echo e(__('Action')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
                <!-- Tab Content End  -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <?php echo $__env->make('backend.includes.datatable_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        $(function() {

            "use strict";

            $(document).ready(function(){
                // DataTable
                var table = $('#mDataTable');
                table.DataTable({
                    ajax: "<?php echo e(route('backend.blog.list')); ?>",
                    columns: [
                        { data: 'id' },
                        { data: 'title' },
                        { data: 'description' },
                        { data: 'image' },
                        { data: 'action',searchable:false,sortable:false },
                    ]
                });

            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/my/100_shop/resources/views/backend/pages/blog/index.blade.php ENDPATH**/ ?>