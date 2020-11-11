<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::with(array('author'=>function($query){
            $query->select('id','name','surname');
        }))->get();

        return view('books/list', [
            'books' => $books->toJson()
        ]);
    }


    public function create()
    {
        $authors = Author::all();
        return view('books/book-detail', [
            'authors' => $authors->toJson()
        ]);
    }


    public function edit(int $id)
    {
        $book = Book::find($id);
        $authors = Author::all();

        return view('books/book-detail', [
            'book' => $book->toJson(),
            'authors' => $authors->toJson()
        ]);
    }


    public function save(Request $request)
    {
        $data = $request->post();
        $data['is_borrowed'] = (int)filter_var($data['is_borrowed'], FILTER_VALIDATE_BOOLEAN);

        if(isset($data['id'])) {
            $book = Book::find($data['id']);
            $book->fill($data);
        } else {
            $book = new Book($data);
        }

        $book->save();

        if($request->ajax()) {
            return [
                'success' => 1
            ];
        } else {
            return redirect('/books?msg=Uloženie úspešné');
        }

    }


    public function remove(Request $request)
    {
        Book::destroy($request->post('id'));

        return [
            'success' => 1
        ];
    }

}
