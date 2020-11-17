<?php

namespace App\Core\Http\Controllers\Guest;

use App\Core\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guest.home');
    }
}
