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
        <title>Update A Customer's Details</title>
    </head>
    <body>
        <h1><a href = "First.html">Food Ordering</a></h1>
        <p>
            <a href = "AddANewRestaurant.php" >Add a New Restaurant</a>   &nbsp;&nbsp;
            <a href = "AccessVoucherCode.html" >Redeem a Voucher Code</a>   &nbsp;&nbsp;
            <a href = "OrdersbyOnePerson.html" >Find the Number of Orders Made by One Customer</a> <br/><br/>
            <a href = "GetCustomerName.php" >Find the Names and Phone Numbers of Customers who have Ordered from a Restaurant</a>   &nbsp;&nbsp;
            <a href = "AddANewTransaction.php" >Add a Transaction</a> <br/><br/>
            <a href = "RequestsforDeliveryMethod.php" >Find the Number of Requests for Each Delivery Method</a>   &nbsp;&nbsp;
            <a href = "HowManyCustomers.php" >Find the Number of Customers who have Ordered From One Restaurant</a> <br/><br/>
            <a href = "LoyaltyPointsOwed.php" >Find the Total Loyalty Points Owed to Customers</a> &nbsp;&nbsp;
        </p>
        <h2>Update a Customer's Information</h2>
        <form method="post" action="UpdateCustomer.php">
            <table>
                <tr> <td>User ID</td>
                    <td> <input type="text" size="3" name="userID"/> </td> </tr>
            </table>
            <a>Now Enter the User's Details Below (Please Include Details That Have Not Changed):</a>
            <table>
                <tr> <td>Name</td>
                    <td> <input type="text" size="20" name="name"/> </td> </tr>
                <tr> <td>Phone Number</td>
                    <td> <input type="text" size="20" name="phoneNumber"/> </td> </tr>
            </table>
            <p>
                <input type="submit" value="Submit"/>
            </p>
        </form>
    </body>
</html>