@extends('skeleton')
@section('content')
<main class="grey darken-2 hero" style="background-image: url({{isset($unsplash) ? '"' . $unsplash->getImageFull() . '"' : "/image/hero.jpg"}})">
    <div class="container">
        <div class="row">
            <div class="valign-wrapper hero-wrapper">
                <div class="col s12 m12">
                    <div class="center-align white-text valign">
                        <h1 class="hero-text text-shadow">Evan Barbour</h1>
                        <h5 class="hero-text text-shadow">Software Engineer</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(isset($unsplash) && !empty($unsplash->getUserName()))
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <div class="image-credit right valign-wrapper">
                        <span class="valign white-text">
                            <a href="{!! $unsplash->getUserUrl() !!}" class="white-text text-shadow" target="_blank"><u>{!! $unsplash->getUserName() !!}</u></a> / <a href="https://unsplash.com" class="white-text text-shadow" target="_blank"><u>Unsplash</u></a>
                        </span> &nbsp;&nbsp;
                        <img src="{!! $unsplash->getUserImage() !!}" alt="" class="circle responsive-img valign" width="40">
                    </div>
                </div>
            </div>
        </div>


    @endif
</main>
@stop
