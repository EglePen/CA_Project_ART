<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class FrontContactController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('front.contact');
    }
}
