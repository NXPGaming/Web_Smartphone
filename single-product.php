<?php
include("product.php");
$orderCode = $_GET['orderCode'];
$customerID = $_GET['customerID'];

$con = mysqli_connect('localhost', 'root', '','group4','3307');
if(!$con){
    die('Could not Connect MySql Server:' .mysql_error());
}
$a1 = "SELECT * from orders, (SELECT productID, productName, buyPrice from products) as product 
       WHERE product.productID = orders.productID and orders.orderCode = $orderCode and orders.customerID = $customerID";
$a2 = $con->query($a1);
$total = 0;
$numProduct = 0;
while($row = $a2->fetch_assoc()) {
    $total += $row['buyPrice']*$row['quantityOrdered'];
    $numProduct += 1;
}

?>
<!DOCTYPE html>
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
  </head>
  <body>
   <?php $type = 5?>
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
                        <li><a href=<?php echo "home.php?customerID={$customerID}&orderCode={$orderCode}" ?>>Home</a></li>
                        <li class="active"><a href=<?php echo "shop.php?customerID={$customerID}&orderCode={$orderCode}" ?>>Shop page</a></li>
                        <li><a href=<?php echo "cart.php?customerID={$customerID}&orderCode={$orderCode}" ?>>Cart</a></li>
                        <li><a href=<?php echo "checkout.php?customerID={$customerID}&orderCode={$orderCode}" ?>>Checkout</a></li>
                        <li><a href="contact.php">My team</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action = <?php echo "search.php?"?>>
                                <input type="text" name = "searchWord" placeholder="Search products...">
                                <input type="number" style="display: none;" name="orderCode" value=<?php echo $orderCode ?>>
                                <input type="number" style="display: none;" name="customerID" value=<?php echo $customerID ?>>
                                <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <?php include "product.php" ?>
                        <?php while($row = $result->fetch_assoc()) { ?>
                            <?php if($row['productID'] >4 and $row['productID'] <9) { ?>
                                <div class="thubmnail-recent">
                                    <a href=<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?> >
                                        <img src="<?php echo "img/p".$row['productID']."-1.png" ?>" class="recent-thumb" alt="">
                                    </a>
                                    <h2><a href=<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?> ><?php echo $row['productName'] ?></a></h2>
                                    <div class="product-sidebar-price">
                                        <ins><?php echo $row['buyPrice'] ?> ₫</ins> 
                                        <del><?php echo $row['buyPrice']+2000000 ?> ₫</del>
                                    </div>                             
                                </div>
                            <?php } ?>
                        <?php } ?>    
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <?php include "product.php" ?>
                        <?php while($row = $result->fetch_assoc() and $row['productID'] <5) { ?>
                            <ul>
                                <li><a href=<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?> ><?php echo $row['productName'] ?></a></li>  
                            </ul>
                        <?php } ?>    
                    </div>
                </div>
                <?php include 'product.php'; ?>
                <div class="col-md-8">
                    <?php 
                        $num = $_GET['myNumber'];
                        $sql1 = "SELECT * FROM products WHERE productID = $num";
                        $result1 = $con->query($sql1);
                        $row = $result1->fetch_assoc(); 
                    ?>
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="home.php">Home</a>
                            <a href=""><?php echo $row['productName'] ?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <a href="<?php echo "img/p".$row['productID']."-1.png" ?>" target="_blank">
                                            <img src= "<?php echo "img/p".$row['productID']."-1.png" ?>">
                                        </a>
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <a href="<?php echo "img/p".$row['productID']."-2.png" ?>" target="_blank">
                                            <img src="<?php echo "img/p".$row['productID']."-2.png" ?>" alt="">
                                        </a>
                                        <a href="<?php echo "img/p".$row['productID']."-3.png" ?>" target="_blank">
                                            <img src="<?php echo "img/p".$row['productID']."-3.png" ?>" alt="">
                                        </a>
                                        <a href="<?php echo "img/p".$row['productID']."-4.png" ?>" target="_blank">
                                            <img src="<?php echo "img/p".$row['productID']."-4.png" ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <!-- <h3>
                                        <p><?php var_dump($result) ?></p>
                                        <p><?php var_dump($row) ?></p>
                                    </h3>  -->
                                    <h2 class="product-name">
                                        <?php echo $row['productName'] ?>
                                    </h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo $row['buyPrice'] ?> ₫</ins> 
                                        <del><?php echo $row['buyPrice']+2000000 ?> ₫</del>
                                    </div>    
                                    
                                    <form class="cart" action = <?php echo "addToCart.php?"?>>
                                        <div class="quantity">
                                            <input name = "quantity" type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                            <input type="number" style="display: none;" name="orderCode" value=<?php echo $orderCode ?>>
                                            <input type="number" style="display: none;" name="customerID" value=<?php echo $customerID ?>>
                                            <input name = "productId" value="<?php echo $row['productID'] ?>" style="display: none;">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                       <!--  <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>. </p> -->
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p>Screen: <?php echo $row['productScreen'] ?></p>
                                                <p>Operating system: <?php echo $row['productOperatingSystem'] ?></p>
                                                <p>Rear camera: <?php echo $row['productRearCamera'] ?></p>
                                                <p>Front camera: <?php echo $row['productFrontCamera'] ?></p>
                                                <p>CPU: <?php echo $row['productCPU'] ?></p>
                                                <p>RAM: <?php echo $row['productRAM'] ?></p>
                                                <p>Memory: <?php echo $row['productMemory'] ?></p>
                                                <p>SIM: <?php echo $row['productSIM'] ?></p>
                                                <p>Battery: <?php echo $row['productBattery'] ?></p>

                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title" >Related Products</h2>
                            <div class="row" >
                                <?php include "product.php" ?>
                                <?php while($row = $result->fetch_assoc()) { ?>
                                    <?php if ($row['productID']>10 or $row['productID']<3) { ?>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="product-f-image" style="height: 200px; width: 210px;">
                                                <a href=<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>>
                                                    <img src="<?php echo "img/p".$row['productID']."-1.png" ?>" alt="" style="height: 200px;">
                                                </a>
                                            </div>
                                            <h4 style="width: 210px;text-align: center; padding-top: 10px;">
                                                <a style="width: 210px; text-align: center; font-size: 16px;" href=<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>>
                                                    <?php echo $row['productName'] ?>
                                                </a>
                                                <br/>
                                                <br/>
                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" 
                                                style="font-size: 15px;padding-left: 50px; padding-right: 50px; border-radius:20px;" 
                                                href="<?php echo "single-product.php?myNumber={$row['productID']}&customerID={$customerID}&orderCode={$orderCode}" ?>">Select</a>
                                            </h4>
                                        </div>   
                                    <?php } ?>
                                <?php } ?>                             
                            </div>
                        </div>


                    </div>                    
                </div>
            </div>
        </div>
    </div>


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
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    </div>
   
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
  </body>
</html>