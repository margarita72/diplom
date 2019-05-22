<!-- Header desktop -->
<div class="container-menu-desktop">
    <!-- Topbar -->
    <div class="top-bar">
        <div class="content-topbar flex-sb-m h-full container">
            <div class="left-top-bar">


                    Добро пожаловать, администратор.





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


{{--блок всплывающих модальных окон--}}{{--



    <div id="content">
        <!-- Icons source http://dribbble.com/shots/913555-Flat-Web-Elements -->
        --}}
{{--<div class="notify successbox">
            <h1>Success!</h1>
            <span class="alerticon"><img src="../images/img/check.png" alt="checkmark" /></span>
            <p>Thanks so much for your message. We check e-mail frequently and will try our best to respond to your inquiry.</p>
        </div>--}}{{--


        --}}
{{--<div class="notify errorbox">
            <h1>Warning!</h1>
            <span class="alerticon"><img src="../images/img/error.png" alt="error" /></span>
            <p>You did not set the proper return e-mail address. Please fill out the fields and then submit the form.</p>
        </div>--}}{{--


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



                --}}
{{--{{$products_all->balance}}--}}{{--




            @endif

        @endforeach



    </div><!-- @end #content -->


<script type="text/javascript">
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


--}}
<script type="text/javascript">
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<div id="content">
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
</div>

