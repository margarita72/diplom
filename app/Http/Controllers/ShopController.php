<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\shop;


class ShopController extends Controller
{
    public function shop(Request $request){
        /*добавление записи в таблицу shop*/
        $id_tovars = $request->input('id_tovars');
        $id_users = $request->input('id_users');
        $Surname_users = $request->input('Surname_users');
        $Name_users = $request->input('Name_users');
        $Patronymic_users = $request->input('Patronymic_users');
        $Phone_users = $request->input('Phone_users');
        $Type_of_delivery = $request->input('Type_of_delivery');
        $City = $request->input('City');
        $address = $request->input('address');
        $Wage_type = $request->input('Wage_type');
        $Price = $request->input('Price');
        /*$id_realization = $request->input('id_realization');*/

        DB::insert('insert into shop (id_tovars,id_users,Surname_users,Name_users,Patronymic_users,
        Phone_users,Type_of_delivery,City,address,Wage_type,Price/*,id_realization*/) 
        values (?,?,?,?,?,?,?,?,?,?,?)',
            [$id_tovars,$id_users,$Surname_users,$Name_users,$Patronymic_users,
                $Phone_users,$Type_of_delivery,$City,$address,$Wage_type,$Price/*,$id_realization*/]);
        echo "Ваш заказ оформлен.<br/>";
        echo '<a href = "/basket">вернуться в корзину</a> ';
        dump($id_tovars);



        /*echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';*/

    }
}
