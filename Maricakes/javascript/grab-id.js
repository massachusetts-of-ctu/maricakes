$(document).ready(function () {
    $('.delete-product').click(function () {
        var row = $(this).closest('tr'); // Get the closest table row
        var productId = $(this).data('product-id');
        row.remove();
        $.ajax({
            type: 'POST',
            url: '../process/delete-product.php',
            data: { product_id: productId },
            success: function (response) {
                alert(response);
            },
            error: function () {
                alert('Error processing the request.');
            }
        });
    });
});

$(document).ready(function () {
    $('.delete-recent-order').click(function () {
        var row = $(this).closest('tr'); // Get the closest table row
        var productId = $(this).data('product-id');

        // Remove the table row immediately
        row.remove();

        // Send AJAX request to delete the order
        $.ajax({
            type: 'POST',
            url: '../process/delete_recent.php',
            data: { product_id: productId },
            success: function (response) {
                // Handle the response if needed
                alert(response);
            },
            error: function () {
                alert('Error processing the request.');
            }
        });
    });
});
function openModals() {
    $('#recent').show();
}
function closeModals() {
    $('#recent').hide();
}

window.onclick = function (event) {
    var modal = document.getElementById('recent');
    if (event.target == modal) {
        $('#recent').hide();
    }
};