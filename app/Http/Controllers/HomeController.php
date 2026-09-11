<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the Bypass Grill landing page.
     */
    public function index()
    {
        return view('pages.home');
    }
}
