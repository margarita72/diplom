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
                        console.log(response);
                        $("#productData").html(response);
                    }
                });
            });
        @endforeach
    });
</script>
