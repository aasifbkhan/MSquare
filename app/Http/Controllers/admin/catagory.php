<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class catagory extends Controller
{
    //
    public function putcatagory(Request $request)
    {
    	$cat = new catagory();
 
        $cat->c_image = request('img');
        $cat->c_image = request('cat_name');
 
        $cat->save();

    }
    public function getcatagory()
    {
    	$cat = DB::table('catagory')->get();

        return view('admin.catagory', ['catagory' => $cat]);
    }
}
