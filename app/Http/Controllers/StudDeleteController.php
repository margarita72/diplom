<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Basket;

class StudDeleteController extends Controller
{
    /*public function index(){
        $users = DB::select('select * from student');
        return view('stud_delete_view',['users'=>$users]);
    }*/
    public function destroy($id) {
        DB::delete('delete from basket where id = ?',[$id]);
        echo "Ваш товар успешно удален из корзины.<br/>";
        echo '<a href="/basket">Вернуться в корзину</a>. ';
    }
}
