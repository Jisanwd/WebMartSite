@extends('website.master')

@section('title')
    Detail Page
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
                                <li>Single Product</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End-->
        <!-- Shop details Area start -->
        <section class="product-details-area mtb-60px ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="xzoom-container">
                            <img class="xzoom" id="xzoom-default" src="{{asset($product->image)}}" xoriginal="{{asset($product->image)}}" />
                            <div class="xzoom-thumbs">
                                <a href="{{asset($product->image)}}"><img class="xzoom-gallery" width="80" src="{{asset($product->image)}}"  xpreview="{{asset($product->image)}}" title="The description goes here"></a>
                                @foreach($product->otherImages as $otherImage)
                                <a href="{{asset($otherImage->image)}}"><img class="xzoom-gallery" width="80" src="{{asset($otherImage->image)}}" title="The description goes here"></a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="product-details-content">
                            <h2>{{$product->name}}</h2>
                            <p class="reference">Category: <span>{{$product->category->name}}</span></p>
                            <p class="reference">SubCategory: <span>{{$product->subCategory->name}}</span></p>
                            <p class="reference">Brand: <span>{{$product->brand->name}}</span></p>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">Tk. {{$product->regular_price}}</li>
                                    <li class="cuttent-price">Tk. {{$product->selling_price}}</li>
                                </ul>
                            </div>
                            <div class="pro-details-list">
                                <p>{{$product->short_description}}</p>
                            </div>
                            <form action="{{route('cart', ['id' => $product->id])}}" method="post">
                                @csrf
                            <div class="pro-details-quality mt-0px">
                                <div class="form-group quality col-lg-12">
                                    <label for="color">Quality</label>
                                    <input  type="number" class="form-control"   name="quantity" value="1" />
                                </div>
                            </div>
                             <div class="pro-details-cart btn-hover">
                                    <button type="submit" style="width: 100%" class="btn btn-success">  Add To Cart</button>
                             </div>
                            <div class="pro-details-wish-com">
                                <div class="pro-details-wishlist">
                                    <a href="#"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                </div>
                                <div class="pro-details-compare">
                                    <a href="#"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                </div>
                            </div>
                            </form>
                            <div class="pro-details-social-info">
                                <span>Share</span>
                                <div class="social-info">
                                    <ul>
                                        <li>
                                            <a title="Facebook" href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a title="Twitter" href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a title="Google+" href="#"><i class="ion-social-google"></i></a>
                                        </li>
                                        <li>
                                            <a title="Instagram" href="#"><i class="ion-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-details-policy">
                                <ul>
                                    <li><img src="{{asset('/')}}website/assets/images/icons/policy.png" alt="" /><span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                                    <li><img src="{{asset('/')}}website/assets/images/icons/policy-2.png" alt="" /><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                                    <li><img src="{{asset('/')}}website/assets/images/icons/policy-3.png" alt="" /><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop details Area End -->
        <!-- product details description area start -->
        <div class="description-review-area mb-50px bg-light-gray-3 ptb-50px">
            <div class="container">
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <a data-bs-toggle="tab" href="#des-details1">Description</a>
                        <a class="active" data-bs-toggle="tab" href="#des-details2">Product Details</a>
                        <a data-bs-toggle="tab" href="#des-details3">Reviews (2)</a>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details2" class="tab-pane active">
                            <div class="product-anotherinfo-wrapper">
                                <ul>
                                    <li><span>Category</span>{{$product->category->name}}</li>
                                    <li><span>SubCategory</span>{{$product->subCategory->name}}</li>
                                    <li><span>Brand</span> {{$product->brand->name}}</li>
                                    <li><span>Name:</span> {{$product->name}}</li>
                                </ul>
                            </div>
                        </div>
                        <div id="des-details1" class="tab-pane">
                            <div class="product-description-wrapper">
                                <p>{{$product->long_description}}</p>
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="review-wrapper">
                                        <div class="single-review">
                                            <div class="review-img">
                                                <img src="{{asset('/')}}website/assets/images/review-image/1.png" alt="" />
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-left">
                                                        <div class="review-name">
                                                            <h4>White Lewis</h4>
                                                        </div>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-left">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-bottom">
                                                    <p>
                                                        Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-review child-review">
                                            <div class="review-img">
                                                <img src="{{asset('/')}}website/assets/images/review-image/2.png" alt="" />
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-left">
                                                        <div class="review-name">
                                                            <h4>White Lewis</h4>
                                                        </div>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-left">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-bottom">
                                                    <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="ratting-form-wrapper pl-50">
                                        <h3>Add a Review</h3>
                                        <div class="ratting-form">
                                            <form action="#">
                                                <div class="star-box">
                                                    <span>Your rating:</span>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style mb-10">
                                                            <input placeholder="Name" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style mb-10">
                                                            <input placeholder="Email" type="email" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="rating-form-style form-submit">
                                                            <textarea name="Your Review" placeholder="Message"></textarea>
                                                            <input type="submit" value="Submit" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product details description area end -->

        <!-- Arrivals Area Start -->

        <!-- Arrivals Area End -->
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

@endsection
