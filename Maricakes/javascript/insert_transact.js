function processReceiptData() {
    var receiptData = {};

    receiptData.products = [];
    $('#receipt-body tr').each(function () {
        var rowObject = {};
        $(this).find('td').each(function (index, cell) {    
            var key = $('thead th').eq(index).text().toLowerCase();
            var value = $(cell).text();
            rowObject[key] = value;
        });
        receiptData.products.push(rowObject);
    });
    console.log(receiptData.products);

    receiptData.totalPrice = $('#total-price-modal').text();
    receiptData.taxAmount = $('#tax-amount-modal').text();
    receiptData.discount = $('#discount-modal').text();
    receiptData.grandTotal = $('#grand-total-modal').text();
    receiptData.cash = $('#cash-modal').text();
    receiptData.change = $('#change-modal').text();

    //qty
    receiptData.qtys = $('#prodQty').text();

    //qty*price
    receiptData.subtotal = $('#prodTotal').text();

    // "Sold to" and "Cashier"
    receiptData.soldTo = $('#sold-modal').text();
    receiptData.cashier = $('#sold-modal').text();

    // Extract OR#
    receiptData.orNumber = $('#OR-modal strong').text();

    //cashier
    receiptData.cashier = $('#cashier').text();


    //date
    receiptData.date = $('#receiptDate').text();

    //time
    receiptData.time = $('#receiptTime').text();

    // Check console sa broswer
    console.log(receiptData);

    $.ajax({
        type: "POST",
        url: "../process/process_data.php",
        data: { receiptData: JSON.stringify(receiptData) }, 
        success: function (response) {
            console.log(response);
        }
    });

}

$(document).ready(function () {
    $('#save_transactions').on('click', function () {
        processReceiptData();
    });
});
