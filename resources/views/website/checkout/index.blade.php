@extends('website.master')
@section('title')
    CheckOut page
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
                            <li>Checkout</li>
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
            <form action="{{route('new-order')}}" method="post">
                @csrf
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Your Personal Details</h3>
                        <div class="row">
                            @if(!Session::get('customer_id'))
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info mb-20px">
                                    <label>Full Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name">
                                    <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input type="email" name="email">
                                    <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Phone Number<span class="text-danger">*</span></label>
                                    <input type="number" name="mobile">
                                    <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Delivery Address<span class="text-danger">*</span></label>
                                    <input type="text" name="delivery_address" style="height: 100px">
                                    <span class="text-danger">{{$errors->has('delivery_address') ? $errors->first('delivery_address') : ''}}</span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="">
                                    <label>Select Your Payment Method</label>
                                    <div>
                                        <label style="margin: 20px"><input type="radio" value="1" checked name="payment_method">  Cash On Delivery</label>
                                        <label><input type="radio" name="payment_method" value="2">  ONline Payment</label>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-account mb-30px">
                                <input class="checkout-toggle2" type="checkbox" />
                                <label> My delivery and mailing addresses are the same.
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-form-button">
                                    <button type="submit" class="btn btn-info">Confirm Order</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    @php($sum = 0)
                                    @foreach(Cart::getContent() as $cartProduct)
                                    <ul>
                                        <li><span class="order-middle-left">{{$cartProduct->name}} * {{$cartProduct->quantity}}</span> <span class="order-price">{{$cartProduct->price}} </span></li>

                                    </ul>
                                        @php($sum = $sum +($cartProduct->quantity * $cartProduct->price))
                                    @endforeach
                                </div>

                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Tax Total:</li>
                                        <li>{{$tax = $sum*0.15}}</li>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping Total:</li>
                                        <li>{{$shipping = 60}}</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">TotalPayable</li>
                                        <li>{{$totalPayable = $sum+$tax+$shipping}}</li>
                                    </ul>
                                </div>
                                <?php
                                Session::put('order_total', $totalPayable);
                                Session::put('tax_total', $tax);
                                Session::put('shipping_total', $shipping);
                                ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            </form>
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
                <div class="col-md-12 col-lg-8">
                    <div id="mc_embed_signup" class="subscribe-form">
                        <form
                            id="mc-embedded-subscribe-form"
                            class="validate"
                            novalidate=""
                            target="_blank"
                            name="mc-embedded-subscribe-form"
                            method="post"
                            action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                        >
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input class="email" type="email" required="" placeholder="Enter your email here.." name="EMAIL" value="" />
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                </div>
                                <div class="clear">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Sign Up" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News letter area  End -->
@endsection
