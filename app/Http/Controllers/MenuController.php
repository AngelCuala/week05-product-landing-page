<?php

namespace App\Http\Controllers;

class MenuController extends Controller
{
    /**
     * Show the full Bypass Grill menu page.
     */
    public function index()
    {
        return view('pages.menu');
    }
}
