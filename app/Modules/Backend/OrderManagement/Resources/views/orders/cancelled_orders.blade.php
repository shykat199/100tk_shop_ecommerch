@extends('backend.layouts.app')
@section('title','Cancelled Orders - ')
@push('css')
    @include('backend.includes.datatable_css')
@endpush
@section('content')
    <div class="content-body">
        @include('ordermanagement::orders.order_overview')

        <!-- Tab Content Start -->
{{--        <div class="tab-content order-content" id="nav-tabContent">--}}
{{--            <div class="tab-pane fade show active" id="cancelled" role="tabpanel" Area-labelledby="canclled-tab">--}}
{{--                <div class="container">--}}
{{--                    <div class="content-table">--}}
{{--                        <table id="mDataTable" class="table p-table">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th scope="col">{{ __('Invoice#') }}</th>--}}
{{--                                <th scope="col">{{ __('Name') }}</th>--}}
{{--                                <th scope="col">{{ __('Items') }}</th>--}}
{{--                                <th scope="col">{{ __('Location') }}</th>--}}

{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Tab Content End -->

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Cancel Orders ({{$order_overview[7]??0}})</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row order_page">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <form class="custom_form">
                                    <div class="input-group">
                                        <input type="text" name="keyword" class="form-control" placeholder="Search">
                                        <button class="btn btn-info rounded-pill ms-3">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="table-responsive ">
                            <table id="datatable-buttons" class="table table-striped   w-100">
                                <thead>
                                <tr>
                                    <th style="width:2%"><div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input checkall" value=""></label>
                                            <th style="width:2%">SL</th>
                                        </div></th>
                                    <th style="width:8%">Action</th>
                                    <th style="width:8%">Invoice</th>
                                    <th style="width:10%">Date</th>
                                    <th style="width:10%">Name</th>
                                    <th style="width:10%">Phone</th>
                                    <th style="width:10%">Check</th>
                                    <th style="width:10%">Amount</th>
                                    {{--                                    <th style="width:10%">Status</th>--}}
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($show_data as $key=>$value)

                                    <tr>
                                        <td><input type="checkbox" class="checkbox" value="{{$value->id}}"></td>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="button-list custom-btn-list">
                                                <a href="" title="Invoice"><i class="fa fa-eye"></i></a>
                                                <a href="" title="Process"><i class="fa-solid fa-gear"></i></a>
                                                <a href="" title="Edit"><i class="fa fa-pencil-square"></i></a>
                                                <form method="post" action="" class="d-inline">
                                                    @csrf
                                                    <input type="hidden" value="{{$value->id}}" name="id">
                                                    <button type="submit" title="Delete" class="delete-confirm"><i class="fa fa-trash"></i></button>

                                                </form>
                                            </div>
                                        </td>
                                        <td>{{$value->order_no}}</td>
                                        <td>{{date('d-m-Y', strtotime($value->updated_at))}}<br> {{date('h:i:s a', strtotime($value->updated_at))}}</td>
                                        <td>
                                            <strong>{{$value->shipping_address_1?$value->shipping_address_1:''}}</strong>
                                            <p>{{$value->shipping_post?$value->shipping_post:''}}</p>
                                            <p>{{$value->shipping_town?$value->shipping_town:''}}</p>
                                        </td>
                                        <td>{{$value->shipping_mobile?$value->shipping_mobile:''}}</td>
                                        <td> <a target="_blank" style="text-decoration: underline" href="https://greenviewit.com/check-fraud-customer" >Fraud Customer Check</a></td>
                                        <td>৳{{$value->total_price}}</td>
                                        {{--                                        <td>{{$value->details && !empty($value->details[0]) && $value->details[0]->orderStatus?$value->details[0]->orderStatus->name:'N/A'}}</td>--}}

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="custom-paginate">
                            {{$show_data->links('pagination::bootstrap-4')}}
                        </div>
                    </div> <!-- end card body-->

                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
@endsection

@push('js')
    @include('backend.includes.datatable_js')
    <script>

        {{--$(function() {--}}
        {{--    "use strict";--}}

        {{--    $(document).ready(function(){--}}
        {{--        // DataTable--}}
        {{--        var table = $('#mDataTable');--}}
        {{--        table.DataTable({--}}
        {{--            ajax: "@auth('admin'){{route('backend.cancelled_orders.list')}}@elseauth('seller'){{route('seller.cancelled_orders.list')}}@endauth",--}}
        {{--            columns: [--}}
        {{--                { data: 'order_no' },--}}
        {{--                { data: 'user_last_name' },--}}
        {{--                { data: 'details_sum_qty'},--}}
        {{--                { data: 'user_address_1' },--}}

        {{--            ]--}}
        {{--        });--}}
        {{--    });--}}
        {{--});--}}
    </script>
@endpush
