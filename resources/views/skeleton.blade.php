<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Evan Barbour">
    <meta name="description" content="Evan Barbour - Junior Software Developer">
    <meta name="keywords" content="Evan Barbour, PHP, Laravel, JQuery, JavaScript, HTML, CSS, agile, scrum, software development, artisan">
    <link rel="icon" href="{{asset('/image/logo.png')}}" type="image/png" sizes="16x16">
	<title>Evan Barbour - Junior Software Developer</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>
    <link rel="stylesheet" href="{!! asset('css/main.css') !!}">
</head>
<header>
    <nav class="grey darken-4" role="navigation">
        <div class="nav-wrapper container">
            @if(!empty(Request::segments()))
                <a href="/" class="brand-logo">Evan Barbour</a>
            @endif
            <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="fa fa-bars fa-2x"></i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <ul class="side-nav" id="mobile-nav">
                <li><a href="#" id="side-nav-close"><i class="fa fa-cross fa-2x"></i> Close</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
<body id="body" class="hero" style="background-image: url({{asset('/image/hero.jpg')}});">
    @yield('content')
</body>
<footer class="page-footer grey darken-4">
    <div class="container">
        <div class="row">
            <div class="col s12 m6 push-m3">
                <div class="center-align">
                    <a href="https://www.facebook.com/evan.barbour.3" target="_blank">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x white-text text-darken-2"></i>
                            <i class="fa fa-facebook fa-stack-1x black-text"></i>
                        </span>
                    </a>
                    <a href="https://twitter.com/evanbarbour3" target="_blank">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x white-text text-darken-2"></i>
                            <i class="fa fa-twitter fa-stack-1x black-text"></i>
                        </span>
                    </a>
                    <a href="https://plus.google.com/109519007980987886538" target="_blank">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x white-text text-darken-2"></i>
                            <i class="fa fa-google-plus fa-stack-1x black-text"></i>
                        </span>
                    </a>
                    <a href="https://uk.linkedin.com/pub/evan-barbour/7a/8a7/735" target="_blank">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x white-text text-darken-2"></i>
                            <i class="fa fa-linkedin fa-stack-1x black-text"></i>
                        </span>
                    </a>
                    <a href="https://www.instagram.com/evanbarbour3" target="_blank">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x white-text text-darken-2"></i>
                            <i class="fa fa-instagram fa-stack-1x black-text"></i>
                        </span>
                    </a>
                    <a href="https://github.com/EvanBarbour3" target="_blank">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x white-text text-darken-2"></i>
                            <i class="fa fa-github fa-stack-1x black-text"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="hide-on-med-and-up"><br/><br/><br/></div>
            <div class="col s6 m3 pull-m6 white-text">
                © {!! \Carbon\Carbon::now()->year !!} EvanBarbour.co.uk
            </div>
            <div class="col s6 m3">
                <a href="/credits" class="white-text right">Credits</a>
            </div>
        </div>
    </div>
</footer>
</html>
