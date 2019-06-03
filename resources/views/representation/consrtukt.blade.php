@extends('layouts.home_my')
@section('title','Конструктор')

@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Конструктор по подбору
        </h2>
    </section>
    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form>
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Введите параметры, которые помогут сформировать пакет именно для вас.
                        </h4>
                        <p>
                            <h4>Метраж квартиры</h4>
                            <div class="bor8 m-b-20 how-pos4-parent">

                                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="email" placeholder="60">
                                {{--<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">--}}
                            </div>
                        </p>

                        <p>
                        <h4>Колличество розеток</h4>
                        <div class="bor8 m-b-20 how-pos4-parent">

                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="email" placeholder="5">
                            {{--<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">--}}
                        </div>
                        </p>

                        <h4>Категории устройств</h4>

                        <div class="checkbox">
                            <input id="check1" type="checkbox" name="check" value="check1">
                            <label for="check1">Свет</label>
                            <br>
                            <input id="check2" type="checkbox" name="check" value="check2">
                            <label for="check2">Отопление</label>
                            <br>
                            <input id="check3" type="checkbox" name="check" value="check3">
                            <label for="check3">Система климонт контроля</label>
                        </div>


                        <h4>Ведущая характеристика</h4>

                        <div class="radio">
                            <input id="male" type="radio" name="gender" value="male">
                            <label for="male">Цена</label>
                            <input id="female" type="radio" name="gender" value="female">
                            <label for="female">Качество</label>
                        </div>


                        </br>
                        <p>Для более правильных расчетов рекомендуем воспользоваться консультацией специалистов сайта.</p>

                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Рассчитать
                        </button>
                    </form>
                </div>

                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Внимание!!!
							</span>

                            <p class="stext-115 cl6 size-213 p-t-18">
                                Данный расчет является примерным. В нем не учтенны вспомогательные средства по установке эксплуатации сформированного пакета.
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Позвоните
							</span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                +1 800 1236879
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Напишите письмо
							</span>

                            <p class="stext-115 cl1 size-213 p-t-18">
                                contact@example.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Map -->
    <div class="map">
        <div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
    </div>
@stop

