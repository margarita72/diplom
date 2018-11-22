<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
        здесь проверяется и
        разрешается вход на страгицу только после прохождения аутентификации
     * public function __construct()
    {
    $this->middleware('auth');
    }


     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('representation/homs');
    }
}
