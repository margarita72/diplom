@extends('layouts.home_my')
@section('title','home')


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


            @include('items.Product')
        @stop

        @section('extra-js')
            <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
            <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
            <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
            <script src="{{ asset('js/algolia.js') }}"></script>

        @endsection


