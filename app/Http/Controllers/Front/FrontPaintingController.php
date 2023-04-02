<?php

namespace App\Http\Controllers\Front;

use App\Models\Frame;
use App\Models\Painting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class FrontPaintingController extends Controller
{
    /**
     * Display a listing of the resource
     * @return View
     */
    public function index(): View
    {
        $paintings = Painting::get();
        return view('front.paintings.index', compact('paintings'));
    }
    
    /**
     * Display the specified painting resource.
     * @param Painting $param
     * @return View
     */
    public function show(Painting $painting): View
    {
        $frames = Frame::get();
        return view('front.paintings.show', compact('painting', 'frames'));
    }
}
