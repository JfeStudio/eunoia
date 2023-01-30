<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $books = Book::where('book', 'LIKE', '%' .$request->search. '%')
            ->orWhere('author', 'LIKE', '%' .$request->search. '%')->orderBy('id', 'DESC')->get();
        }else {
            $books = Book::orderBy('id', 'DESC')->get();
        }
        return view('dashboard.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.books.create');
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
            'book' => 'required|min:3|unique:books|string',
            'author' => 'required|min:3|string',
            'terbit' => 'required|min:3|string',
            'harga' => 'required|min:3|string',
            'image' => 'mimes:jpeg,png,jpg,gif',
        ],[
            'book.unique' => 'udah ada judul buku ini kocak',
        ]);
        $books = $request->all();
        // set upload image
        // buat file/folder root untuk image
        if ($file_image = $request->file('image')) {
        // lalu buat format image, bisa juga di gabung lansung jika tidak ingin nambah variable
        $format_image = $file_image->getClientOriginalExtension();
        // lalu buat varible name image untuk memberikan random name + di gabung dengan format image
        $name_image = date('ymdhis') . "." . $format_image;
        // setelah jadi file imagenya kita pindahkan ke folder image di dalam root public
        $file_image->move(public_path('image'), $name_image);
        // lalu kita ambil value image dalam variable books untuk dijadikan name image
        $books['image'] = $name_image;
        }
        Book::create($books);
        return to_route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
public function show(Book $book)
    {
        return view('dashboard.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        // dd($book);
        return view('dashboard.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            // 'book' => 'required|min:3|string|unique:book,$id',
            'book' => [
                'required',
                Rule::unique('books', 'book')->ignore($book->id),
            ],
            'author' => 'required|min:3|string',
            'terbit' => 'required|min:3|string',
            'harga' => 'required|min:3|string',
            'image' => 'mimes:jpeg,png,jpg,gif',
        ],[
            'book.unique' => 'udah ada judul buku ini kocak',
        ]);
        $books = $request->except(['_token', '_method']);
        // set update image
        // buat kodisi apakah kita udah punya file
        if ($request->hasFile('image')) {
        $file_image = $request->file('image');
        // lalu buat format image, bisa juga di gabung lansung jika tidak ingin nambah variable
        $format_image = $file_image->getClientOriginalExtension();
        // lalu buat varible name image untuk memberikan random name + di gabung dengan format image
        $name_image = date('ymdhis') . "." . $format_image;
        // setelah jadi file imagenya kita pindahkan ke folder image di dalam root public
        $file_image->move(public_path('image'), $name_image);
        // lalu kita single target menggunakan first() untuk mengambil datanya
        $books = Book::where('id', $book->id)->first();
        // setelah data di dapat, kita hapus data itu dan di isi data baru
        File::delete(public_path('image') . '/' . $books->image);
        // lalu kita ambil value image dalam variable books untuk dijadikan name image
        $books = ['image' => $name_image];
        }
        Book::where('id', $book->id)->update($books);
        return to_route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        // ambil single data dari book image
        $books = Book::where('id', $book->id)->first();
        // taruh path di dalam variable (opsional)
        $path = public_path('image') . '/' . $books->image;
        // lalu path tadi taruh di dalam File delete,
        // biar file yang ada di folder image, juga terhapus
        File::delete($path);
        // kita juga hapus data selain data yang ada di folder image,
        // karna logic yang atas hanya menghapus image dalam folder
        Book::where('id', $book->id)->delete();
        return back();
    }
}