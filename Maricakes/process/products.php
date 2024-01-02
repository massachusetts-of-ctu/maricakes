
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
            <h4><?php echo $row["pro_name"]; ?></h4>
            <b><?php echo $row["pro_id"]; ?></b>
	         <p><?php echo $row["pro_price"]; ?></p>
            <?php
               if($row["availability"] == "Available") {
                  echo '<button class="fa fa-cart-plus add-to-cart">&nbsp;Add to cart</button>';
               } elseif($row["availability"] == "Not Available") {
                  echo '<button disabled class="fa fa-times add-to-cart">&nbsp;Not Available</button>';
               }
            ?>
        </div>
         <?php
            }
         ?>
         <?php
               }
         ?>

