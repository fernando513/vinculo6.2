<?php
include 'inc_header.php'; 

if (!isset($pagx)) { $pagx = 'Reseller: '; } //texto que muestra previo al contacto
if (!isset($categ57)) { $categ57 = '12'; } // area
if (!isset($pagexito)) { $pagexito = 'https://'.$domain22.'/contacto.php?formok=1'; } //si se envió correcto
if (!isset($pagerror)) { $pagerror = 'https://'.$domain22.'/contacto.php?error1=1'; } //si tiene error, se suma en la url el error
?>    

<title>Vínculo.cl - Hosting Mayorista - Web Hosting Reseller</title>
</head>
 
<body>
 <?php include 'inc_cabecera.php' ?>

<!-- Título Principal Inicio -->
<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Hosting Mayorista</div>
                    <div id="page-icon">
                        <div class="pricing-icon">
                            <img src="images/service-icon2.svg" alt="">
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
                <div class="info-text grey-text">Obtén un 15% de descuento por pago semestral y 20% por pago anual.</div>
            </div>
        </div>
    </div>
</div>-->


<div id="ifeatures" class="container-fluid" style="padding-bottom: 0px;">
    <div class="container">
        <!--<div class="row">
            <div class="col-md-12">
                <div class="row-title">¿Qué nos hace especiales?</div>
                <div class="row-subtitle"></div>
            </div>
        </div>-->
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/acti.jpg" alt="">
                    </div>
                    <div class="feature-title" style="float: left;margin-left: 0;margin-bottom: 5px;margin-top: 5px;">Activación inmediata</div>
                    <div class="feature-details" style="float: left;">Descuento por semestre y año</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/multi.jpg" alt="">
                    </div>
                    <div class="feature-title" style="float: left;margin-left: 0;margin-bottom: 5px;margin-top: 5px;">Múltiples cuentas</div>
                    <div class="feature-details" style="float: left;">Crea múltiples cuentas de hosting utilizando nuestros planes individuales</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/whm.jpg" alt="">
                    </div>
                    <div class="feature-title" style="float: left;margin-left: 0;margin-bottom: 5px;margin-top: 5px;">Acceso a WHM</div>
                    <div class="feature-details" style="float: left;">Cada cuenta creada es independiente y tiene su propio cpanel</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/feature4.png" alt="">
                    </div>
                    <div class="feature-title" style="float: left;margin-left: 0;margin-bottom: 5px;margin-top: 5px;">Alta velocidad nacional</div>
                    <div class="feature-details" style="float: left;">Servidores en Chile</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pricing" class="container-fluid">
    <div class="container">
        <div class="row">


            
            <!-- Plan Inicio -->
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box pricing-box-simple pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Rookie</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>32 GB de Almacenamiento</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#monthly1">Mensual</a></li>
                                    <li><a data-toggle="tab" href="#semestral1">Semestral</a></li>
                                    <li><a data-toggle="tab" href="#annualy1">Anual</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="monthly1" class="tab-pane fade in active">
                                        <div class="pricing-price">$15.000</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                    <div id="semestral1" class="tab-pane fade">
                                        <div class="pricing-price">$76.500</div>
                                        <div class="billing-cycle">+ IVA / Sem</div>
                                    </div>
                                    <div id="annualy1" class="tab-pane fade">
                                        <div class="pricing-price">$144.000</div>
                                        <div class="billing-cycle">+ IVA / Año</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" target="_blank" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=4&resell=1&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>">Contratar</a>
                        </div>
                        <div class="pricing-details">
                            <ul>
                            <a href="#domain-pricing"><li>Ver más detalle de los planes</li></a>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Plan Fin -->

            <!-- Plan Inicio -->
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box pricing-box-simple pricing-color2">
                    <div class="pricing-content">
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Intermedio</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>56 GB de Almacenamiento</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#monthly2">Mensual</a></li>
                                    <li><a data-toggle="tab" href="#semestral2">Semestral</a></li>
                                    <li><a data-toggle="tab" href="#annualy2">Anual</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="monthly2" class="tab-pane fade in active">
                                        <div class="pricing-price">$25.000</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                    <div id="semestral2" class="tab-pane fade">
                                        <div class="pricing-price">$127.500</div>
                                        <div class="billing-cycle">+ IVA / Sem</div>
                                    </div>
                                    <div id="annualy2" class="tab-pane fade">
                                        <div class="pricing-price">$240.000</div>
                                        <div class="billing-cycle">+ IVA / Año</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" target="_blank"  href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=5&resell=1&amp;porperso=<?php echo $porperso; ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>">Contratar</a>
                        </div>
                        <div class="pricing-details">
                            <ul>
                            <a href="#domain-pricing"><li>Ver más detalle de los planes</li></a>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Plan Fin -->

            <!-- Plan Inicio -->
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box pricing-box-simple pricing-color3">
                    <div class="pricing-content">
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Profesional</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>120 GB de Almacenamiento</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#monthly3">Mensual</a></li>
                                    <li><a data-toggle="tab" href="#semestral3">Semestral</a></li>
                                    <li><a data-toggle="tab" href="#annualy3">Anual</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="monthly3" class="tab-pane fade in active">
                                        <div class="pricing-price">$50.000</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                    <div id="semestral3" class="tab-pane fade">
                                        <div class="pricing-price">$255.000</div>
                                        <div class="billing-cycle">+ IVA / Sem</div>
                                    </div>
                                    <div id="annualy3" class="tab-pane fade">
                                        <div class="pricing-price">$480.000</div>
                                        <div class="billing-cycle">+ IVA / Año</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" target="_blank"  href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=6&resell=1&amp;porperso=<?php echo $porperso; ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>">Contratar</a>
                        </div>
                        <div class="pricing-details">
                            <ul>
                                <a href="#domain-pricing"><li>Ver más detalle de los planes</li></a>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Plan Fin -->

        </div>
    </div>
