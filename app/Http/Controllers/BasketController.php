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

        $products_alls = DB::table('products')->get();

        $products = DB::table('products')
            ->join('basket', 'products.id', '=', 'basket.id_products')
            ->select('name','UnitPrice')
            ->get();


        $baskets = DB::table('basket')
            ->where('id_user', $id_user)
            ->join('products', 'basket.id_products','=','products.id' )
            ->select(
                [
                'id'=>'basket.id',
                    'id'=>'basket.id',
                    'name'=>'products.name',
                    'image'=>'products.image',
                    'UnitPrice'=>'basket.UnitPrice',
                    'id_user'=>'basket.id_user',
                    'id_products'=>'basket.id_products',
                    'quantity'=>'basket.quantity',
                    'final_price'=>'basket.final_price',

                ])
            ->get();

$pers =  DB::table('basket')->select('final_price')->get();
        //dump($pers);

        return view('representation/shopping_cart', [
            'baskets' => $baskets,
            'products' => $products,
            'per'=>$pers,
            'products_alls'=>$products_alls,
        ]);


    }

    public function package(){
        $id_user = auth()->user()->id;
        $products_alls = DB::table('products')->get();
        $baskets = DB::table('basket')
            ->where('id_user', $id_user)
            ->join('products', 'basket.id_products','=','products.id' )
            ->select(
                [
                    'id'=>'basket.id',
                    'id'=>'basket.id',
                    'name'=>'products.name',
                    'image'=>'products.image',
                    'UnitPrice'=>'basket.UnitPrice',
                    'id_user'=>'basket.id_user',
                    'id_products'=>'basket.id_products',
                    'quantity'=>'basket.quantity',
                    'final_price'=>'basket.final_price',

                ])
            ->get();
        return view('representation/package',[
            'products_alls'=>$products_alls,
            'baskets' => $baskets,
        ]);
    }

    public function otvet_one()
    {
        $id_user = auth()->user()->id;

        $products_alls = DB::table('products')->get();

        $products = DB::table('products')
            ->join('basket', 'products.id', '=', 'basket.id_products')
            ->select('name','UnitPrice')
            ->get();


        $baskets = DB::table('basket')
            ->where('id_user', $id_user)
            ->join('products', 'basket.id_products','=','products.id' )
            ->select(
                [
                    'id'=>'basket.id',
                    'id'=>'basket.id',
                    'name'=>'products.name',
                    'image'=>'products.image',
                    'UnitPrice'=>'basket.UnitPrice',
                    'id_user'=>'basket.id_user',
                    'id_products'=>'basket.id_products',
                    'quantity'=>'basket.quantity',
                    'final_price'=>'basket.final_price',

                ])
            ->get();

        $pers =  DB::table('basket')->select('final_price')->get();
        //dump($pers);

        return view('representation/otvet_one', [
            'baskets' => $baskets,
            'products' => $products,
            'per'=>$pers,
            'products_alls'=>$products_alls,
        ]);

    }


}
