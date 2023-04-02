<?php

namespace App\Http\Controllers\Front;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontHomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('front.home');
    }
}
