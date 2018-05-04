<?php
    
    require ('db_credentials.php');
        
    $fname = $_POST['fname'] ? $_POST['fname'] : "No_First_Name_Provided";
    $lname = $_POST['lname'] ? $_POST['lname'] : "No_Last_Name_Provided";
    $numberInParty = $_POST['numberInParty'] ? $_POST['numberInParty'] : "Not_Specified";
    $time = $_POST['time'] ? $_POST['time'] : "Not_Specified";
    $seatID = $_POST['id'] ? $_POST['id'] : "Not_Specified";
    
    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $dbname);
 
    if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
        print "failed";
    }  
        
    print "Connected! Status:" . $mysqli->host_info . "\n";
        
    $fname = $mysqli->real_escape_string($fname);
    $lname = $mysqli->real_escape_string($lname);
    $numberInParty = $mysqli->real_escape_string($numberInParty);
    $time = $mysqli->real_escape_string($time);
    $seatID = $mysqli->real_escape_string($seatID);
    
    //If the seat hasn't been reserved yet
    $sql = "INSERT INTO reserveTable (firstName, lastName, arrivalTime, numberInParty, seatID) VALUES (' ". $fname ." ', ' ". $lname ." ', ' ". $time ." ', ' ". $numberInParty ." ', ' ". $seatID ." ')";   


//    IF EXISTS (SELECT * FROM reserveTable WHERE seatID = "$seatID" )
//    BEGIN
//        $sql2 = "UPDATE reserveTable SET firstName = ' ".$fname." ', lastName = ' ". $lname ." ', arrivalTime = ' ". $time ." ', 
//        numberInParty = ' ". $numberInParty ." ' WHERE id= ' ".$seatID." ' ";
//        $mysqli->query($sql2);
//    END
//    ELSE
//    BEGIN
//        $sql = "INSERT INTO reserveTable (firstName, lastName, arrivalTime, numberInParty, seatID) VALUES (' ". $fname ." ', ' ". $lname ." ', ' ". $time ." ', ' ". $numberInParty ." ', ' ". $seatID ." ')";  
//        $mysqli->query($sql);
//    END

    $mysqli->query($sql);
//    $mysqli->query($sql2);

?>