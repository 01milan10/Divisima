@include('frontend.auth.login_register')
    <!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset('img/favicon.ico')}}" rel="shortcut icon"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/form.css')}}"/>
</head>
<body>
    <div class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="{{route('index')}}" class="site-logo">
                            <img src="{{asset('img/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form class="header-search-form">
                            <input type="text" placeholder="Search on divisima ....">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="user-panel">
                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                @auth()
                                    <a>{{Str::limit(Auth::user()->name,10)}}</a>
                                    <a href="{{route('user.logout')}}">Log out</a>
                                    <i class="flaticon-logout"></i>
                                @else
{{--                                    <a href="{{route('login')}}">Sign In</a> or--}}
                                    <a href="javascript:void(0)" onclick="openLoginModal();">Sign In</a> or
                                    <a href="javascript:void(0)" onclick="openRegisterModal();">Create Account</a>
{{--                                    <a href="{{route('register')}}">Create Account</a>--}}
                                @endauth
                            </div>
                            <div class="up-item">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                    <span>0</span>
                                </div>
                                <a href="{{route('user.cart')}}">Shopping Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-navbar">
            <div class="container">
                <!-- menu -->
                <ul class="main-menu">
                    <li><a href="{{route('shopping.categories')}}">Categories</a></li>
                    <li><a href="{{route('women.section')}}">Women</a></li>
                    <li><a href="{{route('men.section')}}">Men</a></li>
                    <li><a href="{{route('jewelry.section')}}">Jewelry
                            <span class="new">New</span>
                        </a></li>
                    <li><a href="">Shoes</a>
                        <ul class="sub-menu">
                            <li><a href="#">Sneakers</a></li>
                            <li><a href="#">Sandals</a></li>
                            <li><a href="#">Formal Shoes</a></li>
                            <li><a href="#">Boots</a></li>
                            <li><a href="#">Flip Flops</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('our.blogs')}}">Blog</a></li>
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>


