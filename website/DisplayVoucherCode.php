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
        <title>Customer's Points</title>
    </head>
    
    <body>
        <h1><a href = "First.html">Food Ordering</a></h1>
        <p>
            <a href = "OrdersbyOnePerson.html" >Find the Number of Orders Made by One Customer</a>   &nbsp;&nbsp;
            <a href = "AddANewRestaurant.php" >Add a New Restaurant</a>   &nbsp;&nbsp;
            <a href = "SubmitUpdate.php" >Update a Customer's Information</a> <br/><br/>
            <a href = "GetCustomerName.php" >Find the Names and Phone Numbers of Customers who have Ordered from a Restaurant</a>   &nbsp;&nbsp;
            <a href = "AddANewTransaction.php" >Add a Transaction</a> <br/><br/>
            <a href = "RequestsforDeliveryMethod.php" >Find the Number of Requests for Each Delivery Method</a>   &nbsp;&nbsp;
            <a href = "HowManyCustomers.php" >Find the Number of Customers who have Ordered From One Restaurant</a> <br/><br/>
            <a href = "LoyaltyPointsOwed.php" >Find the Total Loyalty Points Owed to Customers</a> &nbsp;&nbsp;
        </p>
        <h2>Redeem Your Points For A Voucher Code</h2>
        
        <?php
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        dbConnect("$username", "$password") ;
        dbSelect("$username");

        $customerID = $_POST['customerID'];
        $query = "SELECT name, loyaltyPoints, pointsValue FROM Customer WHERE $customerID = customerID";
        $result = runQuery($query);
        $numrows = mysql_num_rows($result);
        if ($numrows == 0) {
            echo "Error in Request </br></br>";
        }
        while ($row = mysql_fetch_assoc($result)) {
            echo $row['name']." has ".$row['loyaltyPoints']." Points which has a Value of £".$row['pointsValue']."<br /> <br />"."Your Voucher Code is: ".rand(1000000,9000000);
        }
        
        $update = "UPDATE Customer SET loyaltyPoints = 0, pointsValue = 0 WHERE customerID = $customerID";
        $run = runQuery($update);
        ?>
    </body>
</html>