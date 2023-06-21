<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('author.index')->with('author', Author::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'author_name' => 'required|max:255',
            'book_name' => 'required|max:255',
            'email' => 'email|nullable'
        ]);

        $author = new Author;
        $author->author_name = $request->input('author_name');
        $author->book_name = $request->input('book_name');
        $author->email = $request->input('email');
        $author->phone = $request->input('phone');
        $author->save();

        return redirect(route('author.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author): View
    {
        return view('author.edit')->with('author', $author);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author): RedirectResponse
    {
        $validated = $request->validate([
            'author_name' => 'required|max:255',
            'book_name' => 'required|max:255',
            'email' => 'email|nullable'
        ]);

        $author->author_name = $request->input('author_name');
        $author->book_name = $request->input('book_name');
        $author->email = $request->input('email');
        $author->phone = $request->input('phone');
        $author->save();

        return redirect(route('author.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author): RedirectResponse
    {
        $author->delete();
        return redirect(route('author.index'));
    }
}
