<?php
    $con = mysqli_connect('localhost', 'root', '','group4','3307');
    if(!$con){
        die('Could not Connect MySql Server:' .mysql_error());
    }
      
    $orderCode = 1;
    $customerId = 1;
    $quantity =  $_REQUEST['quantity'];
    $productId =  $_REQUEST['productId'];


    $a1 = "SELECT orderCode, customerID,  productID, quantityOrdered FROM orders";
    $a2 = $con->query($a1);
    $check = 0;
    while($a3 = $a2->fetch_assoc()) {
        if($a3['orderCode'] == $orderCode and $a3['customerID'] == $customerId and $a3['productID'] == $productId) {
            $check = 1;
            $quantity1 = $a3['quantityOrdered']; 
            $q1 = " UPDATE orders
                    SET orderDate = NOW(), quantityOrdered = $quantity + $quantity1
                    WHERE orderCode = $orderCode and customerId = $customerId and productId = $productId";
            $q2 = $con->query($q1);
            ?> <meta http-equiv="refresh" content="0;url=cart.php"> <?php
        }
    }

    if($check == 0) {
        $q1 = "INSERT INTO orders (orderCode , customerID,  productID, orderDate, quantityOrdered)
               VALUES ('$orderCode' , '$customerId' ,'$productId', NOW(), '$quantity')";
        $q2 = $con->query($q1);
        ?> <meta http-equiv="refresh" content="0;url=cart.php"> <?php
    }


    mysqli_close($con);
?>


