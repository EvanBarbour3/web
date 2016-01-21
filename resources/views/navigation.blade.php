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
             <li id="logo-container">
                <img src="{{asset('/image/logo.png')}}" alt="EB">
            </li>
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