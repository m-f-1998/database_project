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
            <a href = "AddANewRestaurant.php" >Add a New Restaurant</a>   &nbsp;&nbsp;
            <a href = "OrdersbyOnePerson.html" >Find the Number of Orders Made by One Customer</a> 	&nbsp;&nbsp;
            <a href = "AccessVoucherCode.html" >Redeem a Voucher Code</a>  <br/><br/>
            <a href = "SubmitUpdate.php" >Update a Customer's Information</a> &nbsp;&nbsp;
            <a href = "GetCustomerName.php" >Find the Names and Phone Numbers of Customers who have Ordered from a Restaurant</a> <br/><br/>
            <a href = "RequestsforDeliveryMethod.php" >Find the Number of Requests for Each Delivery Method</a>   &nbsp;&nbsp;
            <a href = "HowManyCustomers.php" >Find the Number of Customers who have Ordered From One Restaurant</a> <br/><br/>
            <a href = "LoyaltyPointsOwed.php" >Find the Total Loyalty Points Owed to Customers</a> &nbsp;&nbsp;
        </p>

        <?php
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        dbConnect("$username", "$password") ;
        dbSelect("$username");
        $clientID = $_POST["clientID"];
        $restaurant = $_POST["restaurant"];
        $deliveryType = $_POST["deliveryType"];
        if($deliveryType == "Delivery") {
            $points = "SELECT deliveryRate FROM Restaurants WHERE restaurantsName = $restaurant";
            $findPoints = mysql_query($points);
            if($findPoints == 0) {
                echo "<br/><br/>Delivery is Not Offered for this Restaurant.";
            } else{
                $query = "INSERT INTO Transaction (clientID, restaurant, deliveryType) VALUES ('$clientID', '$restaurant', '$deliveryType')";
                $run = mysql_query($query);
                if($restaurant == "Pizza Toninght") {
                    $update1 = "UPDATE Customer SET loyaltyPoints = loyaltyPoints + 10 WHERE customerID = $clientID";
                    $run1 = mysql_query($update1);
                }
                if($restaurant == "Himalaya") {
                    $update2 = "UPDATE Customer SET loyaltyPoints = loyaltyPoints + 7 WHERE customerID = $clientID";
                    $run2 = mysql_query($update2);
                }
                if($restaurant == "Speedy Meal") {
                    $update3 = "UPDATE Customer SET loyaltyPoints = loyaltyPoints + 5 WHERE customerID = $clientID";
                    $run3 = mysql_query($update3);
                }
                print("<br/>Transaction Entered.<br/>");
            }
        }
        if($deliveryType == "Collection"){
            $points = "SELECT collectionRate FROM Restaurants WHERE restaurantsName = $restaurant";
            $findPoints = mysql_query($points);
            if($findPoints == 0) {
                echo "<br/><br/>Collection is Not Offered for this Restaurant.";
            }else{
                if($restaurant == "Speedy Meal") {
                    $update1 = "UPDATE Customer SET loyaltyPoints = loyaltyPoints + 7 WHERE customerID = $clientID";
                    $run1 = mysql_query($update1);
                }
                if($restaurant == "Burgerzilla"){
                    $update2 = "UPDATE Customer SET loyaltyPoints = loyaltyPoints + 8 WHERE customerID = $clientID";
                    $run2 = mysql_query($update2);
                }
                if($restaurant == "Best Burritos"){
                    $update3 = "UPDATE Customer SET loyaltyPoints = loyaltyPoints + 9 WHERE customerID = $clientID";
                    $run3 = mysql_query($update3);
                }
                print("<br/>Transaction Entered.<br/>");
            }
        }
        ?>
    </body>
</html>