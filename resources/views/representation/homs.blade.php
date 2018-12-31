@extends('layouts.home_my')
@section('title','home')


        @section('slider')
            @include('items.Slider_one')
        @stop

        @section('banner')
            @include('items.Banner')
        @stop

        @section('product')
            @include('items.Product')
        @stop


