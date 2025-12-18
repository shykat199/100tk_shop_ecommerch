
<!-- TOP ROW: Add Order + Search -->
<div class="row align-items-center">

    <!-- LEFT: Add New Order Button -->
    <div class="col-md-6">
        <a href="<?php echo e(route('backend.create-order')); ?>"
           class="btn btn-success rounded-pill text-white">
            <i class="fa fa-plus me-1"></i> Add New Order
        </a>
    </div>

    <!-- RIGHT: Search -->
    <div class="col-md-6 text-end">
        <form class="custom_form d-inline-block">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control"
                       placeholder="Search orders...">
                <button class="btn btn-info rounded-pill ms-2 text-white">
                    <i class="fa fa-search"></i> Search
                </button>
            </div>
        </form>
    </div>

</div>

<!-- SECOND ROW: ACTION BUTTONS (BELOW) -->
<div class="row">
    <div class="col-12">
        <div class="d-flex flex-wrap gap-2">

            <button class="btn btn-success rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#asignUser">
                <i class="fa fa-user-plus me-1"></i> Assign User
            </button>

            <button class="btn btn-primary rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#changeStatus">
                <i class="fa fa-exchange me-1"></i> Change Status
            </button>

            <a class="btn btn-danger rounded-pill text-white order_delete" href="<?php echo e(route('backend.order-list-bulk_destroy')); ?>">
                <i class="fa fa-trash me-1"></i> Delete All
            </a>

            <a class="btn btn-info rounded-pill text-white multi_order_print" href="<?php echo e(route('backend.multi-order-print')); ?>">
                <i class="fa fa-print me-1"></i> Print
            </a>

            <a class="btn btn-info rounded-pill text-white multi_order_courier" href="<?php echo e(route('backend.order-bulk_courier', 'steadfast')); ?>?status=9">
                <i class="fa fa-truck me-1"></i> Steadfast
            </a>

            <button class="btn btn-info rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#pathao">
                <i class="fa fa-motorcycle me-1"></i> Pathao
            </button>

        </div>
    </div>
</div>
<?php
    $users = \App\Models\Frontend\User::get();
    $orderstatus = \App\Models\Frontend\OrderStatus::get();
?>

