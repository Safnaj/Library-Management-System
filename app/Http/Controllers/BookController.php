<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;

class BookController extends Controller
{
    //Home Function
    public function home(){
        $categories = Category::all();
        return view('addBook',['categories' => $categories]);
    }

    public function getBooks(){
        $books = Book::all();
        return view('manageBook',['books' => $books]);
    }

    //Add Method
    public function addBook(Request $request){
        $this->validate($request,[
            'bookID' => 'required | numeric | unique:books,bookId',
            'title' => 'required | string',
            'author' => 'required | string',
            'category' => 'required',
            'noOfCopy' => 'required | numeric'
        ]);
        //Getting Data from HTML Form and Inserting to DB
        $book = new Book;
        $book->bookID = $request->input('bookID');
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->category = $request->input('category');
        $book->noOfCopies = $request->input('noOfCopy');
        $book->save();
        return redirect('/addBook')->with('info','Book Added Successfully..!');
    }    

    //Find a Particular Item using it ID
    public function updateBook($id){
        $books = Book::find($id);
        $categories = Category::all();
        return view('editBook',['books'=>$books],['categories' =>$categories]);
    }

    //Edit & Update
    public function editBook(Request $request, $id){
        $this->validate($request,[
            'bookID' => 'required | numeric | unique:books,bookId',
            'title' => 'required | string',
            'author' => 'required | string',
            'category' => 'required',
            'noOfCopy' => 'required | numeric'
        ]);
        $data = array(
          'bookID' =>  $request->input('bookID'),
          'title' =>  $request->input('title'),
          'author' =>  $request->input('author'),
          'category' =>  $request->input('category'),
          'noOfCopies' => $request->input('noOfCopy')
        );
        //Update
        Book::where('bookID', $id)->update($data);
        return redirect('manageBook')->with('info','Book Updated Successfully..!');
    }

    //Delete Function
    public function deleteBook($id){
        Book::where('bookID', $id)->delete();
        return redirect('manageBook')->with('info','Book Deleted Successfully..!');
    }

    //Search Book using AJAX
   
}

