<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('/image/logo.png')}}" type="image/png" sizes="16x16">
	<title>Evan Barbour - Junior Software Developer</title>
    <!--
        http://inspirationalpixels.com/tutorials/creating-tabs-with-html-css-and-jquery
        http://www.alittlebitofsomething.co.uk/contact/
    -->

    <!--CSS, Bidda' blade here-->
    <link href="{{ asset('/materialize/css/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/evan.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('/materialize/js/materialize.min.js')}}"></script>
</head>
<body>
    <nav class="grey darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href={{URL::to('/')}} class="brand-logo">
                <img src="{{asset('/image/logo.png')}}" alt="EB">
            </a>
            <!-- Image from http://www.clipartlogo.com/image/eb-eidi_711883.html -->
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Onions</a></li>
                <li><a href="#">Have</a></li>
                <li><a href="#">Layers</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav" style="left: -250px;">
                <li><a href="#">Onions</a></li>
                <li><a href="#">Have</a></li>
                <li><a href="#">Layers</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse">
                <i class="mdi-navigation-menu">
                </i>
            </a>
        </div>
    </nav>

    <div class="parallax-container hero">
       <div class="section no-pad-bot">
           <div class="container white-text" style="text-shadow: 1px 2px 0px #000">
               <div class="row center">
                   <h1 style="padding-top: 100px;">Evan Barbour</h1>
               </div>
               <div class="row center">
                   <h5 class="light">Junior Software Developer</h5>
               </div>
           </div>
       </div>
        <div class="parallax" style="height: 400px; background-image: url({{asset('/image/hero.png')}});">
            <!--<img src="{{asset('/image/hero.png')}}">-->
        </div>
    </div>

    <div class="container white">
        <div class="section">
            <div class="row">
                
            </div>
        </div>
    </div>

    <!--That nice overlay, that I'm not gonna use..
    <div class="section no-pad-bot" style="margin-top: -5%;">
        <div class="row">
            <div class="col offset-l1 l10 s12 white z-depth-1">
                <article>
                    <div class="col l2 m4 s6">
                       Onions or ogres? layers or na
                    </div>
                    <div class="entry-content">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <div class="col l10 m8 s12">
                            But, Jack.O'Sullivan.Codes, is Shrek really love?
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div class="section no-pad-top orange accent-2" style="margin-top: -5%;">
        <br><br><br><br><br><br><br><br>
    </div>

    -->


    <!--
    <div class="section blue accent-4">
        <div class="row container">
            <h2 class="header white-text">Go away</h2>
            <p class="white-text text-darken-1 lighten-3">Onions have layers</p>
            <br><br><br><br><br><br>
        </div>
    </div>
    <div class="section">
            <div class="row editor-window">
                <div class="col s12 m12 l12">
                    <div class="circle red"></div>
                    <div class="circle orange"></div>
                    <div class="circle green"></div>
                </div>
            </div>
            <div class="row editor-menu">
                <div class="col s12 m12 l12 amber-text text-darken-3">
                    <div class="dev-tabs">
                        <ul class="dev-links">
                            <li><a href="#dev1">Dev1</a></a></li>
                            <li><a href="#dev2">Dev2</a></a></li>
                            <li><a href="#dev3">Dev3</a></a></li>
                        </ul>
                    </div>

                    <p class="code">&#64;extends(<span class="green-text text-darken-1">'skeleton'</span>)</p>
                    <p class="code">&#64;section(<span class="green-text text-darken-1">'content'</span>)</p>
                    <p class="code">&#60;div <span class="blue-text text-lighten-3">class=</span><span class="green-text text-lighten-2">'container'</span>&#62;</p>
                    <p class="code inner">Evan Barbour</p>
                    <p class="code">&#60;/div&#62;</p>
                    <div class="col s1 m1 l1"><input type="text" style="display: inline-block;"><div class="cursor"></div></div>
                </div>
            </div>
        </div>
    -->
    <script type="text/javascript">
        $(".button-collapse").sideNav();
        $(document).ready(function(){
            $('.parallax').parallax();
        });
    </script>
</body>
</html>
