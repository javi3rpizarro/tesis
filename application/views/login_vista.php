<?php $this->load->view('head') ?>    
        <?php $this->load->view('sonido') ?>

        <style type="text/css">
            input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
-webkit-appearance: none;
margin: 0;
}

input[type="number"] {
-moz-appearance: textfield;
}
input[type="number"]:hover,
input[type="number"]:focus {
-moz-appearance: number-input;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
-webkit-appearance: none;
margin: 0;
}
        </style>

<body id='body'>

           

        <div class="fondo">
            <div class="uk-flex uk-flex-middle uk-text-center" style="min-height: 100vh;" uk-grid>
                    <div class="uk-width-1-1">
                            <div class="uk-flex " uk-grid>
                                <div class="uk-width-1-1 uk-animation-slide-top-medium"><h1 style="color:white; font-weight:700;">Plataforma Web enfocada a juegos serios</h1></div>
                                <div class="uk-width-1-3@l uk-text-right" style="z-index: 999;">
                                </div>
                                <div class="uk-width-1-3@l uk-padding-large uk-animation-scale-up uk-transform-origin-bottom-center" style="z-index: 999; background-color: rgba(35, 35, 78, 0.541);">

                                    <form method="post" action="<?php echo base_url()?>menu">
                                        <input name="nombre" class="menu-button" placeholder="Ingrese su Nombre"  required><br>
                                            <input name="rut" class="menu-button" type="number" placeholder="Ingrese su Rut" type="number" maxlength="8" minlength="7" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required><br>
                                            <button type="submit" class="menu-button uk-button uk-button-primary">Ingresar</button>
                                    </form>
                                            

                                </div>
                            </div>
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
