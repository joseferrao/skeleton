<?php

namespace App\Core\Http\Controllers\Back;

use App\Core\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.dashboard');
    }
}
