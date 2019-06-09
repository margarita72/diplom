@include('items.ourJs')

<section class="bg0 p-t-23 p-b-140" data-page="catalogDB">
    <div class="container">
            @yield('product_overview')

<h1>Каталог товаров</h1>

        <div class="flex-w flex-sb-m p-b-52">

            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button onclick="Categorii_productAll()" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*" >
                        All Products
                    </button>
                @foreach ($Categorii_products as $Categorii_product)
                    <button onclick="Categorii_product({{ $Categorii_product->id }})" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{ $Categorii_product->id }}" id="filter12">
                        {{ $Categorii_product->name }}
                    </button>
                @endforeach

            </div>

            <div class="flex-w flex-c-m m-tb-10">
                <!--фильтровать по полярности-->

                {{--<button id="knops">нажми-ка</button>--}}
                    <select onchange="getSelectvalue();" class="filter flex-c-m stext-106 cl6 size-104 bor4 pointer  trans-04 m-r-8 m-tb-4 " name="selectThis" id="selectThis">
                        <option value=".option">без сортировки</option>
                        <option value=".option1" >По цене, сначала дешевые</option>
                        <option value=".option2" >По цене, сначала дорогие</option>
                        <option value=".option3">По популярности</option>
                    </select>



                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                    <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Filter
                </div>
                <!-- Поиск товара -->
                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Search
                </div>
            </div>

            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <div class="bor8 dis-flex p-l-15">
                    <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <form action="{{url('search')}}">
                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="searchData" placeholder="Search">
                    </form>

                </div>
            </div>

            <!-- Filter -->
            <div class="dis-none panel-filter w-full p-t-10 controls" >
                <div id="Filter" class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm" onclick="filters()">

                    {{--фильтр по тегу или применению--}}
                    <div id="Tags" class="filter-col4 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Tags - Применение
                        </div>


                        @foreach($Tags as $Tag)
                            <div class="flex-w p-t-4 m-r--5" data-teds="teg{{ $Tag->id}}">
                                <button onclick="Tags_product({{ $Tag->id}})" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                                    {{ $Tag->name }}
                                </button>
                            </div>
                        @endforeach
                    </div>

                    {{--фильтр по производителю--}}
                    <div id="Sort_By" class="filter-col1 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Sort By - Производитель
                        </div>
                        <div id="btn">
                            @foreach($suppliers as $supplier)
                                <button  class="checkbox" data-supliers="supplier{{ $supplier->id}}">
                                    <label onclick="supplier_product({{ $supplier->id}})"class="filter-link stext-106 trans-04 checkbox-label">
                                        <input type="checkbox" name="brands[]" value="{{ $supplier->id}}" id="{{ $supplier->id}}">{{ $supplier->name}}
                                    </label>
                                </button>
                            @endforeach
                        </div>
                    </div>





                    {{--фильтр по цене--}}

                    <div id="Price" class="filter-col2 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Price - Цена
                        </div>

                        <!-- Slider -->
                        <p>
                        <div class="checkbox">
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold; background: #f2f2f2">
                        </div>
                        <div id="slider-range"></div>
                        </p>



                    </div>

                    {{--вообще то не нужный фильтр--}}

                    {{--<div class="filter-col3 p-r-15 p-b-27">
                        <div class="mtext-102 cl2 p-b-15">
                            Color
                        </div>

                        <ul>
                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Black
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                    Blue
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Grey
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Green
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    Red
                                </a>
                            </li>

                            <li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

                                <a href="#" class="filter-link stext-106 trans-04">
                                    White
                                </a>
                            </li>
                        </ul>
                    </div>--}}




                </div>
            </div>
        </div>

