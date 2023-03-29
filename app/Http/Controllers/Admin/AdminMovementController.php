<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movement;
use App\Http\Requests\StoreMovementRequest;
use App\Http\Requests\UpdateMovementRequest;

class AdminMovementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movements = Movement::get();
        return view('admin.movements.index', compact('movements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.movements.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovementRequest $request)
    {
        Movement::create($request->all());
        return to_route('admin.movements.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movement $movement)
    {
        return view('admin.movements.edit', compact('movement')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovementRequest $request, Movement $movement)
    {
        $movement->fill($request->all())->save();
        return to_route('admin.movements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movement $movement)
    {
        $movement->delete();
        return response()->json(['success' => true]);
    }
}
