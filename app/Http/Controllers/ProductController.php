<?php

namespace App\Http\Controllers;
use App\Basket;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\products;
use App\Http\Controllers\product_id;
use App\Http\Controllers\product_detail;
use App\Http\Controllers\home_my;
use App\Article;




class ProductController extends Controller
{
    /**
     * Вывести все.
         */
    // страница «index/»
    public function homs(Request $request)
    {
//        $data=$request->all();
//        //dump($data);
//        $productsi = Product::where('id',$request->id)->get();

        $products = DB::table('products')->paginate(15);
        $Categorii_products = DB::table('Categorii_products')->get();
        //dump($products);
        return view('representation.homs', ['products' => $products,
            'Categorii_products' => $Categorii_products]);
    }
//ля вывода методом ajax информации о конкретном товаре на гланой странице
    public function getajaxid(Request $request){

        $id_products = $request->input('id_products');
        $user = DB::table('products')->where('id', $id_products)->first();
//        $products2 = Product::get();
//        $products2=Product::
//        select(['id','image','name','meta_description','unit_cost','imd_dop'])
//            ->where('id',$id)->first();
//        $schhols = Schhol::get();

        // if ajax request return response in json

        if($request->ajax()){
            return response()->json($user);
        }else{

            // else return data to view

//            return view('product',compact('products2'));
            dump($user);
   }

        dump($user);
    }
    public function product()
    {
        $products = DB::table('products')->paginate(15);
        $Categorii_products = DB::table('Categorii_products')->get();
        return view('representation/product', ['products' => $products, 'Categorii_products' => $Categorii_products]);
    }

    public function index($id){
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

        return view('representation/product_detail')->with(['products'=>$products,
            'arr'=>$arr, 'productss'=>$productss]);



    }

    public  function send(Request $request){
        $id_user = $request->input('id_user');
        $id_products = $request->input('id_products');
        $UnitPrice = $request->input('UnitPrice');
        $quantity = $request->input('num-product');
        $final_price = $UnitPrice*$quantity;
        $created_at = date('Y-m-d H:i:s');
        //dump($final_price);
    //  DB::insert('insert into baskets(id_user,id_products) values (?, ?)',[$id_user,$id_products]);

        DB::insert('insert into basket(id_user,id_products,UnitPrice,quantity,final_price,created_at ) values (?, ?, ?, ?, ?, ?)',
            [$id_user,$id_products,$UnitPrice, $quantity, $final_price,$created_at]);


        //dd(['id_user' => $id_user, 'id_products' => $id_products]);
        //dd($request->all());
        //dd($request->input('id_products'),$request->input('id_user'));
        }


    public function tovarform(Request $request){
        $id_products = $request->input('id_products');
        $user = DB::table('products')->where('id', $id_products)->first();
//        dd($request->all());


//        $id_user = $request->input('id_user');
//        DB::insert('insert into basket(id_user,id_products) values (?, ?)',[$id_user,$id_products]);

//        DB::select('insert into products(id) values (?)', [$id]);
//        $id_user = $request->input('id_user');
//        DB::insert('insert into basket(id_user,id_products) values (?, ?)',[$id_user,$id_products]);
//        return view('representation/shopping_cart');
//        echo $user->name;
        dump($user);



    }
    public function store(Request $request,$id){
        $products=Product::
        select(['id','image','name','meta_description','unit_cost','imd_dop'])
            ->where('id',$id)->first();
        //$res = Basket::create(['id_user' => $request->input('id_user'), 'id_products' => $request->input('id_products')]);
        //$data = ['id' => $res->id, 'id_user' => $request->input('id_user'), 'id_products' => $request->input('id_products')];
        //$data = DB::insert('insert into basket(id_user,id_products) values (?, ?)',[$id_user,$id_products]);
        $id_products = $request->input('id_products');
        $id_user = $request->input('id_user');
        $data = ['id_user' => $id_user, 'id_products' => $id_products, 'products' =>$products];
        //return $data;
        //return view('representation/product_detail')->with(['products'=>$products]);

        dump($products);
    }

    //пока лишнее
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


    public function ajaxRequestPost(Request $request){
        $input = $request->all();
        return response()->json(['success'=>'Got Simple Ajax Request.']);

    }

        // добавить запись в таблицу корзина метод post
    public function insert(Request $request){

        $id_products = $request->input('id_products');
        $id_user = $request->input('id_user');
        DB::insert('insert into basket(id_user,id_products) values (?, ?)',[$id_user,$id_products]);
        return view('representation/shopping_cart');



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
