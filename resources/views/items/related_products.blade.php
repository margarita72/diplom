

<!-- Related Products -->


    <section class="sec-relate-product bg0 p-t-45 p-b-105">
        <div class="container">
            <div class="p-b-45">
                <h3 class="ltext-106 cl5 txt-center">
                    Related Products

                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                        <!-- Block2 -->
                        @foreach ($productss as $product)
                            <div class="block2">
                                <form method="post" id="contactform2" >
                                        {{ csrf_field() }}
                                        <input type = "hidden" id="id_products" name = "id_products" value ="{!! $products->id !!}">
                                        <input type = "hidden" name = "id_user" value ="{{Auth::id()}}" >
                                        <div class="block2-pic hov-img0">
                                            <img src="..\storage\{{ $product->image}}" alt="IMG-PRODUCT">
                                            <button onclick="send()" type="submit2" id="submit2" href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View

                                            </button>
                                            <button  onclick="send2()" id="submit2"  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View2

                                            </button>

                                            <button type="submit2"  id="submit2">ffff</button>

                                            {{--<a href="/ajaxtovarid" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">--}}
                                                {{--Quick View--}}
                                            {{--</a>--}}
                                        </div>

                                </form>

                                    <div class="block2-txt flex-w flex-t p-t-14">
                                        <div class="block2-txt-child1 flex-col-l ">
                                            <a href=href="/product_detail/{{ $product->id }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                {{ $product->name }}
                                            </a>

                                            <span class="stext-105 cl3">
                                             ₽{{ $product->unit_cost }}
                                        </span>
                                        </div>

                                        <div class="block2-txt-child2 flex-r p-t-3">
                                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                <img class="icon-heart1 dis-block trans-04" src="../images/icons/icon-heart-01.png" alt="ICON">
                                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="../images/icons/icon-heart-02.png" alt="ICON">
                                            </a>
                                        </div>
                                    </div>

                            </div>
                        </div>

                        <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                            @endforeach


                        </div>

                </div>
            </div>
        </div>
    </section>
{{--<script type="text/javascript">--}}
    {{--$(document).ready(function(){--}}
        {{--$('#contactform2').on('submit2', function(e){--}}
            {{--e.preventDefault();--}}

            {{--$.ajax({--}}
                {{--type: 'POST',--}}
                {{--url: '/ajaxtovarid',--}}
                {{--data: $('#contactform2').serialize(),--}}
                {{--success: function(result){--}}
                    {{--console.log(result);--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}

<script type="text/javascript">
    function send() {
        var id_products = $("#id_products").val();
        $.ajax({
            type: 'POST',
            url: '/ajaxtovarid',
            data: {id_products: id_products},
            success: function (user) {

                console.log(user);
                alert('gggg');
                //alert(result);
                //$('#msg').html(result);
            },
            error: function (msg) {
                alert('тут ошиобчка');
            }

        });

    }
</script>


<script>
    function send2() {
        $("#contactform2").on("click", function(){


            alert('123');
        });

    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
{{--<script>--}}
    {{--$(function() {--}}
        {{--$('#submit2').on('click',function(){--}}
            {{--var title = $('#title').val();--}}
            {{--var text = $('#text').val();--}}
            {{--$.ajax({--}}
                {{--url: '/ajaxtovarid',--}}
                {{--type: "POST",--}}
                {{--data: {title:title,text:text},--}}
                {{--headers: {--}}
                    {{--'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')--}}
                {{--},--}}
                {{--success: function (data) {--}}
                    {{--$('#addArticle').modal('hide');--}}
                    {{--$('#articles-wrap').removeClass('hidden').addClass('show');--}}
                    {{--$('.alert').removeClass('show').addClass('hidden');--}}
                    {{--var str = '<tr><td>'+data['id']+--}}
                        {{--'</td><td><a href="/article/'+data['id']+'">'+data['title']+'</a>'+--}}
                        {{--'</td><td><a href="/article/'+data['id']+'" class="delete" data-delete="'+data['id']+'">Удалить</a></td></tr>';--}}
                    {{--$('.table > tbody:last').append(str);--}}
                {{--},--}}
                {{--error: function (msg) {--}}
                    {{--alert('Ошибка');--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--})--}}
{{--</script>--}}
