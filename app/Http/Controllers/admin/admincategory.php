<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\category;

class admincategory extends Controller
{
    //
    public function store(Request $request)
    {
    	// request()->validate([
     //        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     //   ]);
    	// print_r($request->input());
    	// print_r($request->image);
    	// print_r($request->cat_name);

    	$cat = new category;
    	$cat->c_image = $request->image;
    	$cat->c_name = $request->cat_name;
    	$cat->save();
    	// $cat = new category;

    	// DB::insert('insert into category (c_image, c_name) values (?, ?)', ['image', 'Dayle']);

    	return back()->with('success', 'You have successfully added the new category');
    }
    public function show()
    {
    	$category = DB::table('categories')->get();
    	return view('admin.category',['categories' => $category]);
    }
}
