@extends('layouts.index')

        @section('title', 'Home')

    @section('styles')
        @parent
        <!--тут будут добавляться стили если понадобиться-->
    @stop

    @section('slider')
        @include('items.Slider_one')
    @stop

    @section('shopping_card')
        @parent


    @stop

<!--@ extends('layouts.app')-->

    @section('product')
        @include('items.Product')
    @stop

    @section('script')
        @include('items.script')
    @stop

    @section('Model')
        @include('items.Modal1')
    @stop
