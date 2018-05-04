function openOperator(value){
    document.getElementById("operationDiv").value = value;
    var id = document.getElementById("operationDiv").value;
    $("#operationDiv").show();
    $("#formR").trigger("reset");
}

function openReserve(){
    //set ID to identify the table being reserved
    var id = document.getElementById("operationDiv").value;
    document.getElementById("autoFill").value = id;
    $("#seatID").html("Reserving Seat: " + id);
    $("#reserveDiv").show();
    $("#operationDiv").hide();
}

function prepareUpdate(){
    var id = document.getElementById("operationDiv").value;
    var fname = document.getElementById("fn").value;
    var lname = document.getElementById("ln").value;
    var numInP = document.getElementById("ps").value;
    var timeTemp = document.getElementById("rt").value;
    
    document.getElementById("updateFName").value = fname;
    document.getElementById("updateLName").value = lname;
    document.getElementById("updateNIP").value = numInP;
    document.getElementById("updateTime").value = timeTemp;
    document.getElementById("updateID").value = id;
    
    $("#reserveDiv").hide();
}

function submitReserve(){
    //Change the color of the table to blue to indicate a reservation
    var id = document.getElementById("operationDiv").value;
    $("#"+id).css("background-color", "blue");
    $("#reserveDiv").hide();
}

function openInfo(){
    $("#informationDiv").show();
    $("#operationDiv").hide();
}

function closeOperationDiv(){
    $("#operationDiv").hide();
}

function walkIn(){
    //Both set the table red and send to the database which table is being walked-in and seated
    var id = document.getElementById("operationDiv").value;
    $("#"+id).css("background-color", "red");
    document.getElementById("autoFillW").value = id; 
}

function clearSeat(){
    //clear the seat with the table id and revert the color back to white to indicate vacancy
    var id = document.getElementById("operationDiv").value;
    document.getElementById("deleteValue").value = id;
    $("#"+id).css("background-color", "white");
    $("#formR").trigger("reset");
}

function prepareW(){
    $("#showMe").show();
    $("#closeFrame").show();
    $('#showMe').empty();
}

function cancel(){
    //cancels form and resets the fields
    $("#reserveDiv").hide();  
    $("#informationDiv").hide();
}

function closeWindow(){
    $("#showMe").hide();
    $("#closeFrame").hide();
    $("#informationDiv").hide(); 
}

function clearAllseats(){
    $("#s1_1").css("background-color", "white");
    $("#s1_2").css("background-color", "white");
    $("#s1_3").css("background-color", "white");
    $("#s1_4").css("background-color", "white");
    $("#s1_5").css("background-color", "white");
    $("#s1_6").css("background-color", "white");
    $("#s1_7").css("background-color", "white");
    $("#s1_8").css("background-color", "white");
    
    $("#s2_1").css("background-color", "white");
    $("#s2_2").css("background-color", "white");
    $("#s2_3").css("background-color", "white");
    $("#s2_4").css("background-color", "white");
    $("#s2_5").css("background-color", "white");
    $("#s2_6").css("background-color", "white");
    
    $("#s3_1").css("background-color", "white");
    $("#s3_2").css("background-color", "white");
    $("#s3_3").css("background-color", "white");
    $("#s3_4").css("background-color", "white");
    $("#s3_5").css("background-color", "white");
    $("#s3_6").css("background-color", "white");
    $("#s3_7").css("background-color", "white");
    $("#s3_8").css("background-color", "white");
    
    $("#b1").css("background-color", "white");
    $("#b2").css("background-color", "white");
    $("#b3").css("background-color", "white");
    $("#b4").css("background-color", "white");
    $("#b5").css("background-color", "white");
}