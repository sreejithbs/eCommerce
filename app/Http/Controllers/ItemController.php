<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use File;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth:admin');    //Specifying 'admin' guard
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('pages.backEnd.itemList', compact('items'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.backEnd.itemAdd', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'item_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $item = new Item;
        $item->category_id = $request->category_id;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->stock = $request->stock;

        if($request->hasFile('item_image')) {
            $image = $request->file('item_image');
            $destinationPath = public_path(). '/uploads/';
            $image_extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $image_extension;
            $image->move($destinationPath, $filename);
            $item->image = '/uploads/'.$filename;
        }
        $item->save();

        return back()->with('success','Item Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($item_id)
    {
        $item = Item::find($item_id);
        $categories = Category::all();
        return view('pages.backEnd.itemEdit', compact('item', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $item_id)
    {
    
        $item = Item::findOrFail($item_id);
        $item->category_id = $request->category_id;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->stock = $request->stock;

        if($request->hasFile('item_image')) {
            $image = $request->file('item_image');
            $destinationPath = public_path(). '/uploads/';
            $image_extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $image_extension;

            // Delete old image from public folder before saving new one
            $old_image_path = public_path().$item->image;
            if (File::exists($old_image_path)) {
                File::delete($old_image_path);
            }

            $image->move($destinationPath, $filename);

            $item->image = '/uploads/'.$filename;
        }

        $item->save();
        return back()->with('success','Item Updated Successfully !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($item_id)
    {
        $item = Item::find($item_id);

        // Delete old image from public folder before deletion
        $old_image_path = public_path().$item->image;
        if (File::exists($old_image_path)) {
            File::delete($old_image_path);
        }
        
        $item->delete();
        return back()->with('success','Item Deleted Successfully !');
    }
}