</div>

<!--<div id="apps" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-icon"><img src="images/click-icon.png"></div>
                <div class="row-title">Instala Apps en pocos click´s</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="apps-holder">
                    <div class="apps-links-holder">
                        <div class="app-icon-holder app-icon-holder1 opened" data-id="1">
                            <div class="app-icon"><img class="grayscale" src="images/wordpress.png" alt="wordpress"></div>
                        </div>
                        <div class="app-icon-holder app-icon-holder2" data-id="2">
                            <div class="app-icon"><img class="brightness" src="images/joomla.png" alt="joomla"></div>
                        </div>
                        <div class="app-icon-holder app-icon-holder3" data-id="3">
                            <div class="app-icon"><img class="grayscale" src="images/drupal.png" alt="drupal"></div>
                        </div>
                        <div class="app-icon-holder app-icon-holder4" data-id="4">
                            <div class="app-icon"><img class="brightness" src="images/magento.png" alt="magento"></div>
                        </div>
                    </div>
                    <div class="apps-details-holder">
                        <div class="app-details">
                            <div class="app-details1 show-details">
                                <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="images/wordpress-preview.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Wordpress Hosting</div>
                                    <div class="app-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                    <div class="app-link">
                                        <a href="contact.html" class="ybtn ybtn-white ybtn-shadow">Contactáctanos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="app-details2">
                                <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="images/joomla-preview.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Joomla Hosting</div>
                                    <div class="app-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                    <div class="app-link">
                                        <a href="contact.html" class="ybtn ybtn-white ybtn-shadow">Contactáctanos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="app-details3">
                                <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="images/drupal-preview.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Drupal Hosting</div>
                                    <div class="app-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</div>
                                    <div class="app-link">
                                        <a href="contact.html" class="ybtn ybtn-white ybtn-shadow">Contactáctanos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="app-details4">
                                <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="images/magento-preview.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Magento Hosting</div>
                                    <div class="app-text">emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, mo enim ipsam voluptatem quia voluptas sit.</div>
                                    <div class="app-link">
                                        <a href="contact.html" class="ybtn ybtn-white ybtn-shadow">Contactáctanos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Nuestra promesa</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-trophy"></i>
                    </div>
                    <div class="mfeature-title">99% de tiempo de actividad</div>
                    <!--<div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>-->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Atención personalizada</div>
                    <!--<div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>-->
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-cogwheel"></i>
                    </div>
                    <div class="mfeature-title">Soporte web/telefónico</div>
                    <!--<div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Detalles Inicio -->
