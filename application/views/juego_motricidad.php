
<html>
    <head>
        <style>
            body {
                margin: 0;
                padding: 0;
                overflow:hidden;
            }
            .fondo {
                background: #08B;
                background: -webkit-linear-gradient(180deg, #0BF 0%, #056 100%);
                background: -moz-linear-gradient(180deg, #0BF 0%, #056 100%);
                background: linear-gradient(180deg, #0BF 0%, #056 100%);
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            .cuadrados {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
            }
            .cuadrados li {
                position: absolute;
                list-style: none;
                display: block;
                width: 40px;
                height: 40px;
                background-color: rgba(255, 255, 255, 0.15);
                bottom: -160px;
                -webkit-animation: square 25s infinite linear;
                -moz-animation: square 25s infinite linear;
                animation: square 25s infinite linear;
                z-index: 1;
            }
            .cuadrados li:nth-child(1) {
                left: 10%;
                z-index: 1;
            }
            .cuadrados li:nth-child(2) {
                left: 20%;
                width: 80px;
                height: 80px;
                -webkit-animation-delay: 2s;
                -moz-animation-delay: 2s;
                animation-delay: 2s;
                -webkit-animation-duration: 17s;
                -moz-animation-duration: 17s;
                animation-duration: 17s;
                z-index: 1;
            }
            .cuadrados li:nth-child(3) {
                left: 25%;
                -webkit-animation-delay: 4s;
                -moz-animation-delay: 4s;
                animation-delay: 4s;
                z-index: 1;
            }
            .cuadrados li:nth-child(4) {
                left: 40%;
                width: 60px;
                height: 60px;
                -webkit-animation-duration: 22s;
                -moz-animation-duration: 22s;
                animation-duration: 22s;
                background-color: rgba(255, 255, 255, 0.25);
                z-index: 1;
            }
            .cuadrados li:nth-child(5) {
                left: 70%;
                z-index: 1;
            }
            .cuadrados li:nth-child(6) {
                left: 80%;
                width: 120px;
                height: 120px;
                -webkit-animation-delay: 3s;
                -moz-animation-delay: 3s;
                animation-delay: 3s;
                background-color: rgba(255, 255, 255, 0.2);
                z-index: 1;
            }
            .cuadrados li:nth-child(7) {
                left: 32%;
                width: 160px;
                height: 160px;
                -webkit-animation-delay: 7s;
                -moz-animation-delay: 7s;
                animation-delay: 7s;
                z-index: 1;
            }
            .cuadrados li:nth-child(8) {
                left: 55%;
                width: 20px;
                height: 20px;
                -webkit-animation-delay: 15s;
                -moz-animation-delay: 15s;
                animation-delay: 15s;
                -webkit-animation-duration: 40s;
                -moz-animation-duration: 40s;
                animation-duration: 40s;
                z-index: 1;
            }
            .cuadrados li:nth-child(9) {
                left: 25%;
                width: 10px;
                height: 10px;
                -webkit-animation-delay: 2s;
                -moz-animation-delay: 2s;
                animation-delay: 2s;
                -webkit-animation-duration: 40s;
                -moz-animation-duration: 40s;
                animation-duration: 40s;
                background-color: rgba(255, 255, 255, 0.3);
                z-index: 1;
            }
            .cuadrados li:nth-child(10) {
                left: 90%;
                width: 160px;
                height: 160px;
                -webkit-animation-delay: 11s;
                -moz-animation-delay: 11s;
                animation-delay: 11s;
                z-index: 1;
            }
            .cuadrados li:nth-child(11) {
                left: 15%;
                width: 17px;
                height: 17px;
                -webkit-animation-delay: 12s;
                -moz-animation-delay: 12s;
                animation-delay: 12s;
                -webkit-animation-duration: 40s;
                -moz-animation-duration: 40s;
                animation-duration: 40s;
                background-color: rgba(255, 255, 255, 0.5);
                z-index: 1;
            }
            .cuadrados li:nth-child(12) {
                left: 20%;
                width: 5px;
                height: 5px;
                -webkit-animation-delay: 15s;
                -moz-animation-delay: 15s;
                animation-delay: 15s;
                -webkit-animation-duration: 15s;
                -moz-animation-duration: 15s;
                animation-duration: 15s;
                background-color: rgba(255, 255, 255, 0.1);
                z-index: 1;
            }
            .cuadrados li:nth-child(13) {
                left: 45%;
                width: 8px;
                height: 8px;
                -webkit-animation-delay: 17s;
                -moz-animation-delay: 17s;
                animation-delay: 17s;
                -webkit-animation-duration: 29s;
                -moz-animation-duration: 29s;
                animation-duration: 29s;
                background-color: rgba(255, 255, 255, 0.3);
                z-index: 1;
            }
            .cuadrados li:nth-child(14) {
                left: 50%;
                width: 120px;
                height: 120px;
                -webkit-animation-delay: 11s;
                -moz-animation-delay: 11s;
                animation-delay: 11s;
                -webkit-animation-duration: 19s;
                -moz-animation-duration: 19s;
                animation-duration: 19s;
                background-color: rgba(255, 255, 255, 0.35);
                z-index: 1;
            }
            .cuadrados li:nth-child(15) {
                left: 67%;
                width: 50px;
                height: 50px;
                -webkit-animation-delay: 6s;
                -moz-animation-delay: 6s;
                animation-delay: 6s;
                -webkit-animation-duration: 12s;
                -moz-animation-duration: 12s;
                animation-duration: 12s;
                background-color: rgba(255, 255, 255, 0.5);
                z-index: 1;
            }
            .cuadrados li:nth-child(16) {
                left: 75%;
                width: 20px;
                height: 20px;
                -webkit-animation-delay: 1s;
                -moz-animation-delay: 1s;
                animation-delay: 1s;
                -webkit-animation-duration: 25s;
                -moz-animation-duration: 25s;
                animation-duration: 25s;
                background-color: rgba(255, 255, 255, 0.3);
                z-index: 1;
            }
            .cuadrados li:nth-child(17) {
                left: 10%;
                width: 10px;
                height: 10px;
                -webkit-animation-delay: 2s;
                -moz-animation-delay: 2s;
                animation-delay: 2s;
                -webkit-animation-duration: 20s;
                -moz-animation-duration: 20s;
                animation-duration: 20s;
                background-color: rgba(255, 255, 255, 0.45);
                z-index: 1;
            }
            .cuadrados li:nth-child(18) {
                left: 55%;
                width: 10px;
                height: 10px;
                -webkit-animation-delay: 2s;
                -moz-animation-delay: 2s;
                animation-delay: 2s;
                -webkit-animation-duration: 32s;
                -moz-animation-duration: 32s;
                animation-duration: 32s;
                background-color: rgba(255, 255, 255, 0.4);
                z-index: 1;
            }
            .cuadrados li:nth-child(19) {
                left: 59%;
                width: 10px;
                height: 10px;
                -webkit-animation-delay: 8s;
                -moz-animation-delay: 8s;
                animation-delay: 8s;
                -webkit-animation-duration: 15s;
                -moz-animation-duration: 15s;
                animation-duration: 15s;
                background-color: rgba(255, 255, 255, 0.4);
                z-index: 1;
            }
            .cuadrados li:nth-child(20) {
                left: 5%;
                width: 15px;
                height: 15px;
                -webkit-animation-delay: 3s;
                -moz-animation-delay: 3s;
                animation-delay: 3s;
                -webkit-animation-duration: 10s;
                -moz-animation-duration: 10s;
                animation-duration: 10s;
                background-color: rgba(255, 255, 255, 0.25);
                z-index: 1;
            }

            /*
            * Animaciones
            */

            @-webkit-keyframes square {
                0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                z-index: 1;
            }
            100% {
                -webkit-transform: translateY(-100%) rotate(600deg);
                transform: translateY(-100%) rotate(600deg);
                z-index: 1;
            }
            }
            @-moz-keyframes square {
                0% {
                -moz-transform: translateY(0);
                transform: translateY(0);
                z-index: 1;
            }
            100% {
                -moz-transform: translateY(-100%) rotate(600deg);
                transform: translateY(-100%) rotate(600deg);
                z-index: 1;
            }
            }
            @keyframes square {
                0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                z-index: 1;
            }
            100% {
                -webkit-transform: translateY(-1500px) rotate(600deg);
                transform: translateY(-1500px) rotate(600deg);
                z-index: 1;
            }
            }
        </style>
    <!--aca empieza el css del juego -->
        <style type="text/css">

    * {
    padding: 0px;
    margin: 0px;
    font-family: sans-serif;
}

.contenedor_juego {
    position: relative;
    top:20vh;
    padding: 0px;
    margin: auto;
    width: 500px;
    height: 500px;
    background-color: #ffb;
    border: 8px dashed #993;
    z-index: 9999;
}
.contenedor_menu {
    top:20vh;
    position: relative;
    text-align: center;
    padding: 0px;
    margin: auto;
    width: 500px;
    height: 500px;
    background: rgba(0,0,0,.3);
    z-index: 9999;
}

.contenedor_menu button{
    padding: 15px 30px 15px 30px;
    border-radius: 30px;
    background-color: transparent;
    border-style: solid;
    border-width: 1px;
    border-color: white;  
    color: white;
    display: block;
    text-align: center;
}



#player {
     position: relative;
    background-color: #900;
    border: 4px dashed #b22;
    width: 50px;
    height: 50px;
    border-radius: 29px;
    position: absolute;
    transition: all 0.3s;
}
.pointer {
     position: relative;
    background-color: #444;
    height: 30px;
    margin-top: 30px;
    border-bottom: 0px;
    color: #fff;
    font-size: 20px;
    text-align: center;
    padding: 10px 0px;
}
    </style>



        </head>
    <body id='body'>
           

        <div class="fondo">
                <!--div class="contenedor_menu">
                  
                        <div> <button>WEA 1</button></div>
                         <div> <button>WEA 2</button></div>
                          <div> <button>WEA 3</button></div>
                    
                   
                </div-->
            <div> 
                <div class="contenedor_juego pointer">
                        <span id="puntos"></span>
                        <span id="ned"></span>
                        <span id="tiempo"></span>
                </div>
                <div class="contenedor_juego">
                    <div id="player"></div>
                </div>
            </div>
        </div>
   

            <ul class="cuadrados">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
  
    </body>
</html>
<script type="text/javascript">
    alert("Presiona aceptar para comenzar");
    /*var modal= document.createElement("div");
    modal.style.paddingTop="20px";
    modal.style.paddingRight="40px";
    modal.style.paddingLeft="50px";
    modal.style.paddingBottom="20px";
    modal.style.position="fixed";
    modal.style.top="15px";
    modal.style.right="auto";
    modal.innerHTML="Empieza a jugar viejo qlo";
    document.getElementById('body').appendChild(modal);*/
    document.getElementById('player').addEventListener("mouseover",sumarPuntos);

puntos = 0;
tiempo = 60;
necesarios = 30;
function sumarPuntos(){
   puntos++;
   document.getElementById("puntos").innerHTML = "Puntos: <b>" + puntos + "/" + necesarios + "  </b>";
   randNum =  Math.round(Math.random()*500);
   randNum2 =  Math.round(Math.random()*500);
   document.getElementById("player").style.marginTop =randNum + "px";
   document.getElementById("player").style.marginLeft =randNum2 + "px";
   if (puntos == 30) {
    window.location.reload();
    alert("Felicidades, ¡Ganaste!");
   }
}


function restarTiempo() {

    tiempo--;
    document.getElementById("tiempo").innerHTML = "&nbsp;&nbsp;&nbsp;Tiempo: "+tiempo; 

    if (tiempo == 0) {
        window.location.reload();
        alert("¡No te desanimes!, intentalo otra vez.");
        tiempo = 0;
        puntos = 0;
    }
}

setInterval(restarTiempo,1000);
</script>