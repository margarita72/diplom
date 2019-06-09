<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\products;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blog(){
        $products_alls = DB::table('products')->get();

        return view('representation/Blog/blog')->with([
            'products_alls'=>$products_alls,
        ]);
    }

    public function about(){
        $products_alls = DB::table('products')->get();

        return view('representation/about')->with([
            'products_alls'=>$products_alls,
        ]);
    }

    public function contact(){
        $products_alls = DB::table('products')->get();

        return view('representation/contact')->with([
            'products_alls'=>$products_alls,
        ]);
    }

    public function construct(){
        $products_alls = DB::table('products')->get();

        return view('representation/consrtukt')->with([
            'products_alls'=>$products_alls,
        ]);
    }
}
