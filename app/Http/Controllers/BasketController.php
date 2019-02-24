<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;


class BasketController extends Controller
{
    public function basket(Request $request){
        $id_user = auth()->user()->id;
//        $baskets = DB::table('baskets')->where('id', $id_user)->first();

        $baskets = Basket::
        select(['id','id_user','id_products','UnitPrice','quantity'])
            ->where('id_user', $id_user)
            ->pluck('id_user','id_products','UnitPrice','quantity');
        dump($baskets);

        return view('representation/shopping_cart', ['baskets' => $baskets]);


    }
}
