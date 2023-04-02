<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreColorRequest;
use App\Http\Requests\UpdateColorRequest;
use Illuminate\Http\RedirectResponse;

class AdminColorController extends Controller
{
    /**
     * Display a listing of the color resource.
     * @return View
     */
    public function index(): View
    {
        $colors = Color::get();
        return view('admin.colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new color resource.
     * @return View
     */
    public function create(): View
    {
        $color = Color::get();
        return view('admin.colors.create', compact('color')); 
    }

    /**
     * Store a newly created color resource in database.
     * @param StoreColorRequest $request
     * @return RedirectResponse
     */
    public function store(StoreColorRequest $request): RedirectResponse
    {
        Color::create($request->all());
        return to_route('admin.colors.index');
    }

    /**
     * Show the form for editing the specified  color resource.
     * @param Color $color
     * @return View
     */
    public function edit(Color $color): View
    {
        return view('admin.colors.edit', compact('color'));
    }

    /**
     * Update the specified color resource in database.
     * @param UpdateColorREquest $request
     * @param Color $color
     * @return RedirectResponse
     */
    public function update(UpdateColorRequest $request, Color $color): RedirectResponse
    {
        $color->fill($request->all())->save();
        return to_route('admin.colors.index');
    }

    /**
     * Remove the specified color resource from database.
     * @param Color $color
     * @return string
     */
    public function destroy(Color $color): string
    {
        $color->delete();
        return response()->json(['success' => true]);
    }
}
