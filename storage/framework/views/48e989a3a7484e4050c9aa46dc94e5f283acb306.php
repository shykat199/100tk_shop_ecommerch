<?php $__env->startSection('title','Tag Manager Manage'); ?>


<?php $__env->startSection('content'); ?>
    <div class="content-body">

    <!-- start page title -->

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="questions-and-answer" role="tabpanel" Area-labelledby="questions-and-answer-tab">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 mb-2">
                            <div class="title">
                                <h4><?php echo e(__('Tag Manager Manage')); ?></h4>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="float-md-end">
                                <a href="<?php echo e(route('backend.tagmanagers.create')); ?>">
                                    <button class="btn btn-primary text-white"> + <?php echo e(__('Add New Tag')); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content-table">
                        <table id="mDataTable" class="table p-table">
                            <thead>
                            <tr>
                                <th scope="col"><?php echo e(__('SL')); ?></th>
                                <th scope="col"><?php echo e(__('Tag Manager ID')); ?></th>
                                <th scope="col"><?php echo e(__('Status')); ?></th>
                                <th scope="col"><?php echo e(__('Action')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($value->code); ?></td>
                                    <td><?php if($value->status==1): ?><span class="badge bg-soft-success text-success">Active</span> <?php else: ?> <span class="badge bg-soft-danger text-danger">Inactive</span> <?php endif; ?></td>
                                    <td>
                                        <div class="button-list">
                                            <?php if($value->status == 1): ?>
                                                <form method="post" action="<?php echo e(route('backend.tagmanagers.inactive')); ?>" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" value="<?php echo e($value->id); ?>" name="hidden_id">
                                                    <button type="button" class="btn btn-xs  btn-secondary waves-effect waves-light change-confirm"><i class="text-white fa fa-thumbs-down"></i></button></form>
                                            <?php else: ?>
                                                <form method="post" action="<?php echo e(route('backend.tagmanagers.active')); ?>" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" value="<?php echo e($value->id); ?>" name="hidden_id">
                                                    <button type="button" class="btn btn-xs  btn-success waves-effect waves-light change-confirm"><i class="text-white fa fa-thumbs-up"></i></button>
                                                </form>
                                            <?php endif; ?>

                                            <a href="<?php echo e(route('backend.tagmanagers.edit',$value->id)); ?>" class="btn btn-xs btn-primary waves-effect waves-light"><i class="text-white fa fa-pencil-square"></i></a>


                                            <form method="post" action="<?php echo e(route('backend.tagmanagers.destroy')); ?>" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" value="<?php echo e($value->id); ?>" name="hidden_id">
                                                <button type="submit" class="btn btn-xs  btn-danger waves-effect waves-light"><i class="text-white fa fa-trash"></i></button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/100_shop/resources/views/backend/pages/tagmanager/index.blade.php ENDPATH**/ ?>