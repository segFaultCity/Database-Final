<?php
    
    require ('db_credentials.php');

    $seatID = $_POST['id3'] ? $_POST['id3'] : "Not_Specified";

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
        print "failed";
    }  
        
    print "Connected! Status:" . $mysqli->host_info . "\n";

    $seatID = $mysqli->real_escape_string($seatID);

    $sql = "DELETE FROM walkInTable WHERE seatID = $seatID ";
    $sql2 = "DELETE FROM reserveTable WHERE seatID = $seatID ";

    $mysqli->query($sql);
    $mysqli->query($sql2);

?>