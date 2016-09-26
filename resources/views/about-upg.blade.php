@extends('layouts.app')
@section('content')
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="customimages/ico/apple-touch-icon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="customimages/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="customimages/ico/apple-touch-icon-72.png">
    <link rel="apple-touch-icon-precomposed" href="customimages/ico/apple-touch-icon-57.png">
    <link rel="shortcut icon" href="customimages/ico/favicon.png">
    <!--[if IE]><![endif]-->
    <link rel="stylesheet" href="customcss/style.css">
    <script src="customjs/jquery.js"></script>
    <script src="customjs/countdown.js"></script>
    <script src="customjs/owlcarousel.js"></script>
    <script src="customjs/uikit.scrollspy.js"></script>
    <script src="customjs/scripts.js"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body id="backtotop">

    <div class="fullwidth clearfix">
        <div id="topcontainer" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

            <p><span class="fa fa-signal"></span></p>
            <h1><span>UPG</span><br />is coming soon</h1>
            <p>It's almost ready ... honest</p>

        </div>
    </div>

    <div class="arrow-separator arrow-white"></div>

    <div class="fullwidth colour1 clearfix">
        <div id="countdown" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

            <div id="countdowncont" class="clearfix">
                <ul id="countscript">
                    <li>
                        <span class="days">99</span>
                        <p>Days</p>
                    </li>
                    <li>
                        <span class="hours">59</span>
                        <p>Hours</p>
                    </li>
                    <li class="clearbox">
                        <span class="minutes">36</span>
                        <p>Minutes</p>
                    </li>
                    <li>
                        <span class="seconds">59</span>
                        <p>Seconds</p>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="arrow-separator arrow-theme"></div>

    <div class="fullwidth colour2 clearfix">
        <div id="maincont" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

            <p><strong>Lorem ipsum dolor</strong> sit amet, consectetur adipiscing elit. <a title="" href="#">Donec quis enim nulla</a>. Suspendisse posuere arcu ac eros iaculis egestas commodo risus tempus. Fusce placerat nulla nisi. Proin congue erat non orci adipiscing nec porttitor lacus egestas. <em>Donec venenatis</em>, risus et hendrerit ultrices, libero sem lacinia risus, ut convallis massa sapien nec libero. Suspendisse arcu orci, gravida nec aliquet ut, lacinia non nisl.</p>
            <h2>Sign up and we'll let you know when we launch</h2>
            <p>If you would like to receive <strong>news and special offers</strong> please send us your email address below:</p>
            <div id="signupform" class="sb-search clearfix">
                <form method="post" id="contact" class="clearfix">
                    <input class="sb-search-input" placeholder="Enter email ..." type="text" value="">
                    <input class="sb-search-submit" value="" type="submit">
                    <button class="formbutton" type="submit"><span class="fa fa-search"></span></button>
                </form>
            </div>

        </div>
    </div>

    <div class="arrow-separator arrow-themelight"></div>

    <div class="arrow-separator arrow-grey"></div>

    <div class="fullwidth clearfix">
        <div id="footercont" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

            <p class="backtotop"><a title="" href="#backtotop"><span class="fa fa-angle-double-up"></span></a></p>
            <div id="socialmedia" class="clearfix">
                <ul>
                    <li><a title="" href="#" rel="external"><span class="fa fa-facebook"></span></a></li>
                    <li><a title="" href="#" rel="external"><span class="fa fa-twitter"></span></a></li>
                    <li><a title="" href="#" rel="external"><span class="fa fa-google-plus"></span></a></li>
                    <li><a title="" href="#" rel="external"><span class="fa fa-linkedin"></span></a></li>
                    <li><a title="" href="#" rel="external"><span class="fa fa-pinterest"></span></a></li>
                </ul>
            </div>
        </div>
    </div>

    </body>
@endsection