

// Front End Schtuff
$(document).ready(function() {

    $("#player1Btn").click(function() {
        $("#player1").hide();
        $("#player2").show();
    });

    $("#player2Btn").click(function() {
        $("#player2").hide();
        $("#goButton").show();
    });


});
