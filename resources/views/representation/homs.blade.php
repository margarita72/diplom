@extends('layouts.home_my')
@section('title','home12')


        @section('slider')

            @if(setting('site.slider')=='1')
                @include('items.Slider_one')
            @else
                @include('items.Slider_two')
            @endif
        @stop

        @section('banner')
            @include('items.Banner')
        @stop

        @section('product')

            @include('items.Product')
        @stop

        @section('warning')

        @stop



{{--блок всплывающих модальных окон--}}


<div id="content">
    <!-- Icons source http://dribbble.com/shots/913555-Flat-Web-Elements -->
    {{--<div class="notify successbox">
        <h1>Success!</h1>
        <span class="alerticon"><img src="../images/img/check.png" alt="checkmark" /></span>
        <p>Thanks so much for your message. We check e-mail frequently and will try our best to respond to your inquiry.</p>
    </div>--}}

    {{--<div class="notify errorbox">
        <h1>Warning!</h1>
        <span class="alerticon"><img src="../images/img/error.png" alt="error" /></span>
        <p>You did not set the proper return e-mail address. Please fill out the fields and then submit the form.</p>
    </div>--}}

    @foreach ($products_alls as $products_all)
        @if($products_all->balance <= 5==true)
            <div class="notify errorbox">
                <h1>Внимание!id:{{$products_all->id }}</h1>
                <span class="alerticon"><img src="../images/img/error.png" alt="error" /></span>
                <p>
                    {{'Необходимо пополнить товар:'}}
                    {{$products_all->name .". На складе осталось - ".$products_all->balance}}
                    <a href="http://diplom/admin/products/{{$products_all->id }}/edit" id="" class="">Перейти</a>


                </p>
            </div>



            {{--{{$products_all->balance}}--}}



        @endif

    @endforeach



</div><!-- @end #content -->




