<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use Illuminate\Http\RedirectResponse;

class AdminLocationController extends Controller
{
    /**
     * Display a listing of the location resource.
     * @return View
     */
    public function index(): View
    {
        $locations = Location::get();
        return view('admin.locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new location resource.
     * @return View
     */
    public function create(): View
    {
        $location = Location::get();
        return view('admin.locations.create', compact('location')); 
    }

    /**
     * Store a newly created location resource in database.
     * @param StoreLocationRequest $request
     * @return RedirectResponse
     */
    public function store(StoreLocationRequest $request): RedirectResponse
    {
        Location::create($request->all());
        return to_route('admin.locations.index');
    }

    /**
     * Show the form for editing the specified location resource.
     * @param Location $location
     * @return View
     */
    public function edit(Location $location): View
    {
        return view('admin.locations.edit', compact('location')); 
    }

    /**
     * Update the specified location resource in database.
     * @param UpdatelocationRequest $request
     * @param Location $location
     * @return RedirectResponse
     */
    public function update(UpdateLocationRequest $request, Location $location): RedirectResponse
    {
        $location->fill($request->all())->save();
        return to_route('admin.locations.index');
    }

    /**
     * Remove the specified location resource from database.
     * @param Location $location
     * @return string
     */
    public function destroy(Location $location): string
    {
        $location->delete();
        return response()->json(['success' => true]);
    }
}
