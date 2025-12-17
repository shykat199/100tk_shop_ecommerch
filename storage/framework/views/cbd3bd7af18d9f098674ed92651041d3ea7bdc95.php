

<?php $__env->startSection('content'); ?>

<div class="row mt-2">
  <div class="col-12 mt-3" style="background-color: white;border-radius: 7px;">
      <div class="container">
          <h4>Products</h4>
          <div style="background-color: white">
              <table class="table table-striped">
                  <thead>
                  <tr>
                      <th style="font-weight: 800; width:14vw;">Name</th>
                      <th style="font-weight: 800;">Image</th>
                      <th style="font-weight: 800; width:7vw; text-align: center">Quantity</th>
                      <th style="font-weight: 800; width:7vw; text-align: center">Price</th>
                      <th style="font-weight: 800; width:7vw; text-align: center">Total</th>
                      <th style="font-weight: 800; width:3vw; text-align: center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $order->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td><?php echo e($order_details->product->name); ?></td>
                          <td>
                              <?php $__currentLoopData = $order_details->product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <img src="<?php echo e(URL::to('uploads/products/galleries/' . $image->image)); ?>" width="45px" height="45px" alt="product">
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </td>
                          <td>
                              <form action="<?php echo e(route('backend.order.product.qtyUpdate', $order_details->id)); ?>"
                                    method="POST">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('put'); ?>
                                  <div class="d-flex align-items-center">
                                      <input type="number" min="1" name="qty" value="<?php echo e($order_details->qty); ?>" class="form-control form-control-sm" style="width: 80px;">

                                      <button class="btn btn-sm btn-success ms-2" style="color: white">
                                          <i class="fa fa-refresh"></i>
                                      </button>
                                  </div>

                              </form>
                          </td>
                          <td><?php echo e($order_details->sale_price); ?></td>
                          <td><?php echo e($order_details->sale_price*$order_details->qty); ?></td>
                          <td>
                              <form action="<?php echo e(route('backend.order.product.delete', $order_details->id)); ?>"
                                    method="POST">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('delete'); ?>
                                  <button class="btn btn-sm btn-danger" type="submit" style="color: white">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              </form>
                          </td>
                      </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>

    <div class="col-12 mt-3 mb-2" style="background-color: white;border-radius: 7px;">
      <div class="container">
          <div class="col-12 pt-3" style="background-color: white;border-radius: 7px;">
              <h4>
                  Add Products
              </h4>

              <div style="background-color: white">
                  <input class="form-control mb-3" type="text" name="name" id="search-product" placeholder="Search Product">
                  <ul id="show-product" class="list-group" style="position: absolute;width: 39.5vw;overflow-y: auto;height: 20.5vh;padding: 2px;"></ul>
              </div>
          </div>
      </div>
  </div>

</div>


