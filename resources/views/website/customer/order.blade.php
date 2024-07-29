@extends('website.master')
@section('title')
    My Order page
@endsection
@section('body')

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
                            <li>Order</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- checkout area start -->
    <div class="checkout-area mt-50px mb-40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card card-body">
                        <ul class="list-group">
                            <li><a href="{{route('dashboard')}}" class="list-group-item">My Dashboard</a></li>
                            <li><a href="{{route('customer.order')}}" class="list-group-item">My Order</a></li>
                            <li><a href="" class="list-group-item">My Wishlist</a></li>
                            <li><a href="" class="list-group-item">My Account</a></li>
                            <li><a href="" class="list-group-item">My Profile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card card-body">
                       <table class="table table-bordered table-hover">
                           <thead>
                               <tr>
                                   <th>Sl No</th>
                                   <th>Order Id</th>
                                   <th>Order Total</th>
                                   <th>Order Date</th>
                                   <th>Order Status</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($orders as $order)
                               <tr>
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$order->id}}</td>
                                   <td>{{$order->order_total}}</td>
                                   <td>{{$order->order_date}}</td>
                                   <td>{{$order->order_status}}</td>
                               </tr>
                           @endforeach

                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout area end -->
    <!-- News letter area -->
    <div class="news-letter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-md-30px mb-lm-30px">
                    <div class="title-newsletter">
                        <h2>Sign Up For Newsletters</h2>
                        <p class="des">Be the First to Know. Sign up for newsletter today !</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- News letter area  End -->
@endsection