<div id="domain-pricing" class="container-fluid">
    <div class="container">
        <!--<div class="row">
            <div class="col-md-12">
                <div class="row-title grey-color">Nuestras Ventajas</div>
                <p>Ofrecemos cuentas ilimitadas de email por el mismo valor.</p>
            </div>
        </div>-->
        <div class="row">
            <div class="col-md-12">
                <div class="htfy-pricing-table-holder">
                    <div class="htfy-table">
                    <div class="row thead" style="position: sticky;top: 84px;z-index: 1;">
                            <div class="col-xs-3 th">Características Hosting</div>
                            <div class="col-xs-3 th">Rookie</div>
                            <div class="col-xs-3 th">Intermedio</div>
                            <div class="col-xs-3 th">Profesional</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Espacio en Disco</div>
                            <div class="col-xs-3 td">32GB</div>
                            <div class="col-xs-3 td">56GB</div>
                            <div class="col-xs-3 td">120GB</div>  
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Cantidad de cuentas (dominios creados con planes vinculo)</div>
                            <div class="col-xs-3 td">Ilimitada</div>
                            <div class="col-xs-3 td">Ilimitada</div>
                            <div class="col-xs-3 td">Ilimitada</div>  
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Casillas Email POP3</div>
                            <div class="col-xs-3 td">Ilimitada</div>
                            <div class="col-xs-3 td">Ilimitada</div>
                            <div class="col-xs-3 td">Ilimitada</div>  
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">DNS propios</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Panel de control Reseller</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Panel de control (todas tus cuentas)</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Ancho de Banda Nacional</div>
                            <div class="col-xs-3 td">1 GB</div>
                            <div class="col-xs-3 td">1 GB</div>
                            <div class="col-xs-3 td">1 GB</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Ancho de Banda Internacional</div>
                            <div class="col-xs-3 td">20 GB</div>
                            <div class="col-xs-3 td">20 GB</div>
                            <div class="col-xs-3 td">20 GB</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Transferencia Mensual</div>
                            <div class="col-xs-3 td">Ilimitada</div>
                            <div class="col-xs-3 td">Ilimitada</div>
                            <div class="col-xs-3 td">Ilimitada</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Linux Centos</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Base de Datos MySql</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">PHP</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Webmail</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Respaldo de Datos (diarios, semanales y mensuales)</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Autorespondedores para Correo</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Filtro Anti Spam</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>
                            <div class="col-xs-3 td">✔</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td">Valor Mensual
(15% de descuento por pago semestral y 20% pago anual)</div>
                            <div class="col-xs-3 th">$15.000 + IVA</div>
                            <div class="col-xs-3 th">$25.000 + IVA</div>
                            <div class="col-xs-3 th">$50.000 + IVA</div>   
                        </div>

                        <div class="row trow">
                            <div class="col-xs-3 td"></div>
                            <div class="col-xs-3 td"><a target="_blank" class="register-button" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=4&resell=1&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>">Contratar</a></div>
                            <div class="col-xs-3 td"><a target="_blank" class="register-button" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=5&resell=1&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>">Contratar</a></div>
                            <div class="col-xs-3 td"><a target="_blank" class="register-button" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=6&resell=1&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>">Contratar</a></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Detalles Fin -->
<div id="message1" class="container-fluid message-area normal-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="text-other-color1">Contáctese con nosotros</div>
                <div class="text-other-color2">Responderemos todas tus consultas</div>
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