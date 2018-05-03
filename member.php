<!DOCTYPE html>

<html>

    <head>
        <title>EasyOrg - Member</title>
        <link rel="stylesheet" type="text/css" href="css/page.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="member.js"></script>
        
        <style>
/*
            .input1{
                width: 75%;
                height: 30px;
                border: 2px solid black;
                border-radius: 4px;
            }
*/
        </style>
    </head>
    
    <body>
        <!-- Body border -->
        <div id="left"></div>
        <div id="right"></div>
        <div id="top"></div>
        <div id="bottom"></div>
        <div id="container">
            
            <!-- iFrame here keeps form action from redirecting or reloading page. All form targets go to this ID -->
            <iframe name="stayHere" style="display:none;"></iframe>
            
            <div id="operationDiv">
                <!-- open Pannel -->
                <input class="operationButton" type="button" value="Reserve" onclick="openReserve()">
                
                <!-- add to walkin table (Create info in database) -->
                <form action="addW.php" method="post" target="stayHere">
                    <input id="autoFillW" type="hidden" name="id2">
                    <input class="operationButton" type="submit" value="Walk-In" onclick="walkIn()">
                </form>
                
                <!-- Retrieve info (read from database) & update database -->
                <input class="operationButton" type="button" value="Get Info" onclick="openInfo()">
                
                <!-- Delete from database -->
                <form action="delete.php" method="post" target="stayHere">
                    <input id="deleteValue" type="hidden" name="id3">
                    <input class="operationButton" type="submit" value="Clear" onclick="clearSeat()">
                </form>
                
                <!-- close pannel -->
                <input class="operationButton closeColor" type="button" value="Close" onclick="closeOperationDiv()">
                
            </div>
            <div id="reserveDiv">RESERVE FORM<hr>
                <form id="formR" action="add.php" method="post" target="stayHere">
                    <p id="seatID"></p>
                    <input id="autoFill" type="hidden" name="id">
                    <p>First Name<br/>
                        <input id="fn" class="input1" type="text" name="fname" placeholder="First Name" maxlength="255" size="40">
                    </p>   
                    <p>Last Name<br/>
                        <input id="ln" class="input1" type="text" name="lname" placeholder="Last Name" maxlength="255" size="40">
                    </p>
                    <p>Party Size<br/>
                    <input id="ps" class="input1" type="text" name="numberInParty" placeholder="Number of People" maxlength="255" size="40">
                    </p>
                    <p>Reserve Time<br/>
                        <input id="rt" class="input1" type="text" name="time" placeholder="Reserve Time" maxlength="255" size="40">
                    </p>
                    <input class="formButton" type="button" value="CANCEL" onclick="cancel()">
                    <input class="formButton" type="submit" value="SUBMIT" onclick="submitReserve()">
                </form>   
            </div>
            <div id="informationDiv">RESERVE INFO<hr></div>
            <div id="sectionOne">
                <input id="s1_1" class="sectionTable1 addMargin" type="button" value="s1_1" onclick="openOperator('s1_1')">
                <input id="s1_2" class="sectionTable2 addMargin" type="button" value="s1_2" onclick="openOperator('s1_2')">
                <input id="s1_3" class="sectionTable1" type="button" value="s1_3" onclick="openOperator('s1_3')">
                <input id="s1_4" class="sectionTable2" type="button" value="s1_4" onclick="openOperator('s1_4')">
                <input id="s1_5" class="sectionTable1" type="button" value="s1_5" onclick="openOperator('s1_5')">
                <input id="s1_6" class="sectionTable2" type="button" value="s1_6" onclick="openOperator('s1_6')">
                <input id="s1_7" class="sectionTable1" type="button" value="s1_7" onclick="openOperator('s1_7')">
                <input id="s1_8" class="sectionTable2" type="button" value="s1_8" onclick="openOperator('s1_8')">
            </div>
            <div id="sectionTwo">
                <div id="bar">BAR</div>
                <div id="barSeatContainer">
                    <input id="b1" class="barSeat" type="button" value="b1" onclick="openOperator('b1')">
                    <input id="b2" class="barSeat" type="button" value="b2" onclick="openOperator('b2')">
                    <input id="b3" class="barSeat" type="button" value="b3" onclick="openOperator('b3')">
                    <input id="b4" class="barSeat" type="button" value="b4" onclick="openOperator('b4')">
                    <input id="b5" class="barSeat" type="button" value="b5" onclick="openOperator('b5')">
                </div>
                <div id="sectionTwoContainer">
                    <input id="s2_1" class="sectionTable1" type="button" value="s2_1" onclick="openOperator('s2_1')">
                    <input id="s2_2" class="sectionTable2" type="button" value="s2_2" onclick="openOperator('s2_2')">
                    <input id="s2_3" class="sectionTable1" type="button" value="s2_3" onclick="openOperator('s2_3')">
                    <input id="s2_4" class="sectionTable2" type="button" value="s2_4" onclick="openOperator('s2_4')">
                    <input id="s2_5" class="sectionTable1" type="button" value="s2_5" onclick="openOperator('s2_5')">
                    <input id="s2_6" class="sectionTable2" type="button" value="s2_6" onclick="openOperator('s2_6')">
                </div>
            </div>
            <div id="sectionThree">
                <input id="s3_1" class="sectionTable1 addMargin" type="button" value="s3_1" onclick="openOperator('s3_1')">
                <input id="s3_2" class="sectionTable2 addMargin" type="button" value="s3_2" onclick="openOperator('s3_2')">
                <input id="s3_3" class="sectionTable1" type="button" value="s3_3" onclick="openOperator('s3_3')">
                <input id="s3_4" class="sectionTable2" type="button" value="s3_4" onclick="openOperator('s3_4')">
                <input id="s3_5" class="sectionTable1" type="button" value="s3_5" onclick="openOperator('s3_5')">
                <input id="s3_6" class="sectionTable2" type="button" value="s3_6" onclick="openOperator('s3_6')">
                <input id="s3_7" class="sectionTable1" type="button" value="s3_7" onclick="openOperator('s3_7')">
                <input id="s3_8" class="sectionTable2" type="button" value="s3_8" onclick="openOperator('s3_8')">
            </div>
        </div>
    </body>

</html>