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
        <title>Add a Restaurant</title> 
    </head>
    
    <body>
        <h1><a href = "First.html"> Food Ordering</a></h1>
        <p>
            <a href = "OrdersbyOnePerson.html" >Find the Number of Orders Made by One Customer</a>   &nbsp;&nbsp;
            <a href = "AccessVoucherCode.html" >Redeem a Voucher Code</a>   &nbsp;&nbsp;
            <a href = "SubmitUpdate.php" >Update a Customer's Information</a> <br/><br/>
            <a href = "GetCustomerName.php" >Find the Names and Phone Numbers of Customers who have Ordered from a Restaurant</a>   &nbsp;&nbsp;
            <a href = "AddANewTransaction.php" >Add a Transaction</a> <br/><br/>
            <a href = "RequestsforDeliveryMethod.php" >Find the Number of Requests for Each Delivery Method</a>   &nbsp;&nbsp;
            <a href = "HowManyCustomers.php" >Find the Number of Customers who have Ordered From One Restaurant</a> <br/><br/>
            <a href = "LoyaltyPointsOwed.php" >Find the Total Loyalty Points Owed to Customers</a> &nbsp;&nbsp;
            <?php
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            dbConnect("$username", "$password") ;
            dbSelect("$username");
            $restaurantsName = $_POST["restaurantsName"];
            $deliveryRate = $_POST["deliveryRate"];
            $collectionRate = $_POST["collectionRate"];
            $query = "INSERT INTO Restaurants VALUES ('$restaurantsName', '$deliveryRate', '$collectionRate')";
            echo "<br/> <br/>Restaurant Details for " . $restaurantsName . " have been Inserted.";
            ?>
    </body>
</html>