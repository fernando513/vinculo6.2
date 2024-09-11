<?php
include 'inc_header.php';

if (!isset($pagx)) { $pagx = 'Nosotros: '; } //texto que muestra previo al contacto
//if (!isset($categ57)) { $categ57 = '12'; } // area
if (!isset($pagexito)) { $pagexito = 'https://'.$domain22.'/contacto.php?formok=1'; } //si se envió correcto
if (!isset($pagerror)) { $pagerror = 'https://'.$domain22.'/contacto.php?error1=1'; } //si tiene error, se suma en la url el error
?>	
<title>Vínculo - Nosotros</title>
</head>
 
<body>
<?php include 'inc_cabecera.php' ?>

<!-- Título Principal Inicio -->
<div id="header-holder" class="inner-header about-header">
    <div class="bg-custom">
        <div class="obj-gradiant1"></div>
        <div class="obj-gradiant2"></div>
    </div>
    
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="icons-animation-holder">
                        <div class="aicon aicon1"><img src="images/aicon1.png" alt=""></div>
                        <div class="aicon aicon2"><img src="images/aicon2.png" alt=""></div>
                        <div class="aicon aicon3"><img src="images/aicon3.png" alt=""></div>
                        <div class="aicon aicon4"><img src="images/aicon4.png" alt=""></div>
                        <div class="aicon aicon-main">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 134 38" width="124px" height="35px" class="logo">
                                <text kerning="auto" font-family="Rubik" fill="rgb(255, 255, 255)" transform="matrix( 11.051445195489, 0, 0, 11.0388026563729,0.08427829227281, 28.538802656373)" font-size="3.46px"><img src="images/logi.png"  style="margin-top: -49px;"></text>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 company-info-holder">
                    <h4>Sobre nosotros</h4>
                    <div class="info-slider">
                        <div>
                            <div class="details-holder">
                            <p style="font-size: 20px;">Vínculo.cl nace el año 2003 en Santiago de Chile, ofreciendo servicio de Web Hosting para rápidamente comenzar a desarrollar software y sitios web siempre orientados a tener a Internet como plataforma central. <br><br>
                                Nos gusta atenderlo como se merece y ser capaces de entregar herramientas que contribuyan a mejorar la gestión de los procesos de su empresa mejorando su eficiencia, movilidad y calidad de vida.</p>
                            </div>
                        </div>
                        <!--<div>
                            <div class="details-holder">
                                <p>Nos gusta atenderlo como se merece y ser capaces de entregar herramientas que contribuyan a mejorar la gestión de los procesos de su empresa mejorando su eficiencia, movilidad y calidad de vida.</p>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="message1" class="container-fluid message-area normal-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
            <!--<div class="info-text" style="font-size: 17px;">Vínculo.cl nace el año 2003 en Santiago de Chile, ofreciendo servicio de Web Hosting para rápidamente comenzar a desarrollar software y sitios web siempre orientados a tener a Internet como plataforma central. 
Nos gusta atenderlo como se merece y ser capaces de entregar herramientas que contribuyan a mejorar la gestión de los procesos de su empresa mejorando su eficiencia, movilidad y calidad de vida.
</div><br>-->
                <div class="text-other-color1">¿Tiene alguna consulta?</div>
                <div class="text-other-color2">¡No dude en contactarnos!</div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="buttons-holder">
                    <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>" class="ybtn ybtn-accent-color">Contáctenos</a>
                </div>
            </div>
        </div>
    </div>
</div>

   
</div>
<!-- Footer -->
<?php include 'inc_footer.php' ?>