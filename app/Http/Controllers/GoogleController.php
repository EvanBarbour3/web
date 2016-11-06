<?php

namespace App\Http\Controllers;

/**
 * Google Controller
 *
 * @author EB
 * @package App\Http\Controllers
 */
class GoogleController extends Controller
{
    /**
     * @author EB
     * @return \Illuminate\View\View
     */
    public function googleVerification()
    {
        return view('GoogleVerification');
    }

}
