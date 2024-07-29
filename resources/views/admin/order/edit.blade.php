@extends('admin.master')
@section('title')
    Edit Order Page
@endsection
@section('body')
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <h2 class="header-title">Edit Order Form</h2>
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
                        <form action="{{route('admin.order-update', ['id'=> $order->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Order No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$order->id}}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Order Status</label>
                                <div class="col-sm-9">
                                   <select class="form-control" name="order_status" >
                                       <option value="Pending" {{$order->order_status == 'Pending' ? 'Selected' : ''}}>Pending</option>
                                       <option value="Processing" {{$order->order_status == 'Processing' ? 'Selected' : ''}}>Processing</option>
                                       <option value="Complete" {{$order->order_status == 'Complete' ? 'Selected' : ''}}>Complete</option>
                                       <option value="Cancel" {{$order->order_status == 'Cancel' ? 'Selected' : ''}}>Cancel</option>

                                   </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Delivery Address</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="3" name="delivery_address">{{$order->delivery_address}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Order Total</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control-file"  name="order_total" value="{{$order->order_total}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Payment Amount</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control-file"  name="payment_amount" value="{{$order->order_total}}">
                                </div>
                            </div>

                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">

                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Update Order Status</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



