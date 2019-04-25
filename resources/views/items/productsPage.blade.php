<form action="post" action="{{route('product_id')}}">

    @foreach ($products as $product)



        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ $product->id_category }}">
            <!-- Block2 -->

            <div class="block2">
                <div class="block2-pic hov-img0">
                    <img src="storage\{{ $product->image}}" alt="IMG-PRODUCT" width="1200" height="350">

                    <form action="/ajaxid" method="post">
                        {{ csrf_field() }}
                        <input type = "hidden" id="id_products" name = "id_products" value ="{!! $product->id !!}">
                        <input type="hidden" name="id_master" value="{{Auth::id()}}">

                        <button onclick="load()" href="{{ $product->id }}" value="{{ $product->id }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                            Quick View
                        </button>

                    </form>

                </div>

                <script>
                    function load() {
                        $.ajax({
                            url: '/ajaxid',
                            type:'post',
                            dataType:'json',
                            contentType:'application/json',
                            success:function (data){
                                $('#data').html("");
                                $.each(data, function (key, val) {
                                    $('#data').append("<tr>"+
                                        "<td>"+val.user.id+"</td>"+
                                        "<td id='ename'>"+val.user.name+"</td>"+
                                        "<td id='eaddress'>"+val.user.address+"</td>"+
                                        "<td id='ecountry'>"+val.user.country+"</td>"+
                                        "<td>"+
                                        "<button class='btn btn-warning' id='edit' data-id="+val.user.id+">Edit</button>"+
                                        "<button class='btn btn-danger' id='delete' data-id="+val.user.id+">Delete</button>"
                                        +"</td>"+
                                        +"</tr>")
                                },error:function(err){
                                    console.log('Error loading data');
                                }
                            });
                    }
                </script>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="/product_detail/{{ $product->id }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">

                            {{ $product->name}}
                            {{ $product->id_category }}
                        </a>

                        <span class="stext-105 cl3">
                                        ₽{{ $product->unit_cost }}
                                    </span>
                    </div>

                    <div class="block2-txt-child2 flex-r p-t-3">
                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                            <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    @endforeach

    {{ csrf_field() }}
</form>
