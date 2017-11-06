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
        <title>Total Number of Orders Made by One Customer</title>  
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
            <a href = "HowManyCustomers.php" >Find the Number of Customers who have Ordered From One Restaurant</a> <br/><br/>
            <a href = "LoyaltyPointsOwed.php" >Find the Total Loyalty Points Owed to Customers</a> &nbsp;&nbsp;
        </p>
        <h2>View Food Ordered By One Customer</h2>
        
        <?php
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        dbConnect("$username", "$password") ;
        dbSelect("$username");
        
        $customerID = $_POST['customerID'];
        $query = "SELECT name FROM Customer WHERE $customerID = customerID";
        $result = runQuery($query);
        $numrows = mysql_num_rows($result);
        if ($numrows == 0) {
            echo "Error in Request </br></br>";  	  
        }
        while ($row = mysql_fetch_assoc($result)) {
            echo $row['name']." has made: <br />";
        }
        
        $query = "SELECT restaurant, count(restaurant) FROM Transaction WHERE $customerID = clientID GROUP BY restaurant";
        $result = runQuery($query);
        while ($row = mysql_fetch_assoc($result)) {
            echo $row['count(restaurant)']." Order(s) From ".$row['restaurant']."<br />";
        }
        ?>
    </body>
</html>