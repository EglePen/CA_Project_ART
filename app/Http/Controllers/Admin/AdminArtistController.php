<?php

namespace App\Http\Controllers\Admin;

use App\Models\Artist;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use Illuminate\Http\RedirectResponse;

class AdminArtistController extends Controller
{
    /**
     * Display a listing of the artist resource.
     * @return View
     */
    public function index(): View
    {
        $artists = Artist::get();
        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new artist resource.
     * @return View
     */
    public function create()
    {
        $artist = Artist::get();
        return view('admin.artists.create', compact('artist'));
    }

    /**
     * Store a newly created artist resource in database.
     * @param StoreArtistRequest $request
     * @return RedirectResponse
     */
    public function store(StoreArtistRequest $request): RedirectResponse
    {
        Artist::create($request->all());
        return to_route('admin.artists.index');
    }

    /**
     * Show the form for editing the specified  artist resource.
     * @param Artist $artist
     * @return View
     */
    public function edit(Artist $artist)
    {
        return view('admin.artists.edit', compact('artist')); 
    }

    /**
     * Update the specified artist resource in database.
     * @param UpdateArtistRequest $request
     * @param Artist $artist
     * @return RedirectResponse
     */
    public function update(UpdateArtistRequest $request, Artist $artist): RedirectResponse
    {
        $artist->fill($request->all())->save();
        return to_route('admin.artists.index');
    }

    /**
     * Remove the specified  artist resource from database.
     * @param Artist $artist
     * @return string
     */
    public function destroy(Artist $artist): string
    {
        $artist->delete();
        return response()->json(['success' => true]);
    }
}
