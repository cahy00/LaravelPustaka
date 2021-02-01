<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::with('category')->orderBy('no_buku', 'ASC')->get();
        $i    = 1;
        return view('books.index', compact('book', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required'
            //
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/books', $filename);
        }

        try {
            $book = new Book;
            $book->category_id  = 1;
            $book->judul        = $request->judul;
            $book->no_buku      = $request->no_buku;
            $book->penerbit     = $request->penerbit;
            $book->penulis      = $request->penulis;
            $book->isbn         = $request->isbn;
            $book->sinopsis     = $request->sinopsis;
            $book->stok         = $request->stok;
            $book->image        = $filename;
            $book->save();

            return redirect()->route('book.index')->with(['success' => 'Data Berhasil Ditambah']);
            // return $filename;
        } catch (\Exception $e) {
            return redirect()->route('book.index')->with(['error' => 'Data Gagal Ditambah']);
            // return $filename;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::with('category')->findOrFail($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update([
            'category_id' => $request->category_id,
            'judul'       => $request->judul,
            'no_buku'     => $request->no_buku,
            'penerbit'    => $request->penerbit,
            'penulis'     => $request->penulis,
            'isbn'        => $request->isbn,
            'sinopsis'    => $request->sinopsis,
            'stok'        => $request->stok,
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/books', $filename);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        // return route('book.index')->with(['success' => 'Data Berhasil di hapus']);
        return route;
    }
}
