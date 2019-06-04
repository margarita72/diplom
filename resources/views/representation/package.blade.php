@extends('layouts.home_my')
@section('title','package')
@section('content')
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="http://diplom" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Package
			</span>
        </div>
    </div>

    <div class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <h1>Пакет сформирован</h1>
                    <table>
                        <tr>
                            <th colspan="2">Модель</th>
                            <th>Цена</th>
                            <th>Количество</th>
                            <th>Итого</th>
                        </tr>
                        <tr>
                            <td><img src="https://html5book.ru/wp-content/uploads/2015/04/dress-2.png"></td>
                            <td>Платье с цветочным принтом</td>
                            <td>2500</td>
                            <td>1</td>
                            <td>2500</td>
                        </tr>
                        <tr>
                            <td><img src="https://html5book.ru/wp-content/uploads/2015/04/dress-3.png"></td>
                            <td>Платье с боковыми вставками</td>
                            <td>3000</td>
                            <td>1</td>
                            <td>3000</td>
                        </tr>
                    </table>
                </div>



                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Карта товара
                        </h4>

                        <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
                            </div>

                            <div class="size-209">
								<span class="mtext-110 cl2">
									₽
                                    @php
                                        $pert = 0;
                                    @endphp
                                    @foreach ($baskets as $basket)
                                        {{--{{ $basket->final_price}}--}}

                                        @php

                                            $pert+=$basket->final_price;

                                        @endphp
                                    @endforeach
                                    @php
                                        echo $pert;
                                    @endphp

								</span>
                            </div>
                        </div>

                        <form action = "/shop" method = "post">
                            {{ csrf_field() }}

                            {{--функция по записи в массив данных id товара в корзине--}}
                            @foreach ($baskets as $basket)

                                @php

                                    $mua  = $basket->id_products;
                                    $my_arr[] = $mua .",";

                                @endphp
                            @endforeach


                            {{--@foreach ($baskets as $basket)

                                @php

                                    $mua2  = $basket->id_products;
                                    $array2 = [$mua2,];
                                    echo $mua2 .",";
                                    $p = $mua2;
                                @endphp
                            @endforeach--}}

                            @php

                            $array = [['1' => 'cvjnhbv1'],['2' => 'cvjnhbv2']];
                            /*echo print_r($my_arr);*/


                            @endphp


                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                {{--невидимое поле для записи массива значений id товаров и их колличества --}}
                                <input type = "hidden" name = "id_tovars" value ="{{print_r($my_arr)}}">
                                {{--{{print_r($my_arr)}}--}}
                                <input type = "hidden" name = "id_tovars2" value ="{{$pert}}">

                                <div class="size-208 w-full-ssm">
                                    <span class="stext-110 cl2">
                                        Получатель:
                                    </span>
                                </div>

                                <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                    <p class="stext-111 cl6 p-t-2">
                                        Заполните все необходимые поля для инициализации получателя.
                                    </p>

                                    <div class="p-t-15">
                                            <span class="stext-112 cl8">
                                               Фамилия
                                            </span>

                                        <div class="bor8 bg0 m-b-12">

                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="Surname_users" placeholder="Иванов" required>
                                        </div>
                                        <span class="stext-112 cl8">
                                               Имя
                                            </span>
                                        <div class="bor8 bg0 m-b-12">

                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="Name_users" placeholder="Иван" required>
                                        </div>
                                        <span class="stext-112 cl8">
                                               Отчество
                                            </span>
                                        <div class="bor8 bg0 m-b-12">

                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="Patronymic_users" placeholder="Иванович">
                                        </div>
                                        <span class="stext-112 cl8">
                                               Телефон
                                            </span>
                                        <div class="bor8 bg0 m-b-12">

                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" required placeholder="8952988645" name="Phone_users" id="phone" type="tel" pattern="[7-8]{1}[0-9]{10}">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                    <div class="size-208 w-full-ssm">
                                    <span class="stext-110 cl2">
                                        Доставка:
                                    </span>
                                    </div>

                                    <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                        <p class="stext-111 cl6 p-t-2">
                                            Выберете тип доставки, и адрес, где вам будет удобно забрать продукт.
                                        </p>

                                        <div class="p-t-15">
                                            <span class="stext-112 cl8">
                                                Тип доставки
                                            </span>

                                            <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                                <select class="js-select2" name="Type_of_delivery">
                                                    <option>Пункт выдачи</option>
                                                    <option>Почта</option>
                                                    <option>Курьер</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <span class="stext-112 cl8">
                                                    Город
                                                </span>
                                            <div class="bor8 bg0 m-b-12">

                                                <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="City" placeholder="Москва">
                                            </div>
                                            <span class="stext-112 cl8">
                                                    Адрес
                                                </span>
                                            <div class="bor8 bg0 m-b-12">

                                                <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Ул.Петрова 45">
                                            </div>
                                            <span class="stext-112 cl8">
                                                        Вид оплаты
                                                    </span>
                                            <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                                <select class="js-select2" name="Wage_type">
                                                    <option>Наличные</option>
                                                    <option>Visa</option>
                                                    <option>Mastercart</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>

                                            <input type = "hidden" name = "id_users" value ="{{Auth::id()}}">
                                            <input type = "hidden" name = "Price" value ="{{$pert}}">



                                            {{--<div class="flex-w">
                                                <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                                                    Оформить
                                                </div>
                                            </div>--}}

                                        </div>


                                    </div>



                                </div>
                                <div class="flex-w flex-t p-t-27 p-b-33">
                                    <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        @php
                                            echo "Итого:₽$pert"
                                        @endphp
                                    </span>
                                        </span>
                                    </div>

                                    <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">

                                    </span>
                                    </div>
                                </div>
                                <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                    Оформить
                                </button>


                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <style>
        table {
            border-spacing: 0 10px;
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
            width: 100%;
        }
        th {
            padding: 0 10px;
            background: #4b4b4b;
            color: #d5efce;
            border-right: 2px solid;
            font-size: 0.9em;
        }
        th:first-child {
            text-align: left;
        }
        th:last-child {
            border-right: none;
        }
        td {
            vertical-align: middle;
            padding: 10px;
            font-size: 14px;
            text-align: center;
            border-top: 2px solid #56433D;
            border-bottom: 2px solid #56433D;
            border-right: 2px solid #56433D;
        }
        td:first-child {
            border-left: 2px solid #56433D;
            border-right: none;
        }
        td:nth-child(2){
            text-align: left;
        }
    </style>

@endsection

