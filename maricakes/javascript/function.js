var addedProducts = [];

//for selections 
var op = 0;
document.getElementById('user').addEventListener('click', function () {
    if (op == 0) {
        document.querySelector('.dropdown-cont').classList.add("drop-cont-active");
        op = 1;
    } else {
        document.querySelector('.dropdown-cont').classList.remove("drop-cont-active");
        op = 0;
    }
});




document.querySelectorAll('.add-to-cart').forEach(function (button, index) {
    button.addEventListener('click', function () {
        var productName = document.querySelectorAll('.product-card .product-name')[index].textContent;
        var productId = parseFloat(document.querySelectorAll('.product-card .product-id')[index].textContent);

        var existingProduct = addedProducts.find(product => product.name === productName && product.inCart);

        if (existingProduct && existingProduct.inCart) {
            var existingRow = Array.from(document.querySelectorAll('.side-product-name')).find(element => element.textContent === productName).closest('tr');
            var quantityInput = existingRow.querySelector('.quantity-input');
            quantityInput.value = parseInt(quantityInput.value) + 1;
        } else {
            addedProducts.push({ name: productName, id: productId, inCart: true });
            var productPrice = parseFloat(document.querySelectorAll('.product-card .product-price')[index].textContent);
            var newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td class="side-product-name">${productName}</td>
                <td class="side-product-id">${productId}</td>
                <td class="side-product-price">${productPrice.toFixed(2)}</td>
                <td><input type="number" value="1" min="1" class="quantity-input"></td>
                <td class="side-product-remove"><span class="fa fa-trash-o remove-button" style="font-size:25px"></span></td>
            `;
            document.getElementById('order-summary-body').appendChild(newRow);
            document.getElementById('error-message').textContent = '';

            var newQuantityInput = newRow.querySelector('.quantity-input');
            newQuantityInput.addEventListener('input', function () {
                updatePaymentSummary();
            });
        }

        updatePaymentSummary();
    });
});

document.getElementById('order-summary-body').addEventListener('click', function (event) {
    if (event.target.classList.contains('remove-button')) {
        var productNameToRemove = event.target.closest('tr').querySelector('.side-product-name').textContent;
        var productIndex = addedProducts.findIndex(product => product.name === productNameToRemove && product.inCart);

        if (productIndex !== -1) {
            addedProducts[productIndex].inCart = false;
        }

        event.target.closest('tr').remove();
        updatePaymentSummary();
    }
});






var discountInput = document.getElementById('discount');
var taxAmountElement = document.getElementById('tax-amount');
var totalPriceElement = document.getElementById('total-price');
var grandTotalElement = document.getElementById('grand-total');

discountInput.addEventListener('input', function () {
    updatePaymentSummary();
});

function updatePaymentSummary() {
    var totalQuantity = 0;
    var totalPrice = 0;
    var quantityInputs = document.querySelectorAll('.quantity-input');
    var productPrices = document.querySelectorAll('#order-summary-body td:nth-child(3)');

    quantityInputs.forEach(function (input, index) {
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

    commitButton.addEventListener('click', function () {
        var cashAmount = parseFloat(cashInput.value) || 0;

        if (cashAmount < grandTotal) {
            changeElement.textContent = 'Not enough cash!';
            document.getElementById('confirm-button').disabled = true;
            document.getElementById('change-sign').textContent = '';
        } else {
            var change = cashAmount - grandTotal;
            document.getElementById('change-sign').textContent = '₱';
            changeElement.textContent = change.toFixed(2);
            document.getElementById('confirm-button').disabled = false;
        }
    });

    document.querySelectorAll('.remove-button').forEach(function (button, index) {
        button.addEventListener('click', function () {
            var productNameToRemove = document.querySelectorAll('#order-summary-body td:nth-child(1)')[index].textContent;
            var productIndex = addedProducts.findIndex(function (product) {
                return product.name === productNameToRemove;
            });

            if (productIndex !== -1) {
                addedProducts[productIndex].inCart = false;
            }

            button.closest('tr').remove();
            updatePaymentSummary();
        });
    });


    document.getElementById('confirm-button').addEventListener('click', function () {
        var receiptBody = document.getElementById('receipt-body');
        receiptBody.innerHTML = '';

        addedProducts.forEach(function (product, index) {
            var productName = product.name;
            var productId = product.id;
            var quantity = parseInt(document.querySelectorAll('.quantity-input')[index].value);
            var price = parseFloat(document.querySelectorAll('#order-summary-body td:nth-child(3)')[index].textContent);
            var totalPrice = quantity * price;

            var row = document.createElement('tr');
            row.innerHTML = `
                <td class="prodName">${productName}</td>
                <td class="prodId">${productId}</td>
                <td class="prodPrice">${price.toFixed(2)}</td>
                <td class="prodQty">${quantity}</td>
                <td class="prodTotal">${totalPrice.toFixed(2)}</td>
            `;
            receiptBody.appendChild(row);
        });
        var totalPrice = parseFloat(document.getElementById('total-price').textContent);
        var discountPercentage = parseFloat(document.getElementById('discount').textContent);
        var changemod = parseFloat(document.getElementById('change').textContent);
        var taxRate = 0.03;
        var cashmod = parseFloat(cashInput.value) || 0;

        var taxAmount = totalPrice * taxRate;
        var discountAmount = (totalPrice * discount) / 100;
        var grandTotal = totalPrice - discountAmount + taxAmount;

        document.getElementById('total-price-modal').textContent = totalPrice.toFixed(2);
        document.getElementById('tax-amount-modal').textContent = taxAmount.toFixed(2);
        document.getElementById('discount-modal').textContent = discountAmount.toFixed(2);
        document.getElementById('grand-total-modal').textContent = grandTotal.toFixed(2);
        document.getElementById('cash-modal').textContent = cashmod.toFixed(2);
        document.getElementById('change-modal').textContent = changemod.toFixed(2);

        var modal = document.getElementById('receiptModal');
        modal.style.display = 'block';

        var closeBtn = document.querySelector('.close');
        closeBtn.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        window.addEventListener('click', function (event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    });

}
document.getElementById('reset-button').addEventListener('click', function () {
    location.reload();
});
