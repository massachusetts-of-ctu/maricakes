<?php include_once "header.php"; ?>
<body>
   <div class="navbar">
       <div class="navbar-left">
             <img src="../assets/img/logo.png">
          <h2>MariCakes</h2>
           <div class="search-bar">
	    <input type="text" placeholder="Search...">
            <i class="fa fa-search"></i>
	  </div>
       </div>
       <div class="navbar-right">
 	   <div class="message-icon">
	    <i class="fa fa-envelope-o"></i>
          </div>
       	  <div class="notification-icon">
	    <i class="fa fa-bell-o"></i>
          </div>
         
          </div> 
       </div>
   </div>

<div class="container">

    <div class="content-items">
        <div class="item one">
            <img src="../assets/img/1.jpeg">
            <h4> Moist Bento Cake</h4>
	        <p>P250.00 <button class="add">Add</button></p>
            
        </div>
        <div class="item two">
	        <img src="../assets/img/2.jpeg">
	        <h4>Moist Cake w/ Design</h4>
	        <p>P250.00 <button class="add">Add</button></p>
            
        </div>
        <div class="item three">
   	        <img src="../assets/img/3.jpeg">
            <h4> Minimal Bento Cake</h4> 
	        <p>P250.00 <button class="add">Add</button></p>
            
        </div>
        <div class="item four">
	        <img src="../assets/img/4.jpeg">
            <h4> pabili ng bento bento</h4> 
	        <p>P250.00 <button class="add">Add</button></p>
            
        </div>
            <div class="item five">
	        <img src="../assets/img/9.jpeg">
	        <h4> Moist Chocolate Bento Cake</h4>
 	        <p>P250.00 <button class="add">Add</button></p>
            
        </div>
         <div class="item six">
	        <img src="../assets/img/6.jpeg">
            <h4> Minimal Bento Cake</h4>
  	        <p>P250.00 <button class="add">Add</button></p>
            
	    </div>
	    <div class="item seven">
 	        <img src="../assets/img/7.jpeg">
            <h4> Plain Bento Cake</h4>
 	        <p>P250.00 <button class="add">Add</button></p>
            
	    </div>
 	    <div class="item eight">
	        <img src="../assets/img/8.jpeg">
            <h4>bento bento</h4>
	        <p>P250.00 <button class="add">Add</button></p>
            
	    </div>
    </div>


    <div class="content-sidebar">
         <div class="back-img">
            <img src="../assets/img/mariCakes.png">
            <table>
               <thead>
                  <tr>
                     <th>Items</th>
                     <th class="tr-price">Price</th>
                     <th class="tr-qty">Qty</th>
                     <th class="tr-total">Total</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>This is a sample</td>
                     <td>P 250.00</td>
                     <td><input type="number" class="qty-input" min="1" max="50"></input></td>
                     <td>P 250.00</td>
                     <td><span class="fa fa-trash-o" style="font-size:25px"></span></td>
                  </tr>
                  <tr>
                     <td>This is a sample</td>
                     <td>P 250.00</td>
                     <td><input type="number" class="qty-input" min="1" max="50"></input></td>
                     <td>P 250.00</td>
                     <td><span class="fa fa-trash-o" style="font-size:25px"></span></td>
                  </tr>
                  <tr>
                     <td>This is a sample</td>
                     <td>P 250.00</td>
                     <td><input type="number" class="qty-input" min="1" max="50"></input></td>
                     <td>P 250.00</td>
                     <td><span class="fa fa-trash-o" style="font-size:25px"></span></td>
                  </tr>
                  <tr>
                     <td>This is a sample</td>
                     <td>P 250.00</td>
                     <td><input type="number" class="qty-input" min="1" max="50"></input></td>
                     <td>P 250.00</td>
                     <td><span class="fa fa-trash-o" style="font-size:25px"></span></td>
                  </tr>
                  <tr>
                     <td>This is a sample</td>
                     <td>P 250.00</td>
                     <td><input type="number" class="qty-input" min="1" max="50"></input></td>
                     <td>P 250.00</td>
                     <td><span class="fa fa-trash-o" style="font-size:25px"></span></td>
                  </tr>
                  <tr>
                     <td>This is a sample</td>
                     <td>P 250.00</td>
                     <td><input type="number" class="qty-input" min="1" max="50"></input></td>
                     <td>P 250.00</td>
                     <td><span class="fa fa-trash-o" style="font-size:25px"></span></td>
                  </tr>
                  <tr>
                     <td>This is a sample</td>
                     <td>P 250.00</td>
                     <td><input type="number" class="qty-input" min="1" max="50"></input></td>
                     <td>P 250.00</td>
                     <td><span class="fa fa-trash-o" style="font-size:25px"></span></td>
                  </tr>
                  <tr>
                     <td>This is a sample</td>
                     <td>P 250.00</td>
                     <td><input type="number" class="qty-input" min="1" max="50"></input></td>
                     <td>P 250.00</td>
                     <td><span class="fa fa-trash-o" style="font-size:25px"></span></td>
                  </tr>
               </tbody>
            </table>
         </div>
         
         
         <hr>
         <div class="bill">
            DISCOUNT <input type="number" class="discount">%</input>
         </div>
         <div class="bill">
            TOTAL <span class="total">Php</span><input readonly></input>
         </div>
         <div class="bill">
            TAX <span class="tax">Php</span><input type="number" readonly></input>
         </div>
         <div class="bill">
            GRAND TOTAL <span class="Gtotal">Php</span><input type="number"readonly></input>
         </div>
         <div class="bill">
            PAID AMOUNT <span class="paid">Php</span><input type="number"></input>
         </div>
         <!-- <div class="bill">
            CHANGE <span class="change">Php</span><input></input>
         </div> -->
         <div class="below-button">
            <button class="confirm">Confirm</button>
            <button class="reset">Reset</button>
         </div>
    </div>
    
</div>

</body>
</html>