<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\products;
use App\Http\Controllers\product_id;
use App\Http\Controllers\product_detail;
use App\Http\Controllers\home_my;




class ProductController extends Controller
{
    /**
     * Вывести все.
         */
    // страница «index/»
    public function homs(Request $request)
    {
        $data=$request->all();
        //dump($data);
        $productsi = Product::where('id',$request->id)->get();

        $products = DB::table('products')->paginate(15);
        $Categorii_products = DB::table('Categorii_products')->get();
        //dump($products);
        return view('representation.homs', ['products' => $products,
            'Categorii_products' => $Categorii_products]);
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
            //передаю массив путей до изображений товаров
        $arr = json_decode($products->imd_dop, true);
        //dump($arr);
        //dump($products);

        $productss = Product::
        select(['id','image','name','meta_description','unit_cost'])
            ->get();
        //dump($productss);

        return view('representation/product_detail')->with(['products'=>$products, 'arr'=>$arr, 'productss'=>$productss]);
        //return view('representation/product_detail', ['products' => Product::findOrFail($id)]);

    }
        // добавить запись в таблицу корзина метод post
    public function insert(Request $request){

        $id_products = $request->input('id_products');
        $id_user = $request->input('id_user');
        DB::insert('insert into basket(id_user,id_products) values (?, ?)',[$id_user,$id_products]);
       


    }
    public function home_my(){


        return view('layouts/home_my');
    }

    public function product_id($id){

        $products=Product::
        select(['id','image','name','meta_description','unit_cost','imd_dop'])
            ->where('id',$id)->first();
        //dump($products);
        return view('items/product_id')->with(['products'=>$products]);
    }
}
