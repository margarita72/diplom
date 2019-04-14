@extends('layouts.home_my')
@section('title','home')


        @section('slider')
<<<<<<< HEAD

=======
>>>>>>> master
            @if(setting('site.slider')=='1')
                @include('items.Slider_one')
            @else
                @include('items.Slider_two')
            @endif
<<<<<<< HEAD
=======

>>>>>>> master
        @stop

        @section('banner')
            @include('items.Banner')
        @stop

        @section('product')

            @include('items.Product')
        @stop


