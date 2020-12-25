
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
.contenedor_video {
    top:13vh;
    position: relative;
    text-align: center;
    padding: 0px;
    margin: auto;
    width: 1280px;
    height: 720px;
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
    <style>

#main {
  width: 100%;
  max-width: 800px;
  margin: 30px auto 20px;
}
#main p {
  padding: 20px;
  margin:20px 0;
  background: lightyellow;
}
.youtube-player {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  max-width: 100%;
  background: #000;
  margin: 5px;
}

.youtube-player iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 100;
  background: transparent;
}

.youtube-player img {
  object-fit: cover;
  display: block;
  left: 0;
  bottom: 0;
  margin: auto;
  max-width: 100%;
  width: 100%;
  position: absolute;
  right: 0;
  top: 0;
  border: none;
  height: auto;
  cursor: pointer;
  -webkit-transition: 0.4s all;
  -moz-transition: 0.4s all;
  transition: 0.4s all;
}

.youtube-player img:hover {
  -webkit-filter: brightness(75%);
  -moz-filter: brightness(75%);
  filter: brightness(75%);
}

.youtube-player .play {
  height: 72px;
  width: 72px;
  left: 50%;
  top: 50%;
  margin-left: -36px;
  margin-top: -36px;
  position: absolute;
  background: url("https://i.imgur.com/TxzC70f.png") no-repeat;
  cursor: pointer;
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
            <!--div> 
                <div class="contenedor_juego pointer">
                        <span id="puntos"></span>
                        <span id="ned"></span>
                        <span id="tiempo"></span>
                </div>
                <div class="contenedor_juego">
                    <div id="player"></div>
                </div>
            </div-->
            <div class="contenedor_video" style="overflow:hidden;position: relative;"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="1280" height="720" type="text/html" src="https://www.youtube.com/embed/cutMTZkcuf0?autoplay=0&fs=1&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&vq=hd1080"></iframe><div style="position: absolute;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 0px;background: #fff;"> <a href="https://deloge.de/search/ista-webportal-de-freischaltcode" rel="nofollow">ista webportal</a> </small></div><style>.newst{position:relative;text-align:right;height:420px;width:520px;} #gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />

            <!--div class="youtube-player" data-id="recomendacion_adulto_mayor">
                <iframe width="640" height="360" src="https://www.youtube.com/watch?v=cutMTZkcuf0&t" frameborder="0" allowfullscreen></iframe>
            </div-->

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



<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script>
       var currentTime = new Date().getTime();
        Date.prototype.addHours = function(h) {    
           this.setTime(this.getTime() + (h*60*60*1000)); 

           return this;   
        }
        var after24 = new Date().addHours(10).getTime();
        $('.btn-info').click(function(){
           $('.cookies-content').hide();
          
            localStorage.setItem('desiredTime', after24); 
        });
        if(localStorage.getItem('desiredTime') >= currentTime)
        {
            $('.cookies-content').hide();
        }
        else
        {
            $('.cookies-content').show();
        }

     $('.dropdown-toggle').click(function(){
      $('.dropdown-menu').slideToggle()
     })
   
  $('.resp-menu').click(function(){
      $('.menu').toggleClass('d-flex');
     })


    var modal = $("#myModal");
    
                  $('#map_generate_button').click(function(){
           
                modal.show();
        
                        
                 });


            $("#myModal .close").click(function(){
                
                  $('.iframe-div').hide();
       
                modal.hide();
            });
          
            $(window).click(function(e) {
                if (e.target.id == modal.attr('id')) {
          
                modal.hide();

              }
              
            });
          // Dropdown toggle
$('.dropdown-toggle').click(function(){
  
  $(this).next('.dropdown').toggle();
});

$(document).click(function(e) {
  var target = e.target;
  if (!$(target).is('.dropdown-toggle') && !$(target).parents().is('.dropdown-toggle')) {
    $('.dropdown').hide();
  }
});

          function getMapParams(callback){
          
             var mapTitle = $('.map-title').val();
            var mapAddress=$('.map-address').val();
            var mapType = $('.map-type').val();
            var mapZoom = $('.map-zoom').val();
            var mapWidth = $('.map-width').val();
            var mapHeight=$('.map-height').val();
              var html = '<iframe src="https://maps.google.com/maps?hl=en&q='+mapAddress+'(Title)&ie=UTF8&t='+mapType+'&z='+mapZoom+'&iwloc=B&output=embed" width="'+mapWidth+'" height="'+mapHeight+'" frameborder="0" style="border:0;" allowfullscreen=""></iframe>';
                 
              $('.map-iframe').html(html);
             
                 setTimeout(function(){ 
                    $('.loader-gif').hide();
                  $('.map-iframe').show()
               },300);
           
               
          }
            $('.map-address,.map-width,.map-height').keyup(function(){
               $('.map-iframe').hide()
                $('.loader-gif').show();
                
                   getMapParams();

                 
                    
                 });
              
          $('.map-type,.map-zoom').change(function(){
               $('.map-iframe').hide()
                $('.loader-gif').show();
                
                   getMapParams();

                 

          })
          
       
$('.selectAll').click(function(){
  $('.map-value').select()
})


      function generateYoutube(){
    var youtube_addr = $(".url").val();
    var width = $("#ninja_forms_field_11").val();
    var height = $(".height").val();
    var is_old = $(".oldcode").is(':checked');
    var is_autoplay = $(".autoplay").is(':checked') ? '1' : '0';
    var is_fullscreen = $(".allow_fullscreen").is(':checked') ? '1' : '0';
    var is_annotations = $(".annotations").is(':checked') ? '1' : '3';
    var is_showinfo = $(".showinfo").is(':checked') 
? '1' : '0';
    var is_related = $(".related").is(':checked') ? '1' : '0';
    var is_captions = $(".captions").is(':checked') ? '1' : '0';
    var start = $(".start").val();
    var end = $(".end").val();
    var aspect = $(".aspect").val();
    // if (aspect == '16:9') width = height * 1.78;
    // if (aspect == '4:3') width = height * 1.33;
    // if (aspect == '1:1') width = height;
    var quality = $(".quality").val();
    if (quality == 'Auto') quality = false;
    if (quality == '240p') quality = 'small';
    if (quality == '360p') quality = 'medium';
    if (quality == '480p') quality = 'large';
    if (quality == '720p') quality = 'hd720';
    if (quality == '1080p') quality = 'hd1080';

    var youtube_regex = /^.*(youtu.be\/|v\/|e\/|u\/\w+\/|embed\/|v=)([^#\&\?]*).*/;
    var regex_match = youtube_addr.match(youtube_regex);
    if (regex_match && regex_match.length >= 3) {
        var video_code = regex_match[2];
        if (is_old) {
            var map_code =
                '<object '
                    .concat('width="', width, '" ')
                    .concat('height="', height, '"> ')
                    .concat('<param name="movie" value="https://www.youtube.com/v/', video_code, '?version=3&autoplay=0"', '></param> ')
                    .concat('<param name="allowScriptAccess" value="always"></param> ')
                    .concat(
                    '<embed ',
                    'src="', "https://www.youtube.com/v/", video_code, '?version=3&', "autoplay=", is_autoplay, "\" ",
                    'type="application/x-shockwave-flash" ',
                    'allowscriptaccess="always" ',
                    'width="', width, '" ',
                    'height="', height, '" ',
                    '></embed>'
                )
                    .concat('</object>');
        } else {
            var map_code = '<div style="overflow:hidden;position: relative;"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"'
                .concat('width="', width, '" ')
                .concat('height="', height, '" ')
                .concat('type=', '"text/html" ')
                .concat('src="', "".concat(
                    "https://www.youtube.com/embed/".concat(
                        video_code,
                        '?',
                        "autoplay=",
                        is_autoplay,
                        "&fs=",
                        is_fullscreen,
                        "&iv_load_policy=",
                        is_annotations,
                        "&showinfo=",
                        is_showinfo,
                        "&rel=",
                        is_related,
                        "&cc_load_policy=",
                        is_captions,
                        "&start=",
                        start,
                        "&end=",
                        end,
                        quality ? '&vq=' + quality : ''
                    )
                ), '"')
                .concat('></iframe><div style="position: absolute;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 0px;background: #fff;"> <a href="https://deloge.de/search/ista-webportal-de-freischaltcode" rel="nofollow">ista webportal</a> </small></div><style>.newst{position:relative;text-align:right;height:420px;width:520px;} #gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />');
        }

        var map = $(map_code);
        $(".googleMapWrap").html(map);
        $("#google_maps_code_area").val(map_code);
    }
}

           $("button#map_generate_button").click(function(e){
        e.preventDefault();
        generateYoutube();
        return false;
    });
             generateYoutube();
  </script>
<script type="text/javascript"><!--
new Image().src = "//counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random();//--></script>
<script>
const images=document.querySelectorAll("[data-src]");function preloadImage(e){const r=e.getAttribute("data-src");r&&(e.src=r)}const imgOptions={},imgObserver=new IntersectionObserver((e,r)=>{e.forEach(e=>{e.isIntersecting&&(preloadImage(e.target),r.unobserve(e.target))})},imgOptions);images.forEach(e=>{imgObserver.observe(e)});
</script>