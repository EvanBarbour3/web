<?php namespace App\Http\Controllers;

class BarbourController extends Controller {

	/*Default "/" view*/
	public function main()
	{
		return view('home');
	}
	public function about() {
		return view('about');
	}


    /*
	public function index($page)
	{
		if($page == "home") {
			return view('home');
		} else if($page == "about") {
			return view('about');
		} else {
			return view('errors/404');
		}
	}
    */

}
