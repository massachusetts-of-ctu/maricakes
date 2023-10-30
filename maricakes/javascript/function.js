var addedProducts = [];

        document.querySelectorAll('.add-to-cart').forEach(function(button, index) {
            button.addEventListener('click', function() {
                var productName = document.querySelectorAll('.product-card h4')[index].textContent;

                if (addedProducts.includes(productName)) {
                    document.getElementById('error-message').textContent = 'Product already added to order.';
                } else {
                    addedProducts.push(productName);
                    var productPrice = parseFloat(document.querySelectorAll('.product-card p')[index].textContent.replace('$', ''));
                    var newRow = document.createElement('tr');
                    newRow.innerHTML = `
                        <td>${productName}</td>
                        <td>${productPrice.toFixed(2)}</td>
                        <td><input type="number" value="1" min="1" class="quantity-input"></td>
                        <td><span class="fa fa-trash-o remove-button" style="font-size:25px"></span></td>
                    `;
                    document.getElementById('order-summary-body').appendChild(newRow);
                    document.getElementById('error-message').textContent = '';

                    var newQuantityInput = newRow.querySelector('.quantity-input');
                    newQuantityInput.addEventListener('input', function() {
                        updatePaymentSummary();
                    });

                    updatePaymentSummary();
                }
            });
        });

        var discountInput = document.getElementById('discount');
        var taxAmountElement = document.getElementById('tax-amount');
        var totalPriceElement = document.getElementById('total-price');
        var grandTotalElement = document.getElementById('grand-total');

        discountInput.addEventListener('input', function() {
            updatePaymentSummary();
        });

        function updatePaymentSummary() {
            var totalQuantity = 0;
            var totalPrice = 0;
            var quantityInputs = document.querySelectorAll('.quantity-input');
            var productPrices = document.querySelectorAll('#order-summary-body td:nth-child(2)');

            quantityInputs.forEach(function(input, index) {
                var quantity = parseInt(input.value);
                totalQuantity += quantity;
                var price = parseFloat(productPrices[index].textContent);
                totalPrice += quantity * price;
            });

            var discount = parseFloat(discountInput.value) || 0;
            var taxRate = 0.03;
            var taxAmount = totalPrice * taxRate;
            var grandTotal = totalPrice - (totalPrice * (discount / 100)) + taxAmount;

            taxAmountElement.textContent = taxAmount.toFixed(2);
            totalPriceElement.textContent = totalPrice.toFixed(2);
            grandTotalElement.textContent = grandTotal.toFixed(2);

            var cashInput = document.getElementById('cash');
        var commitButton = document.getElementById('commit-button');
        var changeElement = document.getElementById('change');

        commitButton.addEventListener('click', function() {
            var cashAmount = parseFloat(cashInput.value) || 0;

            if (cashAmount < grandTotal) {
                changeElement.textContent = 'Not enough cash!';
            } else {
                var change = cashAmount - grandTotal;
                changeElement.textContent = change.toFixed(2);
            }
        });

        document.querySelectorAll('.remove-button').forEach(function(button, index) {
    button.addEventListener('click', function() {
        var productNameToRemove = document.querySelectorAll('#order-summary-body td:nth-child(1)')[index].textContent;
        // Remove the product from the addedProducts array
        addedProducts = addedProducts.filter(function(product) {
            return product !== productNameToRemove;
        });
        // Remove the corresponding row from the order summary
        button.closest('tr').remove();
        // Recalculate the payment summary
        updatePaymentSummary();
    });
});



// ----------------------------------------------
// ... (existing JavaScript code)

// Add event listener to the Confirm button
document.getElementById('confirm-button').addEventListener('click', function() {
    // Set the receipt date
    var currentDate = new Date();
    document.getElementById('receiptDate').textContent = currentDate.toLocaleDateString();

    // Create a receipt in the modal
    var receiptBody = document.getElementById('receipt-body');
    receiptBody.innerHTML = ''; // Clear existing content

    // Iterate over the order summary and populate the receipt
    addedProducts.forEach(function(productName, index) {
        var quantity = parseInt(document.querySelectorAll('.quantity-input')[index].value);
        var price = parseFloat(document.querySelectorAll('#order-summary-body td:nth-child(2)')[index].textContent);
        var totalPrice = quantity * price;

        var row = document.createElement('tr');
        row.innerHTML = `
            <td>${productName}</td>
            <td>${price.toFixed(2)}</td>
            <td>${quantity}</td>
            <td>${totalPrice}</td>
        `;
        receiptBody.appendChild(row);
    });

    // Calculate total price, tax, and grand total
    var totalPrice = parseFloat(document.getElementById('total-price').textContent);
    var discountPercentage = parseFloat(document.getElementById('discount').textContent);
    var changemod = parseFloat(document.getElementById('change').textContent);
    var taxRate = 0.03; // 3% tax rate
    var cashmod = parseFloat(cashInput.value) || 0;

    var taxAmount = totalPrice * taxRate;
    var discountAmount = (totalPrice * discount) / 100;
    var grandTotal = totalPrice - discountAmount + taxAmount;

    // Update the modal with calculated values
    document.getElementById('total-price-modal').textContent = totalPrice.toFixed(2);
    document.getElementById('tax-amount-modal').textContent = taxAmount.toFixed(2);
    document.getElementById('discount-modal').textContent = discountAmount.toFixed(2);
    document.getElementById('grand-total-modal').textContent = grandTotal.toFixed(2);
    document.getElementById('cash-modal').textContent = cashmod.toFixed(2);
    document.getElementById('change-modal').textContent = changemod.toFixed(2);

    // Show the modal
    var modal = document.getElementById('receiptModal');
    modal.style.display = 'block';

    // Close the modal when the user clicks the close button
    var closeBtn = document.querySelector('.close');
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    // Close the modal when the user clicks outside the modal content
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});

var printButton = document.getElementById('print-button');
printButton.addEventListener('click', function() {
    // Clone the modal content and remove the Print button
    var clonedContent = document.getElementById('receiptModal').cloneNode(true);
    var printButtonToRemove = clonedContent.querySelector('#print-button');
    printButtonToRemove.remove();

    // Open a new window
    var printWindow = window.open('', '_blank');

    // Populate the new window with the modified content of the modal
    printWindow.document.open();
    printWindow.document.write(`
        <html>
        <head>
            <title>Receipt</title>
        </head>
        <body>
            ${clonedContent.outerHTML}
        </body>
        </html>
    `);
    printWindow.document.close();

    // Print the new window
    printWindow.print();
});

        }
