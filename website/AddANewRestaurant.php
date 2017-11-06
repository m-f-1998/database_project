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
        <title>Add a New Restaurant</title>
    </head>
    <body>
        <h1><a href = "First.html">Food Ordering</a></h1>
        <p>
            <a href = "OrdersbyOnePerson.html" >Find the Number of Orders Made by One Customer</a>   &nbsp;&nbsp;
            <a href = "AccessVoucherCode.html" >Redeem a Voucher Code</a>   &nbsp;&nbsp;
            <a href = "SubmitUpdate.php" >Update a Customer's Information</a> <br/> <br/>
            <a href = "GetCustomerName.php" >Find the Names and Phone Numbers of Customers who have Ordered from a Restaurant</a>   &nbsp;&nbsp;
            <a href = "AddANewTransaction.php" >Add a Transaction</a> <br/> <br/>
            <a href = "RequestsforDeliveryMethod.php" >Find the Number of Requests for Each Delivery Method</a>   &nbsp;&nbsp;
            <a href = "HowManyCustomers.php" >Find the Number of Customers who have Ordered From One Restaurant</a> <br/><br/>
            <a href = "LoyaltyPointsOwed.php" >Find the Total Loyalty Points Owed to Customers</a> &nbsp;&nbsp;
        </p>
        <h2>Enter the Restaurant's Details</h2>
        <form method="post" action="AddRestaurant.php">
            <table>
                <tr> <td>Name of the Restaurant</td>
                    <td> <input type="text" size="20" name="restaurantsName"/> </td> </tr>
                <tr> <td>Delivery Rate</td>
                    <td> <input type="text" size="3" name="deliveryRate"/> </td> </tr>
                <tr> <td>Collection Rate</td>
                    <td> <input type="text" size="3" name="collectionRate"/> </td> </tr>
                </td>
            </tr>
        </table>
    <p>
        <input type="submit" value="Submit"/>
    </p>
    </form>
</body>
</html>