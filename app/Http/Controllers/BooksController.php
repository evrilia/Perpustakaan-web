<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\UpdateBooksRequest;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Books::paginate(5);
        $search = request()->get('search');

        if ($search) {
            $data = Books::where('title', 'like', '%' . $search . '%')->paginate(5);
        } else {
            $data = Books::paginate(5);
        }

        return view('books.index', [
            'title' => 'Books',
            'books' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create', [
            'title' => 'Books',
            'categories' => Categories::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBooksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBooksRequest $request)
    {
        $validateData = validator($request->all(), [
            'title' => 'required',
            'categories_id' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $validated = $validateData->validated();

        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public', $name);
        $validated['image'] = $name;

        Books::create($validated);

        return redirect('/books')->with('success', 'New Book has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books, $book)
    {
        $bookFind = Books::find($book);

        return view('books.edit',compact(['bookFind']), [
            'title' => 'Books',
            'books' => $books,
            'categories' => Categories::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBooksRequest  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBooksRequest $request, Books $books, $book)
    {
        $bookFind = Books::find($book);

        $validateData = $request->validate([
            'title' => 'required',
            'categories_id' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $bookFind->update($validateData);

        return redirect('/books')->with('successEdit', 'New book has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books, Request $request)
    {
        Books::destroy($request->id);

        return redirect('/books')->with('successDelete', 'Book has been deleted!');
    }
}
