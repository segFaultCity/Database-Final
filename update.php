<?php

    require ('db_credentials.php');

    $fname = $_POST['fName'] ? $_POST['fName'] : "No_First_Name_Provided";
    $lname = $_POST['lName'] ? $_POST['lName'] : "No_Last_Name_Provided";
    $numberInParty = $_POST['nip'] ? $_POST['nip'] : "Not_Specified";
    $time = $_POST['uTime'] ? $_POST['uTime'] : "Not_Specified";
    $seatID = $_POST['id4'] ? $_POST['id4'] : "Not_Specified";

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

    $sql = "UPDATE reserveTable SET firstName = ' ".$fname." ', lastName = ' ". $lname ." ', arrivalTime = ' ". $time ." ', 
    numberInParty = ' ". $numberInParty ." ' WHERE seatID = ' ".$seatID." ' ";
    $mysqli->query($sql);

?>