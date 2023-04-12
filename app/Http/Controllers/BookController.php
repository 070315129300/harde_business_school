<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookstore;
use Illuminate\Support\Facades\Http;
class BookController extends Controller
{
    public function fetchinsert(){
        $response =Http::get('https://www.anapioficeandfire.com/api/books');

        $books =json_decode($response->body());

        foreach($books as $b) {
            $book = new bookstore();
            $book->name = $b->name;
            $book->isbn = $b->isbn;
            $book->authors = implode(",", $b->authors);
            $book->number_of_pages = $b->numberOfPages;
            $book->publisher = $b->publisher;
            $book->country = $b->country;
            $book->release_date = $b->released;
            $book->save();
        }
        return redirect('/')->with('success', 'data fetched for external api and saved into database');
    }
    public function show(){
        $data = bookstore::all();
        return view('welcome', compact('data'));
    }

    public function editbook($id){
        $data = bookstore::find($id);
        return view('editbook', compact('data'));
    }

    public function editallbook(Request $request, $id){

        $book = bookstore::find($id);
        $book->name = $request->name;
        $book->isbn = $request->isbn;
        $book->authors = $request->authors;
        $book->number_of_pages = $request->number_of_pages;
        $book->publisher = $request->publisher;
        $book->country = $request->country;
        $book->release_date = $request->release_date;

        $res = $book->save();
        if($res){
            return redirect('/')->with('success', 'book updated');
        }else{
            return redirect('/')->with('fail', 'Opps Something went wrong');
        }
    }

    public function deletebook($id){
        $data = bookstore::find($id);
        $data->delete();
        return redirect('/')->with('success', 'book removed');

    }
}
