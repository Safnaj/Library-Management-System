<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //Home Function
    public function home(){
        $categories = Category::all();
        return view('categories',['categories' => $categories]);
    }

    //Home Function
    public function getCateogory(){
        $categories = Category::all();        
    }

    //Add Method
    public function addCategory(Request $request){
        $this->validate($request,[
            'id' => 'required | numeric | unique:categories,id',
            'category' => 'required | regex:/^[a-zA-Z]+$/u'
        ]);
        //Getting Data from HTML Form and Inserting to DB
        $categories = new Category;
        $categories->id = $request->input('id');
        $categories->category = $request->input('category');
        $categories->save();
        return redirect('/categories')->with('info','Category Added Successfully..!');
    }    

    //Delete Category
    public function deleteCategory($id){
        Category::where('id', $id)->delete();
        return redirect('/categories')->with('info','Category Deleted Successfully..!');
    }
}
