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
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{ asset('/materialize/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/evan.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('/materialize/js/materialize.min.js')}}"></script>
    <!-- I'm sure I'll find a good enough comment to go here -->
</head>
<body id="body">
<nav class="grey darken-4" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href={{URL::to('/')}} class="brand-logo">
            <img src="{{asset('/image/logo.png')}}" alt="EB">
        </a>
        <!-- Image from http://www.clipartlogo.com/image/eb-eidi_711883.html -->
        <ul class="right hide-on-med-and-down">
            <li><a href={{URL::to('/')}}>Home</a></li>
            <li><a href={{URL::to('about')}}>About</a></li>
            <li><a href="#">Contact</a></li>
            <!--Sense of humour
            <li><div class="switch"><label>No<input type="checkbox"><span class="lever"></span>Yes</label></div></li>
            -->
        </ul>
        <ul id="nav-mobile" class="side-nav" >
            <!--
            <li id="logo-container">
                <img src="{{asset('/image/logo.png')}}" alt="EB">
            </li>
            -->
            <li><a href={{URL::to('/')}}>Home</a></li>
            <li><a href={{URL::to('about')}}>About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse">
            <i class="mdi-navigation-menu">
            </i>
        </a>
    </div>
</nav>
@yield('content')
</body>
</html>
