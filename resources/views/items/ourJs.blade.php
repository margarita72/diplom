<script>
    $(document).ready(function () {
        @foreach($suppliers as $supplier)
            //get Sort By - Производитель id

            $("#supplier{{ $supplier->id }}").click(function () {
                var sup = $("#supplier{{ $supplier->id }}").val();
                //alert(sup);

                $.ajax({
                    type:'get',
                    dataType: 'html',
                    url: '{{url('productsSuppliers')}}',
                    data: 'sup_id=' +sup,
                    success:   function (response) {
                        //console.log(response);
                        $("#productData").html(response);
                    }
                });
            });
        @endforeach
    });
</script>

<script>
    //alert('ffg');
    $(function(){
        $('#Container').on('mixLoad', function() {
            console.log('[event-handler] MixItUp Loaded');
        });

        $('#Container').on('mixStart', function() {
            console.log('[event-handler] Animation Started')
        });

        $('#Container').on('mixEnd', function() {
            console.log('[event-handler] Animation Ended')
        });

        $('#Container').mixItUp({
            callbacks: {
                onMixLoad: function() {
                    console.log('[callback] MixItUp Loaded');
                },
                onMixStart: function() {
                    console.log('[callback] Animation Started');
                },
                onMixEnd: function() {
                    console.log('[callback] Animation Ended');
                }
            }
        });
    });
</script>

<script>
    $( "#slider" ).slider({
        range: true,
        values: [ 17, 67 ]
    });
</script>
<!--тут описание фильтра товаров-->

<script>

    //elem.innerHTML = '!!!';
    //let nav = document.querySelectorAll('#nav');


    /*function getSelectvalue() {
        var Selectvalue = document.getElementById('selectThis').value;
        console.log(Selectvalue);

        if (Selectvalue =='.option1'){
            alert('сортировка по цене вниз');
        }
    }*/
</script>
