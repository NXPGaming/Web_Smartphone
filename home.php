
<?php
include("product.php");
$orderCode = 0;
$customerID = 0;
$total = 0;
if (!empty($_GET['orderCode'])) {
$orderCode = $_GET['orderCode'];
$customerID = $_GET['customerID'];

$con = mysqli_connect('localhost', 'root', '','group4','3307');
if(!$con){
    die('Could not Connect MySql Server:' .mysql_error());
}
$a1 = "SELECT * from orders, (SELECT productID, productName, buyPrice from products) as product 
       WHERE product.productID = orders.productID and orders.orderCode = $orderCode and orders.customerID = $customerID";
$a2 = $con->query($a1);
$numProduct = 0;
while($row = $a2->fetch_assoc()) {
    $total += $row['buyPrice']*$row['quantityOrdered'];
    $numProduct += 1;
}
}

?>
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Group4</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        * {box-sizing: border-box}
        .mySlides1, .mySlides2 {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
          max-width: 1140px;
          position: relative;
          margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          padding: 16px;
          margin-top: -22px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
          user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }

        /* On hover, add a grey background color */
        .prev:hover, .next:hover {
          background-color: #f1f1f1;
          color: black;
        }
    </style>

  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href=<?php echo "cart.php?customerID={$customerID}&orderCode={$orderCode}"?>><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href=<?php echo "checkout.php?customerID={$customerID}&orderCode={$orderCode}"?>><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="login.php"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">VND </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><img src="img/logo.png"></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href=<?php echo "cart.php?customerID={$customerID}&orderCode={$orderCode}"?>>Cart - <span class="cart-amunt">
                            <?php echo $total ?> ₫
                        </span> <i class="fa fa-shopping-cart"></i> <span class="product-count">
                            <?php echo $numProduct ?>
                        </span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href=<?php echo "home.php?customerID={$customerID}&orderCode={$orderCode}" ?>>Home</a></li>
                        <li><a href=<?php echo "shop.php?customerID={$customerID}&orderCode={$orderCode}" ?>>Shop page</a></li>
                        <li><a href=<?php echo "cart.php?customerID={$customerID}&orderCode={$orderCode}" ?>>Cart</a></li>
                        <li><a href=<?php echo "checkout.php?customerID={$customerID}&orderCode={$orderCode}" ?>>Checkout</a></li>
                        <li><a href="contact.php">My team</a></li>
                    </ul>
                    <div class="shopping-item" style="padding: 0px; border: 0px; margin-top: 6px;">
                            <form action = <?php echo "search.php" ?>>
                                <input type="text" name = "searchWord" placeholder="Search products...">
                                <input type="number" style="display: none;" name="orderCode" value=<?php echo $orderCode ?>>
                                <input type="number" style="display: none;" name="customerID" value=<?php echo $customerID ?>>
                                <input type="submit" value="Search">
                            </form>
                    </div>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="slideshow-container">
      <div class="mySlides1">
        <img src="img/slide1.png" style="width:100%">
      </div>

      <div class="mySlides1">
        <img src="img/slide2.png" style="width:100%">
      </div>

      <div class="mySlides1">
        <img src="img/slide3.png" style="width:100%">
      </div>
      <div class="mySlides1">
        <img src="img/slide4.png" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
      <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
    </div>

    <script>
        let slideIndex = [1,1];
        let slideId = ["mySlides1", "mySlides2"]
        showSlides(1, 0);
        showSlides(1, 1);

        function plusSlides(n, no) {
          showSlides(slideIndex[no] += n, no);
        }

        function showSlides(n, no) {
          let i;
          let x = document.getElementsByClassName(slideId[no]);
          if (n > x.length) {slideIndex[no] = 1}    
          if (n < 1) {slideIndex[no] = x.length}
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
          }
          x[slideIndex[no]-1].style.display = "block";  
        }
    </script>
    <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area" style="padding: 0px;">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <h2 class="section-title">Latest Products</h2>
                <?php include "product.php" ?>
                <?php while($row = $result->fetch_assoc()) { ?>
                    <?php if($row['productID']>4 and $row['productID'] <9) { ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-shop-product" style="text-align: center;">
                                <div class="product-upper">
                                    <a href="<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>" >
                                        <img src="<?php echo "img/p".$row['productID']."-1.png" ?>" alt="">
                                    </a>
                                </div>
                                <h2>
                                    <a href="<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>" ><?php echo $row['productName'] ?></a>
                                </h2>
                                <div class="product-carousel-price">
                                    <ins><?php echo $row['buyPrice'] ?> ₫</ins> 
                                    <del><?php echo $row['buyPrice']+2000000 ?> ₫</del>
                                </div>  
                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" style="padding-left: 50px; padding-right: 50px; border-radius:20px;"
                                    href="<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>">Select</a>
                                </div>                       
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>               
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="container">
            <img src="img/brand10.png" alt="" style="width: 150px">
            <img src="img/brand11.png" alt="" style="width: 150px">
            <img src="img/brand12.png" alt="" style="width: 150px">
            <img src="img/brand13.png" alt="" style="width: 150px">
            <img src="img/brand14.png" alt="" style="width: 150px">  
            <img src="img/brand15.png" alt="" style="width: 150px">      
            <img src="img/brand16.png" alt="" style="width: 150px">     
          </div>
    </div> 
    <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a class="wid-view-more" href=<?php echo "shop.php?customerID={$customerID}&orderCode={$orderCode}" ?>>View All</a>
                        <?php include "product.php" ?>
                        <?php while($row = $result->fetch_assoc()) { ?>
                            <?php if($row['productID']==7 or $row['productID']==3 or $row['productID']==2) { ?>
                                <div class="single-wid-product">
                                    <a href="<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>" >
                                        <img src="<?php echo "img/p".$row['productID']."-1.png" ?>" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>" >
                                        <?php echo $row['productName'] ?>
                                    </a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins><?php echo $row['buyPrice'] ?> ₫</ins> <del><?php echo $row['buyPrice']+2000000 ?> ₫</del>
                                    </div>                            
                                </div>
                            <?php } ?>  
                        <?php } ?>   
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a class="wid-view-more" href=<?php echo "shop.php?customerID={$customerID}&orderCode={$orderCode}" ?>>View All</a>
                        
                        <?php include "product.php" ?>
                        <?php while($row = $result->fetch_assoc()) { ?>
                            <?php if($row['productID']>10 or $row['productID'] <2) { ?>
                                <div class="single-wid-product">
                                    <a href="<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>" >
                                        <img src="<?php echo "img/p".$row['productID']."-1.png" ?>" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>" >
                                        <?php echo $row['productName'] ?>     
                                    </a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins><?php echo $row['buyPrice'] ?> ₫</ins> <del><?php echo $row['buyPrice']+2000000 ?> ₫</del>
                                    </div>                            
                                </div>
                            <?php } ?>  
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a class="wid-view-more" href=<?php echo "shop.php?customerID={$customerID}&orderCode={$orderCode}" ?>>View All</a>
                        <?php include "product.php" ?>
                        <?php while($row = $result->fetch_assoc()) { ?>
                            <?php if($row['productID']>3 and $row['productID'] <7) { ?>
                                <div class="single-wid-product">
                                    <a href="<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>" >
                                        <img src="<?php echo "img/p".$row['productID']."-1.png" ?>" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>" ><?php echo $row['productName'] ?></a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins><?php echo $row['buyPrice'] ?> ₫</ins> <del><?php echo $row['buyPrice']+2000000 ?> ₫</del>
                                    </div>                            
                                </div>
                            <?php } ?>  
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Group<span>4</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="contact.php">Vendor contact</a></li>
                            <li><a href="">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile Phone</a></li>
                            <li><a href="#">Smart Phone</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>