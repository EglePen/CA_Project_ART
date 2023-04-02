<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Method;
use App\Http\Requests\StoreMethodRequest;
use App\Http\Requests\UpdateMethodRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminMethodController extends Controller
{
    /**
     * Display a listing of the method resource.
     * @return View
     */
    public function index(): View
    {
        $methods = Method::get();
        return view('admin.methods.index', compact('methods'));
    }

    /**
     * Show the form for creating a new method resource.
     * @return View
     */
    public function create(): View
    {
        $method = Method::get();
        return view('admin.methods.create', compact('method')); 
    }

    /**
     * Store a newly created method resource in database.
     * @param StoreMethodRequest $request
     * @return RedirectResponse
     */
    public function store(StoreMethodRequest $request): RedirectResponse
    {
        Method::create($request->all());
        return to_route('admin.methods.index');
    }

    /**
     * Show the form for editing the specified method resource.
     * @param Method $method
     * @return View
     */
    public function edit(Method $method): View
    {
        return view('admin.methods.edit', compact('method')); 
    }

    /**
     * Update the specified method resource in database.
     * @param UpdateMethodRequest $request
     * @param Method $method
     * @return RedirectResponse
     */
    public function update(UpdateMethodRequest $request, Method $method): RedirectResponse
    {
        $method->fill($request->all())->save();
        return to_route('admin.methods.index');
    }

    /**
     * Remove the specified method resource from database.
     * @param Method $method
     * @return string
     */
    public function destroy(Method $method): string
    {
        $method->delete();
        return response()->json(['success' => true]);
    }
}
