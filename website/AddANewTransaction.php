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
        <title>Add a New Transaction</title>
    </head>
    
    <body>
        <h1><a href = "First.html">Food Ordering</a></h1>
        <p>
            <a href = "AddANewRestaurant.php" >Add a New Restaurant</a>   &nbsp;&nbsp;
            <a href = "OrdersbyOnePerson.html" >Find the Number of Orders Made by One Customer</a> 	&nbsp;&nbsp;
            <a href = "AccessVoucherCode.html" >Redeem a Voucher Code</a>  <br/><br/>
            <a href = "SubmitUpdate.php" >Update a Customer's Information</a> &nbsp;&nbsp;
            <a href = "GetCustomerName.php" >Find the Names and Phone Numbers of Customers who have Ordered from a Restaurant</a> <br/><br/>
            <a href = "RequestsforDeliveryMethod.php" >Find the Number of Requests for Each Delivery Method</a>   &nbsp;&nbsp;
            <a href = "HowManyCustomers.php" >Find the Number of Customers who have Ordered From One Restaurant</a> <br/><br/>
            <a href = "LoyaltyPointsOwed.php" >Find the Total Loyalty Points Owed to Customers</a> &nbsp;&nbsp; 
            <br/>
        </p>
        <h2>Enter the Transaction's Details</h2>
        <form method="post" action="AddTransaction.php">
            <table>
                <tr> <td>Customer ID</td>
                    <td> <input type="text" size="3" name="clientID"/> </td> </tr>
                <tr> <td>Name of the Restaurant</tr><td>
                <?php
                $username = $_SESSION['username'];
                $password = $_SESSION['password'];
                dbConnect("$username", "$password") ;
                dbSelect("$username");
                $query = 'SELECT restaurantsName FROM Restaurants';
                $result = runQuery($query);
                print '<select name = "restaurant"> <option value = ""> </option>';
                while ($row = mysql_fetch_row($result) )
                {
                    print '<option value="' . $row[0 ] . '">' . $row[0] . '</option>';
                }
                print '</select>';
                ?> </td> </tr>
            <tr> <td>Delivery Type</td>
                <td> Delivery  :<input type="radio" value="Delivery" name="deliveryType"/><br/>
                    Collection :<input type="radio" value="Collection" name="deliveryType"/></td></tr>
            </table>
        <p>
        
            <input type="submit" value="Submit"/>
        </p>
        </form>
    </body>
</html>