<?php $this->load->view('head') ?> 
<style type="text/css">
    /*Hoja de estilos*/
#entorno {
    display: block;
    margin: 0 auto;
}

#fondo {
    opacity: 0.3;
}
</style>

    <body id='body'>

        
           

             <div class="fondo">
            <div class="uk-flex uk-flex-middle uk-text-center" style="min-height: 100vh;" uk-grid>
                <div class="uk-width-1-1">
                        <div class="uk-flex" uk-grid>
                            <div class="uk-width-1-1 uk-animation-slide-top-medium"><h1 style="color:white; font-weight:700;">Plataforma Web enfocada a juegos serios <br>"Juego de ejercicio Mental"</h1></div>
                            <div class="uk-width-1-4@l uk-text-right uk-animation-fade" style="z-index: 999;">
                                <ul class="uk-list">
                                    <li><a href="<?php echo base_url()?>juego" class="list-button uk-button">Volver atrás</a></li>
                                    <li><a href="<?php echo base_url()?>menu_principal" class="list-button uk-button">Volver al menú principal</a></li>
                                </ul>
                            </div>
                            <div class="uk-width-2-3@l uk-padding-large uk-animation-fade" style="z-index: 999; background-color: rgba(35, 35, 78, 0.541);">
                                 <!----------------------------------------------------------------------------------------------------------------------------->
  
                               <svg width="600" height="600" id="entorno">
        <g id="fondo"><image xlink:href="https://github.com/javi3rpizarro/tesis/blob/master/assets/pikachu.png?raw=true" width="400" height="400" x="200" y="100"></g>
    <g class="padre" id="0"><image xlink:href="https://github.com/javi3rpizarro/tesis/blob/master/assets/1.png?raw=true" class="movil"></g>
    <g class="padre" id="1"><image xlink:href="https://github.com/javi3rpizarro/tesis/blob/master/assets/2.png?raw=true" class="movil"></g>
    <g class="padre" id="2"><image xlink:href="https://github.com/javi3rpizarro/tesis/blob/master/assets/3.png?raw=true" class="movil"></g>
    <g class="padre" id="3"><image xlink:href="https://github.com/javi3rpizarro/tesis/blob/master/assets/4.png?raw=true" class="movil"></g>
    <g class="padre" id="4"><image xlink:href="https://github.com/javi3rpizarro/tesis/blob/master/assets/5.png?raw=true" class="movil"></g>
    <g class="padre" id="5"><image xlink:href="https://github.com/javi3rpizarro/tesis/blob/master/assets/6.png?raw=true" class="movil"></g>
    <g class="padre" id="6"><image xlink:href="https://github.com/javi3rpizarro/tesis/blob/master/assets/7.png?raw=true" class="movil"></g>
    <g class="padre" id="7"><image xlink:href="https://github.com/javi3rpizarro/tesis/blob/master/assets/8.png?raw=true" class="movil"></g>
    <g class="padre" id="8"><image xlink:href="https://github.com/javi3rpizarro/tesis/blob/master/assets/9.png?raw=true" class="movil"></g>
</svg>
<audio id="win" src="https://github.com/javi3rpizarro/tesis/blob/master/assets/media_win.mp3?raw=true"></audio>
       
                            </div>
                             <!----------------------------------------------------------------------------------------------------------------------------->
  
                        </div>
                </div>
            </div>
                
            
        </div>
   
        <div id="modal-example" bg-close="false" esc-close="false" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Juego ejercicio Mental</h2>
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
    /*Programacion de JavaScript*/
     document.getElementById('modal-texto').innerHTML = '<h3>Instrucciones: <br> El juego consiste en armar el rompecabezas, de manera que mejores tu habilidad reconociendo y recordando sus piezas<br><br><b>-No tienes un tiempo para realizarlo, esfuerzate lo más que puedas.</b><br><b>-Al completar el rompecabezas la figura sonará indicando que terminaste.</b><br><b>-Con tu mouse, arrastra las piezas a su correspondiente posición.<br></b></h3><h3><b>Presiona aceptar para comenzar el juego, ¡Suerte!</b></h3>';
    UIkit.modal('#modal-example').show();

