@extends('website.master')

@section('title')
   Shopping Cart Page
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
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End-->
        <!-- cart area start -->
        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        <div class="cart-main-area mtb-50px">
            <div class="container">
                <h3 class="cart-page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form>
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Qty</th>
                                        <th>Unit Price</th>
                                        <th>Subtotal</th>
                                        <th>Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($sum = 0)
                                    @foreach($cart_products as $cart_product)
                                    <tr class="text-center">
                                        <td class="product-thumbnail">
                                            <a  href="#"><img class="img-responsive" src="{{asset($cart_product->attributes->image)}}"  alt="" height="90" width="70"></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$cart_product->name}}</a></td>
                                        <form action="{{route('cart.update', ['id' => $cart_product->id])}}" method="post">
                                            @csrf
                                        <td class="input-group col-lg-12">
                                            <input type="number" name="quantity" class="form-control"  style="width: 40%" value="{{$cart_product->quantity}}" min="1">
                                            <input type="submit" class="btn btn-info" style="width: 60%" value="Update" />
                                        </td>
                                        </form>

                                        <td class="product-price-cart"><span class="amount">Tk.{{$cart_product->price}}</span></td>

                                        <td class="product-subtotal">Tk.{{$cart_product->price * $cart_product->quantity}}</td>
                                        <td class="product-remove">
                                            <a href="{{route('cart.remove', ['id' => $cart_product->id])}}"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    @php($sum = $sum + ($cart_product->price * $cart_product->quantity))
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </form>
                        <div class="row mtb-50px">

                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                                <div class="discount-code-wrapper">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                    </div>
                                    <div class="discount-code">
                                        <p>Enter your coupon code if you have one.</p>
                                        <form>
                                            <input type="text" required="" name="name" />
                                            <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mt-md-30px">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                    </div>
                                    <h5>SubTotal: <span>{{$sum}}</span></h5>
                                    <h5>Tax Total: <span>{{$tax = $sum * 0.15}}</span></h5>
                                    <h5>Shipping Total: <span>{{$shipping= 60}}</span></h5>
                                    <h4 class="grand-totall-title">TotalPayable: <span>{{$totalPayable = $sum+$shipping+$tax}}</span></h4>
                                    <a href="{{route('checkout')}}">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart area end -->
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

