<?php $this->load->view('head') ?>   
    <body id='body'>
           

        <div class="fondo">
            <div class="uk-flex uk-flex-middle uk-text-center" style="min-height: 100vh;" uk-grid>
                <div class="uk-width-1-1">
                        <div class="uk-flex" uk-grid>
                            <div class="uk-width-1-1"><h1 style="color:white; font-weight:700;">Plataforma Web enfocada a juegos serios</h1></div>
                            <div class="uk-width-1-4@l uk-text-right" style="z-index: 999;">
                                <ul class="uk-list">
                                    <li><a href="<?php echo base_url()?>juego" class="list-button uk-button">Volver atrás</a></li>
                                    <li><a href="<?php echo base_url()?>" class="list-button uk-button">Volver al menú principal</a></li>
                                </ul>
                            </div>
                            <div class="uk-width-2-3@l uk-padding-large" style="z-index: 999; background-color: rgba(35, 35, 78, 0.541);">
                                <div class="contenedor_juego pointer">
                                    <span id="puntos"></span>
                                    <span id="ned"></span>
                                    <span id="tiempo"></span>
                                </div>
                                <div id="contenedor_juego" class="contenedor_juego">
                                    <div id="player"></div>
                                </div>     
                            </div>
                        </div>
                </div>
            </div>
                
            
        </div>
   
        <div id="modal-example" bg-close="false" esc-close="false" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Juego Motricidad Fina</h2>
                <p id="modal-texto"></p>
                <p class="uk-text-right">
                    <button id="boton-modal" class="uk-button uk-button-primary uk-modal-close" onclick="comenzarJuego()" type="button">Aceptar</button>
                  
                </p>
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
    //alert("Presiona aceptar para comenzar");
    document.getElementById('modal-texto').innerHTML = 'Presiona aceptar para comenzar el juego.';
    UIkit.modal('#modal-example').show();
    document.getElementById('player').addEventListener("mouseover",sumarPuntos);

puntos = 0;
tiempo = 60;
necesarios = 30;
anchoContenedor = document.getElementById("contenedor_juego").offsetWidth;
altoContenedor = document.getElementById("contenedor_juego").offsetHeight;
controlContador = null;
function sumarPuntos(){
   puntos++;
   document.getElementById("puntos").innerHTML = "Puntos: <b>" + puntos + "/" + necesarios + "  </b>";
   randNum =  Math.round(Math.random()*altoContenedor);
   randNum2 =  Math.round(Math.random()*anchoContenedor);
   document.getElementById("player").style.marginTop =randNum + "px";
   document.getElementById("player").style.marginLeft =randNum2 + "px";
   if (puntos == necesarios) {
    //window.location.reload();
    //alert("Felicidades, ¡Ganaste!");
    clearInterval(controlContador);
    document.getElementById('modal-texto').innerHTML = 'Felicitaciones, has completado el juego!';
    document.getElementById('boton-modal').onclick = function(){window.location.reload()};
    UIkit.modal('#modal-example').show();
   }
}


function restarTiempo() {

    tiempo--;
    document.getElementById("tiempo").innerHTML = "&nbsp;&nbsp;&nbsp;Tiempo: "+tiempo; 

    if (tiempo == 0) {
        //window.location.reload();
        //alert("¡No te desanimes!, intentalo otra vez.");
        clearInterval(controlContador);
        document.getElementById('modal-texto').innerHTML = 'No te desanimes! Inténtelo nuevamente. Te faltaron ' + (necesarios-puntos) + ' puntos para ganar.';
        document.getElementById('boton-modal').onclick = function(){window.location.reload()};
        UIkit.modal('#modal-example').show();
        tiempo = 0;
        puntos = 0;
    }
}

function comenzarJuego(){
    document.getElementById("puntos").innerHTML = "Puntos: <b>" + puntos + "/" + necesarios + "  </b>";
    document.getElementById("tiempo").innerHTML = "&nbsp;&nbsp;&nbsp;Tiempo: "+tiempo;
    controlContador = setInterval(restarTiempo,1000);
}
</script>