<?php

namespace App\Http\Controllers\Admin;

use App\Models\Artist;
use App\Models\Method;
use App\Models\Location;
use App\Models\Movement;
use App\Models\Painting;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaintingRequest;
use App\Http\Requests\UpdatePaintingRequest;

class AdminPaintingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paintings = Painting::get();

        return view('admin.paintings.index', compact('paintings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.paintings.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaintingRequest $request)
    {
        Painting::customCreate($request);
        return to_route('admin.paintings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Painting $painting)
    {
        // dump($painting);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Painting $painting)
    {
        $artists = Artist::get();
        $locations = Location::get();
        $methods = Method::get();
        $movements = Movement::get();

        return view('admin.paintings.edit', compact('painting','artists', 'locations', 'methods','movements')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaintingRequest $request, Painting $painting)
    {
        $painting->customUpdate($request);
        return to_route('admin.paintings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Painting $painting)
    {
        $painting->delete();
        return response()->json(['success' => true]);
    }
}
