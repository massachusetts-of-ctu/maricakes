
    $(document).ready(function() {
        $('.out-of-stock').click(function() {
            var productId = $(this).data('product-id');

            $.ajax({
                type: 'POST',
                url: 'out-of-stock.php',
                data: { product_id: productId },
                success: function(response) {
                    alert(response);
                },
                error: function() {
                    alert('Error processing the request.');
                }
            });
        });
    });

    $(document).ready(function() {
        $('.on-stock-product').click(function() {
            var productId = $(this).data('product-id');
            $.ajax({
                type: 'POST',
                url: 'on-stock.php',
                data: { product_id: productId },
                success: function(response) {
                    alert(response);
                },
                error: function() {
                    alert('Error processing the request.');
                }
            });
        });
    });

    $(document).ready(function() {
        $('.delete-product').click(function() {
            var productId = $(this).data('product-id');
            $.ajax({
                type: 'POST',
                url: 'delete-product.php',
                data: { product_id: productId },
                success: function(response) {
                    alert(response);
                },
                error: function() {
                    alert('Error processing the request.');
                }
            });
        });
    });