<div class="modal fade" id="asignUser" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo e(route('backend.order-assign')); ?>" id="order_assign">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="">Select..</option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->id); ?>"><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="changeStatus" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo e(route('backend.change-order-list-status')); ?>" id="order_status_form">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="order_status" id="order_status" class="form-control">
                            <option value="">Select..</option>
                            <?php $__currentLoopData = $orderstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="pathao" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pathao Courier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="order_sendto_pathao">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="pathaostore" class="form-label">Store</label>
                        <select name="pathaostore" id="pathaostore" class="pathaostore form-control" >
                            <option value="">Select Store...</option>
                            <?php if(isset($pathaostore['data']['data'])): ?>
                                <?php $__currentLoopData = $pathaostore['data']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($store['store_id']); ?>"><?php echo e($store['store_name']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <?php endif; ?>
                        </select>
                        <?php if($errors->has('pathaostore')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('pathaostore')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <!-- form group end -->
                    <div class="form-group mt-3">
                        <label for="pathaocity" class="form-label">City</label>
                        <select name="pathaocity" id="pathaocity" class="chosen-select pathaocity form-control" style="width:100%" >
                            <option value="">Select City...</option>
                            <?php if(isset($pathaocities['data']['data'])): ?>
                                <?php $__currentLoopData = $pathaocities['data']['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($city['city_id']); ?>"><?php echo e($city['city_name']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <?php endif; ?>
                        </select>
                        <?php if($errors->has('pathaocity')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('pathaocity')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <!-- form group end -->
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Zone</label>
                        <select name="pathaozone" id="pathaozone" class="pathaozone chosen-select form-control  <?php echo e($errors->has('pathaozone') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('pathaozone')); ?>"  style="width:100%">
                        </select>
                        <?php if($errors->has('pathaozone')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('pathaozone')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <!-- form group end -->
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Area</label>
                        <select name="pathaoarea" id="pathaoarea" class="pathaoarea chosen-select form-control  <?php echo e($errors->has('pathaoarea') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('pathaoarea')); ?>"  style="width:100%">
                        </select>
                        <?php if($errors->has('pathaoarea')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('pathaoarea')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <!-- form group end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).on('submit', 'form#order_assign', function(e){
        e.preventDefault();

        var url = $(this).attr('action');
        var method = $(this).attr('method') || 'GET';
        let user_id = $('select#user_id').val();

        var order_ids = $('input.checkbox:checked').map(function(){
            return $(this).val();
        }).get();

        if(order_ids.length === 0){
            swal({
                title: "Error!",
                text: "Please select an order first!",
                icon: "error",
                buttons: false,
            });
            return;
        }

        $.ajax({
            type: method,
            url: url,
            data: { user_id, order_ids },
            success: function(res){
                if(res.status === 'success'){
                    swal({
                        title: "Success!",
                        text: res.message,
                        icon: "success",
                        buttons: false,
                    });

                    setTimeout(function () {
                        window.location.reload();
                    }, 1500);

                } else {
                    swal({
                        title: "Error!",
                        text: "Something went wrong!",
                        icon: "error",
                        buttons: false,
                    });
                }
            },
            error: function () {
                swal({
                    title: "Error!",
                    text: "Request failed!",
                    icon: "error",
                    buttons: false,
                });
            }
        });
    });

    $(document).on('submit', 'form#order_status_form', function(e){
        e.preventDefault();
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        let order_status=$(document).find('select#order_status').val();

        var order = $('input.checkbox:checked').map(function(){
            return $(this).val();
        });
        var order_ids=order.get();

        if(order_ids.length ==0){

            swal({
                title: "Error!",
                text: 'Please Select An Order First !',
                icon: "error",
                buttons: false,
            });

            return ;
        }

        $.ajax({
            type:'GET',
            url:url,
            data:{order_status,order_ids},
            success:function(res){
                if(res.status=='success'){
                    swal({
                        title: "Success!",
                        text: res.message,
                        icon: "success",
                        buttons: false,
                    });
                    window.location.reload();

                }else{

                    swal({
                        title: "Error!",
                        text: 'Failed something wrong',
                        icon: "error",
                        buttons: false,
                    });
                }
            }
        });

    });

    $(document).on('click', '.order_delete', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        var order = $('input.checkbox:checked').map(function(){
            return $(this).val();
        });
        var order_ids=order.get();

        if(order_ids.length ==0){

            swal({
                title: "Error!",
                text: 'Please Select An Order First !',
                icon: "error",
                buttons: false,
            });
            return ;
        }

        $.ajax({
            type:'GET',
            url:url,
            data:{order_ids},
            success:function(res){
                if(res.status=='success'){

                    swal({
                        title: "Success!",
                        text: res.message,
                        icon: "success",
                        buttons: false,
                    });
                    window.location.reload();

                }else{

                    swal({
                        title: "Error!",
                        text: 'Failed something wrong',
                        icon: "error",
                        buttons: false,
                    });
                }
            }
        });

    });

    $(document).on('click', '.multi_order_print', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        var order = $('input.checkbox:checked').map(function(){
            return $(this).val();
        });
        var order_ids=order.get();

        if(order_ids.length ==0){
            swal({
                title: "Error!",
                text: "Please select an order first!",
                icon: "error",
                buttons: false,
            });
            return ;
        }
        $.ajax({
            type:'GET',
            url,
            data:{order_ids},
            success:function(res){
                if(res.status=='success'){
                    console.log(res.items, res.info);
                    var myWindow = window.open("", "_blank");
                    myWindow.document.write(res.view);
                }else{
                    swal({
                        title: "Error!",
                        text: "Failed something wrong!",
                        icon: "error",
                        buttons: false,
                    });
                }
            }
        });
    });

    $(document).on('click', '.multi_order_courier', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        console.log(url);
        var order = $('input.checkbox:checked').map(function(){
            return $(this).val();
        });
        var order_ids=order.get();

        if(order_ids.length ==0){
            swal({
                title: "Error!",
                text: "Please select an order first!",
                icon: "error",
                buttons: false,
            });
            return ;
        }

        $.ajax({
            type:'GET',
            url:url,
            data:{order_ids},
            success:function(res){
                if(res.status=='success'){

                    swal({
                        title: "Success!",
                        text: res.message,
                        icon: "success",
                        buttons: false,
                    });

                    window.location.reload();

                }else{

                    swal({
                        title: "Error!",
                        text: "Failed something wrong!",
                        icon: "error",
                        buttons: false,
                    });
                }
            }
        });

    });
</script>
<?php /**PATH /var/www/my/100_shop/resources/views/frontend/includes/order-nav-bar.blade.php ENDPATH**/ ?>