

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
                                            <button onclick="send()" type="submit" id="submit2" href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View

                                            </button>


                                            <button type="submit"  id="submit2">ffff</button>

                                            {{--<a href="/ajaxtovarid" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">--}}
                                                {{--Quick View--}}
                                            {{--</a>--}}
                                        </div>

                                </form>

                                    <div class="block2-txt flex-w flex-t p-t-14">
                                        <div class="block2-txt-child1 flex-col-l ">
                                            <a href=href="/product_detail/{{ $product->id }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                {{ $product->products->name }}
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
            success: function (data) {

                console.log(data);
                alert('Работает');
                //alert(result);
                //$('#msg').html(result);
            },
            error: function (msg) {
                alert('тут ошиобчка');
            }

        });

    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

    $(document).ready(function(){
        $('#contactform2').on('ifClicked', function(e2){
            e2.preventDefault();
            // var id_user = $('#id_user').val();
            // var id_products = $('#id_products').val();
            $.ajax({
                type: 'POST',
                url: 'ajaxtovarid',
                data: $('#contactform2').serialize(),
                // data: {
                //         id_products:id_products,
                //         id_user:id_user,
                //     },

                success: function(result){

                    console.log(result);
                    //alert(result);
                    //alert(result);
                    //$('#msg').html(result);
                },
                error: function (msg) {
                    alert('тут ошибочка12');

                }
            });


        });
    });
</script>
