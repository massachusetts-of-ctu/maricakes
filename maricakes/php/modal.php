<div class="modal" id="receiptModal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Receipt - <span id="receiptDate"></span></h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody id="receipt-body">
            </tbody>
            ==========================================
        </table>
        ==========================================
        <br>
        <div class="ord-sum">
        <h2>Order Summary</h2>
        <label>Total Price:</label>
            <span class="sign1">₱<span id="total-price-modal">0.00</span></span><br>
         <label>Tax (3%):</label>
            <span class="sign2">₱<span id="tax-amount-modal">0.00</span></span><br>
         <label for="discount">Discount:</label>
         <span class="sign4">₱<span id="discount-modal">0%</span></span><br>
         <label>Grand Total:</label>
            <span class="sign3">₱<span id="grand-total-modal">0.00</span></span><br>
         <label>Cash:</label>
            <span>₱<span id="cash-modal">0.00</span></span><br>
            <label>Change:</label>
            <span>₱<span id="change-modal">0.00</span></span>
    </div>
    ==========================================
    <button id="print-button">Print</button>
</div>
</div>