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
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;




class ProductController extends Controller
{
    /**
     * Вывести все.
         */
    // страница «index/»

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


    public function index($id){

        $products_alls = DB::table('products')->get();
        $products=Product::
        select(['id','image','name','meta_description','unit_cost','imd_dop'])
            ->where('id',$id)->first();
        //передаю массив путей до изображений товаров
        $arr = json_decode($products->imd_dop, true);
        dump($products_alls);
        //dump($products);

        $productss = Product::
        select(['id','image','name','meta_description','unit_cost'])
            ->get();

        return view('representation/product_detail')->with([
            'products'=>$products,
            'arr'=>$arr,
            'productss'=>$productss,
            'products_alls'=>$products_alls,

            ]);



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
        $nuk = 'hvhv';
        $products = DB::table('products')->paginate(15);
        //dump('dfgh');
        return view('layouts/home_my')->with(['products' => $products]);
    }

    public function product_id($id){
        $products_alls = DB::table('products')->get();
        $products=Product::
        select(['id','image','name','meta_description','unit_cost','imd_dop'])
            ->where('id',$id)->first();
        //dump($products);
        return view('items/product_id')->with([
            'products'=>$products,
            'products_alls'=>$products_alls,

        ]);
    }

    public function homs(Request $request)
    {
//        $data=$request->all();
//        //dump($data);
//        $productsi = Product::where('id',$request->id)->get();
        $products_alls = DB::table('products')->get();

        $products = DB::table('products')->paginate(15);
        $Categorii_products = DB::table('Categorii_products')->get();
        //dump($products);
        $suppliers = DB::table('suppliers')->get();
        $Tags = DB::table('Tags')->get();
        //dump($suppliers);
        return view('representation.homs',
            [
                'products' => $products,
                'Categorii_products' => $Categorii_products,
                'suppliers' => $suppliers,
                'Tags'=>$Tags,
                'products_alls'=>$products_alls,


            ]);
    }

    public function product(Request $request)
    {
        $products_alls = DB::table('products')->get();
        $products = DB::table('products')->paginate(15);
        $Categorii_products = DB::table('Categorii_products')->get();
        $suppliers = DB::table('suppliers')->get();
        $Tags = DB::table('Tags')->get();
        //dump($suppliers);
        return view('representation/product',
            [
                'products' => $products,
                'Categorii_products' => $Categorii_products,
                'suppliers' => $suppliers,
                'Tags'=>$Tags,
                'products_alls'=>$products_alls,
            ]);



    }

    public function search(Request $request){
        $searchData = $request->searchData;

        //dump($searchData);
        $products_alls = DB::table('products')->get();


        $products = DB::table('products')
            //->orWhere('name','like','%'.$searchData.'%')
            ->join('suppliers', 'id_suppliers', '=', 'suppliers.id')
            ->join('categories', 'id_category', '=', 'categories.id')
            ->orWhere('suppliers.name','like','%'.$searchData.'%')
            ->orWhere('categories.name','like','%'.$searchData.'%')
            ->orWhere('meta_description','like','%'.$searchData.'%')
            ->orWhere('products.name','like','%'.$searchData.'%')
            ->select([
                'id'=>'products.id',
                'id_suppliers'=>'products.id_suppliers',
                'id_category'=>'products.id_category',
                'name' => 'products.name',
                'unit_cost'=>'products.unit_cost',
                'meta_description'=>'products.meta_description',
                'meta_keywords'=>'products.meta_keywords',
                'image'=>'products.image',
                'imd_dop'=>'products.imd_dop',
                'created_at'=>'products.created_at',
                'updated_at'=>'products.updated_at',
                'email'=>'suppliers.email',
                'address'=>'suppliers.address',
                'phone'=>'suppliers.phone',
                'rating'=>'products.rating',
                'id_tags'=>'products.id_tags',

                ])

            ->get();
        //dump($products);
        $Categorii_products = DB::table('Categorii_products')->get();
        $suppliers = DB::table('suppliers')->get();
        $Tags = DB::table('Tags')->get();
        return view('representation/product', [
            'products' => $products,
            'Categorii_products' => $Categorii_products,
            'suppliers' => $suppliers,
            'Tags'=>$Tags,
            'products_alls'=>$products_alls,
        ]);

    }

    //для фильтра

    public function productsSuppliers(Request $request){
         $sup_id=$request->sup_id;

          $data = DB::table('products')
             ->join('suppliers', 'id_suppliers', '=', 'suppliers.id')
             ->join('categories', 'id_category', '=', 'categories.id')
             ->where('products.id_suppliers',$sup_id)
             ->get();
        $Categorii_products = DB::table('Categorii_products')->get();
        $suppliers = DB::table('suppliers')->get();
        $Tags = DB::table('Tags')->get();

         return view('items/productsPage', [
             'products' => $data,
             'Categorii_products' => $Categorii_products,
             'suppliers' => $suppliers,
             'Tags'=>$Tags
         ]);
         //dump($data);
    }
}
