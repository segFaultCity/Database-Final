<?php
    
    require ('db_credentials.php'); 

    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $dbname);
 
    if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
        print "failed";
    }  
        
    print "Connected! Status:" . $mysqli->host_info . "\n";

    $sql = "DELETE FROM walkInTable";
    $sql2 = "DELETE FROM reserveTable"; 

    $mysqli->query($sql);
    $mysqli->query($sql2);

?>