<?php

namespace App\Http\Controllers;

/**
 * Barbour Controller
 *
 * @author EB
 * @package App\Http\Controllers
 */
class BarbourController extends Controller {

	public function main()
	{
		return view('home')->with('unsplash', UnsplashController::fetchRandomUnsplashImage());
	}

	public function about() {
		return view('about');
	}
}
