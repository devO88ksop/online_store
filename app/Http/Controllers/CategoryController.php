<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminauth');
    }
    public function index(){
        $category = Category::all();

        return view('categories.index',compact('category'));
    }
    public function create(){
        return view('categories.create');
    }

    public function edit($id){
        return view('categories.edit');
    }

    public function show($id){
        return view('categories.show');
    }
    public function store(Request $request){
       // dd($request->name,$request->description);
        $cateogry = new Category;
        $cateogry->name = $request->name;
        $cateogry->description = $request->description;
        $cateogry->save();
        return redirect('admin/category/index');

    }
}