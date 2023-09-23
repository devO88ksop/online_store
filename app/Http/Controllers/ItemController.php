<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\SubCategory;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = Item::paginate(2);
        
        return view('items.index',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sub_categories = SubCategory::all();
        return view('items.create',compact('sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Item;
        $item->name = $request->name;
        $item->sub_category_id = $request->sub_category_id;
        $item->price = $request->price;
        $item->qty = $request->qty;
        $item->image= $request->image;
        $item->description = $request->description;
        $item->save();
        return redirect('admin/item');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('items.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Item::findOrFail($id);
        return view('items.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Item::findOrFail($id);
        $item->name = $request->name;
        $item->sub_category_id = $request->sub_category_id;
        $item->price = $request->price;
        $item->qty = $request->qty;
        $item->image= $request->image;
        $item->description = $request->description;
        $item->update();
        return redirect('admin/item');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect('admin/item');
    }
}
