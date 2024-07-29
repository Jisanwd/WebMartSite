<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/abelo/abelo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 10:57:14 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>WebMartSite – @yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/images/favicon/favicon.png" />
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" type="text/css" media="all">

    <!-- CSS
  ============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/linearicon.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/font-awesome.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/plugins/animate.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/plugins/slick.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css" />
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/xzoom.css" />
</head>

<body>
<!-- Header Section Start From Here -->
<header class="header-wrapper">
    <!-- Header Nav Start -->
    <div class="header-nav">
        <div class="container">
            <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
                <div class="header-static-nav">
                    <a href="mailto:yourname@email.com">yourname@email.com</a>
                </div>
                <div class="header-menu-nav">
                    <ul class="menu-nav">
                        <li>
                            @if(session('customer_id'))
                            <div class="dropdown">
                                <button type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account <i class="ion-ios-arrow-down"></i></button>
                                    <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton">
                                        <li><a href="{{route('customer.dashboard')}}">{{session('customer_name')}} | My Dashboard</a></li>
                                        <li><a href="{{route('customer.logout')}}">LogOut</a></li>
                                    </ul>
                              </div>
                            @else
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account <i class="ion-ios-arrow-down"></i></button>
                                    <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton">
                                        <li><a href="{{route('customer.register')}}">Register</a></li>
                                        <li><a href="{{route('customer.login')}}">Sign in</a></li>
                                    </ul>
                                </div>
                            @endif
                        </li>
                        <li>
                            <div class="dropdown">
                                <button type="button" id="dropdownMenuButton-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD $ <i class="ion-ios-arrow-down"></i></button>

                                <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-2">
                                    <li><a href="#">EUR €</a></li>
                                    <li><a href="#">USD $</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="pr-0">
                            <div class="dropdown">
                                <button type="button" id="dropdownMenuButton-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset('/')}}website/assets/images/flag/1.jpg" alt="" /> English <i class="ion-ios-arrow-down"></i>
                                </button>

                                <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-3">
                                    <li>
                                        <a href="#"><img src="{{asset('/')}}website/assets/images/flag/1.jpg" alt="" /> English</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('/')}}website/assets/images/flag/2.jpg" alt="" /> Français</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Nav End -->
    <div class="header-top bg-white ptb-30px d-lg-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex">
                    <div class="logo align-self-center">
                        <a href="{{route('home')}}"><img class="img-responsive" src="{{asset('/')}}website/assets/images/logo/logo.png" alt="logo.jpg" /></a>
                    </div>
                </div>
                <div class="col-md-9 align-self-center">
                    <div class="header-right-element d-flex">
                        <div class="search-element media-body mr-20px">
                            <form class="d-flex" action="#">
                                <div class="search-category">
                                    <select>
                                        <option value="0">All categories</option>
                                        <option value="12">Laptop</option>
                                        <option value="13">- - Hot Categories</option>
                                        <option value="19">- - - - Dresses</option>
                                        <option value="20">- - - - Jackets &amp; Coats</option>
                                        <option value="21">- - - - Sweaters</option>
                                        <option value="22">- - - - Jeans</option>
                                        <option value="23">- - - - Blouses &amp; Shirts</option>
                                        <option value="14">- - Outerwear &amp; Jackets</option>
                                        <option value="24">- - - - Basic Jackets</option>
                                        <option value="25">- - - - Real Fur</option>
                                        <option value="26">- - - - Down Coats</option>
                                        <option value="27">- - - - Blazers</option>
                                        <option value="28">- - - - Trench Coats</option>
                                        <option value="15">- - Weddings &amp; Events</option>
                                        <option value="29">- - - - Wedding Dresses</option>
                                        <option value="30">- - - - Evening Dresses</option>
                                        <option value="31">- - - - Prom Dresses</option>
                                        <option value="32">- - - - Bridesmaid Dresses</option>
                                        <option value="33">- - - - Wedding Accessories</option>
                                        <option value="16">- - Bottoms</option>
                                        <option value="34">- - - - Skirts</option>
                                        <option value="35">- - - - Leggings</option>
                                        <option value="36">- - - - Pants &amp; Capris</option>
                                        <option value="37">- - - - Wide Leg Pants</option>
                                        <option value="38">- - - - Shorts</option>
                                        <option value="17">- - Tops &amp; Sets</option>
                                        <option value="39">- - - - Tank Tops</option>
                                        <option value="40">- - - - Suits &amp; Sets</option>
                                        <option value="41">- - - - Jumpsuits</option>
                                        <option value="42">- - - - Rompers</option>
                                        <option value="43">- - - - Sleep &amp; Lounge</option>
                                        <option value="18">- - Accessories</option>
                                        <option value="44">- - - - Eyewear &amp; Accessories</option>
                                        <option value="45">- - - - Hats &amp; Caps</option>
                                        <option value="46">- - - - Belts &amp; Cummerbunds</option>
                                        <option value="47">- - - - Scarves &amp; Wraps</option>
                                        <option value="48">- - - - Gloves &amp; Mittens</option>
                                        <option value="49">Computer</option>
                                        <option value="50">- - Bottoms</option>
                                        <option value="53">- - - - Skirts</option>
                                        <option value="54">- - - - Leggings</option>
                                        <option value="55">- - - - Jeans</option>
                                        <option value="56">- - - - Pants &amp; Capris</option>
                                        <option value="57">- - - - Shorts</option>
                                        <option value="51">- - Outerwear &amp; Jackets</option>
                                        <option value="58">- - - - Trench</option>
                                        <option value="59">- - - - Genuine Leather</option>
                                        <option value="60">- - - - Parkas</option>
                                        <option value="61">- - - - Down Jackets</option>
                                        <option value="62">- - - - Wool &amp; Blends</option>
                                        <option value="52">- - Underwear &amp; Loungewear</option>
                                        <option value="63">- - - - Boxers</option>
                                        <option value="64">- - - - Briefs</option>
                                        <option value="65">- - - - Long Johns</option>
                                        <option value="66">- - - - Men's Sleep &amp; Lounge</option>
                                        <option value="67">- - - - Pajama Sets</option>
                                        <option value="68">Smartphone</option>
                                        <option value="69">- - Accessories &amp; Parts</option>
                                        <option value="75">- - - - Cables &amp; Adapters</option>
                                        <option value="76">- - - - Batteries</option>
                                        <option value="77">- - - - Chargers</option>
                                        <option value="78">- - - - Bags &amp; Cases</option>
                                        <option value="79">- - - - Electronic Cigarettes</option>
                                        <option value="70">- - Audio &amp; Video</option>
                                        <option value="80">- - - - Televisions</option>
                                        <option value="81">- - - - TV Receivers</option>
                                        <option value="82">- - - - Projectors</option>
                                        <option value="83">- - - - Audio Amplifier Boards</option>
                                        <option value="84">- - - - TV Sticks</option>
                                        <option value="71">- - Camera &amp; Photo</option>
                                        <option value="85">- - - - Digital Cameras</option>
                                        <option value="86">- - - - Camcorders</option>
                                        <option value="87">- - - - Camera Drones</option>
                                        <option value="88">- - - - Action Cameras</option>
                                        <option value="89">- - - - Photo Studio Supplies</option>
                                        <option value="72">- - Portable Audio &amp; Video</option>
                                        <option value="90">- - - - Headphones</option>
                                        <option value="91">- - - - Speakers</option>
                                        <option value="92">- - - - MP3 Players</option>
                                        <option value="93">- - - - VR/AR Devices</option>
                                        <option value="94">- - - - Microphones</option>
                                        <option value="73">- - Smart Electronics</option>
                                        <option value="95">- - - - Wearable Devices</option>
                                        <option value="96">- - - - Smart Home Appliances</option>
                                        <option value="97">- - - - Smart Remote Controls</option>
                                        <option value="98">- - - - Smart Watches</option>
                                        <option value="99">- - - - Smart Wristbands</option>
                                        <option value="74">- - Video Games</option>
                                        <option value="100">- - - - Handheld Game Players</option>
                                        <option value="101">- - - - Game Controllers</option>
                                        <option value="102">- - - - Joysticks</option>
                                        <option value="103">- - - - Stickers</option>
                                        <option value="104">Game Consoles</option>
                                        <option value="105">Mp3 &amp; headphone</option>
                                        <option value="106">Tv &amp; Video</option>
                                        <option value="107">Watches</option>
                                        <option value="108">Washing Machine</option>
                                        <option value="109">Camera</option>
                                        <option value="110">Audio &amp; Theater</option>
                                        <option value="111">Accessories</option>
                                        <option value="112">Games &amp; Consoles</option>
                                    </select>
                                </div>
                                <input type="text" placeholder="Enter your search key ... " />
                                <button>Search</button>
                            </form>
                        </div>
                        <!--Cart info Start -->
                        <div class="header-tools d-flex">
                            <div class="cart-info d-flex align-self-center button">
                                <a href="#offcanvas-wishlist" class="heart offcanvas-toggle"><i class="lnr lnr-heart"></i><span>Wishlist</span></a>
                                <a href="{{route('show')}}" class="bag offcanvas-toggle"><i class="lnr lnr-cart"></i><span>My Cart</span></a>
                            </div>
                        </div>
                        <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
                            <div class="inner">
                                <div class="head">
                                    <span class="title">{{route('show')}} Cart</span>
                                    <span>{{count(Cart::getContent())}} Items</span>
                                </div>
                                <div class="body customScroll">
                                    <ul class="minicart-product-list">
                                        @foreach(Cart::getContent() as $cartProduct)
                                        <li>
                                            <a href="{{route('show')}}" class="image"><img src="{{asset($cartProduct->attributes->image)}}" alt="Cart product Image"></a>
                                            <div class="content">
                                                <a href="{{route('show')}}" class="title">{{$cartProduct->name}}t</a>
                                                <span class="quantity-price">1 x <span class="amount">{{$cartProduct->price}}</span></span>
                                                <a href="#" class="remove">×</a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="foot">
                                    <div class="sub-total">
                                        <strong>Subtotal :</strong>
                                        <span class="amount">$144.00</span>
                                    </div>
                                    <div class="buttons">
                                        <a href="{{route('show')}}" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                                        <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                                    </div>
                                    <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Cart info End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Nav End -->
    <div class="header-menu bg-white sticky-nav d-lg-block d-none padding-0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header-menu-vertical">
                        <h4 class="menu-title">Browse Categories </h4>
                        <ul class="menu-content display-none">
                            @foreach($categories as $category)
                            <li class="menu-item">
                                <a href="{{route('category.web', ['id' => $category->id])}}">{{$category->name}}<i class="ion-ios-arrow-right"></i></a>
                                <ul class="sub-menu flex-wrap">
                                    <li>
                                        <ul class="submenu-item">
                                            @foreach($category->subCategories as $subCategory)
                                            <li><a href="{{route('sub-category.web',['id' => $subCategory->id])}}">{{$subCategory->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                                <!-- sub menu -->
                            </li>
                            @endforeach

                        </ul>
                        <!-- menu content -->
                    </div>
                    <!-- header menu vertical -->
                </div>
                <div class="col-lg-9">
                    <div class="header-horizontal-menu">
                        <ul class="menu-content">
                            <li class="active menu-dropdown">
                                <a href="#">Home <i class="ion-ios-arrow-down"></i></a>
                                <ul class="main-sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">Shop <i class="ion-ios-arrow-down"></i></a>
                                <ul class="mega-menu-wrap">
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Shop Grid</a></li>
                                            <li><a href="shop-3-column.html">Shop Grid 3 Column</a></li>
                                            <li><a href="shop-4-column.html">Shop Grid 4 Column</a></li>
                                            <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Shop List</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Shop Single</a></li>
                                            <li><a href="single-product.html">Shop Single</a></li>
                                            <li><a href="single-product-variable.html">Shop Variable</a></li>
                                            <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                            <li><a href="single-product-group.html">Shop Group</a></li>
                                            <li><a href="single-product-tabstyle-2.html">Shop Tab 2</a></li>
                                            <li><a href="single-product-tabstyle-3.html">Shop Tab 3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Shop Single</a></li>
                                            <li><a href="single-product-slider.html">Shop Slider</a></li>
                                            <li><a href="single-product-gallery-left.html">Shop Gallery Left</a></li>
                                            <li><a href="single-product-gallery-right.html">Shop Gallery Right</a></li>
                                            <li><a href="single-product-sticky-left.html">Shop Sticky Left</a></li>
                                            <li><a href="single-product-sticky-right.html">Shop Sticky Right</a></li>
                                        </ul>
                                    </li>
                                    <li class="w-100">
                                        <ul class="banner-megamenu-wrapper d-flex">
                                            <li class="banner-wrapper mr-30px">
                                                <a href="single-product.html"><img src="{{asset('/')}}website/assets/images/menu-image/banner-menu2.jpg" alt="" /></a>
                                            </li>
                                            <li class="banner-wrapper">
                                                <a href="single-product.html"><img src="{{asset('/')}}website/assets/images/menu-image/banner-menu3.jpg" alt="" /></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
                                <ul class="main-sub-menu">
                                    <li><a href="about.html">About Page</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">Blog <i class="ion-ios-arrow-down"></i></a>
                                <ul class="main-sub-menu">
                                    <li class="menu-dropdown position-static">
                                        <a href="#">Blog Grid <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="main-sub-menu main-sub-menu-2">
                                            <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                            <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-dropdown position-static">
                                        <a href="#">Blog List <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="main-sub-menu main-sub-menu-2">
                                            <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-dropdown position-static">
                                        <a href="#">Blog Single <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="main-sub-menu main-sub-menu-2">
                                            <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                            <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">Custom Menu <i class="ion-ios-arrow-down"></i></a>
                                <ul class="mega-menu-wrap mega-menu-wrap-2">
                                    <li>
                                        <div class="custom-single-item">
                                            <h4><a href="shop-4-column.html">Women Is Clothes & Fashion</a></h4>
                                            <p>Shop Women Is Clothing And Accessories And Get Inspired By The Latest Fashion Trends.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-single-item">
                                            <h4><a href="shop-4-column.html">Simple Style</a></h4>
                                            <p>A New Flattering Style With All The Comfort Of Our Linen.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-single-item">
                                            <h4><a href="shop-4-column.html">Easy Style</a></h4>
                                            <p>Endless Styling Possibilities In A Collection Full Of Versatile Pieces.</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- header menu -->
</header>
<!-- Header Section End Here -->

@yield('body')

<!-- Footer Area Start -->
<div class="footer-area">
    <div class="footer-container">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px">
                        <div class="single-wedge">
                            <div class="footer-logo">
                                <a href="index.html"><img class="img-responsive" src="{{asset('/')}}website/assets/images/logo/logo.png" alt="logo.jpg" /></a>
                            </div>
                            <p class="text-infor">We are a team of designers and developers that create high quality HTML template</p>
                            <div class="need_help">
                                <p class="add"><span class="address">Address:</span> 4710-4890 Breckinridge St, Fayetteville</p>
                                <p class="mail"><span class="email">Email:</span> <a href="mailto:support@hasthemes.com">support@hasthemes.com</a></p>
                                <p class="phone"><span class="call us">Call Us:</span> <a href="tel:(+800)123456789"> (+800)123456789</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">Information</h4>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Secure Payment</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Stores</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-sm-6 mb-sm-30px mb-lm-30px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">CUSTOM LINKS</h4>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">Legal Notice</a></li>
                                    <li><a href="#">Prices Drop</a></li>
                                    <li><a href="#">New Products</a></li>
                                    <li><a href="#">Best Sales</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 ">
                        <div class="single-wedge">
                            <h4 class="footer-herading">From Our Blog</h4>
                            <div class="footer-blog-slider">
                                <div class="footer-blog-slider-wrapper slider-nav-style-3 ">
                                    <!-- Single-item -->
                                    <div class="single-slider-item">
                                        <div class="footer-blog-post d-flex mb-30px">
                                            <div class="footer-blog-post-top">
                                                <div class="post-thumbnail">
                                                    <a href="blog-single-left-sidebar.html">
                                                        <img src="{{asset('/')}}website/assets/images/blog-image/blog-8.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="footer-blog-content">
                                                <h4><a href="blog-single-left-sidebar.html">This is First Post For XipBlog</a></h4>
                                                <div class="footer-blog-meta">
                                                    <span class="autor">Posted by <a href="#">Demo Hasthemes</a> </span>
                                                    <span class="date">Jun 29,2022</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer-blog-post">
                                            <div class="footer-blog-post-top">
                                                <div class="post-thumbnail">
                                                    <a href="blog-single-left-sidebar.html">
                                                        <img src="{{asset('/')}}website/assets/images/blog-image/blog-9.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="footer-blog-content">
                                                <h4><a href="blog-single-left-sidebar.html">This is Secound Post For XipBlog</a></h4>
                                                <div class="footer-blog-meta">
                                                    <span class="autor">Posted by <a href="#">Demo Hasthemes</a> </span>
                                                    <span class="date">Jun 29,2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-item -->
                                    <div class="single-slider-item">
                                        <div class="footer-blog-post d-flex mb-30px">
                                            <div class="footer-blog-post-top">
                                                <div class="post-thumbnail">
                                                    <a href="blog-single-left-sidebar.html">
                                                        <img src="{{asset('/')}}website/assets/images/blog-image/blog-10.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="footer-blog-content">
                                                <h4><a href="blog-single-left-sidebar.html">This is Third Post For XipBlog</a></h4>
                                                <div class="footer-blog-meta">
                                                    <span class="autor">Posted by <a href="#">Demo Hasthemes</a> </span>
                                                    <span class="date">Jun 29,2022</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer-blog-post">
                                            <div class="footer-blog-post-top">
                                                <div class="post-thumbnail">
                                                    <a href="blog-single-left-sidebar.html">
                                                        <img src="{{asset('/')}}website/assets/images/blog-image/blog-11.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="footer-blog-content">
                                                <h4><a href="blog-single-left-sidebar.html">This is Fourth Post For XipBlog</a></h4>
                                                <div class="footer-blog-meta">
                                                    <span class="autor">Posted by <a href="#">Demo Hasthemes</a> </span>
                                                    <span class="date">Jun 29,2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-paymet-warp d-flex">
                            <div class="heading-info">Payment:</div>
                            <div class="payment-way"><img class="payment-img img-responsive" src="{{asset('/')}}website/assets/images/icons/payment.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-social-icon d-flex">
                            <div class="heading-info">Follow Us:</div>
                            <div class="social-icon">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="ion-social-facebook"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="ion-social-twitter"></i></a>
                                    </li>
                                    <li class="google">
                                        <a href="#"><i class="ion-social-google"></i></a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#"><i class="ion-social-youtube"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="ion-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-tags">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tag-content">
                            <ul>
                                <li><a href="#">Online Shopping</a></li>
                                <li><a href="#">Promotions</a></li>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Most Populars</a></li>
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Special Products</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">Our Stores</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Warantee</a></li>
                                <li><a href="#">Refunds</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <p class="copy-text">Copyright © <a href="https://hasthemes.com/"> HasThemes</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-lm-100px mb-sm-30px">
                        <div class="quickview-wrapper">
                            <!-- slider -->
                            <div class="gallery-top">
                                <div class="single-slide">
                                    <img class="img-responsive m-auto" src="{{asset('/')}}website/assets/images/product-image/8.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img class="img-responsive m-auto" src="{{asset('/')}}website/assets/images/product-image/14.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img class="img-responsive m-auto" src="{{asset('/')}}website/assets/images/product-image/15.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img class="img-responsive m-auto" src="{{asset('/')}}website/assets/images/product-image/11.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img class="img-responsive m-auto" src="{{asset('/')}}website/assets/images/product-image/19.jpg" alt="">
                                </div>
                            </div>
                            <div class=" gallery-thumbs">
                                <div class="single-slide">
                                    <img class="img-responsive m-auto" src="{{asset('/')}}website/assets/images/product-image/8.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img class="img-responsive m-auto" src="{{asset('/')}}website/assets/images/product-image/14.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img class="img-responsive m-auto" src="{{asset('/')}}website/assets/images/product-image/15.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img class="img-responsive m-auto" src="{{asset('/')}}website/assets/images/product-image/11.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img class="img-responsive m-auto" src="{{asset('/')}}website/assets/images/product-image/19.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>Originals Kaval Windbr</h2>
                            <p class="reference">Reference:<span> demo_17</span></p>
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
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                            <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <div class="pro-details-size-color">
                                <div class="pro-details-color-wrap">
                                    <span>Color</span>
                                    <div class="pro-details-color-content">
                                        <ul>
                                            <li class="blue"></li>
                                            <li class="maroon active"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <div class="pro-details-cart btn-hover">
                                    <a href="#"> + Add To Cart</a>
                                </div>
                            </div>
                            <div class="pro-details-wish-com">
                                <div class="pro-details-wishlist">
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                </div>
                                <div class="pro-details-compare">
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                </div>
                            </div>
                            <div class="pro-details-social-info">
                                <span>Share</span>
                                <div class="social-info">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-instagram"></i></a>
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
<!-- Modal end -->
<!-- JS
============================================ -->

<!-- Vendors JS -->
<script src="{{asset('/')}}website/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}website/assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}website/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="{{asset('/')}}website/assets/js/vendor/modernizr-3.11.2.min.js"></script>

<!-- Plugins JS -->
<script src="{{asset('/')}}website/assets/js/plugins/jquery-ui.min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/slick.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/countdown.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/scrollup.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/elevateZoom.js"></script>
<script src="{{asset('/')}}website/assets/js/xzoom.min.js"></script>
<script src="{{asset('/')}}website/assets/js/setup.js"></script>

<!-- Main Activation JS -->
<script src="{{asset('/')}}website/assets/js/main.js"></script>
</body>

<!-- Mirrored from htmldemo.net/abelo/abelo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 10:57:21 GMT -->
</html>

