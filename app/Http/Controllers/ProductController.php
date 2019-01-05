<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\products;
use App\Http\Controllers\product_detail;



class ProductController extends Controller
{
    /**
     * Вывести все.
         */
    // страница «index/»
    public function homs()
    {
        $products = DB::table('products')->paginate(15);
        $Categorii_products = DB::table('Categorii_products')->get();
        return view('representation.homs', ['products' => $products, 'Categorii_products' => $Categorii_products]);
    }

    public function product()
    {
        $products = DB::table('products')->paginate(15);
        $Categorii_products = DB::table('Categorii_products')->get();
        return view('representation/product', ['products' => $products, 'Categorii_products' => $Categorii_products]);
    }

    public function product_detail($id)
    {

        $products=Product::
        select(['id','image','name','meta_description','unit_cost','imd_dop'])
            ->where('id',$id)->first();
        dump($products);
        //$products = DB::table('products')->paginate(15);
        //$products = DB::table('products')->orderBy('id')->lists('imd_dop');
        return view('representation/product_detail')->with(['products'=>$products]);
        //return view('representation/product_detail', ['products' => Product::findOrFail($id)]);

    }
}
