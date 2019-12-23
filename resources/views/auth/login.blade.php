<html>
<head>

    <link href="{{asset('assets/login_register_css/login-register.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/login_register_css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <script src="{{asset('assets/login_register_js/jquery-1.10.2.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/login_register_js/bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/login_register_js/login-register.js')}}" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <div class="modal fade login" id="loginModal">
        <div class="modal-dialog login animated">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login with</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="content">
                            <div class="social">
                                <a class="circle github" href="#">
                                    <i class="fa fa-github fa-fw"></i>
                                </a>
                                <a id="google_login" class="circle google" href="#">
                                    <i class="fa fa-google-plus fa-fw"></i>
                                </a>
                                <a id="facebook_login" class="circle facebook" href="#">
                                    <i class="fa fa-facebook fa-fw"></i>
                                </a>
                            </div>
                            <div class="division">
                                <div class="line l"></div>
                                <span>or</span>
                                <div class="line r"></div>
                            </div>
                            <div class="error"></div>
                            <div class="form loginBox">
                                <form method="post" action="{{route('user.login')}}" accept-charset="UTF-8">
                                    {{csrf_field()}}
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="submit" value="Login">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="content registerBox" style="display:none;">
                            <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="{{route('user.register')}}" accept-charset="UTF-8">
                                    {{csrf_field()}}
                                    <input id="email" class="form-control" type="text" placeholder="Full Name" name="name">
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="phone" class="form-control" type="text" placeholder="Phone Number" name="phone">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                    <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="forgot login-footer">
                            <span>Looking to
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                    </div>
                    <div class="forgot register-footer" style="display:none">
                        <span>Already have an account?</span>
                        <a href="javascript: showLoginForm();">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
</script>
</body>
</html>

