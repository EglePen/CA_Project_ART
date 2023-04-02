<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function index(): RedirectResponse
    {
        return to_route('admin.paintings.index');
    }
}

