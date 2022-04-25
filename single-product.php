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
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="cart.php"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.php"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="login.php"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
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
                        <h1><a href="./"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="shop.php">Shop page</a></li>
                        <li class="active"><a href="single-product.php">Single product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Others</a></li>
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
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                            <img src="img/p1-1.png" class="recent-thumb" alt="">
                            <h2><a href="single-product1.php">Realme GT Neo 2</a></h2>
                            <div class="product-sidebar-price">
                                <ins>8.550.000 ₫</ins> <del>9.250.000 ₫</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/p2-1.png" class="recent-thumb" alt="">
                            <h2><a href="single-product2.php">IPhone 13 Pro Max</a></h2>
                            <div class="product-sidebar-price">
                                <ins>28.950.000 ₫</ins> <del>30.450.000 ₫</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/p3-1.png" class="recent-thumb" alt="">
                            <h2><a href="single-product3.php">Samsung Galaxy Note 10</a></h2>
                            <div class="product-sidebar-price">
                                <ins>8.850.000 ₫</ins> <del>10.450.000 ₫</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/p4-1.png" class="recent-thumb" alt="">
                            <h2><a href="single-product4.php">Xiaomi Mi 11</a></h2>
                            <div class="product-sidebar-price">
                                <ins>12.250.000 ₫</ins> <del>12.950.000 ₫</del>
                            </div>                             
                        </div>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="single-product1.php">Realme GT Neo 2</a></li>
                            <li><a href="single-product2.php">IPhone 13 Pro Max</a></li>
                            <li><a href="single-product3.php">Samsung Galaxy Note 10</a></li>
                            <li><a href="single-product4.php">Xiaomi Mi 11</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Category Name</a>
                            <a href=""><?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['productName'] ?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <a href="<?php include 'product.php'; $row = $result->fetch_assoc(); echo "img/p".$row['productID']."-1.png" ?>" target="_blank">
                                            <img src= "<?php include 'product.php'; $row = $result->fetch_assoc(); echo "img/p".$row['productID']."-1.png" ?>">
                                        </a>
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <a href="<?php include 'product.php'; $row = $result->fetch_assoc(); echo "img/p".$row['productID']."-2.png" ?>" target="_blank">
                                            <img src="<?php include 'product.php'; $row = $result->fetch_assoc(); echo "img/p".$row['productID']."-2.png" ?>" alt="">
                                        </a>
                                        <a href="<?php include 'product.php'; $row = $result->fetch_assoc(); echo "img/p".$row['productID']."-3.png" ?>" target="_blank">
                                            <img src="<?php include 'product.php'; $row = $result->fetch_assoc(); echo "img/p".$row['productID']."-3.png" ?>" alt="">
                                        </a>
                                        <a href="<?php include 'product.php'; $row = $result->fetch_assoc(); echo "img/p".$row['productID']."-4.png" ?>" target="_blank">
                                            <img src="<?php include 'product.php'; $row = $result->fetch_assoc(); echo "img/p".$row['productID']."-4.png" ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <!-- <h3>
                                        <p><?php include 'product.php'; $row = $result->fetch_assoc();var_dump($result) ?></p>
                                        <p><?php include 'product.php';$row = $result->fetch_assoc();var_dump($row) ?></p>
                                    </h3>  -->
                                    <h2 class="product-name">
                                        <?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['productName'] ?>
                                    </h2>
                                    <div class="product-inner-price">
                                        <ins><?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['buyPrice'] ?> ₫</ins> 
                                        <del><?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['buyPrice']+2000000 ?> ₫</del>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
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
                                                <p>Screen: <?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['productScreen'] ?></p>
                                                <p>Operating system: <?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['productOperatingSystem'] ?></p>
                                                <p>Rear camera: <?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['productRearCamera'] ?></p>
                                                <p>Front camera: <?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['productFrontCamera'] ?></p>
                                                <p>CPU: <?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['productCPU'] ?></p>
                                                <p>RAM: <?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['productRAM'] ?></p>
                                                <p>Memory: <?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['productMemory'] ?></p>
                                                <p>SIM: <?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['productSIM'] ?></p>
                                                <p>Battery: <?php include 'product.php'; $row = $result->fetch_assoc(); echo $row['productBattery'] ?></p>

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
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/p1-1.png" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="single-product1.php">Realme GT Neo 2</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>8.550.000 ₫</ins> <del>9.250.000 ₫</del>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/p2-1.png" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="single-product2.php">IPhone 13 Pro Max</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>28.950.000 ₫</ins> <del>30.450.000 ₫</del>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/p3-1.png" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="single-product3.php"><?php echo htmlspecialchars($row['productName']) ?>  </a></h2>
                                    <div class="product-carousel-price">
                                        <ins>8.850.000 ₫</ins> <del>10.450.000 ₫</del>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/p4-1.png" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="single-product4.php">Xiaomi Mi 11</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>12.250.000 ₫</ins> <del>12.950.000 ₫</del>
                                    </div> 
                                </div>                                 
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
                            <li><a href="">My account</a></li>
                            <li><a href="">Order history</a></li>
                            <li><a href="">Wishlist</a></li>
                            <li><a href="">Vendor contact</a></li>
                            <li><a href="">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="">Mobile Phone</a></li>
                            <li><a href="">Home accesseries</a></li>
                            <li><a href="">LED TV</a></li>
                            <li><a href="">Computer</a></li>
                            <li><a href="">Gadets</a></li>
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