<?php $this->load->view('head') ?> 


<style type="text/css">
.flip-cartaTemporal-inner {
          position: relative;
          width: 100%;
          height: 100%;
          text-align: center;
          transition: transform 0.6s;
          transform-style: preserve-3d;
          box-shadow: 0 4px 8px 0 #0c0d0dbd;
        }
        .flip-cartaTemporal-front, .flip-cartaTemporal-back {
          position: absolute;
          width: 100%;
          height: 100%;
          -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
        }
        .flip-cartaTemporal-front {
          background-color: #ffffff;
        }
        .flip-cartaTemporal-back {
          background-color: #ffffff;
          transform: rotateY(180deg);
        }
        .center{
            text-align: center;
        }
</style>

    <body id='body'>

        
           

             <div class="fondo">
            <div class="uk-flex uk-flex-middle uk-text-center" style="min-height: 100vh;" uk-grid>
                <div class="uk-width-1-1">
                        <div class="uk-flex" uk-grid>
                            <div class="uk-width-1-1 uk-animation-slide-top-medium"><h1 style="color:white; font-weight:700;">Plataforma Web enfocada a juegos serios <br>"Juego de memoria alimenticia"</h1></div>
                            <div class="uk-width-1-4@l uk-text-right uk-animation-fade" style="z-index: 999;">
                                <ul class="uk-list">
                                    <li><a href="<?php echo base_url()?>juego" class="list-button uk-button">Volver atrás</a></li>
                                    <li><a href="<?php echo base_url()?>menu_principal" class="list-button uk-button">Volver al menú principal</a></li>
                                </ul>
                            </div>
                            <div class="uk-width-2-3@l uk-padding-large uk-animation-fade" style="z-index: 999; align-items: center; background-color: rgba(35, 35, 78, 0.541);">
                                 <!----------------------------------------------------------------------------------------------------------------------------->
  <div id="pantalla" class="uk-align-center" 
         style="width: 500px; height: 420px;background-color: aquamarine;position: relative;box-shadow: 0 4px 8px 0 #0c0d0dbd;">
        <div id="ganaste" 
             style="position: absolute;left: 45px;top: 150px;font-size: 70px;font-weight: bold;color: #1900ca;display: none;">
              GANASTE !!! 
        </div>
        <div style="position: absolute;left: 10px;top: 380px;">
            <p style="font-size: 16px;font-weight: bold;position: relative;float: left;">Encontrados: 
                <span id="encontrados" style="color: red;font-weight: bold;">0</span>
            </p>
            <p style="font-size: 16px;font-weight: bold;position: relative;float: left;margin-left: 25px;">Faltantes: 
                <span id="faltantes" style="color: red;font-weight: bold;">6</span>
            </p>
            <!--p style="font-size: 16px;font-weight: bold;position: relative;float: left;margin-left: 25px;">Tiempo: 
                <span id="temporizador" style="color: red;font-weight: bold;">0</span>
            </p-->
            <p style="font-size: 16px;font-weight: bold;position: relative;float: left;margin-left: 25px;">Intentos: 
                <span id="intentos" style="color: red;font-weight: bold;">0</span>
            </p>
        </div>
    </div>

    <script>
        var cartasArray = [1,2,3,4,5,6,1,2,3,4,5,6];
        var contadorVolteadas = 0;
        var carta1 = '';
        var carta2 = '';
        var encontradas = 0;
        var faltantes = 6;
        var tiempo = 0;
        var temporizador ;
        var intentos = 0;
        var clic = false;
        function carta(x,y,w,h,imagenFrente,imagenAtras){
            this.x = x;
            this.y = y;
            this.w = w;
            this.h = h;
            this.imagenAtras = imagenAtras;
            this.imagenFrente = imagenFrente;
            this.template = `
            <div onclick="voltear(this)" class="flip-cartaTemporal ctrlCartas" carta="`+this.imagenAtras+`" 
                style="position: absolute;left: `+this.x+`px;top: `+this.y+`px; margin: 10px; width:`+this.w+`px; height:`+this.h+`px;">
                <div class="flip-cartaTemporal-inner">
                    <div class="flip-cartaTemporal-front">
                        <img src="`+this.imagenFrente+`" alt="AvatarF" style="width:`+this.w+`px;height:`+this.h+`px;">
                    </div>
                    <div class="flip-cartaTemporal-back">
                        <img src="`+this.imagenAtras+`" alt="AvatarB" style="width:`+this.w+`px;height:`+this.h+`px;">
                    </div>
                </div>
            </div> 
            `;
        }
        
        window.onload = function() {
            cargaCartas();
            temporizador();
        };

        function desordenarArrays(arrayX){
            let arrayReacomodado = arrayX.sort(function(){return Math.random() -0.5});
            return arrayReacomodado;
        }

        function temporizador(){
            temporizador = setInterval(() => {
                tiempo++
                document.getElementById('temporizador').innerHTML = tiempo;
            }, 1000);
        }

        function cargaCartas(){
            let cartasTemporal = desordenarArrays(cartasArray);
            let modificador = 10;
            for(let i=0;i<12;i++){
                let lugar = document.getElementById("pantalla"); 
                if(i == 4 || i == 8){ modificador = 10; }
                if(i < 4){ y = 10; }
                if(i < 8 && i >3){ y = 130; }
                if(i < 12 && i >7){ y = 250; }
                let cartaTemporal = new carta(modificador ,y ,100 ,100 ,'<?php echo base_url()?>assets/back.png','<?php echo base_url()?>assets/'+cartasTemporal[i]+'.png');
                lugar.insertAdjacentHTML("beforeend", cartaTemporal.template);
                modificador = modificador + 120;
            }
        } 

        function voltear(e){
            e.setAttribute('onclick',"");
            e.classList.add('volteada');
            if(contadorVolteadas < 2){
                let imagenX = e.getAttribute('carta');
                if(contadorVolteadas == 0){
                    carta1 = imagenX;
                }
                if(contadorVolteadas == 1){
                    carta2 = imagenX;
                }
                e.firstElementChild.style.transform = ' rotateY(180deg) ';
                contadorVolteadas++;
                if(contadorVolteadas == 2){
                    intentos++;
                    document.getElementById('intentos').innerHTML = intentos ;
                    let cartasArray = document.getElementsByClassName('flip-cartaTemporal-inner');
                    setTimeout(() => {
                        if(carta1 == carta2){
                            let chequeo = document.getElementsByClassName('ctrlCartas');
                            for (let cartaX of chequeo) {
                                let imagenCarta = cartaX.getAttribute('carta');
                                if(imagenCarta == carta1){
                                    cartaX.setAttribute("style", "display: none;");
                                    encontradas = encontradas + .5;
                                    faltantes = faltantes - .5;
                                    document.getElementById('encontrados').innerHTML = encontradas ;
                                    document.getElementById('faltantes').innerHTML = faltantes ;
                                    if(encontradas == 6){
                                        clearInterval(temporizador);
                                        document.getElementById('ganaste').style.display = 'block';
                                    }
                                }
                            }
                        }else{
                            let volteadas = document.getElementsByClassName('volteada');
                            let cantidadVolteadas = volteadas.length - 1;
                            for (let index = cantidadVolteadas; index >= 0; index--) {
                                volteadas[index].setAttribute("onclick","voltear(this);")
                                volteadas[index].classList.remove("volteada");
                            }
                        }
                        for(let cartaX of cartasArray){
                            cartaX.style.transform = '' ;
                            contadorVolteadas = 0;
                        }
                    }, 1000);
                }
            }
        }
    </script>
                             <!----------------------------------------------------------------------------------------------------------------------------->
  
                        </div>
                </div>
            </div>
                
            
        </div>
   
        <div id="modal-example" bg-close="false" esc-close="false" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Juego Memoria Saludable.</h2>
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
    
  document.getElementById('modal-texto').innerHTML = '<b>Instrucciones:</b> El juego consiste en encontrar el par de frutas saludables memorizando su posición<br><b>-Toca la carta para descubrir cual es.</b><br><b>-Toca con tu dedo si estás en un dispositivo con pantalla táctil para descubrir que hay detras de la carta.</b><br><b>-Necesitas encontrar los 6 pares idénticos para ganar.</b><br><b>-No tienes tiempo para lograr los puntos requeridos.</b><br><h3><b>Presiona aceptar para comenzar el juego, ¡Suerte!</b></h3>';
    UIkit.modal('#modal-example').show();
</script>