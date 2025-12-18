@extends('backend.layouts.app')
@push('css')
    @include('backend.includes.datatable_css')

    <style>
        .card{
            background: #ffff;
        }
        .custom-btn-list button {
            background: transparent;
            border: 0;
        }

        .custom-btn-list button i, .custom-btn-list a i {
            color: #444;
            font-size: 16px;
        }

        .button-list.custom-btn-list a, .button-list.custom-btn-list button {
            margin: 3px 5px;
            padding: 0;
        }

        .action2-btn {
            margin: 0;
            padding: 0;
            margin-bottom: 20px;
        }

        .action2-btn li {
            display: inline-block;
            list-style: none;
            margin: 2px 0;
        }
    </style>
@endpush
@section('content')

{{--<div class="row mt-2">--}}
{{--  <div class="col-12 mt-3" style="background-color: white;border-radius: 7px;">--}}
{{--      <div class="container">--}}
{{--          <h4>Products</h4>--}}
{{--          <div style="background-color: white">--}}
{{--              <table class="table table-striped">--}}
{{--                  <thead>--}}
{{--                  <tr>--}}
{{--                      <th style="font-weight: 800; width:14vw;">Name</th>--}}
{{--                      <th style="font-weight: 800;">Image</th>--}}
{{--                      <th style="font-weight: 800; width:7vw; text-align: center">Quantity</th>--}}
{{--                      <th style="font-weight: 800; width:7vw; text-align: center">Price</th>--}}
{{--                      <th style="font-weight: 800; width:7vw; text-align: center">Total</th>--}}
{{--                      <th style="font-weight: 800; width:3vw; text-align: center">Action</th>--}}
{{--                  </tr>--}}
{{--                  </thead>--}}
{{--                  <tbody>--}}
{{--                  @foreach ($order->details as $order_details)--}}
{{--                      <tr>--}}
{{--                          <td>{{ $order_details->product->name }}</td>--}}
{{--                          <td>--}}
{{--                              @foreach ($order_details->product->images as $image)--}}
{{--                                  <img src="{{ URL::to('uploads/products/galleries/' . $image->image) }}" width="45px" height="45px" alt="product">--}}
{{--                              @endforeach--}}
{{--                          </td>--}}
{{--                          <td>--}}
{{--                              <form action="{{ route('backend.order.product.qtyUpdate', $order_details->id) }}"--}}
{{--                                    method="POST">--}}
{{--                                  @csrf--}}
{{--                                  @method('put')--}}
{{--                                  <div class="d-flex align-items-center">--}}
{{--                                      <input type="number" min="1" name="qty" value="{{ $order_details->qty }}" class="form-control form-control-sm" style="width: 80px;">--}}

{{--                                      <button class="btn btn-sm btn-success ms-2" style="color: white">--}}
{{--                                          <i class="fa fa-refresh"></i>--}}
{{--                                      </button>--}}
{{--                                  </div>--}}

{{--                              </form>--}}
{{--                          </td>--}}
{{--                          <td>{{ $order_details->sale_price }}</td>--}}
{{--                          <td>{{ $order_details->sale_price*$order_details->qty  }}</td>--}}
{{--                          <td>--}}
{{--                              <form action="{{ route('backend.order.product.delete', $order_details->id) }}"--}}
{{--                                    method="POST">--}}
{{--                                  @csrf--}}
{{--                                  @method('delete')--}}
{{--                                  <button class="btn btn-sm btn-danger" type="submit" style="color: white">--}}
{{--                                      <i class="fa fa-trash"></i>--}}
{{--                                  </button>--}}
{{--                              </form>--}}
{{--                          </td>--}}
{{--                      </tr>--}}
{{--                  @endforeach--}}
{{--                  </tbody>--}}
{{--              </table>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--  </div>--}}

{{--    <div class="col-12 mt-3 mb-2" style="background-color: white;border-radius: 7px;">--}}
{{--      <div class="container">--}}
{{--          <div class="col-12 pt-3" style="background-color: white;border-radius: 7px;">--}}
{{--              <h4>--}}
{{--                  Add Products--}}
{{--              </h4>--}}

