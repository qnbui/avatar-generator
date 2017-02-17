$(document).ready(function() {
    $("#zombieModeButton").click(function()
    {
        console.log("dsqd");
      $(".zombieModeDiv").toggleClass( "zombieModeDivTG" );
    });
});

/* $(document).ready(function() {
    $("#zombieModeButton").click(function()
    {
       if($(#zombieModeDiv).backgroundColor() == "transparent"
       {
            $(#zombieModeDiv).css({backgroundColor: "rgba(0, 255, 0, 0.3)"})
       }
       else
       {
        $(#zombieModeDiv).css({backgroundColor: "transparent"})
       }
    });
});


