@extends('layouts.index')

        @section('title', 'Home')

        @section('styles')
            @parent
            <!--тут будут добавляться стили если понадобиться-->
        @stop
            <!--header-->
        @section('header')
            <header>
            @parent
            </header>
        @stop

    @section('slider')
        @include('items.Slider_two')
    @stop

    @section('shopping_card')
        @parent
    @stop

@section('banner')
    @include('items.Banner')
@stop


<!--@ extends('layouts.app')-->
<!--Посмотреть и исправить!!!!!!!!!!!-->
    @section('product')
        @include('items.Product')
@section('product_overview')
    @extends('items.Product')
    <div class="p-b-10">
        <h3 class="ltext-103 cl5">
            Product Overview

        </h3>
    </div>
@stop
    @stop



    @section('script')
        @include('items.script')
    @stop

    @section('Model')
        @include('items.Modal1')
    @stop


