<?php

    require ('db_credentials.php');

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM reserveTable";
    
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Seat ID: " . $row["seatID"]. " - First Name: " . $row["firstName"]. " - Last Name: " . $row["lastName"]. "
             - Arrival Time: " . $row["arrivalTime"]. " - Party Size: " . $row["numberInParty"]. " <br>";
        }
    } else {
        echo "There are currently no reservations.";
    }
 

?>