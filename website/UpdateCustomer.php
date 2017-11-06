<?php
    error_reporting(E_ALL); 
    ini_set('display_errors', 1); 
    session_start();
    include ("dbfunctions.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Update A Customer's Details</title>
    </head>
    <body>
        <h1><a href = "First.html"> Food Ordering</a></h1>
        <p>
            <a href = "AddANewRestaurant.html" >Add a New Restaurant</a>   &nbsp;&nbsp;
            <a href = "AccessVoucherCode.html" >Redeem a Voucher Code</a>   &nbsp;&nbsp;
            <a href = "OrdersbyOnePerson.html" >Find the Number of Orders Made by One Customer</a> <br/><br/>
            <a href = "GetCustomerName.php" >Find the Names and Phone Numbers of Customers who have Ordered from a Restaurant</a>   &nbsp;&nbsp;
            <a href = "AddANewTransaction.php" >Add a Transaction</a> <br/><br/>
            <a href = "RequestsforDeliveryMethod.php" >Find the Number of Requests for Each Delivery Method</a>   &nbsp;&nbsp;
            <a href = "HowManyCustomers.php" >Find the Number of Customers who have Ordered From One Restaurant</a> <br/><br/>
            <a href = "LoyaltyPointsOwed.php" >Find the Total Loyalty Points Owed to Customers</a> &nbsp;&nbsp;
        </p>
        
        <?php
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        dbConnect("$username", "$password") ;
        dbSelect("$username");

        $userID = $_POST["userID"];
        $name = $_POST["name"];
        $phoneNumber = $_POST["phoneNumber"];
        $query = "UPDATE Customer SET name = '$name', phoneNumber = '$phoneNumber' WHERE customerID = '$userID'";
        $insResult = mysql_query($query);
        if ($insResult) {
            echo"</br></br>User Information has Been Updated Successfully.";
        } else {
            echo "</br></br>Error in Request.";
        }
        ?>
    </body>
</html>