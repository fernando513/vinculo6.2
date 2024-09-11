<?php
include 'inc_header.php'; 

if (!isset($pagx)) { $pagx = 'Contacto: '; } //texto que muestra previo al contacto
//if (!isset($categ57)) { $categ57 = '12'; } // area
if (!isset($pagexito)) { $pagexito = 'https://'.$domain22.'/contacto.php?formok=1'; } //si se envió correcto
if (!isset($pagerror)) { $pagerror = 'https://'.$domain22.'/contacto.php?error1=1'; } //si tiene error, se suma en la url el error
?>      

<title>Vínculo.cl - Web Hosting - Planes individuales y Empresa - Servidores en Chile</title>
</head>
 
<body>
 <?php include 'inc_cabecera.php' ?>

</div>


<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">¿Tienes alguna consulta?</div>
                <div class="row-subtitle">¡No dude en contactarnos!</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 info-box">

                <div class="">
                <div class="col-md-6">
                    <div class="info-title phone-icon">Llámenos</div>
                    <div class="info-details"><p>Llámenos al<br>
                     <a href="tel:+56225856446">(+56) 225 856 446</a></p>

                    <p>Será atendido por expertos </p></div></div>
                    <div class="col-md-6">

                    <img class="header-graphic" src="images/graphic1.png" alt="" style="width: 331px;">

            </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="signin-signup-form">
                <div class="form-items">
                    <div class="form-title">Contacto</div>

<?php
if ($formok=='1') { ?>

                    <!-- Mensaje enviado Inicio -->
                    <div class="alert alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Mensaje enviado exitosamente, responderemos lo antes posible</strong>
                    </div>
                    <!-- Mensaje enviado IFin -->
<?php 
} else {  

    if ($error1=='1') { ?>

                    <!-- Mensaje NO enviado Inicio -->
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Error en el mensaje enviado: <?php echo $error ?></strong>
                    </div> 
                    <!-- Mensaje NO enviado Fin -->
<?php 
    } 
?> 


                    <form id="signinform" action="https://c.c1.cl/inc_contacto.php?formok=1" method="post" target="_top">
                        <div class="form-text">
                            <input type="text" name="nombre" placeholder="Nombre" required value="<?php echo $nombre; ?>">
                        </div>
                        <div class="form-text">
                            <input type="email" name="email" placeholder="e-mail" value="<?php echo $email; ?>" required>
                        </div>
                        <div class="form-text">
                            <input type="text" name="tel" placeholder="Teléfono" value="<?php  echo $tel; ?>" required>
                        </div>
                        <div class="form-text">
                            <textarea id="comet" name="comet" rows="3" cols="20" placeholder="Mensaje" required style="background-color: #ebeff8;"><?php echo $comet; ?></textarea>
                        </div>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ybtn ybtn-accent-color">Enviar</button>
                            <input name="empx22" type="hidden" id="empx22" value="<?php echo $empx22; ?>" />
                            <input name="keyyy22" type="hidden" id="keyyy22" value="<?php echo $keyyy22; ?>" />
                            <input name="idprodx" type="hidden" id="idprodx" value="<?php echo $idprodx; ?>" />
                            <input name="keyprodx" type="hidden" id="keyprodx" value="<?php echo $keyprodx; ?>" />
                            <input name="pagx" type="hidden" id="pagx" value="<?php echo $pagx; ?>" />
                            <input name="categ57" type="hidden" id="categ57" value="<?php echo $categ57; ?>" />
                            <input name="pagctual" type="hidden" id="pagctual" value="<?php echo $pagctual ?>" />
                            <input name="pagexito" type="hidden" id="pagexito" value="<?php echo $pagexito; ?>" />
                            <input name="pagerror" type="hidden" id="pagerror" value="<?php echo $pagerror; ?>" />
                            <input name="link1" type="hidden" id="link1" value="<?php echo $link1; ?>" />
                            <input name="ejecutC" type="hidden" id="ejecutC" value="<?php echo $ejecutC; ?>" />
                        </div>
                    </form>
<?php
}
?>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>





</body>



<section>

</div><!-- Footer -->
<?php include 'inc_footer.php' ?>
