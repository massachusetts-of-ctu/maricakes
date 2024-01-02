function openModal() {
    $('#EditModal').show();
    $('#overlay').show();
}
function closeModal() {
    $('#EditModal').hide();
    $('#overlay').hide();
}
$(document).ready(function() {
$('.edit-product').click(function() {
    var productId = $(this).data('product-id');

    $.ajax({
        url: '../process/get_product_details.php', 
        type: 'POST',
        data: { productId: productId },
        success: function(response) {
            var productDetails = JSON.parse(response);

            if (productDetails.pro_img) {
                var imageUrl = '../assets/img/' + productDetails.pro_img;
                $('#editProductImage').attr('src', imageUrl);
            } else {
                $('#editProductImage').attr('src', '../assets/img/mariCakes.png'); // Replace with the path to a default image
            }

            $('#editProductName').val(productDetails.pro_name);
            $('#editProductPrice').val(productDetails.pro_price);
            $('#productIdField').val(productId);

            openModal();
        },
        error: function(error) {
            console.log('Error fetching product details: ', error);
        }
    });
});

$('#saveChanges').click(function() {
    var productId = $('#productIdField').val();
    var updatedProductName = $('#editProductName').val();
    var updatedProductPrice = $('#editProductPrice').val();

    closeModal();
});
});

$(document).ready(function() {
    $('#editOOS').click(function() {
        var productId = $('#productIdField').val();
        $.ajax({
            type: 'POST',
            url: '../process/out-of-stock.php',
            data: { product_ids: productId },
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
    $('#editAVAIL').click(function() {
        var productId = $('#productIdField').val();
        $.ajax({
            type: 'POST',
            url: '../process/on-stock.php',
            data: { product_ids: productId },
            success: function(response) {
                alert(response);
            },
            error: function() {
                alert('Error processing the request.');
            }
        });
    });
});

////recent fking order
$(document).ready(function() {
    $('.edit-recent-order').click(function() {
        var productId = $(this).data('product-id');

        $.ajax({
            url: '../process/get_recent_order.php',
            type: 'POST',
            data: { productId: productId },
            success: function(response) {
                var productDetailsArray = JSON.parse(response);

                if (productDetailsArray.length > 0) {
                    // Assuming the first row contains the necessary information
                    var productDetails = productDetailsArray[0];

                    // Populate details table and calculate subtotal
                    var detailsTableBody = $('#detailsTableBody');
                    detailsTableBody.empty();
                    var subtotal = 0;

                    productDetailsArray.forEach(function(item) {
                        var row = '<tr>' +
                            '<td class="col-product">' + item.proname + '</td>' +
                            '<td class="col-price">' + '₱ ' + item.price + '</td>' +
                            '<td class="col-qty">' + item.qty + '</td>' +
                            '</tr>';
                        detailsTableBody.append(row);

                        // Sum up the subtotal
                        subtotal += parseFloat(item.pro_total);
                    });

                    // Populate other fields
                    $('#r_prototal').text('₱ ' + subtotal.toFixed(2)); // Display the total with two decimal places
                    $('#r_tax').text('₱ ' + productDetails.tax);
                    $('#r_discount').text('₱ ' + productDetails.discount);
                    $('#r_gtotal').text('₱ ' + productDetails.total);

                    $('#r_orderId').text(productDetails.order_id);
                    $('#r_date').text(productDetails.date);
                    $('#r_time').text(productDetails.time);
                    $('#r_cashier').text(productDetails.cashier);

                    openModals();
                } else {
                    console.log('No product details found for the given order ID.');
                }
            },
            error: function(error) {
                console.log('Error fetching product details: ', error);
            }
        });
    });
});