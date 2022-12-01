var playerX=0;
var playerY=0;
var playerSize=25;
$(function() { 
    var mashin= 'div  id="player"></div>';
    $("#map").append(mashin);


    $(document).keydown(function(e){ 
        //alert(e.keyCode);
        var position=$("#mashin").position();
        alert(position);
        switch(e.keyCode)
        {
            case 37: //left
            $("mashin").css('left',position.left = 20 + 'px');
            break;
            case 38: //up
            $("mashin").css('top',position.top = 20 + 'px');
            break;
            case 39: //Right
            $("mashin").css('left',position.left = 20 + 'px');
            break;
            case 40: //Down
            $("mashin").css('left',position.left = 20 + 'px');
            break;
        }

    });

});
