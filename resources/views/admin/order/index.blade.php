@extends('admin.master')
@section('title')
    Manage Order Page
@endsection
@section('body')
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <h2 class="header-title">Manage Order Form</h2>
                <div class="header-sub-title">
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                        <a class="breadcrumb-item" href="#">Tables</a>
                    </nav>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-overflow">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <table id="dt-opt" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Order Id</th>
                                <th>Order Total</th>
                                <th>Customer Info</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Payment Status</th>
                                <th>Payment Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->customer->name.'('.$order->customer->mobile.')'}}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->payment_status ? 'Cash On Delivery' : 'Online Payment'}}</td>
                                    <td>{{$order->payment_method}}</td>
                                    <td>
                                        <a href="{{route('admin.order-detail',['id'=> $order->id])}}" class="btn btn-info btn-sm" title="Order Detail">
                                            <i class="fa fa-book-open">detail</i>
                                        </a>
                                        <a href="{{route('admin.order-invoice',['id'=> $order->id])}}" class="btn btn-primary btn-sm" title="Order Invoice">
                                            <i class="fa fa-file-invoice">Invoice</i>
                                        </a>
                                        <a href="{{route('admin.order-print',['id'=> $order->id])}}" class="btn btn-warning btn-sm" title="Print Invoice" target="_blank">
                                            <i class="fa fa-print"></i>
                                        </a>
                                        <a href="{{route('admin.order-edit',['id'=> $order->id])}}" class="btn btn-success btn-sm {{$order->order_status == 'Complete' ? 'disabled' : ''}}" title="Order Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('admin.order-delete',['id'=> $order->id])}}" class="btn btn-danger btn-sm {{$order->order_status == 'Complete' || $order->order_status == 'pending' || $order->order_status == 'Processing' ? 'disabled' : ''}}" onclick="return confirm('Are You Sure To Delete This');" title="Order Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