<form action="<?php echo e(route('backend.order.update')); ?>" method="POST" class="row mt-2 p-2">
    <input type="hidden" value="<?php echo e($order->id); ?>" name="order_id">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="col-lg-6">
        <div class="container-fluid" style="background-color: white; padding:20px; border-radius: 7px;">
            <!-- Discount -->
            <div class="form-group">
                <label for="exampleInputEmail1">Discount</label>
                <input type="number" name="discount" class="form-control" value="<?php echo e($order->discount); ?>">
                <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- Paid Amount -->
            <div class="form-group">
                <label>Paid Amount</label>
                <input type="number" name="paid_amount" class="form-control" value="<?php echo e($order->paid_amount); ?>">
                <?php $__errorArgs = ['paid_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- Payment Status -->
            <div class="form-group">
                <label>Payment Status</label>
                <input type="text" name="payment_status" class="form-control" value="<?php echo e($order->payment_status); ?>">
                <?php $__errorArgs = ['payment_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- Coupon Discount -->
            <div class="form-group">
                <label>Coupon Discount</label>
                <input type="text" name="coupon_discount" class="form-control" value="<?php echo e($order->coupon_discount); ?>">
                <?php $__errorArgs = ['coupon_discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- Vat -->
            <div class="form-group">
                <label>Vat</label>
                <input type="number" name="vat" class="form-control" value="<?php echo e($order->vat); ?>">
                <?php $__errorArgs = ['vat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- shipping_cost -->
            <div class="form-group">
                <label>Shipping Cost</label>
                <input type="number" name="shipping_cost" class="form-control" value="<?php echo e($order->shipping_cost); ?>">
                <?php $__errorArgs = ['shipping_cost'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- total_price -->
            <div class="form-group">
                <label>Total Price</label>
                <input type="number" name="total_price" class="form-control" value="<?php echo e($order->total_price); ?>">
                <?php $__errorArgs = ['total_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- exchange_rate -->
            <div class="form-group">
                <label>Exchange Rate</label>
                <input type="number" name="exchange_rate" class="form-control" value="<?php echo e($order->exchange_rate); ?>">
                <?php $__errorArgs = ['exchange_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- shipping_name -->
            <div class="form-group">
                <label>Shipping Name</label>
                <input type="text" name="shipping_name" class="form-control" value="<?php echo e($order->shipping_name); ?>">
                <?php $__errorArgs = ['shipping_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <button type="submit" class="btn btn-success mt-3" style="color: white;">Update</button>

        </div>
    </div>

    <div class="col-lg-6">
        <div class="container-fluid" style="background-color: white; padding:20px; border-radius: 7px;">
            <!-- shipping_address_1 -->
            <div class="form-group">
                <label>Shipping Address 1</label>
                <input type="text" name="shipping_address_1" class="form-control"
                    value="<?php echo e($order->shipping_address_1); ?>">
                <?php $__errorArgs = ['shipping_address_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- shipping_address_2 -->
            <div class="form-group">
                <label>Shipping Address 2</label>
                <input type="text" name="shipping_address_2" class="form-control"
                    value="<?php echo e($order->shipping_address_2); ?>">
                <?php $__errorArgs = ['shipping_address_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- shipping_mobile -->
            <div class="form-group">
                <label>Shipping Mobile</label>
                <input type="text" name="shipping_mobile" class="form-control"
                    value="<?php echo e($order->shipping_mobile); ?>">
                <?php $__errorArgs = ['shipping_mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- shipping_email -->
            <div class="form-group">
                <label>Shipping Email</label>
                <input type="email" name="shipping_email" class="form-control" value="<?php echo e($order->shipping_email); ?>">
                <?php $__errorArgs = ['shipping_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- shipping_post -->
            <div class="form-group">
                <label>Shipping Post</label>
                <input type="text" name="shipping_post" class="form-control" value="<?php echo e($order->shipping_post); ?>">
                <?php $__errorArgs = ['shipping_post'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- shipping_town -->
            <div class="form-group">
                <label>Shipping Town</label>
                <input type="text" name="shipping_town" class="form-control" value="<?php echo e($order->shipping_town); ?>">
                <?php $__errorArgs = ['shipping_town'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- shipping_country_id -->
            <div class="form-group">
                <label>Shipping Country</label>
                <select type="text" name="shipping_country_id" class="form-control">
                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e(strtolower($country->name) == 'bangladesh' ? 'selected' : ''); ?>

                            value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['shipping_country_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- shipping_note -->
            <div class="form-group">
                <label>Shipping Note</label>
                <input type="text" name="shipping_note" class="form-control"
                    value="<?php echo e($order->shipping_note); ?>">
                <?php $__errorArgs = ['shipping_note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- payment_by -->
            <div class="form-group">
                <label>Payment By</label>
                <select type="text" name="payment_by" class="form-control">
                    <option value="<?php echo e($order->paym); ?>"></option>

                    <option <?php echo e($order->payment_by == 'COD' ? 'selected' : null); ?> value="COD">COD</option>
                    <option <?php echo e($order->payment_by == 'Mobile Banking' ? 'selected' : null); ?> value="COD">Mobile
                        Banking</option>

                </select>
                <?php $__errorArgs = ['payment_by'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: red;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>




        </div>
    </div>

</form>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>

    $(".checkall").on('change',function(){
        $(".checkbox").prop('checked',$(this).is(":checked"));
    });
    $(document).ready(function() {
        var order_id = <?php echo json_encode($order->id, 15, 512) ?>;
        let typingTimer;
        const typingDelay = 1000; // 1 second delay

        $('#search-product').on('input', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(function() {
                var keyword = $('#search-product').val();
                $.ajax({
                    url: `<?php echo e(url('admin/order/add-product/search')); ?>`,
                    data: {
                        name: keyword
                    },
                    dataType: "JSON",
                    success: function(res) {
                        $('#show-product').html('');
                        res.forEach(element => {
                            $('#show-product').append(`
                                <a href="<?php echo e(url('admin/order/add-product/${order_id}/${element.id}')); ?>">
                                    <li class="list-group-item">
                                        <p style="display:block">${element.name}</p>
                                    </li>
                                </a>
                            `)
                        });

                        // console.log(res);
                    }
                });
            }, typingDelay);
        });

        // Clear the timeout if the user starts typing again before the delay is over
        $('#search-product').on('keydown', function() {
            clearTimeout(typingTimer);
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/100_shop/app/Modules/Backend/OrderManagement/Resources/views/orders/edit_order.blade.php ENDPATH**/ ?>