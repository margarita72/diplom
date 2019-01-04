<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Вывести все.
         */
    // страница «index/»
    public function homs()
    {
        $products = DB::table('products')->paginate(15);
        return view('representation.homs', ['products' => $products]);
    }

    public function product()
    {
        $products = DB::table('products')->paginate(15);
        return view('representation/product', ['products' => $products]);
    }
}