{{--              <div style="background-color: white">--}}
{{--                  <input class="form-control mb-3" type="text" name="name" id="search-product" placeholder="Search Product">--}}
{{--                  <ul id="show-product" class="list-group" style="position: absolute;width: 39.5vw;overflow-y: auto;height: 20.5vh;padding: 2px;"></ul>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--  </div>--}}

{{--</div>--}}


{{--<form action="{{ route('backend.order.update') }}" method="POST" class="row mt-2 p-2">--}}
{{--    <input type="hidden" value="{{ $order->id }}" name="order_id">--}}
{{--    @csrf--}}
{{--    @method('put')--}}
{{--    <div class="col-lg-6">--}}
{{--        <div class="container-fluid" style="background-color: white; padding:20px; border-radius: 7px;">--}}
{{--            <!-- Discount -->--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Discount</label>--}}
{{--                <input type="number" name="discount" class="form-control" value="{{ $order->discount }}">--}}
{{--                @error('discount')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- Paid Amount -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Paid Amount</label>--}}
{{--                <input type="number" name="paid_amount" class="form-control" value="{{ $order->paid_amount }}">--}}
{{--                @error('paid_amount')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- Payment Status -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Payment Status</label>--}}
{{--                <input type="text" name="payment_status" class="form-control" value="{{ $order->payment_status }}">--}}
{{--                @error('payment_status')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- Coupon Discount -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Coupon Discount</label>--}}
{{--                <input type="text" name="coupon_discount" class="form-control" value="{{ $order->coupon_discount }}">--}}
{{--                @error('coupon_discount')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- Vat -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Vat</label>--}}
{{--                <input type="number" name="vat" class="form-control" value="{{ $order->vat }}">--}}
{{--                @error('vat')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- shipping_cost -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Shipping Cost</label>--}}
{{--                <input type="number" name="shipping_cost" class="form-control" value="{{ $order->shipping_cost }}">--}}
{{--                @error('shipping_cost')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- total_price -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Total Price</label>--}}
{{--                <input type="number" name="total_price" class="form-control" value="{{ $order->total_price }}">--}}
{{--                @error('total_price')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- exchange_rate -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Exchange Rate</label>--}}
{{--                <input type="number" name="exchange_rate" class="form-control" value="{{ $order->exchange_rate }}">--}}
{{--                @error('exchange_rate')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- shipping_name -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Shipping Name</label>--}}
{{--                <input type="text" name="shipping_name" class="form-control" value="{{ $order->shipping_name }}">--}}
{{--                @error('shipping_name')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}


{{--            <button type="submit" class="btn btn-success mt-3" style="color: white;">Update</button>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="col-lg-6">--}}
{{--        <div class="container-fluid" style="background-color: white; padding:20px; border-radius: 7px;">--}}
{{--            <!-- shipping_address_1 -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Shipping Address 1</label>--}}
{{--                <input type="text" name="shipping_address_1" class="form-control"--}}
{{--                    value="{{ $order->shipping_address_1 }}">--}}
{{--                @error('shipping_address_1')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- shipping_address_2 -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Shipping Address 2</label>--}}
{{--                <input type="text" name="shipping_address_2" class="form-control"--}}
{{--                    value="{{ $order->shipping_address_2 }}">--}}
{{--                @error('shipping_address_2')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- shipping_mobile -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Shipping Mobile</label>--}}
{{--                <input type="text" name="shipping_mobile" class="form-control"--}}
{{--                    value="{{ $order->shipping_mobile }}">--}}
{{--                @error('shipping_mobile')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- shipping_email -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Shipping Email</label>--}}
{{--                <input type="email" name="shipping_email" class="form-control" value="{{ $order->shipping_email }}">--}}
{{--                @error('shipping_email')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <!-- shipping_post -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Shipping Post</label>--}}
{{--                <input type="text" name="shipping_post" class="form-control" value="{{ $order->shipping_post }}">--}}
{{--                @error('shipping_post')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <!-- shipping_town -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Shipping Town</label>--}}
{{--                <input type="text" name="shipping_town" class="form-control" value="{{ $order->shipping_town }}">--}}
{{--                @error('shipping_town')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <!-- shipping_country_id -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Shipping Country</label>--}}
{{--                <select type="text" name="shipping_country_id" class="form-control">--}}
{{--                    @foreach ($countries as $key => $country)--}}
{{--                        <option {{ strtolower($country->name) == 'bangladesh' ? 'selected' : '' }}--}}
{{--                            value="{{ $country->id }}">{{ $country->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--                @error('shipping_country_id')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <!-- shipping_note -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Shipping Note</label>--}}
{{--                <input type="text" name="shipping_note" class="form-control"--}}
{{--                    value="{{ $order->shipping_note }}">--}}
{{--                @error('shipping_note')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <!-- payment_by -->--}}
{{--            <div class="form-group">--}}
{{--                <label>Payment By</label>--}}
{{--                <select type="text" name="payment_by" class="form-control">--}}
{{--                    <option value="{{ $order->paym }}"></option>--}}

{{--                    <option {{ $order->payment_by == 'COD' ? 'selected' : null }} value="COD">COD</option>--}}
{{--                    <option {{ $order->payment_by == 'Mobile Banking' ? 'selected' : null }} value="COD">Mobile--}}
{{--                        Banking</option>--}}

{{--                </select>--}}
{{--                @error('payment_by')--}}
{{--                    <small style="color: red;">{{ $message }}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}




{{--        </div>--}}
{{--    </div>--}}

{{--</form>--}}

<div class="row mt-2">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Edit Order {{$order->order_no}}</h4>
        </div>
    </div>
</div>

<div class="row order_page">

    <div class="card">
        <div class="card-body">
            <form action="{{route('backend.update-custom-order',$order->order_no)}}" method="POST">
                @csrf

                <div class="container mt-4">
                    <div class="card shadow-sm">
                        <div class="card-body">

                            <!-- Products Select -->
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Products *</label>
                                <select name="product_id" id="productSelect" class="form-select">
                                    <option value="">Select Product..</option>
                                    @foreach($products as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <!-- Products Table -->
                            <div class="table-responsive mb-4">
                                <table class="table table-bordered align-middle text-center">
                                    <thead class="table-light">
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Sell Price</th>
                                        <th>Discount</th>
                                        <th>Sub Total</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="cartTable">
                                    @foreach($order->details as $details)
{{--                                        @dd($details)--}}
                                        <tr id="row-{{$details->id}}">
                                            <td>
                                                @foreach($details->product->images as $img)
                                                    <img src="{{asset('uploads/products/galleries/'.$img->image)}}" class="me-1 mb-1 rounded" width="40" height="40">
                                                @endforeach
                                            </td>

                                            <td>
                                                {{$details->product->name}}
                                                <input type="hidden" name="products[{{$details->product->id}}][id]" value="{{$details->id}}">
                                            </td>

                                            <td>
                                                <input type="number"
                                                       name="products[{{$details->id}}][qty]"
                                                       class="form-control form-control-sm text-center qty"
                                                       value="{{$details->qty}}" min="1">
                                            </td>

                                            <td>
                                                <input type="text" class="form-control form-control-sm text-end price" value="{{$details->sale_price}}" readonly>
                                            </td>

                                            <td>
                                                <input type="number"
                                                       name="products[{{$details->id}}][discount]"
                                                       class="form-control form-control-sm text-end discount"
                                                       value="{{$details->discount}}" min="0">
                                            </td>

                                            <td class="fw-semibold text-end row-subtotal">
                                                {{$details->total_price}}
                                            </td>

                                            <td>
                                                <button type="button"
                                                        class="btn btn-sm btn-danger remove-row text-white"
                                                        data-id="{{$details->id}}">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Customer + Summary -->
                            <div class="row g-4">

                                <!-- Customer Info -->
                                <div class="col-md-6">
                                    <input type="text" name="shipping_name"
                                           class="form-control mb-3" value="{{$order->shipping_name}}"
                                           placeholder="Shipping Name">

                                    <input type="text" name="first_name"
                                           class="form-control mb-3" value="{{$order->customer->first_name}}"
                                           placeholder="Customer First Name" required>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror

                                    <input type="text" name="last_name"
                                           class="form-control mb-3" value="{{$order->customer->last_name}}"
                                           placeholder="Customer Last Name" required>
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror

                                    <input type="text" name="customer_number"
                                           class="form-control mb-3" value="{{$order->customer->mobile}}"
                                           placeholder="Customer Number" required>
                                    @error('customer_number')
                                    <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror


                                    <select name="shipping_areas" id="shipping_areas_select" class="form-select mb-3">
                                        <option value="">Select area..</option>
                                        @foreach($shipping_areas as $area)
                                            <option data-charge = {{$area->charge}} value="{{$area->id}}">{{$area->name}} - charge {{$area->charge}}</option>
                                        @endforeach
                                    </select>

                                    <textarea name="address"
                                              class="form-control mb-3"
                                              rows="3"
                                              placeholder="Address">{!! $order->shipping_address_1 !!}</textarea>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>

                                <!-- Order Summary -->
                                <div class="col-md-6">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td class="text-end">
                                                <span class="sub-total sub-total">{{$order->total_price}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Fee</td>
                                            <td class="text-end">
                                                <input type="number"
                                                       name="shipping_fee"
                                                       class="form-control form-control-sm text-end shipping_fee"
                                                       value="{{$order->shipping_cost ?? 0}}">
                                            </td>
                                        </tr>
                                        <tr class="fw-semibold">
                                            <td>Total</td>
                                            <td class="text-end">
                                                <span class="grand-total">{{ $order->total_price + ($order->shipping_cost ?? 0)}}</span>
                                            </td>

                                            <input type="hidden"
                                                   name="grand_total"
                                                   class="form-control form-control-sm text-end grand_total"
                                                   value="{{($order->shipping_cost ?? 0) + $order->total_price}}">
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <!-- Submit Button -->
                            <div class="mt-4">
                                <button type="submit" class="btn btn-success w-100 py-3 fw-semibold text-white">
                                    Update Order
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('script')
<script>

    {{--$(".checkall").on('change',function(){--}}
    {{--    $(".checkbox").prop('checked',$(this).is(":checked"));--}}
    {{--});--}}
    {{--$(document).ready(function() {--}}
    {{--    var order_id = @json($order->id);--}}
    {{--    let typingTimer;--}}
    {{--    const typingDelay = 1000; // 1 second delay--}}

    {{--    $('#search-product').on('input', function() {--}}
    {{--        clearTimeout(typingTimer);--}}
    {{--        typingTimer = setTimeout(function() {--}}
    {{--            var keyword = $('#search-product').val();--}}
    {{--            $.ajax({--}}
    {{--                url: `{{ url('admin/order/add-product/search') }}`,--}}
    {{--                data: {--}}
    {{--                    name: keyword--}}
    {{--                },--}}
    {{--                dataType: "JSON",--}}
    {{--                success: function(res) {--}}
    {{--                    $('#show-product').html('');--}}
    {{--                    res.forEach(element => {--}}
    {{--                        $('#show-product').append(`--}}
    {{--                            <a href="{{ url('admin/order/add-product/${order_id}/${element.id}') }}">--}}
    {{--                                <li class="list-group-item">--}}
    {{--                                    <p style="display:block">${element.name}</p>--}}
    {{--                                </li>--}}
    {{--                            </a>--}}
    {{--                        `)--}}
    {{--                    });--}}

    {{--                    // console.log(res);--}}
    {{--                }--}}
    {{--            });--}}
    {{--        }, typingDelay);--}}
    {{--    });--}}

    {{--    // Clear the timeout if the user starts typing again before the delay is over--}}
    {{--    $('#search-product').on('keydown', function() {--}}
    {{--        clearTimeout(typingTimer);--}}
    {{--    });--}}
    {{--});--}}
</script>

<script>
    $(document).ready(function () {

        const productUrl = "{{ route('backend.create-order-getProduct', ':id') }}";

        $('#productSelect').on('change', function () {

            let productId = $(this).val();
            if (!productId) return;

            let url = productUrl.replace(':id', productId);

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function (product) {

                    $('.no-product').remove();

                    // Prevent duplicate product
                    if ($('#row-' + product.id).length) {
                        $('#productSelect').val('');
                        return;
                    }

                    let imagesHtml = '';
                    product.images.forEach(img => {
                        imagesHtml += `
                        <img src="${img}"
                             class="me-1 mb-1 rounded"
                             width="40" height="40">
                    `;
                    });

                    let row = `
                   <tr id="row-new-${product.id}">
    <td>${imagesHtml}</td>

    <td>
        ${product.name}
        <input type="hidden"
               name="products[new_${product.id}][product_id]"
               value="${product.id}">
    </td>

    <td>
        <input type="number"
               name="products[new_${product.id}][qty]"
               class="form-control form-control-sm text-center qty"
               value="1" min="1">
    </td>

    <td>
        <input type="text"
               class="form-control form-control-sm text-end price"
               value="${product.sale_price}"
               readonly>
    </td>

    <td>
        <input type="number"
               name="products[new_${product.id}][discount]"
               class="form-control form-control-sm text-end discount"
               value="0" min="0">
    </td>

    <td class="fw-semibold text-end row-subtotal">
        ${parseFloat(product.sale_price).toFixed(2)}
    </td>

    <td>
        <button type="button"
                class="btn btn-sm btn-danger remove-row text-white"
                data-id="new_${product.id}">
            <i class="fa fa-trash"></i>
        </button>
    </td>
</tr>
                `;

                    $('#cartTable').append(row);

                    calculateTotals(); // ✅ recalculate totals
                    $('#productSelect').val('');
                }
            });
        });

        // remove row
        $(document).on('click', '.remove-row', function () {

            let id = $(this).data('id');
            $('#row-' + id).remove();

            if ($('#cartTable tr').length === 0) {
                $('#cartTable').html(`
                <tr class="no-product">
                    <td colspan="7" class="text-muted text-center">
                        No products added
                    </td>
                </tr>
            `);

                // Reset totals
                $('.sub-total').text('0.00');
                $('.grand-total').text('0.00');
                $('.grand_total').val(0);
                $('input[name="shipping_fee"]').val(0);

                return;
            }

            calculateTotals();
        });


        // when qty, discount, or shipping changes
        $(document).on('input', '.qty, .discount, input[name="shipping_fee"]', function () {
            calculateTotals();
        });

        function calculateTotals() {

            let subTotal = 0;
            let shippingFee = parseFloat($('input[name="shipping_fee"]').val()) || 0;

            $('#cartTable tr').each(function () {

                // Skip empty row
                if (!$(this).find('.qty').length) return;

                let qty = parseFloat($(this).find('.qty').val()) || 0;
                let price = parseFloat($(this).find('.price').val()) || 0;
                let discount = parseFloat($(this).find('.discount').val()) || 0;

                let rowSubTotal = (qty * price) - discount;
                if (rowSubTotal < 0) rowSubTotal = 0;

                $(this).find('.row-subtotal').text(rowSubTotal.toFixed(2));

                subTotal += rowSubTotal;
            });

            let grandTotal = subTotal + shippingFee;

            $('.sub-total').text(subTotal.toFixed(2));
            $('.grand-total').text(grandTotal.toFixed(2));
            $('.grand_total').val(grandTotal.toFixed(2));
        }

        $('#shipping_areas_select').on('change', function () {

            let charge = $(this).find(':selected').data('charge');

            // If no area selected
            if (charge === undefined) {
                charge = 0;
            }

            // Update shipping fee input
            $('input[name="shipping_fee"]').val(parseFloat(charge).toFixed(2));

            // Recalculate totals
            calculateTotals();
        });

    });
</script>
@endsection
