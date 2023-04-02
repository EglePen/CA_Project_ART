<?php

namespace App\Http\Controllers\Admin;

use App\Models\Movement;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovementRequest;
use App\Http\Requests\UpdateMovementRequest;
use Illuminate\Http\RedirectResponse;

class AdminMovementController extends Controller
{
    /**
     * Display a listing of the movement resource.
     * @return View
     */
    public function index(): View
    {
        $movements = Movement::get();
        return view('admin.movements.index', compact('movements'));
    }

    /**
     * Show the form for creating a new movement resource.
     * @return View
     */
    public function create(): View
    {
        $movement = Movement::get();
        return view('admin.movements.create', compact('movement')); 
    }

    /**
     * Store a newly created movement resource in database.
     * @param StoreMovementRequest $request
     * @return RedirectResponse
     */
    public function store(StoreMovementRequest $request): RedirectResponse
    {
        Movement::create($request->all());
        return to_route('admin.movements.index');
    }

    /**
     * Show the form for editing the specified movement resource.
     * @param Movement $movement
     * @return View
     */
    public function edit(Movement $movement): View
    {
        return view('admin.movements.edit', compact('movement')); 
    }

    /**
     * Update the specified movement resource in database.
     * @param UpdateMovementRequest $request
     * @param Movement $movement
     * @return RedirectResponse
     */
    public function update(UpdateMovementRequest $request, Movement $movement): RedirectResponse
    {
        $movement->fill($request->all())->save();
        return to_route('admin.movements.index');
    }

    /**
     * Remove the specified movement resource from database.
     * @param Movement $movement 
     * @return string
     */
    public function destroy(Movement $movement): string
    {
        $movement->delete();
        return response()->json(['success' => true]);
    }
}