{{--еще вариант--}}
        <div class="products clearfix" >
            <div id="navs" class="row">
                @foreach ($products as $product)
                    <div class="product-wrapper item mur-{{ $product->id_category}} tag-{{ $product->id_tags}} suppliers-{{ $product->id_suppliers}} Price-{{ $product->unit_cost}}" data-categorii-product="{{ $product->id_category}}" data-sorts="{{ $product->unit_cost }}" data-rating="{{ $product->rating }}" data-id="{{ $product->id }}">
                        <div class="product-inner">
                            <div class="product-wrap">
                                <img src="storage\{{ $product->image}}" width="270" height="270">
                                <div class="actions">
                                    <a href="" class="add-to-cart"></a>
                                    <a href="" class="quickview"></a>
                                    <a href="" class="wishlist"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="/product_detail/{{ $product->id }}">{{ $product->id }}{{ $product->name}}</a></h3>
                                <span class="price">₽{{ $product->unit_cost }}</span>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            {{--<div class="product-wrapper">

                <div>
                    <div class="product-inner">
                        <div class="product-wrap">
                            <img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg"  class="img-plat">
                            <div class="actions">
                                <a href="" class="add-to-cart"></a>
                                <a href="" class="quickview"></a>
                                <a href="" class="wishlist"></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="">Маленькое черное платье</a></h3>
                            <span class="price">₽ 1999</span>
                        </div>
                    </div>
                </div>
            </div>--}}

        </div>




    {{--<form action="post" action="{{route('product_id')}}">--}}
            {{--<div class="row isotope-grid" id="nav">

                    @foreach ($products as $product)
                        <div id="Container" class="container" data-sort="{{ $product->unit_cost }}">
                            <div data-sort1="{{ $product->unit_cost }}" class="category-{{ $product->id_suppliers }}">пример {{ $product->id }} - {{ $product->unit_cost }}
                                <img src="storage\{{ $product->image}}" alt="IMG-PRODUCT" width="120" height="35">
                                <div>sdfghjkl;</div>
                            </div>
                            <!--другой блок-->

                            <div   id="may" class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ $product->id_category }} mix category-{{ $product->id_suppliers }}" data-myorder="{{$product->id}}">



                                <!-- Block2 -->

                                <div class="block2">

                                    <div class="block2-pic hov-img0 ">
                                        <img src="storage\{{ $product->image}}" alt="IMG-PRODUCT" width="1200" height="350">

                                        <form action="/ajaxid" method="post">
                                            {{ csrf_field() }}
                                            <input type = "hidden" id="id_products" name = "id_products" value ="{!! $product->id !!}">
                                            <input type="hidden" name="id_master" value="{{Auth::id()}}">

                                            <button onclick="load()" href="{{ $product->id }}" value="{{ $product->id }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View
                                            </button>
                                        </form>
                                    </div>
                                    <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="/product_detail/{{ $product->id }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    {{ $product->id}}
                                                    {{ $product->name}}
                                                    {{ $product->id_category }}
                                                </a>

                                                    <span class="stext-105 cl3">
                                                    ₽{{ $product->unit_cost }}
                                                    </span>
                                            </div>

                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                                </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ csrf_field() }}
            </div>--}}

    {{--</form>--}}

        @include('items.filterJS')
        {{--<script>
            function load() {
                $.ajax({
                    url: '/ajaxid',
                    type:'post',
                    dataType:'json',
                    contentType:'application/json',
                    success:function (data){
                        $('#data').html("");
                        $.each(data, function (key, val) {
                            $('#data').append("<tr>"+
                                "<td>"+val.user.id+"</td>"+
                                "<td id='ename'>"+val.user.name+"</td>"+
                                "<td id='eaddress'>"+val.user.address+"</td>"+
                                "<td id='ecountry'>"+val.user.country+"</td>"+
                                "<td>"+
                                "<button class='btn btn-warning' id='edit' data-id="+val.user.id+">Edit</button>"+
                                "<button class='btn btn-danger' id='delete' data-id="+val.user.id+">Delete</button>"
                                +"</td>"+
                                +"</tr>")
                        },error:function(err){
                            console.log('Error loading data');
                        }
                    });
            }
        </script>--}}
        <!-- Load more -->

        @section('Load_more')
            <div class="flex-c-m flex-w w-full p-t-45">
                <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Load More
                </a>
            </div>
        @show




</section>
