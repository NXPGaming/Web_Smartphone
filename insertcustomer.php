<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <!-- <meta http-equiv="refresh" content="1;url=login.php"> -->
        <!-- <script type="text/javascript">
            window.location.href = "login.php"
        </script> -->
        <title>Page Redirection</title>

        <?php
            $con = mysqli_connect('localhost', 'root', '','group4','3307');
            if(!$con){
                die('Could not Connect MySql Server:' .mysql_error());
            }
                      
            // Taking all 5 values from the form data(input)
            $name =  $_REQUEST['name'];
            $email =  $_REQUEST['email'];
            $password =  $_REQUEST['password'];
            $rewritePassword =  $_REQUEST['rewritePassword'];
            $phoneNumber =  $_REQUEST['phoneNumber'];
            $address =  $_REQUEST['address'];

            if($name == "") {
                echo "Name is required.<br>";
            }
            if($email == "") {
                echo "Email is required.<br>";
            }
            if($password == "") {
                echo "Password is required.<br>";
            }
            if($rewritePassword == "") {
                echo "You need to rewrite your password.<br>";
            }
            if($phoneNumber == "") {
                echo "Phone number is required.<br>";
            }
            if($address == "") {
                echo "Address is required.<br>";
            }
            if($password != $rewritePassword) {
                echo "You have re-entered the wrong password.<br>";
            }
            if($name != "" and $email != "" and $password != "" and $phoneNumber != "" and $address != "" and $rewritePassword != "" and $password == $rewritePassword) {
                $check = 1;

                $q1 = "SELECT email FROM customers";
                $q2 = $con->query($q1);
                while($q3 = $q2->fetch_assoc()) {
                    if($q3['email'] == $email) {
                        echo "Email already exists.<br>";
                        $check = 0;
                        ?> <meta http-equiv="refresh" content="1;url=login.php"> <?php
                    }
                }
                if ($check == 1) {
                    $i1 = "SELECT customerID FROM customers ORDER BY customerID DESC LIMIT 1";
                    $i2 = $con->query($i1);
                    $i3 = $i2->fetch_assoc();
                    $i4 = (int)$i3['customerID']+1;

                    $sql = "INSERT INTO customers (customerID , customerName,   email, password,    phone, address)
                            VALUES ($i4,'$name', '$email', '$password', '$phoneNumber', '$address')";

                    if ($con->query($sql) === TRUE) { 
                        echo "New record created successfully";
                        ?> <meta http-equiv="refresh" content="1;url=login.php"> <?php  
                    } else {
                      echo "Error: " . $sql . "<br>" . $con->error;
                    }
                }
            }else{
                ?> <meta http-equiv="refresh" content="2;url=login.php"> <?php  
            }
            // Close connection
            mysqli_close($con);
        ?>

    </head>
</html>
