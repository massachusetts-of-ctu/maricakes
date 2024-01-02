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
            left: 0px;
            top: -12px;
            border: none;
            width: 100%;
            /* margin: 0; */
            padding: 1px;
            padding-top: 5px;

        }
        .logo {
            right: 12px;
            margin-right: 5px;
            width: 10%;
            
        }
        h2 {
            margin-bottom: 8px;
            margin-right: 5px;
        }
        * {
            font-size: 6pt;
            width: 250px;
            padding: 0;
            margin: 0;
        }

        .order .sign {
            text-align: right;
        }
        .order {
            margin: 0;
        }
        .buttons {
            visibility: hidden;
        }

    }
    .dline {
        border-top: 1px dotted #353434;
        display: block;
    }
    .buttons {
        /* z-index: 1;
        position: relative;
        background-color: #fefefe;
        left: 97px;
        margin: auto;
        padding: 20px;
        border: 1px solid #c05dc0;
        top: 19px;
        width: 18%;
        scale: 96%;
        height: 530px; */
        
        /* z-index: 1;
        position: relative;
        background-color: #fefefe;
        left: 97px;
        margin: auto;
        padding: 20px;
        border: 1px solid #c05dc0;
        bottom: 541px;
        width: 100%;
        scale: 96%;
        height: 530px;
        display: inherit; */
        padding: 10px;
    }

    /* @media print {
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
        @page {
            size: legal;
        }
    } */
</style>

<div class="print-body">
<div class="modal" id="receiptModal">
    <div class="modal-content-print">
        <div class="header">
        
        <h2> <img src="../assets/img/logo.png" style="width: 10%; position: relative; top: 7px; right: 10px;" class="logo">MariCakes</h2>
        <h4>Sabang, Danao City, Cebu</h4>
        </div>
        <div class="main">
        <table>
            <thead style="background-color: transparent;">
                <tr>
                    <th style="border: 1px dotted #353434; border-radius: 0px; border-left: none; border-right: none;">Product</th> 
                    <th style="border: 1px dotted #353434; border-radius: 0px; border-left: none; border-right: none;">ID</th>
                    <th style="border: 1px dotted #353434; border-radius: 0px; border-left: none; border-right: none;">Price</th>
                    <th style="border: 1px dotted #353434; border-radius: 0px; border-left: none; border-right: none;">Qty</th>
                    <th style="border: 1px dotted #353434; border-radius: 0px; border-left: none; border-right: none;">Total</th>
                </tr>
            </thead>
            <tbody id="receipt-body">
            </tbody>
            <!-- ----------------------------------- -->
        </table>
        </div>
        <!-- ----------------------------------- -->
        <br>
        <div class="payment">
        <div class="order-sum">
            <div class="order" style="font-weight: 800;">
                <label>Total Price:</label>
                <span class="sign">₱<span id="total-price-modal">0.00</span></span>
            </div>
            <div class="order">
                <label>VAT:</label>
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
                <span class="sign">₱<span id="cash-modal">0.00</span></span>
            </div>
            <div class="order">
                <label>Change:</label>
                <span class="sign">₱<span id="change-modal">0.00</span></span>
            </div>
        </div>
        </div>
        <span class="dline"></span>
        <!-- ----------------------------------- -->
        <div class="lower">
        <label>Sold to:</label>
        <strong><span id="sold-modal">$Customer Name</span></strong>
        </div>
        <span class="dline"></span>
        <!-- ----------------------------------- -->
        <div class="lower">
        <label>Cashier:</label>
        <strong><span id="cashier"><?php echo $_SESSION['username']; ?></span></strong>
        </div>
        <div class="lower">
        <label>OR#:</label>
        <span id="OR-modal"><strong><?php echo(rand(100000, 900000)); ?></strong></span>
        </div>
        <div>
            DATE: <span id="receiptDate"></span>&nbsp &nbspTIME: <span id="receiptTime"></span>
        </div>
        
        <span class="dline"></span>
        <!-- ----------------------------------- -->
        <div class="footer">
        <h4>Thank You For Choosing Maricakes</h4>
        </div>
        <p name="displayID"  id="displayID"></p>
        <div class="buttons">
            <button style="margin-bottom: 10px;" class="print-btn" name="save_transactions" id="save_transactions" onclick="window.print()"><i class="fa fa-print"></i>Print</button>
            <span class="close close-print">Close</span>
        </div>
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
        