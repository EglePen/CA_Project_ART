<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Method;
use App\Http\Requests\StoreMethodRequest;
use App\Http\Requests\UpdateMethodRequest;

class AdminMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $methods = Method::get();
        return view('admin.methods.index', compact('methods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.methods.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMethodRequest $request)
    {
        Method::create($request->all());
        return to_route('admin.methods.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Method $method)
    {
        return view('admin.methods.edit', compact('method')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMethodRequest $request, Method $method)
    {
        $method->fill($request->all())->save();
        return to_route('admin.methods.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Method $method)
    {
        $method->delete();
        return response()->json(['success' => true]);
    }
}
