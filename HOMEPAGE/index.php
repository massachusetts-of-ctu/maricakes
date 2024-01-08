<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="homepage.css">
  <link rel="icon" type="image/x-icon" href="../HOMEPAGE/images/logo.png">
</head>

<body>
  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">Maricakes</a></div>
      <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#Menu">Our Menu</a></li>
        <li><a href="#About">About Us</a></li>
	    <!-- <input type="text" placeholder="Search...">
            <i class="fa fa-search"></i> -->
        <li><a href="#" class="login">Order Now</a></li>
      </ul>
    </div>
 </nav>

 <section id="Home">
    <div class="svg">
      <svg xmlns="http://www.w3.org/2000/svg" width="1061" height="788" viewBox="0 0 1061 788" fill="none">
         <path d="M829.572 516.944C526.745 621.632 589.127 838.868 183.735 776.173C-174.819 674.292 69.0664 401.216 270.456 346.067C621.384 274.002 477.851 36.2666  675.631 7.90998C1160.42 -61.5966 1158.61 403.195 829.572 516.944Z" fill="#E2D0E1" fill-opacity="0.709804"/>
      </svg>
    </div> 
     <div class="div-bg-cake">
       <!-- <img src="images/cake2.png" class="bg-cake">  -->
       <img src="../HOMEPAGE/images/birth-wed_cake/mama cake.jpg" class="mama-cake-bg" id="mama">
       <img src="../HOMEPAGE/images/bento_cake/animal_themed_bento_cake.jpg" class="animal-cake-bg" id="animal">
   </div>
    <div class="desc-text">
       <h1>MOIST CHOCOLATE CAKE<br><br></h1>
       <p>Moist chocolate cake with premium ingredients combined with a sprinkling toppings into a complete mix to accompany your day! </p>
       <div class="div-order-btn"><a href="#" class="btn-order">Order now</a></div>
    </div>   
  </section>

  <section id="Menu">
     <div class="card-container">
	<div class="title-description"><h1>MARICAKES MENU<h1><p>"Mas Masarap ang Chismis pag may MARICAKES"</p></div>
        <div class="type-menu">
         <div class="card-type wedding-card">
            <!-- <div class="cake-title">Wedding Cake</div> -->
	         <div class="card-cake-type cake-title wed"><img src="images/birth-wed_cake/birth6.png"><span>Wedding Cake</span></div>
	      </div>
	   <div class="card-type birthday-card">
	     <!-- <div class="cake-title">Birthday Cake</div> -->
             <div class="card-cake-type cake-title birth"><img src="images/birth-wed_cake/birth13.png"><span>Birthday Cake</span></div>
	  </div>
	   <div class="card-type cake-title bentocake-card">
	     <!-- <div class="cake-title">Bento Cake</div> -->
	     <div class="card-cake-type bento"><img src="images/bento_cake/bento_cake_2.png"><span>Bento Cake</span></div>
           </div>
	   <div class="card-type cake-title cupcakes-card">
	      <!-- <div class="cake-title">Cupcake</div> -->
              <div class="card-cake-type cake-title cupcake"><img src="images/cupcake/Cupcake-nobg.png"><span>Cupcake</span></div>
	   </div>
        </div>
 	 <div class="view-all"><a href="#Menu" class="btn-view" id="viewAllButton">View all</a></div>

	<div class="type-menu-cake" id="viewAllCakes">
           <div class="div-birth-wed-cake">
	      <div class="cake-type">Birthday & Wedding Cake</div><hr>
              <div class="container">
                 <div class="slider-wrapper">
                    <button id="prev-slide-1" class="slide-button material-symbols-rounded"> chevron_left</button>
                    <ul class="image-list" id="image-list-1">
                      <div class="wedd_birth-card"><img class="image-item" src="images/birth-wed_cake/birth1.png"></div>
        	      <div class="wedd_birth-card"><img class="image-item" src="images/birth-wed_cake/birth2.png"></div>
         	      <div class="wedd_birth-card"><img class="image-item" src="images/birth-wed_cake/birth3.png"></div>
       		      <div class="wedd_birth-card"><img class="image-item" src="images/birth-wed_cake/birth4.png"></div>
         	      <div class="wedd_birth-card"><img class="image-item" src="images/birth-wed_cake/birth5.png"></div>
          	      <div class="wedd_birth-card"><img class="image-item" src="images/birth-wed_cake/birth6.png"></div>
        	      <div class="wedd_birth-card"><img class="image-item" src="images/birth-wed_cake/birth7.png"></div>
         	      <div class="wedd_birth-card"><img class="image-item" src="images/birth-wed_cake/birth8.png"></div>
       		      <div class="wedd_birth-card"><img class="image-item" src="images/birth-wed_cake/birth9.png"></div>
                      <div class="wedd_birth-card"><img class="image-item" src="images/birth-wed_cake/birth10.png"></div>
                   </ul>
                   <button id="next-slide-1" class="slide-button material-symbols-rounded"> chevron_right</button>
                   <div class="slider-scrollbar" id="slider-scrollbar-1">
                      <div class="scrollbar-thumb"></div>
                   </div>
               </div>
	    </div>
         </div>
         
	 <div class="div-bento-cake">
            <div class="cake-type">Bento Cake</div><hr>
               <div class="container">
               <div class="slider-wrapper">
                  <button id="prev-slide-2" class="slide-button material-symbols-rounded"> chevron_left</button>
                  <ul class="image-list" id="image-list-2">
                    <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="images/bento_cake/animal_themed_bento_cake.jpg"></div>
 		       <div class="cake-description">Dog Themed Bento Cake</div>
                    </div>     
		    <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="images/bento_cake/anime_themed_bento_cake.jpg"></div>
 		       <div class="cake-description">Anime Themed Bento Cake</div>
                    </div>   
              	     <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="images/bento_cake/Butterfly Themed Bento Cake - P280.00.jpg"></div>
 		       <div class="cake-description">Butterfly Themed Bento Cake</div>
                    </div>   
         	    <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="images/bento_cake/butterfly(2).jpg"></div>
 		       <div class="cake-description">Butterfly Themed Bento Cake</div>
                    </div>   
         	    <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="images/bento_cake/Cherry Themed Bento Cake - P280.00.jpg"></div>
 		       <div class="cake-description">Cherry Themed Bento Cake</div>
                    </div>   
         	     <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="images/bento_cake/FB_IMG_1702071152346.jpg"></div>
 		       <div class="cake-description">Birthday Bento Cake</div>
                    </div>   
         	    <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="images/bento_cake/FB_IMG_1702071585348.jpg"></div>
 		       <div class="cake-description">Birthday Themed Bento Cake</div>
                    </div>     
		    <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="images/bento_cake/Ornament Themed Bento Cake - P250.00.jpg"></div>
 		       <div class="cake-description">Ornament Themed Bento Cake</div>
                    </div>   
              	     <!-- <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="cotton.jpg"></div>
 		       <div class="cake-description">Dog Themed Bento Cake</div>
                    </div>   
         	    <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="cotton.jpg"></div>
 		       <div class="cake-description">Dog Themed Bento Cake</div>
                    </div>   
         	    <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="cotton.jpg"></div>
 		       <div class="cake-description">Dog Themed Bento Cake</div>
                    </div>   
         	     <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="cotton.jpg"></div>
 		       <div class="cake-description">Dog Themed Bento Cake</div>
                    </div>   
                    <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="cotton.jpg"></div>
 		       <div class="cake-description">Dog Themed Bento Cake</div>
                    </div>   
         	    <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="cotton.jpg"></div>
 		       <div class="cake-description">Dog Themed Bento Cake</div>
                    </div>   
         	     <div class="bento-card">
		       <div class="bento-itm"><img class="bento-img" src="cotton.jpg"></div>
 		       <div class="cake-description">Dog Themed Bento Cake</div>
                    </div>    -->
        	 </ul>
                 <button id="next-slide-2" class="slide-button material-symbols-rounded"> chevron_right</button>
                 <div class="slider-scrollbar" id="slider-scrollbar-2">
                    <div class="scrollbar-thumb"></div>
       		 </div>
             </div>
             </div>
            </div>
           <div class="div-cup-cake">
	      <div class="cake-type">Cupcakes and Muffins</div><hr>
              <div class="container">
                    <ul class="image-list-cupcake">
                      <div class="cup-card"><img class="cup-img" src="images/cupcake/cupcake1.jpg"></div>
        	      <div class="cup-card"><img class="cup-img" src="images/cupcake/cupcake2.jpg"></div>
         	      <div class="cup-card"><img class="cup-img" src="images/cupcake/cupcake3.jpg"></div>
       		      <div class="cup-card"><img class="cup-img" src="images/cupcake/cupcake4.jpg"></div>
         	      <div class="cup-card"><img class="cup-img" src="images/cupcake/cupcake5.jpeg"></div>
          	      <div class="cup-card"><img class="cup-img" src="images/cupcake/cupcake6.jpeg"></div>
                   </ul>
               </div>
	    </div>
         </div>
        </div>
  </section>

  <section id="About">
    <div class="about-container">
       <div class="about-content">
          <div class="backg-img-about">
             <img src="images/birth-wed_cake/about-back.jpg">
          <div class="bottom-style"></div>
       </div>
          
          <div class="about-description"> 
             <h1>About US</h1>
	     <h3>Our Story: A Sweet Journey</h3><br><p>A delightful tale of turning chismes into cherished confections. What started as a humble kitchen experiment soon blossomed into a full-fledged bakedshop, driven by the desire to spread joy through irresistible treats.</p>
	     <div class="btn-learn-more">
                <a href="about.php">More About Us</a>
	     </div>
          </div>
     </div>
  </section>

  <footer class="footer">
     <div class="footer-content">
       <!-- <div class="footer-left"></div> -->
       <div class="footer-right">
         <div class="footer-fafa">
	   <a href="https://www.facebook.com/profile.php?id=61554900864672&sk=friends_likes"><i class="fa fa-facebook-f"></i></a>
	   <a href="mailto: maricakes011@gmail.com?"><i class="fa fa-envelope"></i></a>
	   <a href="https://github.com/massachusetts-of-ctu/maricakes/tree/main"><i class="fa fa-github"></i></a>
         </div>
	<p class="footer-links">
	 <a class="link-1" href="#">Home</a>
	 <a href="#Menu">Our Menu</a>
  	 <a href="about.html#developers">Team</a>
	 <a href="about.html">About</a>
	</p>
   <p class="footer-links">
   <a>09917231931</a>
   <a></a>
   </p>
       </div>
      </div>
    
   <br><br><hr><br> <p>MariCakes &copy; 2024</p>
  </footer>

  <div class="button">
    <a href="#Home"><i class="fas fa-arrow-up"></i></a>
  </div>

<script src="../HOMEPAGE/js/lock_scroll.js"></script>
<script src="../HOMEPAGE/js/image_slider.js"></script>
<script src="../HOMEPAGE/js/view_all.js"></script>
<script src="../HOMEPAGE/js/home_transistion.js"></script>


</body>
</html>
