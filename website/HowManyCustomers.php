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
        <title>Customer Orders from a Certain Restaurant</title>
    </head>
    
    <body>
        <h1><a href = "First.html">Food Ordering</a></h1>
        <p>
            <a href = "AddANewRestaurant.php" >Add a New Restaurant</a>   &nbsp;&nbsp;
            <a href = "AccessVoucherCode.html" >Redeem a Voucher Code</a>   &nbsp;&nbsp;
            <a href = "SubmitUpdate.php" >Update a Customer's Information</a> <br/> <br/>
            <a href = "OrdersbyOnePerson.html" >Find the Number of Orders Made by One Customer</a>  &nbsp;&nbsp;
            <a href = "AddANewTransaction.php" >Add a Transaction</a> <br/><br/>
            <a href = "RequestsforDeliveryMethod.php" >Find the Number of Requests for Each Delivery Method</a>   &nbsp;&nbsp;
            <a href = "GetCustomerName.php" >Find the Names and Phone Numbers of Customers who have Ordered from a Restaurant</a>   &nbsp;&nbsp;
            <a href = "LoyaltyPointsOwed.php" >Find the Total Loyalty Points Owed to Customers</a> &nbsp;&nbsp;
        </p>
        <h2>Find the Number of Customers who have Ordered from a Certain Restaurant</h2>
        <form method = "post" action = "DisplayHowManyCustomers.php" >
            <tr> <td>Select the Desired Restaurant: </tr><td>
            
            <?php
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            dbConnect("$username", "$password") ;
            dbSelect("$username");
            $query = 'SELECT restaurantsName FROM Restaurants';
            $result = runQuery($query);
            print '<select name = "restaurant"> <option value = ""> </option>';
            while ($row = mysql_fetch_row($result)) {
                print '<option value="' . $row[0 ] . '">' . $row[0] . '</option>';
            }
            print '</select>';
            ?>
            
            <input type = "submit" value = "submit"/>
        </form>
    </body>
</html>