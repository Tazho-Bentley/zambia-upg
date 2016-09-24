<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>UPG</title>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="js/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" >
    <link href="css/responsive.css" rel="stylesheet">

    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/dataTables.bootstrap.min.css') !!}" rel="stylesheet" type="text/css" >
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


    <script src="{!! asset('js/jquery.min.js') !!}"></script>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="user-menu">
                                <ul>
                                    <!-- Authentication Links -->
                                    @if (Auth::guest())
                                        <li><a href="{{ url('/login') }}"><i class="fa fa-user"></i>Login</a></li>
                                        <li><a href="{{ url('/register') }}"><i class="fa fa-user"></i>Register</a></li>
                                    @else
                                        <li class="dropdown">
                                            <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End header area -->
            <div class="navbar-header">
                <div class="site-branding-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-sm-offset-5">
                                <div class="logo">
                                    <h1><a href="{{ url('/') }}">UPG<span>Zambia</span></a></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End site branding area -->
            </div>
        </div>
        <div class="mainmenu-area">
            <div class="container">
                <div class="row col-sm-12 col-sm-offset-4">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/') }}">UPG</a></li>
                            <li><a href="{{ url('/features') }}">Features</a></li>
                            <li><a href="{{ url('/pay-school') }}">Pay School</a></li>
                            <li><a href="{{ url('/about-upg') }}">About UPG</a></li>
                            <!-- Secure the Admin area -->
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}"><i class="fa fa-user"></i>My Account</a></li>
                            @else
                                <li><a href="{{ url('/vendor-area') }}"><i class="fa fa-user"></i>My Account</a></li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- End mainmenu area -->
    </nav>

    @yield('content')


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-about-us">
                        <h2>UPG<span>Zambia</span></h2>
                        <p style="color:#ffffff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="{{ url('/home') }}">My account</a></li>
                            <li><a href="{{ url('/') }}">Front page</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p style="color:#ffffff;">Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p style="color: #ffffff;">&copy; 2016 UPG Zambia. All Rights Reserved. Coded with <i class="fa fa-heart"></i> by <a href="#" target="_blank">UPG Zambia</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

    <!-- DataTables -->
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="{!! asset('js/jquery.dataTables.min.js')!!}"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- App scripts -->
    @stack('scripts')

    <!-- Bootstrap JS form CDN -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>


    <script src="js/jquery.easing.1.3.min.js"></script>

    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/morris/raphael-2.1.0.min.js"></script>
    <script src="js/morris/morris.js"></script><!-- jQuery easing
    <script src="js/custom.js"></script>JavaScripts -->
        <script src="js/main.js">

        </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">

    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
</body>
</html>
