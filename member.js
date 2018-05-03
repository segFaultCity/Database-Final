function openOperator(value){
    document.getElementById("operationDiv").value = value;
    var id = document.getElementById("operationDiv").value;
    $("#operationDiv").show();
    document.getElementById("autoFillW").value = id;   
    document.getElementById("deleteValue").value = id;   
}

//function walkId(){
//    
//}

function openReserve(){
    var id = document.getElementById("operationDiv").value;
    document.getElementById("autoFill").value = id;   
    $("#seatID").html("Reserving Seat: " + id);
    $("#reserveDiv").show();
    $("#operationDiv").hide();
}

function submitReserve(){
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
    var id = document.getElementById("operationDiv").value;
    $("#"+id).css("background-color", "red");
}

function clearSeat(){
    var id = document.getElementById("operationDiv").value;
    $("#"+id).css("background-color", "white");
    $("#formR").trigger("reset");
}

function cancel(){
    $("#formR").trigger("reset");
    $("#reserveDiv").hide();   
}