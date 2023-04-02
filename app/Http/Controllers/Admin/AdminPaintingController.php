<?php

namespace App\Http\Controllers\Admin;

use App\Models\Artist;
use App\Models\Color;
use App\Models\Location;
use App\Models\Method;
use App\Models\Movement;
use App\Models\Painting;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Http\Requests\StorePaintingRequest;
use App\Http\Requests\UpdatePaintingRequest;
use Illuminate\Http\RedirectResponse;




class AdminPaintingController extends Controller
{
    /**
     * Display a listing of the painting resource.
     * @return View
     */
    public function index(): View
    {
        $paintings = Painting::get();
        return view('admin.paintings.index', compact('paintings'));
    }

    /**
     * Show the form for creating a new painting resource.
     * @return View
     */
    public function create(): View
    {
        $artists = Artist::get();
        $colors = Color::get();
        $locations = Location::get();
        $methods = Method::get();
        $movements = Movement::get();
        return view('admin.paintings.create', compact( 'artists', 'colors', 'locations', 'methods', 'movements'));  
    }

    /**
     * Store a newly created painting resource in database.
     * @param StorePaintingRequest $request
     * @return RedirectResponse
     */
    public function store(StorePaintingRequest $request): RedirectResponse
    {
        Painting::customCreate($request);
        return to_route('admin.paintings.index');
    }

    /**
     * Show the form for editing the specified painting resource.
     * @param Painting $painting
     * @return View
     */
    public function edit(Painting $painting)
    {
        $artists = Artist::get();
        $colors = Color::get();
        $locations = Location::get();
        $methods = Method::get();
        $movements = Movement::get();
        return view('admin.paintings.edit', compact('painting','artists', 'colors', 'locations', 'methods','movements')); 
    }

    /**
     * Update the specified painting resource in database.
     * @param UpdatePaintingRequest $request
     * @param Painting $painting
     * @return RedirectResponse
     */
    public function update(UpdatePaintingRequest $request, Painting $painting): RedirectResponse
    {
        $painting->customUpdate($request);
        return to_route('admin.paintings.index');
    }

    /**
     * Remove the specified painting resource from database.
     * @param Painting $painting
     * @return string
     */
    public function destroy(Painting $painting): string
    {
        $painting->delete();
        return response()->json(['success' => true]);
    }
}
