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
            $email =  $_REQUEST['email1'];
            $password =  $_REQUEST['password1'];

            if($email == "") {
                echo "Email is required.<br>";
            }
            if($password == "") {
                echo "Password is required.<br>";
            }

            if($email != "" and $password != "") {
                $check = 0;

                $q1 = "SELECT customerID, email, password FROM customers";
                $q2 = $con->query($q1);
                while($q3 = $q2->fetch_assoc()) {
                    if($q3['email'] == $email) {
                        if($q3['password'] == $password) {
                            $i1 = "SELECT orderCode FROM orders ORDER BY orderCode DESC LIMIT 1";
                            $i2 = $con->query($i1);
                            $i3 = $i2->fetch_assoc();
                            $i4 = (int)$i3['orderCode']+1;
                            ?> <meta http-equiv="refresh" content="0;url=<?php echo "home.php?customerID={$q3['customerID']}&orderCode={$i4}" ?>"> <?php
                        }else{
                            echo "Wrong password.";
                            ?> <meta http-equiv="refresh" content="0.5;url=login.php"> <?php
                        }
                        $check = 1;
                    }
                }

                if ($check == 0) {
                    echo "Email does not exist.";
                    ?> <meta http-equiv="refresh" content="0.5;url=login.php"> <?php
                }
            }else{
                ?> <meta http-equiv="refresh" content="1;url=login.php"> <?php  
            }
            // Close connection
            mysqli_close($con);
        ?>

    </head>
</html>
