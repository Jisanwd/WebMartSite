@extends('website.master')

@section('title')
    Category Page
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
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- Shop Category Area End -->
    <div class="shop-category-area mt-30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <div class="shop-tab nav d-flex">
                            <a class="active" href="#shop-1" data-bs-toggle="tab">
                                <i class="fa fa-th"></i>
                            </a>
                            <a href="#shop-2" data-bs-toggle="tab">
                                <i class="fa fa-list"></i>
                            </a>
                            <p>There Are 13 Products.</p>
                        </div>
                        <!-- Left Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="shop-select">
                                <select>
                                    <option value="">Sort by newness</option>
                                    <option value="">A to Z</option>
                                    <option value=""> Z to A</option>
                                    <option value="">In stock</option>
                                </select>
                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area mt-35">
                        <!-- Shop Tab Content Start -->
                        <div class="tab-content jump">
                            <!-- Tab One Start -->
                            <div id="shop-1" class="tab-pane active">
                                <div class="row m-0">
                                    @foreach($products as $product)
                                    <div class="mb-30px col-md-4 col-sm-6  p-0">
                                        <div class="slider-single-item">
                                            <!-- Single Item -->
                                            <article class="list-product p-0 text-center">
                                                <div class="product-inner">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="{{asset($product->image)}}" alt="" height="250">

                                                        </a>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li>
                                                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        <i class="lnr lnr-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">-12%</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>{{$product->category->name}}</span></a>
                                                        <h2><a href="{{route('detail', ['id' => $product->id])}}" class="product-link">{{$product->name}}</a></h2>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">Tk.{{$product->regular_price}}</li>
                                                                <li class="current-price">Tk.{{$product->selling_price}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="cart-btn">
                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                    </div>
                                                </div>
                                            </article>
                                            <!-- Single Item -->
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <!-- Tab One End -->
                            <!-- Tab Two Start -->
                            <div id="shop-2" class="tab-pane">
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/7.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/8.jpg" alt="" />
                                                                </a>
                                                                <ul class="product-flag">
                                                                    <li class="new">-10%</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>Galileo, and QZSS, Barometric Altimeter, Optical Heart Sensor, Accelerometer And Gyroscope, Ion-X Strengthened Glass</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">$21.90</li>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/12.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/13.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">Naham WiFi HD 1080P</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>Dimensions (W x H x D): TV without stand: 43.7" x 25.3" x 3", TV with stand: 43.7" x 27.7" x 8.5"</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/16.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/17.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">Polk Audio T30 Speaker</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>Android 8.1 (Oreo), Hisilicon Kirin 710 (12 nm), Octa-core (4x2.2 GHz Cortex-A73 & 4x1.7 GHz Cortex-A53), Mali-G51 MP4</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>199 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/16.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/9.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport V1</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>Break old records and make new goals in the New Balance® Arishi Sport v1.Predecessor: None. Support Type: Neutral. Cushioning: High energizing cushioning.</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/20.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/21.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">Numkuda USB 2.0 Gamepad</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>Calvin Klein® Jeans hoodie with reflective logo detailing at the sleeves.Sweatshirt crafted in a soft-knit fabric for superior comfort.Drawstring hood.Long sleeves.Full-zip front.</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/4.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/5.jpg" alt="" />
                                                                </a>
                                                                <ul class="product-flag">
                                                                    <li class="new">-12%</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">Edifier H840 Audiophile</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>No one can deny your sleek style with these handsome Madden by Steve Madden® Cale 6 oxfords.Man-made upper features a plain toe.Lace-up closure.Man-made lining.</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>599 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">$21.90</li>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/7.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/8.jpg" alt="" />
                                                                </a>
                                                                <ul class="product-flag">
                                                                    <li class="new">-10%</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>Galileo, and QZSS, Barometric Altimeter, Optical Heart Sensor, Accelerometer And Gyroscope, Ion-X Strengthened Glass</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">$21.90</li>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/12.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/13.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">Naham WiFi HD 1080P</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>Dimensions (W x H x D): TV without stand: 43.7" x 25.3" x 3", TV with stand: 43.7" x 27.7" x 8.5"</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/16.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/17.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">Polk Audio T30 Speaker</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>Android 8.1 (Oreo), Hisilicon Kirin 710 (12 nm), Octa-core (4x2.2 GHz Cortex-A73 & 4x1.7 GHz Cortex-A53), Mali-G51 MP4</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>199 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/16.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/9.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport V1</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>Break old records and make new goals in the New Balance® Arishi Sport v1.Predecessor: None. Support Type: Neutral. Cushioning: High energizing cushioning.</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/20.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/21.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">Numkuda USB 2.0 Gamepad</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>Calvin Klein® Jeans hoodie with reflective logo detailing at the sleeves.Sweatshirt crafted in a soft-knit fabric for superior comfort.Drawstring hood.Long sleeves.Full-zip front.</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30px scroll-zoom">
                                    <div class="slider-single-item">
                                        <div class="row list-product m-0px">
                                            <div class="col-md-12 padding-0px product-inner">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                        <div class="left-img">
                                                            <div class="img-block">
                                                                <a href="single-product.html" class="thumbnail">
                                                                    <img class="first-img" src="{{asset('/')}}website/assets/images/product-image/4.jpg" alt="" />
                                                                    <img class="second-img" src="{{asset('/')}}website/assets/images/product-image/5.jpg" alt="" />
                                                                </a>
                                                                <ul class="product-flag">
                                                                    <li class="new">-12%</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                        <div class="product-desc-wrap">
                                                            <div class="product-decs">
                                                                <h2><a href="single-product.html" class="product-link">Edifier H840 Audiophile</a></h2>
                                                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                <div class="product-intro-info">
                                                                    <p>No one can deny your sleek style with these handsome Madden by Steve Madden® Cale 6 oxfords.Man-made upper features a plain toe.Lace-up closure.Man-made lining.</p>
                                                                </div>
                                                            </div>
                                                            <div class="box-inner d-flex">
                                                                <div class="align-self-center">
                                                                    <div class="in-stock">Availability: <span>599 In Stock</span></div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">$21.90</li>
                                                                            <li class="current-price">$18.50</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="cart-btn">
                                                                        <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                    <div class="add-to-link">
                                                                        <ul>
                                                                            <li>
                                                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                                    <i class="lnr lnr-magnifier"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Two End -->
                        </div>
                        <!-- Shop Tab Content End -->
                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center mtb-50px">
                            <ul>
                                <li>
                                    <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                </li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>
                                    <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Category Area End -->


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
