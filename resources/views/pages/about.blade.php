<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="jquery.js"></script>
        <script src="moving.js"></script>
        <link rel="stylesheet" href="move.css"/>
    </head>
    <body>
        <h1> Дараалсан оролт </h1>

        <div id="map">

           <button onclick="onclick=move()"> Тооцоолох </button>
            <div id="mashin"> </div>
        </div>
        
        <script>
             $(function() { 
             var mashin= 'div id="mashin"></div>';
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

       </script>
        

        {{--         
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=866&amp;height=400&amp;hl=en&amp;q= erdenet mini&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe>
                <a href="https://formatjson.org/">format json</a>
            </div>
            <style>
             .mapouter{
                position:relative;text-align:right;width:866px;height:400px;
                }
                .gmap_canvas
                 {
                    overflow:hidden;
                    background:none!important;
                    width:866px;
                    height:400px;
                    }
                    .gmap_iframe {
                        width:866px!important;
                        height:400px!important;
                        }
            </style>
        </div>  --}}
        
        
    </body>
    <script type="text/javascript">
    function move(){
        var av = document.getElementById('av')
    }
    </script>
</html>
