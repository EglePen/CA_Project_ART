<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;

class AdminArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $artists = Artist::get();
        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtistRequest $request)
    {
        Artist::create($request->all());
        return to_route('admin.artists.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return view('admin.artists.edit', compact('artist')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtistRequest $request, Artist $artist)
    {
        $artist->fill($request->all())->save();
        // return to_route('admin.artists.index');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        // $artist->delete();
        // return response()->json(['success' => true]);
    }
}
