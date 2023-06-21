<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\category;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('category.index')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        $category = Category::create($request->validated());

        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category): View
    {
        return view('category.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, category $category): RedirectResponse
    {
        $category->update($request->validated());

        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category): RedirectResponse
    {
        $category->delete();

        return redirect(route('category.index'));
    }
}
