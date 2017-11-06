<?php
    error_reporting(E_ALL); 
    ini_set('display_errors', 1);
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Welcome to Our Online Food Ordering Site</title>
    </head>
    <body>
        <h1><a href = "First.html">Food Ordering</a></h1>
        <p>
            <a href = "AddANewRestaurant.php" >Add a New Restaurant</a>   &nbsp;&nbsp;
            <a href = "OrdersbyOnePerson.html" >Find the Number of Orders Made by One Customer</a> 	&nbsp;&nbsp;
            <a href = "AccessVoucherCode.html" >Redeem a Voucher Code</a>  <br/><br/>
            <a href = "SubmitUpdate.php" >Update a Customer's Information</a> &nbsp;&nbsp;
            <a href = "GetCustomerName.php" >Find the Names and Phone Numbers of Customers who have Ordered from a Restaurant</a>  <br/><br/>
            <a href = "AddANewTransaction.php" >Add a Transaction</a> &nbsp;&nbsp;
            <a href = "RequestsforDeliveryMethod.php" >Find the Number of Requests for Each Delivery Method</a>  <br/><br/>
            <a href = "HowManyCustomers.php" >Find the Number of Customers who have Ordered From One Restaurant</a> &nbsp;&nbsp;
            <a href = "LoyaltyPointsOwed.php" >Find the Total Loyalty Points Owed to Customers</a> &nbsp;&nbsp;
        </p>
    </body>
</html>