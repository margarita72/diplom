<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <!--===================Стили для другой форме=================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/login/util.css">
    <link rel="stylesheet" type="text/css" href="../css/login/main.css">


    <!---================================================================================================================---->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-----=====================================================================================---->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <!--для фильтра по цене-->
    <link href="../components/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $( function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 100,
                max: 10000,
                values: [ 100, 9500 ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "₽" + ui.values[ 0 ] + " - ₽" + ui.values[ 1 ] );
                    var a1 = ui.values[ 0 ];
                    var a2 = ui.values[ 1 ];
                    //var mas = [];
                    /*$('input:checkbox:checked').each(function() {
                        checked.push($(this).val());
                    });*/
                    /*let arr = [...Array(10001).keys()],
                        arrayFilter = (arr, min, max) => arr.filter(v => v >= min && v <= max);
                    //console.log(arr);//[ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 ]
                    //console.log(arrayFilter(arr, a1, a2)); //[ 4, 5, 6, 7 ]
                    //var mas = arrayFilter(arr, a1, a2);
                    let mass = [arrayFilter(arr, a1, a2)];
                    console.log(mass);*/




                    /*for(let ii=0; ii<mass.length; ii++){

                        $('.Price-'+mass[ii]).removeClass('hide');

                    }*/

                    $('.item').addClass('hide');
                    for (var j = a1; j <= a2; j++){



                        $('.Price-'+j).removeClass('hide');
                        //console.log(j);
                        //mas.push(j);

                    }

                    //alert(ui.values[ 1 ]);
                }

            });
            $( "#amount" ).val( "₽" + $( "#slider-range" ).slider( "values", 0 ) +
                " - ₽" + $( "#slider-range" ).slider( "values", 1 ) );
        } );
    </script>
    <script>
        $( function() {
            $( "#speed" ).selectmenu();

            $( "#files" ).selectmenu();

            $( "#number" )
                .selectmenu()
                .selectmenu( "menuWidget" )
                .addClass( "overflow" );

            $( "#salutation" ).selectmenu();
        } );
    </script>
    <!--=================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/filter.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--==========================================================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('class')

</head>
<body class="animsition">

<!-- Header -->
    {{--@foreach ($products as $product)
        {{ $product->name }}

    @endforeach--}}
{{--панель для администратора--}}


@include('items.header')
    {{--@include('items.header', ['some'=>"$product->name"])--}}

<!-- Cart -->
    @include('items.shopping_card')

    @section('content')
        <!-- Slider -->
        @yield('slider')
        <!-- Banner -->
        @yield('banner')
        <!-- Product -->
        @yield('product')

        @yield('related_products')
    @show

{{--@include('items.consultant')--}}
{{--скрипт интернет консультанта--}}
<script>
    window.replainSettings = { id: '94032016-1f02-4214-bb73-aeb0f1e728da' };
    (function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
    })('https://widget.replain.cc/dist/client.js');
</script>

<!-- Footer -->

<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Categoriesss
                    @foreach ($products_alls as $products_all)
                        {{ $products_all->name }}
                    @endforeach



                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Women
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Men
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Shoes
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Watches
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Help
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Track Order
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Returns
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Shipping
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    GET IN TOUCH
                </h4>

                <p class="stext-107 cl7 size-201">
                    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                </p>

                <div class="p-t-27">
                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Newsletter
                </h4>

                <form>
                    <div class="wrap-input1 w-full p-b-4">
                        <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                        <div class="focus-input1 trans-04"></div>
                    </div>

                    <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="p-t-40">
            <div class="flex-c-m flex-w p-b-18">
                <a href="#" class="m-all-1">
                    <img src="../images/icons/icon-pay-01.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="../images/icons/icon-pay-02.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="../images/icons/icon-pay-03.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="../images/icons/icon-pay-04.png" alt="ICON-PAY">
                </a>

                <a href="#" class="m-all-1">
                    <img src="../images/icons/icon-pay-05.png" alt="ICON-PAY">
                </a>
            </div>

            <p class="stext-107 cl6 txt-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </p>
        </div>
    </div>
</footer>


<!-- блок ползунка вверх -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>


<!-- Modal1 ,ыстрого просмотра изображений-->
<!--тут будет логика с условием -->
@include('items/product_id')

<!-- форма входа login_form-->
    <div class="wrap-modal1 js-modals p-t-60 p-b-20">
        <div class="overlay-login-form js-hide-login-form"></div>
        <div class="container">
            <div class="how-pos3-parent">
                <div class="limiter">
                    <!--крестик для скрытия формы-->
                    <button class="how-pos3 hov3 trans-04 js-hide-login-form">
                        <img src="../images/icons/icon-close.png" alt="CLOSE">
                    </button>


                    <div class="container-login100">

                        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

                        <span class="login100-form-title p-b-32">
                            {{ __('Account Login') }}
                        </span>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <span for="email" class="txt1 p-b-11">
                                    {{ __('E-Mail Address') }}
                                </span>
                                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                                        <input id="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                        <span class="focus-input100"></span>
                                    </div>
                                    <span class="txt1 p-b-11">
                                    {{ __('Password') }}
                                </span>
                                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                                    <span class="btn-show-pass">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                        <input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="flex-sb-m w-full p-b-48">
                                        <div class="contact100-form-checkbox">
                                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                            <label class="label-checkbox100" for="ckb1">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>

                                        <div>
                                            <a href="{{ route('password.request') }}" class="txt3">
                                                {{ __('Forgot Your Password?') }}
                                            </a><br>
                                            <a href="#" class="txt3">
                                                {{ __('Want to register?') }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="container-login100-form-btn">
                                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<!--===============================================================================================-->
<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/bootstrap/js/popper.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="../vendor/daterangepicker/moment.min.js"></script>
<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--======================для слайдеров=========================================================================-->
<script src="../vendor/slick/slick.min.js"></script>
<script src="../js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="../vendor/parallax100/parallax100.js"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="../vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="../vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/sweetalert/sweetalert.min.js"></script>
<script>
    $('.js-addwish-b2').on('click', function(e){
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function(){
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

</script>
<!--===============================================================================================-->
<script src="../js/modules/catalogDB.js"></script>
<script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function(){
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function(){
            ps.update();
        })
    });
</script>

<!--===============================================================================================-->
<script src="../js/main.js"></script>
<!--для ползунка цены-->
<script src="../components/jquery-ui/jquery.js"></script>
<script src="../components/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--=================================================================================-->


</body>
</html>
