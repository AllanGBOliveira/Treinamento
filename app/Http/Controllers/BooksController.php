<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class BooksController extends Controller
{

    public function index()
    {
        $book = \App\Book::paginate(5);

        return view('books', ['books' => $book]);
    }

    public function add()
    {
        return view('add');
    }

    public function store(Book $request)
    {
        $bookId = Auth::id();
        $name = Auth::user()->name;
        $data = $request->all();

        $data['user_id'] = $bookId;
        $data['user_name'] = $name;
        $data['avaliable'] = true;

        \App\Book::create($data);

        return redirect('books')->with('success', 'Livro adicionado com sucesso.');
    }

    public function edit($bookId)
    {

        $book = \App\Book::find($bookId);
        return view('edit', ["book" => $book]);
    }

    public function update(Book $request, $bookId)
    {
        $data = $request->all();

        unset($data['_token']);
        unset($data['_method']);

        \App\Book::find($bookId)->update($data);

        return redirect('books')->with('success', 'Livro editado com sucesso.');
    }

    public function delete( $bookId)
    {
        \App\Book::find($bookId)->delete();

        return redirect('/books')->with('success', 'Livro deletado com sucesso.');
    }

    public function reserve($bookId)
    {
        $book = \App\Book::find($bookId)->first();
        return view('reserve', ["book" => $book]);
    }

    public function take(Request $request, $bookId)
    {
        $data = $request->all();
        $data['avaliable'] = false;
        unset($data['_token']);
        unset($data['_method']);

        \App\Book::find($bookId)->update($data);

        return redirect('books')->with('success', 'Livro locado com sucesso.');
    }
    public function return(Request $request, $bookId)
    {
        $data = $request->all();
        $data['avaliable'] = true;
        unset($data['_token']);
        unset($data['_method']);

        \App\Book::find($bookId)->update($data);

        return redirect('books')->with('success', 'Livro devolvido com sucesso.');
    }
}
