<?php $this->load->view('head') ?>   
    <body id='body'>
        <!--h3>
            <?php
            echo $nombre;
            ?>
            
        </h3-->
           

        <div class="fondo">
            <div class="uk-flex uk-flex-middle uk-text-center" style="min-height: 100vh;" uk-grid>
                <div class="uk-width-1-1">
                        <div class="uk-flex" uk-grid>
                            <div class="uk-width-1-1 uk-animation-slide-top-medium"><h1 style="color:white; font-weight:700;">Plataforma Web enfocada a juegos serios <br>"Juego de Motricidad Fina"</h1></div>
                            <div class="uk-width-1-4@l uk-text-right uk-animation-fade" style="z-index: 999;">
                                <ul class="uk-list">
                                    <li><a href="<?php echo base_url()?>juego" class="list-button uk-button">Volver atrás</a></li>
                                    <li><a href="<?php echo base_url()?>menu_principal" class="list-button uk-button">Volver al menú principal</a></li>
                                </ul>
                            </div>
                            <div class="uk-width-2-3@l uk-padding-large uk-animation-fade" style="z-index: 999; background-color: rgba(35, 35, 78, 0.541);">
                                <div class="contenedor_juego pointer">
                                    <span id="puntos"></span>
                                    <span id="ned"></span>
                                    <span id="tiempo"></span>
                                    <span id="mejor tiempo"></span>
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
    document.getElementById('modal-texto').innerHTML = '<b>Instrucciones:</b> El juego consiste en tocar la pelota de color rojo que se mueve aleatoriamente de manera que puedas lograr llegar a los 30 puntos necesarios para ganar en el menor tiempo que puedas. <br><b>-Toca la pelota con el mouse para sumar un punto.</b><br><b>-Toca con tu dedo si estás en un dispositivo con pantalla táctil para sumar un punto.</b><br><b>-Necesitas 30 puntos para ganar.</b><br><b>-Tienes 60 segundos para lograr los puntos requeridos.</b><br><b>-Pierdes cuando tu tiempo se acaba, pero no te preocupes, inténtalo otra vez.</b><br><b>-Trata de terminar en el menor tiempo posible.<br></b><h3><b>Presiona aceptar para comenzar el juego, ¡Suerte!</b></h3>';
    UIkit.modal('#modal-example').show();
    document.getElementById('player').addEventListener("click",sumarPuntos);

puntos = 0;
tiempo = 60;
necesarios = 30;
anchoContenedor = document.getElementById("contenedor_juego").offsetWidth;
altoContenedor = document.getElementById("contenedor_juego").offsetHeight;
controlContador = null;
function sumarPuntos(){
   puntos++;
   document.getElementById("puntos").innerHTML = "Puntos: <b>" + puntos + "/" + necesarios + "  </b>";
   randNum =  Math.round(Math.random()*altoContenedor)-50;
   randNum2 =  Math.round(Math.random()*anchoContenedor);
   document.getElementById("player").style.marginTop =randNum + "px";
   document.getElementById("player").style.marginLeft =randNum2 + "px";
   if (puntos == necesarios) {
    //window.location.reload();
    //alert("Felicidades, ¡Ganaste!");
    clearInterval(controlContador);
    document.getElementById('modal-texto').innerHTML = '¡Felicitaciones!, has completado el juego, tu puntuación fué de ' + (necesarios) + ' puntos en un tiempo de:'+(60-tiempo)+'s, ahora intentalo nuevamente para logar un tiempo menor. ';

    // aca se envian los datos del juego a la bd
        tiempo_total = (60-tiempo);  

    $.ajax({
        url:"<?php echo base_url()?>guardar_puntaje/1/"+ tiempo_total,
        type:"get",
        success: function(response){
            console.log(response);
        }




    });

    //
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
        document.getElementById('modal-texto').innerHTML = '¡No te desanimes! Inténtelo nuevamente. Te faltaron ' + (necesarios-puntos) + ' puntos para ganar.';
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