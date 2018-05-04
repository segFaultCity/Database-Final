<?php

    require ('db_credentials.php');

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM walkInTable";
    
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Seat ID: " . $row["seatID"]. " - Time of Arrival: " . $row["time"]. " <br>";
        }
    } else {
        echo "There are currently no walk-in customers.";
    }
 

?>