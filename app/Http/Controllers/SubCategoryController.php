<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_category = SubCategory::paginate(2);
        
        return view('sub_categories.index',compact('sub_category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('sub_categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sub_category = new SubCategory;
        $sub_category->name = $request->name;
        $sub_category->category_id = $request->category_id;
        $sub_category->description = $request->description;
        $sub_category->save();
        return redirect('admin/sub_category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('sub_categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sub_category = SubCategory::findOrFail($id);
        return view('sub_categories.edit',compact('sub_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sub_category = SubCategory::findOrFail($id);
        $sub_category->name = $request->name;
        $sub_category->category_id = $request->category_id;
        $sub_category->description = $request->description;
        $sub_category->update();
        return redirect('admin/sub_category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sub_category = SubCategory::findOrFail($id);
        $sub_category->delete();
        return redirect('admin/sub_category');
    }
}
