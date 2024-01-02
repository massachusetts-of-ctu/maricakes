<style>
    @media print {
        body *{
            visibility: hidden;
        }
        .print-btn, .close {
            display: none;
        }
        .print-body, .print-body * {
            visibility: visible;
            right: -50px;
            top: -30px;
        }
        .sign{
        }  
    }
</style>

<div class="print-body">
<div class="modal" id="receiptModal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="header">
        <h4>Receipt of Sale</h4>
        <h1>MariCakes</h1>
        <span id="receiptDate"></span><br>
        <span id="receiptTime"></span>
        </div>
        <div class="main">
        <h2>Order Summary</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>ID</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="receipt-body">
            </tbody>
            ===========================================
        </table>
        </div>
        ===========================================
        <br>
        <div class="payment">
        <div class="order-sum">
            <div class="order">
                <label>Total Price:</label>
                <span class="sign">₱<span id="total-price-modal">0.00</span></span>
            </div>
            <div class="order">
                <label>Tax (3%):</label>
                <span class="sign">₱<span id="tax-amount-modal">0.00</span></span>
            </div>
            <div class="order">
                <label for="discount">Discount:</label>
                <span class="sign">₱<span id="discount-modal">0%</span></span>
            </div>
            <div class="order">
                <label>Grand Total:</label>
                <span class="sign">₱<span name="grand-total-modal" id="grand-total-modal">0.00</span></span>
            </div>
            <div class="order">
                <label>Cash:</label>
                <span>₱<span id="cash-modal">0.00</span></span>
            </div>
            <div class="order">
                <label>Change:</label>
                <span>₱<span id="change-modal">0.00</span></span>
            </div>
        </div>
        </div>
        ===========================================
        <div class="lower">
        <label>Sold to:</label>
        <strong><span id="sold-modal">$Customer Name</span></strong>
        </div>
        ===========================================
        <div class="lower">
        <label>Cashier:</label>
        <strong><span id="cashier"><?php echo $_SESSION['username']; ?></span></strong>
        </div>
        <div class="lower">
        <label>OR#:</label>
        <span id="OR-modal"><strong><?php echo(rand(100000, 900000)); ?></strong></span>
        </div>
        ===========================================
        <div class="footer">
        <h4>THIS IS YOUR OFFICIAL RECEIPT</h4>
        </div>
        <button class="print-btn" name="save_transactions" id="save_transactions" onclick="window.print()">Print</button>
        <p name="displayID"  id="displayID"></p>
        </div>
    </div>
</div>
</div>
<script>
    var currentDate = new Date();
    var date = '0'+ currentDate.getDate()+ '/' + (currentDate.getMonth() + 1)+ '/' + currentDate.getFullYear();
    document.getElementById('receiptDate').innerHTML = date;

    var time = currentDate.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
    document.getElementById('receiptTime').innerHTML = time;


    var shh = document.getElementById('proID').val();
    document.getElementById('displayID').textContent = shh;
</script>






<!-- Store pro_id as one string

loop to display pro_id 1 per line

display pro_id details per loop

trans_id	pro_id	qty		total		name		sub_total		tax		g_total		date		time		cashier
1		    213213	1		350		    qwerty	    350			    3		380			now()		time()	    $SESSION

-->
    