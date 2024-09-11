<?php
include 'inc_header.php'; 

if (!isset($pagx)) { $pagx = 'Fidelizacion: '; } //texto que muestra previo al contacto
if (!isset($categ57)) { $categ57 = '22'; } // area
if (!isset($pagexito)) { $pagexito = 'https://'.$domain22.'/contacto.php?formok=1'; } //si se envió correcto
if (!isset($pagerror)) { $pagerror = 'https://'.$domain22.'/contacto.php?error1=1'; } //si tiene error, se suma en la url el error
?>    

<title>Vínculo.cl - Mailing de Fidelización - Envía emails a tu propia base de datos</title>
</head>
 
<body>
 <?php include 'inc_cabecera.php' ?>

<!-- Título Principal Inicio -->
<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Mailing Fidelización</div>
                    <div id="page-icon">
                        <div class="pricing-icon">
                            <img src="images/service-icon5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Título Principal Fin -->



<!--<div id="h-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text grey-text">Envía correos a sus propias bases de datos y manten comunicación directa con sus clientes.<br><br>

Portal de fácil manejo y de uso personal, entrando con un nombre de usuario y contraseña a través de internet, podrás enviar emails a tu propia base de datos sin que nadie tenga contacto a ella.</div>
            </div>
        </div>
    </div>
</div>-->

<!-- 1 -->
<div id="more-features" class="container-fluid">
    <div class="container">
        <!--<div class="row">
            <div class="col-md-12">
                <div class="row-title">Características</div>
                <div class="row-subtitle"></div>
            </div>
        </div>-->
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Panel de fácil administración</div>
                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Estadísticas online</div>
                    
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Bases de datos ilimitadas</div>
                    
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Programa la comunicación con sus clientes</div>
                    
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Envío de información personalizada a sus clientes</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 1 -->
<div id="pricing" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pricing-box pricing-box-simple pricing-box-horizontal pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-head">
                            <div class="pricing-title">Planes Mailing Fidelización</div>
                        </div>

                        <div class="pricing-details">       
                            <ul>
                                    <li>5.000 Créditos</li>
                                    <li>20.000 Créditos</li>
                                    <li>40.000 Créditos</li>
                                    <li>100.000 Créditos</li>
                            </ul>
                        </div>
                        <div class="pricing-details">       
                            <ul>
                                    <li>$24.575</li>
                                    <li>$58.295</li>
                                    <li>$89.000</li>
                                    <li>$133.500</li>
                            </ul>
                        </div>
                            <div class="pricing-details">       
                            <ul>
                                    <li><a target="_blank" href="https://c.c1.cl/inc_contrat_mailing.php?emp=<?php echo $empx22 ?>&amp;tip_reg=1&amp;cod2=<?php echo $keyyy22 ?>&amp;idplan=9&amp;resell=2&amp;porperso=<?php echo $porperso ?>&amp;link1=<?php echo $link1 ?>&amp;contacto=<?php echo urlencode($nombre) ?>&amp;email=<?php echo urlencode($email) ?>&amp;telefono=<?php echo urlencode($tel) ?>" class="">contratar</a></li>
                                    <li><a target="_blank" href="https://c.c1.cl/inc_contrat_mailing.php?emp=<?php echo $empx22 ?>&amp;tip_reg=1&amp;cod2=<?php echo $keyyy22 ?>&amp;idplan=11&amp;resell=2&amp;porperso=<?php echo $porperso ?>&amp;link1=<?php echo $link1 ?>&amp;contacto=<?php echo urlencode($nombre) ?>&amp;email=<?php echo urlencode($email) ?>&amp;telefono=<?php echo urlencode($tel) ?>" class="">contratar</a></li>
                                    <li><a target="_blank" href="https://c.c1.cl/inc_contrat_mailing.php?emp=<?php echo $empx22 ?>&amp;tip_reg=1&amp;cod2=<?php echo $keyyy22 ?>&amp;idplan=12&amp;resell=2&amp;porperso=<?php echo $porperso ?>&amp;link1=<?php echo $link1 ?>&amp;contacto=<?php echo urlencode($nombre) ?>&amp;email=<?php echo urlencode($email) ?>&amp;telefono=<?php echo urlencode($tel) ?>" class="">contratar</a></li>
                                    <li><a target="_blank" href="https://c.c1.cl/inc_contrat_mailing.php?emp=<?php echo $empx22 ?>&amp;tip_reg=1&amp;cod2=<?php echo $keyyy22 ?>&amp;idplan=13&amp;resell=2&amp;porperso=<?php echo $porperso ?>&amp;link1=<?php echo $link1 ?>&amp;contacto=<?php echo urlencode($nombre) ?>&amp;email=<?php echo urlencode($email) ?>&amp;telefono=<?php echo urlencode($tel) ?>" class="">contratar</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- //////// -->
<div id="h-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text grey-text">Aumente la comunicación y fidelice a sus clientes, acceda a un portal de fácil manejo sin necesidad de congifuraciones complejas, en donde podrá enviar correos a su propia base de datos y mantener un contacto efectivo con quienes ya lo conocen.</div>
            </div>
        </div>
    </div>
</div>
<br>

<!-- //////// -->


<div id="message1" class="container-fluid message-area normal-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="text-other-color1">Contáctese con nosotros</div>
                <div class="text-other-color2">Responderemos todas sus consultas</div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="buttons-holder">
                    <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>" class="ybtn ybtn-accent-color">Contáctenos</a>
                </div>
            </div>
        </div>
    </div>
</div>



   
<!-- Footer -->
<?php include 'inc_footer.php' ?>