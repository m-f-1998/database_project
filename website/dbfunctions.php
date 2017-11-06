<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1); 

//////////////////////////////////////////////////////////////////////////////

function dbConnect($username, $password) {
	$dbConn = @mysql_pconnect ("mysql-server-1", $username, $password) ;
	if (!$dbConn ) {
		print "<p>Cannot connect to database - check username and password<br/>";
		print mysql_error()."</p>";
		print "</body>";
        print "</html>";
		exit();
	}
}

function dbSelect( $dbname) {
	$db = mysql_select_db($dbname);
	if (!$db) {
		print "<p>Cannot connect to database $dbname</br>";
		print mysql_error()."</p>";
		print "</body>";
   	print "</html>";
		exit("Bye");
	}
}

function insertRow($query) {
    $insResult = mysql_query($query);
    if ($insResult)
        print($query . " Record inserted<br/>");
    else
        print $query. " " . mysql_error(). "<br/>";
}

function runQuery($query) {
    $result = mysql_query($query);
    if ($result) {
        return $result;
    } else {
        print $query. " " . mysql_error(). "<br/>";   //vital to know why it failed
		print "</body>";
        print "</html>";
		exit("Bye");
	}
}

function displayTable($result) {
    $numrows = mysql_num_rows($result);
    if ($numrows == 0) {
        print "<p>There was nothing in the table</p>";	
        print "</body>";
        print "</html>";
        exit();
    }
    print '<table border = "1">';
    
    $fieldCount = mysql_num_fields($result);
    print "<tr>";
    
    for ($i=0; $i<$fieldCount; $i++) {              
        $fieldName = mysql_field_name($result, $i);
        print "<th>".$fieldName."</th>";
    }
    print "</tr>";
    while ($row = mysql_fetch_row($result) ) {
        print ("<tr>");
        for ($i=0; $i<$fieldCount; $i++) {
            print ("<td>". $row[$i] . "</td>") ;  
        }
        print ("</tr>");
    }
    print ("</table>");
}

function displayVertTable($result) {
    $numrows = mysql_num_rows($result);
    if ($numrows == 0) {
        print "<p>There was nothing in the table</p>";	
        print "</body>";
        print "</html>";
        exit();
    }
    print '<table border = "1">';
    $fieldCount = mysql_num_fields($result);
    $row = mysql_fetch_row($result);   
    for ($i=0; $i<$fieldCount; $i++) {
        print ("<tr>");
        $fieldName = mysql_field_name($result, $i);
        print "<td><em>".$fieldName."</em></td>";
        print ("<td>". $row[$i] . "</td>") ; 
        print "</tr>";
    }
    print ("</table>");
}

?>