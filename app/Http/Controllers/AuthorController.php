<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{

    public function index()
    {
        $authors = Author::withCount('book')->get();

        return view('authors/list', [
            'authors' => $authors->toJson()
        ]);
    }


    public function create(Request $request)
    {
        return view('authors/author-detail', ['msg' => $request->get('msg')]);
    }


    public function edit(int $id)
    {
        $author = Author::find($id);

        return view('authors/author-detail', [
            'author' => $author
        ]);
    }


    public function save(Request $request)
    {
        $data = $request->post();
        if(isset($data['id'])) {
            $author = Author::find($data['id']);
            $author->fill($data);
        } else {
            $author = new Author($data);
        }

        $author->save();

        return redirect('/authors?msg=Uloženie úspešné');
    }


    public function remove(Request $request)
    {
        Author::destroy($request->post('id'));

        return [
            'success' => 1
        ];
    }

}
