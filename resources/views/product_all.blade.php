@extends('layouts.index')

@section('title', 'Product')


@section('styles')
    @parent
    <!--тут будут добавляться стили если понадобиться-->
@stop

@section('header')
    <header class="header-v4">
        @parent
    </header>
@stop

@section('shopping_card')
    @parent


@stop



@section('product')
    @include('items.Product')
@stop

@section('script')
    @include('items.script')
@stop

@section('Model')
    @include('items.Modal1')
@stop
