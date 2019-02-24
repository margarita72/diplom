<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;
use App\Product;
use Illuminate\Support\Facades\DB;


class BasketController extends Controller
{
    public function basket(){
        $id_user = auth()->user()->id;
//        $baskets = DB::table('baskets')->where('id', $id_user)->first();

        //$users = DB::table('')->select('name', 'email')->get();

//        $baskets = Basket::
//        select(['id','id_user','id_products','UnitPrice','quantity'])
//            ->where('id_user', $id_user)
//            ->get();
        //dump($baskets);



        $products = DB::table('products')
            ->join('basket', 'products.id', '=', 'basket.id_products')
            ->select('name','UnitPrice')
            ->get();


        $baskets = DB::table('basket')
            ->where('id_user', $id_user)
            ->join('products', 'basket.id_products','=','products.id' )
            ->select('name','image','UnitPrice','id_user','id_products','quantity','final_price')
            ->get();


       // dump($baskets);

        return view('representation/shopping_cart', ['baskets' => $baskets, 'products' => $products]);


    }
}
