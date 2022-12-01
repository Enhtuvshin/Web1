<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Том том бууз</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link href= "/css/main.css" rel="stylesheet" >

        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="css/3d.css">
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
        
        </head>
    <body>
        <header>
            <a href="#" class="logo">LOGO</a>
            <ul>
                <li><a href="#" class="active"> HOME </a></li>
                <li><a href="#"> Хавсралт </a></li>
             </ul>
        </header>
        <section> 
            <img src="/images/stars.png" id="stars">
            <img src="/images/moon.png" id="moon">
            <img src="/images/mountains_behind.png" id="mountains_behind">
            <h2 id="text">Ил уурхайн олборлолт</h2>
            <a href="#sec" id="btn">Тээврийн хэрэгсэл</a>
            <img src="/images/mountains_front.png" id="mountains_front">
        </section>
        
        <section2>
            <body>
                <div class="container">
                    <div class="form">
                        <h2>Зардалын хэсэг</h2>
                        <input id='L1' class="box" placeholder="Гадаргын замын урт" type="numbers">
                        <label for="L2"></label>
                        <input id='L2' class="box" placeholder="Өгсүүр замын урт" type="numbers">
                        <label for="L3"></label>
                        <input id='L3' class="box" placeholder="Тэгш замын урт" type="numbers">
                        <label for="L3"></label>
                        <button id="submit" onclick='calculateBmi()'>Тооцоолох</button>
                        <!--<button onclick='delete()' >Цэвэрлэх</button>-->

                        <div class="dotted"><p id='heading'><p id='bmi-output'></p></p>
                        

                             <script>   function calculateBmi() {
                                let L1 = document.getElementById('L1').value
                                let L2 = document.getElementById('L2').value
                                let L3 = document.getElementById('L3').value

                                     let bmi = L1 * 10 + L2 * 2 + L3 * 5 + 1480
    
                                     document.getElementById('heading').innerHTML = 'Үр дүн '
                                     document.getElementById('bmi-output').innerHTML = bmi
                                    }
                                    </script>
                                    
                                    <!--function reload(){
                                    window.location.delete()}-->
                                    </div>
                    <div id="aSide">
                    <!--<img src="assets/backgrounds.png" alt="">-->
                    <model-viewer src="assets/asdas.glb" alt="model robot" auto-rotate camera-controls ar ios-src="assets/asdas.glb"></model-viewer>
                    </div>
                </div>
            </body>
        </section2>
        


       <script>
         let stars = document.getElementById('stars') ;
         let moon = document.getElementById('moon') ;
         let mountains_behind = document.getElementById('mountains_behind') ;
         let text = document.getElementById('text') ;
         let btn = document.getElementById('btn') ;
         let mountains_front = document.getElementById('mountains_front') ;
         let header = document.getElementById('header');
        
         window.addEventListener("scroll",function(){
         let value = window.scrollY;
         stars.style.left = value * 0.25 + "px";
         moon.style.top = value * 1 + "px";
         mountains_behind.style.top = value * 0.5 + "px";
         mountains_front.style.top = value * 0 + "px";
         text.style.marginRight = value * 4 + 'px';
         text.style.marginTop = value * 1.25 + "px";
         btn.style.marginTop = value * 1.25 + "px";
         header.style.top = value * 0 + 'px';
        })

       </script>
    </body>
</html>
