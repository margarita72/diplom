<!-- Header -->

<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">


                    Добро пожаловать.





                    {{--@foreach ($products_alls as $products_all)
                        @if($products_all->balance <= 5==true)

                            --}}{{--{{$products_all->balance}}--}}{{--
                            {{'необходимо пополнить товар на складе'}}
                            {{$products_all->name }}


                        @endif

                    @endforeach--}}

                    {{--@foreach ($products_alls as $products_all)

                        @php

                            $muars  = $products_all->balance;
                            $my_arr2[] = $muars;

                        @endphp
                    @endforeach
                    {{$my_arr2[1]}}
                    {{count($my_arr2)}}--}}
                    {{--@php
                    echo print_r($my_arr2[1]);
                    @endphp--}}
                </div>

                <div class="right-top-bar flex-w h-full">




                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        EN
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        USD
                    </a>
                </div>
            </div>
        </div>


    </div>

        @if (Auth::check())


                {{--$prava =  Auth::user()->role_id;--}}
                @if (Auth::user()->role_id==1)
                    {{--echo 'esfgrdf';--}}
                 @include('items.container-menu-desktop')
                @endif

        @endif




{{--@include('items.container-menu-desktop')--}}

    <div class="wrap-menu-desktop">
        <nav class="limiter-menu-desktop container">

            <!-- Logo desktop -->
            <a href="#" class="logo">
                <img src="../images/icons/logo-01.png" alt="IMG-LOGO">
            </a>


            <!-- Главное меню -->
            <div class="menu-desktop">
                <ul class="main-menu">




                    <li>
                        {!! menu('main1', 'menu') !!}
                    </li>


                    @guest
                        <li>
                            <a href="{{ route('login') }}" class="js-show-login-form">{{ __('Вход') }}</a>
                        </li>

                        <li>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">{{ __('Регестрация') }}</a>
                            @endif
                        </li>
                    @else
                        <li>
                            <a href="#">
                                {{ Auth::user()->name }}


                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>







                                </li>
                                <li>
                                    <a href="/basket">
                                        {{__('Корзина')}}
                                    </a>
                                </li>

                            </ul>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>


                </ul>
            </div>

            <!-- Icon header Иконки меню для больших экранов-->
            <div class="wrap-icon-header flex-w flex-r-m">


                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="3">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search" >
                    <i class="zmdi zmdi-search"></i>
                </div>
            </div>
            @endguest
        </nav>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header Иконки меню для мобильной версии -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="5">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>

        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>
    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Help & FAQs
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        My Account
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        EN
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        USD
                    </a>
                </div>
            </li>
        </ul>
            <!--Основное меню-->
        <ul class="main-menu-m">
            <li>
                {!! menu('main1', 'menu_mobile') !!}
            </li>

            @guest
                <li>
                    <a href="{{ route('login') }}" class="js-show-login-form">{{ __('Login') }}</a>
                </li>

                <li>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
            @else
                <li>
                    <a href="#">
                        {{ Auth::user()->name }}


                    </a>
                    <ul class="sub-menu-m">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </ul>


                    <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true">exit</i>
					</span>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>
            @endguest
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>
            <!-- тут поле для поиска-->
            <form class="wrap-search-header flex-w p-l-15" action="{{url('search')}}">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>

                <input class="plh3" type="text" name="searchData" placeholder="!!!Search...">
            </form>
        </div>
    </div>


            {{--<script type="text/javascript">
                $(function(){
                    $('#content').on('click', '.notify', function(){
                        $(this).fadeOut(350, function(){
                            $(this).remove(); // after fadeout remove from DOM
                        });
                    });

                    // handle the additional windows
                    $('#newSuccessBox').on('click', function(e){
                        e.preventDefault();
                        var samplehtml = $('<div class="notify successbox"> <h1>Success!</h1> <span class="alerticon"><img src="../images/img/check.png" alt="checkmark" /></span> <p>You did not set the proper return e-mail address. Please fill out the fields and then submit the form.</p> </div>').prependTo('#content');
                    });
                    $('#newAlertBox').on('click', function(e){
                        e.preventDefault();
                        var samplehtml = $('<div class="notify errorbox"> <h1>Warning!</h1> <span class="alerticon"><img src="../images/img/error.png" alt="error" /></span> <p>You did not set the proper return e-mail address. Please fill out the fields and then submit the form.</p> </div>').prependTo('#content');
                    });
                });
            </script>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
    </header>