var piezas = document.getElementsByClassName('movil');

var tamWidh = [134,192,134,163,134,163,134,192,134];
var tamHeight = [163,134,163,134,192,134,163,134,163];

for(var i=0;i<piezas.length;i++){
    piezas[i].setAttribute("width", tamWidh[i]);
    piezas[i].setAttribute("height",tamHeight[i]);
    piezas[i].setAttribute("x", Math.floor((Math.random() * 10) + 1));
    piezas[i].setAttribute("y", Math.floor((Math.random() * 409) + 1));
    piezas[i].setAttribute("onmousedown","seleccionarElemento(evt)");
}

var elementSelect = 0;  
var currentX = 0;
var currentY = 0;
var currentPosX = 0;
var currentPosY = 0;

function seleccionarElemento(evt) {
    elementSelect = reordenar(evt);
    currentX = evt.clientX;        
    currentY = evt.clientY;
    currentPosx = parseFloat(elementSelect.getAttribute("x"));     
    currentPosy = parseFloat(elementSelect.getAttribute("y"));
    elementSelect.setAttribute("onmousemove","moverElemento(evt)");
}

function moverElemento(evt){
    var dx = evt.clientX - currentX;
    var dy = evt.clientY - currentY;
    currentPosx = currentPosx + dx;
    currentPosy = currentPosy + dy;
    elementSelect.setAttribute("x",currentPosx);
    elementSelect.setAttribute("y",currentPosy);
    currentX = evt.clientX;        
    currentY = evt.clientY;
    elementSelect.setAttribute("onmouseout","deseleccionarElemento(evt)");
    elementSelect.setAttribute("onmouseup","deseleccionarElemento(evt)");
    iman();
}

function deseleccionarElemento(evt){
    testing();
    if(elementSelect != 0){         
        elementSelect.removeAttribute("onmousemove");
        elementSelect.removeAttribute("onmouseout");
        elementSelect.removeAttribute("onmouseup");
        elementSelect = 0;
    }
}

var entorno = document.getElementById('entorno');

function reordenar(evt){
    var padre = evt.target.parentNode;
    var clone = padre.cloneNode(true);
    var id = padre.getAttribute("id");
    entorno.removeChild(document.getElementById(id));
    entorno.appendChild(clone);
    return entorno.lastChild.firstChild;
}

var origX = [200,304,466,200,333,437,200,304,466];   
var origY = [100,100,100,233,204,233,337,366,337];

function iman(){
    for(var i=0;i<piezas.length;i++){
        if (Math.abs(currentPosx-origX[i])<15 && Math.abs(currentPosy-origY[i])<15) {
            elementSelect.setAttribute("x",origX[i]);
            elementSelect.setAttribute("y",origY[i]);
        }
    }
}
            
var win = document.getElementById("win");

function testing() {
    var bien_ubicada = 0;
    var padres = document.getElementsByClassName('padre');
    for(var i=0;i<piezas.length;i++){
        var posx = parseFloat(padres[i].firstChild.getAttribute("x"));    
        var posy = parseFloat(padres[i].firstChild.getAttribute("y"));
        ide = padres[i].getAttribute("id");
        if(origX[ide] == posx && origY[ide] == posy){
            bien_ubicada = bien_ubicada + 1;
        }
    }
    if(bien_ubicada == 9){
        win.play();
    }
    if(bien_ubicada == 9){
        document.getElementById('modal-texto').innerHTML = '¡Felicitaciones!, has completado el juego, ¡Qué bien reconoces las piezas del rompecabezas!';
        document.getElementById('boton-modal').onclick = function(){window.location.reload()};
    UIkit.modal('#modal-example').show();
    }
}


</script>