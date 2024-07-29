<!DOCTYPE html>
<html>


<!-- Mirrored from www.themenate.net/applicator/dist/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2024 10:42:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WebMartSite - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{asset('/')}}admin/assets/images/logo/apple-touch-icon.png">
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/logo/favicon.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="{{asset('/')}}admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/themify-icons.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/animate.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/app.css" rel="stylesheet">
</head>

<body>
<div class="app">
    <div class="layout bg-gradient-info">
        <div class="container">
            <div class="row full-height align-items-center">
                <div class="col-md-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="p-15">
                                <div class="m-b-30">
                                    <img class="img-responsive inline-block" src="{{asset('/')}}admin/assets/images/logo/logo.png" alt="">
                                    <h2 class="inline-block pull-right m-v-0 p-t-15">Login</h2>
                                </div>
                                <p class="m-t-15 font-size-13">Please enter your user name and password to login</p>
                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">Email Address</label>
                                        <input type="email" class="form-control" placeholder="Enter Username" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="checkbox font-size-13 d-inline-block p-v-0 m-v-0">
                                        <input id="agreement" name="agreement" type="checkbox">
                                        <label for="agreement">Keep Me Signed In</label>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <div class="m-t-20 text-center">
                                        <button type="submit" class="btn btn-gradient-success">Login</button>
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

<script src="{{asset('/')}}admin/assets/js/vendor.js"></script>

<script src="{{asset('/')}}admin/assets/js/app.min.js"></script>

<!-- page js -->

</body>


<!-- Mirrored from www.themenate.net/applicator/dist/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2024 10:42:05 GMT -->
</html>
