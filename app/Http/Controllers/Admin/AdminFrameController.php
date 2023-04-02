<?php

namespace App\Http\Controllers\Admin;

use App\Models\Frame;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFrameRequest;
use App\Http\Requests\UpdateFrameRequest;
use Illuminate\Http\RedirectResponse;

class AdminFrameController extends Controller
{
    /**
     * Display a listing of the frame resource.
     * @return View
     */
    public function index(): View
    {
        $frames = Frame::get();
        return view('admin.frames.index', compact('frames'));
    }

    /**
     * Show the form for creating a new frame resource.
     * @return View
     */
    public function create(): View
    {
        $frame = Frame::get();
        return view('admin.frames.create', compact('frame')); 
    }

    /**
     * Store a newly created frame resource in database.
     * @param StoreFrameRequest
     * @return RedirectREsponse
     */
    public function store(StoreFrameRequest $request): RedirectResponse
    {
        Frame::create($request->all());
        return to_route('admin.frames.index');
    }

    /**
     * Show the form for editing the specified frame resource.
     * @param Frame $frame
     * @return View
     */
    public function edit(Frame $frame): View
    {
        return view('admin.frames.edit', compact('frame')); 
    }

    /**
     * Update the specified frame resource in database.
     * @param UpdateFrameRequest $request
     * @param Frame $frame
     * @return RedirectResponse
     */
    public function update(UpdateFrameRequest $request, Frame $frame): RedirectResponse
    {
        $frame->fill($request->all())->save();
        return to_route('admin.frames.index');
    }

    /**
     * Remove the specified frame resource from database.
     * @param Frame $frame
     * @return string
     */
    public function destroy(Frame $frame): string
    {
        $frame->delete();
        return response()->json(['success' => true]);
    }
}
