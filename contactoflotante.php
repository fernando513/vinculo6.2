<style type="text/css">
  /* Contacto flotante inicio */

#live-chat {
  bottom: 0;
  font-size: 12px;
  right: 24px;
  position: fixed;
  width: 300px;
  z-index: 100;
}

#live-chat header {
  background: #478bee;
  border-radius: 5px 5px 0 0;
  color: #fff;
  cursor: pointer;
  padding: 16px 24px;
}

#live-chat h4:before {
  background: #1a8a34;
  border-radius: 50%;
  content: "";
  display: inline-block;
  height: 8px;
  margin: 0 8px 0 0;
  width: 8px;
}

#live-chat h4 {
  font-size: 12px;
}

#live-chat h5 {
  font-size: 10px;
}

#live-chat form {
  padding: 24px;
}

#live-chat input[type="text"] {
  border: 1px solid #ccc;
  border-radius: 3px;
  padding: 8px;
  outline: none;
  width: 234px;
  height: 30px;
}

#live-chat textarea {
    height: 45px;
    min-height: 45px;
}

.chat-message-counter {
  background: ;
  border: 1px solid #fff;
  border-radius: 50%;
  display: block;/*Si se quiere abierto el chat, cambiar a none*/
  font-size: 12px;
  font-weight: bold;
  height: 40px;
  left: 0;
  line-height: 3px;
  margin: 0 10px 0 0;
  /*position: absolute;*/
  text-align: center;
  top: 0;
  width: 40px;
  float: left;
}

.chat-close {
  background: #3f7bd3;
  border-radius: 50%;
  color: #fff;
  display: block;
  float: right;
  font-size: 10px;
  height: 16px;
  line-height: 14px;
  margin: 2px 0 0 0;
  text-align: center;
  width: 16px;
}

.chat {
  background: #fff;
  display: none;/*Si se quiere abierto el chat, comentar estilo*/
  box-shadow: 0px 0px 15px #555555;
    -moz-box-shadow: 0px 0px 15px #555555;
    -webkit-box-shadow: 0px 0px 15px #555555;
}

.chat-history {
  height: 252px;
  padding: 8px 24px;
  overflow-y: scroll;
}



.chat-message-content {
  margin-left: 56px;
}



.chat-feedback {
  font-style: italic; 
  margin: 0 0 0 80px;
}

.clearfix2 { *zoom: 1; } /* For IE 6/7 */
.clearfix2:before, .clearfix2:after {
    content: "";
    display: table;
}
.clearfix2:after { clear: both; }

.marg01 {
  margin-bottom: 3px;
  width: 100% !important;
  font-size: inherit !important;
}

.marg02 {
  height: 20px !important;
}

.left1 {
    text-align: left;
}

.botoncontact {
    background-color: #e56700 !important;
    border: #e56700 !important;
}

.conte01 {
    width: 100%;
    padding: 0 !important;
    margin: 0 auto;
    float: right;
}

/* Contacto flotante fin */
</style>

  
  <div id="live-chat" class="clearfix2">
    
    <header class="clearfix2">
      
      <a href="#" class="chat-close">x</a>

      <span class="chat-message-counter"><img src="images/gabiflotant.png" data-thumb="images/gabiflotant.png" alt="" style="width: 100%;"></span>

      <h4>¿Tienes alguna consulta?</h4>


    </header>

    <div class="chat">
      

      <!-- Contenido en blanco Inicio -->
      <div class="chat-history">

      <p></p>

      <?php /* 

      <form class="form-contact contact_form" action="https://c.c1.cl/inc_contacto.php?formok=1" method="post" name="medaigual" target="_top">

        <div class="col-12"><div class="marg03">
        <input class="form-control" name="nombre" type="text" id="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre" required>
        </div></div>

        <div class="col-12"><div class="marg03">
        <input class="form-control" name="email" type="email" id="email" value="<?php echo $email; ?>" placeholder="E-mail" required>
        </div></div>

        <div class="col-12"><div class="marg03">
        <input class="form-control" type="text" id="tel" name="tel" value="<?php  echo $tel; ?>" placeholder="Teléfono" required>
        </div></div>

        <div class="col-12"><div class="marg03">
        <textarea class="form-control" rows="2" id="comet" name="comet"  placeholder="Mensaje" required><?php echo $comet; ?></textarea>
        </div></div>

        <button type="submit" class="genric-btn primary circle arrow" style="float: none;margin: 0 auto;display: table;">Enviar</button>

       
      </form>
*/
?>

      <form class="conte01" action="https://c.c1.cl/inc_contacto.php?formok=1" method="post" target="_top">
          <input class="form-control marg01" name="nombre" type="text" id="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre" required>
          <input class="form-control marg01" name="email" type="email" id="email" value="<?php echo $email; ?>" placeholder="E-mail" required>
          <input class="form-control marg01" type="text" id="tel" name="tel" value="<?php  echo $tel; ?>" placeholder="Teléfono">
          <textarea class="form-control marg01 " rows="2" id="comet" name="comet"  placeholder="Mensaje" required><?php echo $comet; ?></textarea>
          <button type="submit" class="btn btn-primary btn-block center botoncontact">Enviar</button>

          <input name="empx22" type="hidden" id="empx22" value="<?php echo $empx22 ?>" />
          <input name="keyyy22" type="hidden" id="keyyy22" value="<?php echo $keyyy22 ?>" />
          <input name="idprodx" type="hidden" id="idprodx" value="<?php echo $idprodx ?>" />
          <input name="keyprodx" type="hidden" id="keyprodx" value="<?php echo $keyprodx ?>" />
          <input name="pagx" type="hidden" id="pagx" value="<?php echo 'flotante '.$pagx; ?>" />
          <input name="categ57" type="hidden" id="categ57" value="<?php echo $categ57 ?>" />
          <input name="pagctual" type="hidden" id="pagctual" value="<?php echo $pagctual ?>" />
          <input name="pagexito" type="hidden" id="pagexito" value="<?php echo $pagexito; ?>" />
          <input name="pagerror" type="hidden" id="pagerror" value="<?php echo $pagerror; ?>" />
          <input name="link1" type="hidden" id="link1" value="<?php echo $link1; ?>" />
          <input name="ejecutC" type="hidden" id="ejecutC" value="<?php echo $ejecutC; ?>" />
        </form>
      
  

      </div> 
      <!-- Contenido en blanco Fin -->


    </div> 
    <!-- end chat -->

  </div> 
  <!-- end live-chat -->


<script type="text/javascript"> 

/*Tiempo Inicio*/
$(document).ready(function() {   
    setTimeout(function() {
        $('#live-chat').fadeIn(1000);
    },4000);
});
/*Tiempo Fin*/

/*Tiempo abrir Inicio*/
$(document).ready(function() {   
    setTimeout(function() {
        $(".chat").css("display", "block").fadeIn(1000);
    },60000);
});
/*Tiempo abrir Fin*/

/*Abrir y cerrar Inicio*/
(function() {
/*Desaparecer Clase Inicio*/
$('#live-chat').fadeOut(0);
/*Desaparecer Clase Fin*/

  $('#live-chat header').on('click', function() {

    $('.chat').slideToggle(300, 'swing');
    $('.chat-message-counter').fadeToggle(300, 'swing');

  });

  $('.chat-close').on('click', function(e) {

    e.preventDefault();
    $('#live-chat').fadeOut(300);

  });

}) ();
/*Abrir y cerrar Fin*/
</script>












  
