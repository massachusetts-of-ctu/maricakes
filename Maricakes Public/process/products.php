
         <?php
         if(mysqli_num_rows($all_products) == 0) { 
         ?>
         <div class="item one">
            <img src="../assets/img/logo1.jpg">
            <h2>MariCakes</h2>
	        <p>Affordable daw?&nbsp;<button class="add">Add Cakes</button></p>
        </div>
         <?php
               } else {
         ?>
            <div class="content-items" id="product-list">
         <?php
            while($row = mysqli_fetch_assoc($all_products)){
         ?>
        <div class="item one product-card">
            <img src="../assets/img/<?php echo $row["pro_img"]; ?>">
            <i>Product ID: </i><i class="product-id"><?php echo $row["pro_id"]; ?></i>
            <p class="product-name"><?php echo $row["pro_name"]; ?></p> 
            <div class="price">
	         <p class="currency">₱</p>
            <p class="product-price"><?php echo $row["pro_price"]; ?></p>
            </div>
            <?php
               if($row["availability"] == "Available") {
                  echo '<button class="add-to-cart">&nbsp;Add to cart</button>';
               } elseif($row["availability"] == "Not Available") {
                  echo '<button disabled class="add-to-cart">&nbsp;Not Available</button>';
               }
            ?>
        </div>
         <?php
            }
         ?>
         <?php
               }
         ?>

