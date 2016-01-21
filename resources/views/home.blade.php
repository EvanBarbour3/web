@extends('skeleton')
@section('content')
	<main>
	<div class="container">
		<div class="section no-pad">
			<div class="row home-container">
				<div class="col s12 m12 l12 white-text">
					<h1 class="home-h1">Evan Barbour</h1>
					<h4 class="home-h4">Junior Software Developer</h4>
				</div>
			</div>
			<div class="row home-default-row">
				<div class="col s12 m12 l12">
					<h4 class="home-h4 explore" data-hover="hi"><a href="#" class="white-text">Explore my site</a></h4>
				</div>
			</div>
		</div>
	</div>
	</main>
    <footer class="page-footer grey darken-4">
        <div class="container">
            <div class="row home-default-row">
                <div class="col s12 m3 l3 white-text">© EvanBarbour.co.uk 2015</div>
                <div class="col s12 m6 l6 white-text">
                    <a class="white-text" href="https://www.facebook.com/evan.barbour.3" target="_blank"><i class="fa fa-facebook fa-2x social-media"></i></a>
                    <a class="white-text" href="https://www.twitter.com/evanbarbour3" target="_blank"><i class="fa fa-twitter fa-2x social-media"></i></a>
                    <a class="white-text" href="https://plus.google.com/109519007980987886538" target="_blank"><i class="fa fa-google-plus fa-2x social-media"></i></a>
                    <a class="white-text" href="https://uk.linkedin.com/pub/evan-barbour/7a/8a7/735" target="_blank"><i class="fa fa-linkedin fa-2x social-media"></i></a>
                    <a class="white-text" href="https://www.instagram.com/evanbarbour3" target="_blank"><i class="fa fa-instagram fa-2x social-media"></i></a>
                    <a class="white-text" href="mailto:EvanBarbour@hotmail.co.uk" target="_blank"><i class="fa fa-paper-plane fa-2x social-media"></i></a>
                </div>
                <div class="col s12 m3 l3 white-text">Credits</div>
            </div>
     	</div>
	</div>
</footer>
<script type="text/javascript">
    $("#body").css("background-image","url('{{asset('/image/hero.jpg')}}')");
    $(".button-collapse").sideNav();
</script>
@stop