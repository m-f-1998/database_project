<?php
    error_reporting(E_ALL); 
    ini_set('display_errors', 1); 
    include ("dbfunctions.php");
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Value of Points</title>
    </head>
    
    <body>
        <h1><a href = "First.html">Food Ordering</a></h1>
        <p>
            <a href = "AddANewRestaurant.php" >Add a New Restaurant</a>   &nbsp;&nbsp;
            <a href = "AccessVoucherCode.html" >Redeem a Voucher Code</a>   &nbsp;&nbsp;
            <a href = "SubmitUpdate.php" >Update a Customer's Information</a> <br/><br/>
            <a href = "GetCustomerName.php" >Find the Names and Phone Numbers of Customers who have Ordered from a Restaurant</a>   &nbsp;&nbsp;
            <a href = "AddANewTransaction.php" >Add a Transaction</a> <br/><br/>
            <a href = "RequestsforDeliveryMethod.php" >Find the Number of Requests for Each Delivery Method</a>   &nbsp;&nbsp;
            <a href = "OrdersbyOnePerson.html" >Find the Number of Orders Made by One Customer</a>   <br/><br/>
            <a href = "HowManyCustomers.php" >Find the Number of Customers who have Ordered From One Restaurant</a> &nbsp;&nbsp;
        </p>
        <h2>Total Value of Loyalty Points Owed to Customers</h2>
        
        <?php
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        dbConnect("$username", "$password") ;
        dbSelect("$username");
        
        $query = "SELECT SUM(loyaltyPoints) FROM Customer";
        $result = runQuery($query);
        $numrows = mysql_num_rows($result);
        if ($numrows == 0) {
            echo "Error in Request </br></br>";
        }
        while ($row = mysql_fetch_assoc($result)) {
            echo $row['SUM(loyaltyPoints)'];
            echo " Loyalty Points are Currently Owed to Customers. <br/>";
        }
        ?>
    </body>
</html>