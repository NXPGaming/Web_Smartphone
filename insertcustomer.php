<?php
    $con = mysqli_connect('localhost', 'root', '','group4','3307');
    if(!$con){
        die('Could not Connect MySql Server:' .mysql_error());
    }
              
    // Taking all 5 values from the form data(input)
    $name =  $_REQUEST['name'];
    $email =  $_REQUEST['email'];
    $password =  $_REQUEST['password'];
    $phoneNumber =  $_REQUEST['phoneNumber'];
    $address =  $_REQUEST['address'];
      
    $i1 = "SELECT customerID FROM customers ORDER BY customerID DESC LIMIT 1";
    $i2 = $con->query($i1);
    $i3 = $i2->fetch_assoc();
    $i4 = (int)$i3['customerID']+1;

    $sql = "INSERT INTO customers (customerID , customerName,   email, password,    phone, address)
                                    VALUES ($i4,'$name', '$email', '$password', '$phoneNumber', '$address')";

    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
      
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
      
    // Close connection
    mysqli_close($con);
?>
<html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=login.php">
        <script type="text/javascript">
            window.location.href = "login.php"
        </script>
        <title>Page Redirection</title>
    </head>

<a href="home.php">Login</a>
</html>
