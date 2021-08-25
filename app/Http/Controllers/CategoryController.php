<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
        function __construct()
        {
            $this->middleware('auth');
        }
    
        function show(){
            $categorylist = Category::all();
            return view('category/list',['list' => $categorylist]);
        }
    
        function delete($id){
            //product::destroy($id);
            $category = Category::findOrfail($id);
            $category->delete();
            return redirect('/category')->with('message', 'La marca fue borrado.');
        }
    
        function form($id = null){
            $category = new Category();
            if($id != null){
                $category = Category::findOrFail($id);
            }
            return view('category/form', ['category' =>$category]);
        }
    
        function save(Request $request){
            $request->validate([
                'name' => 'required|max:50',
                'description' => 'required|max:50'
            ]);
            
            
            $category = new Category();
            $message = 'Se ha creado la categoría';
            if (intval($request->id)>0) {
                $category = Category::findOrfail($request->id);
                $message = 'Se ha modificado la categoria';
            }
    
            $category->name = $request->name;
            $category->description = $request->description;
    
            $category->save();
            return redirect('/category')->with('succesMessage',$message);
        }
}
