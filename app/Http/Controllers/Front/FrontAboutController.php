<?php

namespace App\Http\Controllers\Front;

use App\Models\Frame;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontAboutController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('front.about');
    }
}
