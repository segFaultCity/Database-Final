<?php
    
    require ('db_credentials.php');
        
    $seatID = $_POST['id2'] ? $_POST['id2'] : "Not_Specified";
    
    
    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $dbname);
 
    if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
        print "failed";
    }  
        
    print "Connected! Status:" . $mysqli->host_info . "\n";
        
    $seatID = $mysqli->real_escape_string($seatID);
        
    $sql = "INSERT INTO walkInTable (seatID, time) VALUES (' ". $seatID ." ', NOW())";   

    $mysqli->query($sql);

?>