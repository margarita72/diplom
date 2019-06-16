@extends('layouts.home_my')
@section('title','shopping cart')
    @section('content')
        <!-- breadcrumb -->
        <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                <a href="http://diplom" class="stext-109 cl8 hov-cl1 trans-04">
                    Товары
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>

                <span class="stext-109 cl4">
				Корзина
			</span>
            </div>
        </div>


        <!-- Shoping Cart -->
        <div class="bg0 p-t-75 p-b-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                        <div class="m-l-25 m-r--38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">
                                <table class="table-shopping-cart">
                                    <tr class="table_head">
                                        <th class="column-1">img</th>
                                        <th class="column-2">Наиенование</th>
                                        <th class="column-3">Цена</th>
                                        <th class="column-4">Кол-во</th>
                                        <th class="column-5">Итог</th>
                                        <th class="column-6">Удалить</th>
                                    </tr>
                                    @foreach ($baskets as $basket)
                                        <tr class="table_row">

                                            <td class="column-1">

                                                <div class="how-itemcart1">
                                                    {{--кнопка удаления из корзины--}}{{--
                                                    <a href="#" class="close">--}}

                                                    <img src="storage/{{ $basket->image}}" alt="IMG">
                                                </div>
                                            </td>

                                            <td class="column-2">
                                                {{ $basket->name}}
                                            </td>

                                            <td class="column-3">₽{{ $basket->UnitPrice}}</td>
                                            <td class="column-4">
                                                <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                                    </div>

                                                    <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value='{{ $basket->quantity}}'>

                                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="column-5">
                                                ₽
                                                {{ $basket->final_price}}
                                            </td>
                                            <td class="column-6">
                                                {{--<a href = "delete/{{ $basket->id }}">elfkbnm</a>--}}
                                                <a href="/delete/{{ $basket->id }}">
                                                    <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                                </a>



                                            </td>

                                        </tr>
                                    @endforeach

<script>

    function pio() {
        alert('sddfgh');
    }
</script>
                                </table>
                            </div>

                            {{--<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                <div class="flex-w flex-m m-r-20 m-tb-5">
                                    <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

                                    <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                        Apply coupon
                                    </div>
                                </div>

                                <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                    Update Cart
                                </div>
                            </div>--}}
                        </div>
                    </div>

                    <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                            <h4 class="mtext-109 cl2 p-b-30">
                                Ваш заказ
                            </h4>

                            <div class="flex-w flex-t bor12 p-b-13">
                                <div class="size-208">
								<span class="stext-110 cl2">
									Итоговая цена:
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
                                    //echo print_r($my_arr);
                                $array = [['1' => 'cvjnhbv1'],['2' => 'cvjnhbv2']];


                                //$array = array_add($array, 'foo', 'bar');
                                //echo print_r($array2);
                                //echo "<br />"; // создаем новую строку
                                //echo print_r($my_arr);
                                //echo $my_arr['0']; //выведет 300

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


    @stop
