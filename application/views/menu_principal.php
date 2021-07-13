<?php $this->load->view('head') ?> 
        <?php $this->load->view('sonido') ?>
<?php
  # Iniciando la variable de control que permitirá mostrar o no el modal
  $exibirModal = false;
  # Verificando si existe o no la cookie
  if(!isset($_COOKIE["mostrarModal"]))
  {
    # Caso no exista la cookie entra aquí
    # Creamos la cookie con la duración que queramos
     
    $expirar = 3600; // muestra cada 1 hora
    //$expirar = 10800; // muestra cada 3 horas
    //$expirar = 21600; //muestra cada 6 horas
    //$expirar = 43200; //muestra cada 12 horas
    //$expirar = 86400;  // muestra cada 24 horas
    setcookie('mostrarModal', 'SI', (time() + $expirar)); // mostrará cada 12 horas.
    # Ahora nuestra variable de control pasará a tener el valor TRUE (Verdadero)
    $exibirModal = true;
  }
?>





<body id='body'>

        
           

        <div class="fondo">
            <div class="uk-flex uk-flex-middle uk-text-center" style="min-height: 100vh;" uk-grid>
                    <div class="uk-width-1-1">
                            <div class="uk-flex " uk-grid>
                                <div class="uk-width-1-1 uk-animation-slide-top-medium"><h1 style="color:white; font-weight:700;">Plataforma Web enfocada a juegos serios</h1></div>
                                <div class="uk-width-1-3@l uk-text-right" style="z-index: 999;">
                                     <div class="uk-width-1-4@l uk-text-right uk-animation-fade" style="z-index: 999;">
                            </div>
                                </div>
                                <div class="uk-width-1-3@l uk-padding-large uk-animation-scale-up uk-transform-origin-bottom-center" style="z-index: 999; background-color: rgba(35, 35, 78, 0.541);">
                                            <a class="menu-button uk-button uk-button-primary" href="<?php echo base_url()?>juego">Jugar Actividad</a><br>
                                            <a class="menu-button uk-button uk-button-primary" href="<?php echo base_url()?>video">Videos Informativos</a><br>
                                            <a class="menu-button uk-button uk-button-primary" href="<?php echo base_url()?>contenido">Información Útil</a>
                                            <a class="menu-button uk-button uk-button-danger" href="<?php echo base_url()?>login">Cerrar sesión</a>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
   <div id="modal-example" bg-close="false" esc-close="false" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">¡Bienvenido!</h2>
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
    
    document.getElementById('modal-texto').innerHTML = '<h3> Has ingresado a la plataforma web enfocada a juegos serios, el lugar donde podrás ejercitar tu cuerpo y mente de una forma fácil y entretenida.<br></b></h3><h3><b>¡Presiona aceptar para elegir una actividad!</b></h3>';
    UIkit.modal('#modal-example').show();

    
</script>