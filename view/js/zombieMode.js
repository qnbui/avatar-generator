$(document).ready(function() {
    $("#zombieModeButton").click(function()
    {
        if($("#zombieModeDiv").css("background-color", "transparent"))
        {
            console.log("if");
            $("#zombieModeDiv").css({backgroundColor:  "rgba(0, 255, 0, 0.3)"});
        }
        else
        {
            console.log("else");
            $("#zombieModeDiv").css({backgroundColor:  "rgba(0, 0, 255, 0.3)"});
        }
    });
});