<!DOCTYPE html>
<!-- HTML Template -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jqguess laravel blog | php and bootstrap</title>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .navbar-inverse {
                background-color: #2496EE;
                border-color: #2496EE;
                text-transform: uppercase;
                font-size: 13px;
                border-radius: 0;
                font-family: 'Raleway',sans-serif;
                height: 45px !important;

            }
          </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <ul class="nav nav-pills navbar-left">
                    <li class="active">
                        <a href="https://github.com/jqguess"><font><font>
                            Home
                            </font></font></a>
                    </li>
                    <li class="active">
                        <a href="http://jqguess.net"><font><font>
                            About
                            </font></font></a>
                    </li>
                    <li class="active">
                        <a class="nav-right-top" href="https://laravel.com"><font><font>
                            Laravel
                            </font></font></a>
                    </li>
                    <li class="active">
                        <a class="nav-right-top" href="http://jqguess.net/electronicsupply"><font><font>
                            Elec.Supply
                            </font></font></a>
                    </li>
                    <li class="active">
                        <a class="nav-right-top" href="http://php.net"><font><font>
                            PHP 7
                            </font></font></a>
                    </li>
                </ul>
                <ul class="nav nav-pills navbar-right">
                    <li>
                        <a class="fb-nav" href="https://facebook.com/">
                            <i class="fa fa-facebook" style="color:white;">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="t-nav" href="https://twitter.com">
                            <i class="fa fa-twitter" style="color:white;">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="plus-nav" href="https://github.com/jqguess">
                            <i class="fa fa-github-square"style="color:white;">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="pin-nav" href="https://www.pinterest.com/">
                            <i class="fa fa-pinterest"style="color:white;">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="instagram-nav" href="https://www.instagram.com/?hl=en">
                            <i class="fa fa-instagram"style="color:white;">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="tumblr-nav" href="https://tumblr.com">
                            <i class="fa fa-tumblr"style="color:white;">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="linkedin-nav nav-right-top" href="https://www.linkedin.com/in/jonathan-guess-084683111">
                            <i class="fa fa-linkedin"style="color:white;">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://jqguess.net">JQGuess</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ url('/') }}">Newest Entries</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li>
                            <a href="{{ url('/auth/login') }}">Login</a>
                        </li>
                        <li>
                            <a href="{{ url('/auth/register') }}">Register</a>
                        </li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                @if (Auth::user()->can_post())
                                <li>
                                    <a href="{{ url('/new-post') }}">Add new post</a>
                                </li>
                                <li>
                                    <a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{ url('/user/'.Auth::id()) }}">My Profile</a>
                                </li>
                                <li>
                                    <a href="{{ url('/auth/logout') }}">Logout</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @if (Session::has('message'))
            <div class="flash alert-info">
                <p class="panel-body">
                    {{ Session::get('message') }}
                </p>
            </div>
            @endif
            @if ($errors->any())
            <div class='flash alert-danger'>
                <ul class="panel-body">
                    @foreach ( $errors->all() as $error )
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>@yield('title')</h2>
                            @yield('title-meta')
                        </div>
                        <div class="panel-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <div class ="col-md-3">
                    <div class="panel panel-default" style="text-align:center;">
                        <div class="panel-heading">
                            <h4>
                                Related Articles
                            </h4>
                        </div>
                        <ul class="list-group">
                            <a href="https://techcrunch.com" class="list-group-item">Tech Crunch</a>
                            <a href="http://www.cnet.com/news/" class="list-group-item">CNET News</a>
                            <a href="http://www.theverge.com/tech" class="list-group-item">The Verge | Technology</a>
                            <a href="http://www.wired.com" class="list-group-item">Wired</a>
                            <a href="https://github.com/blog" class="list-group-item">GitHub Blog</a>
                        </ul>
                    </div>
                    <div class="panel panel-default" style="text-align:center;">
                        <div class="panel-heading">
                            <h4>
                                Related Technologies
                            </h4>
                        </div>
                        <ul class="list-group" style = "display:block">
                            <h5>
                                <li class="list-group-item">
                                    <a href="https://laravel.com/"<span class="label label-danger">Laravel 5</a>

                                    <a href="http://php.net"<span class="label label-default">PHP 7.0</a></li>
                                <li class="list-group-item">
                                    <a href="http://gulpjs.com/"<span class="label label-success" style="margin:3px;">Gulp JS</a>

                                    <a href="https://nodejs.org/en/" <span class="label label-primary">Node JS</a></li>
                                <li class="list-group-item">  
                                    <a href="https://getcomposer.org/"<span class="label label-warning">Composer</a>

                                    <a href="http://getbootstrap.com/" <span class="label label-info">Bootstrap</a></li>
                            </h5>
                        </ul>
                    </div>
                </div>
            </div>
            <!---footer-->
            <div class="footer">
                <div class="container" style="padding-top: 200px;">
                    <div class="row">
                        <div class="col-sm-12" style="text-align:center; float:none;">
                            <p>Copyright @ MIT; <a href="#">Plain and Simple</a>  | Designed by JQGuess  <a href="https://github.com/jqguess"><i class="fa fa-github-square fa-lg"></i></a> | 
                                <a href="https://www.linkedin.com/in/jonathan-guess-084683111"><i class="fa fa-linkedin fa-lg"></i></a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('/js/jquery.min-2.1.3.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min-3.3.1.js') }}"></script>
    </body>
</html>
