<?php
include 'inc_header.php'; 

if (!isset($pagx)) { $pagx = 'Hosting individual: '; } //texto que muestra previo al contacto
if (!isset($categ57)) { $categ57 = '12'; } // area
if (!isset($pagexito)) { $pagexito = 'https://'.$domain22.'/contacto.php?formok=1'; } //si se envió correcto
if (!isset($pagerror)) { $pagerror = 'https://'.$domain22.'/contacto.php?error1=1'; } //si tiene error, se suma en la url el error
?>		

<title>Vínculo.cl - Web Hosting - Planes individuales y Empresa - Servidores en Chile</title>
</head>
 
<body>
 <?php include 'inc_cabecera.php' ?>

<!-- Título Principal Inicio -->
<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Web Hosting</div>
                    <div id="page-icon">
                        <div class="pricing-icon">
                            <img src="images/service-icon1.svg" alt="">
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

<!-- 1 Inicio -->
<div id="ifeatures" class="container-fluid" style=" padding: 0 !important;">
    <div class="container">
    <div class="row" style="margin-top: 28px;margin-bottom: 20px;">
            <div class="col-sm-6 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/pg.jpg" > 30 días de prueba gratis
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/acti.jpg" alt=""> Activación inmediata
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/des.jpg" alt=""> 15% dcto. por pago semestral<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y 20% por pago anual
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/mai.jpg" alt=""> Cuentas de correo ilimitadas
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/migra.jpg" alt=""> Migración gratuita, rápida y sencilla
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/feature3.png" alt=""> Certificados SSL gratuitos
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- 1 Fin -->

<div id="pricing" class="container-fluid" style="padding-top: 0 !important;">
    <div class="container">
        <div class="row">


            <!-- Plan Inicio -->
            <div class="col-sm-6 col-md-3">
                <div class="pricing-box pricing-box-simple pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="images/service-icon1.svg" alt="">
                        </div>
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Confort</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>4 GB de Almacenamiento</li>
                                    <li>Cuentas de correo Ilimitadas</li>
                                    <li>Dominios ilimitados</li>
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
                                        <div class="pricing-price">$3.900</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                    <div id="semestral1" class="tab-pane fade">
                                        <div class="pricing-price">$19.890</div>
                                        <div class="billing-cycle">+ IVA / Sem</div>
                                    </div>
                                    <div id="annualy1" class="tab-pane fade">
                                        <div class="pricing-price">$37.440</div>
                                        <div class="billing-cycle">+ IVA / Año</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=1&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a>
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
            <div class="col-sm-6 col-md-3">
                <div class="pricing-box pricing-box-simple pricing-color2">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="images/service-icon1.svg" alt="">
                        </div>
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Simple</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>7 GB de Almacenamiento</li>
                                    <li>Cuentas de correo Ilimitadas</li>
                                    <li>Dominios ilimitados</li>
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
                                        <div class="pricing-price">$5.900</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                    <div id="semestral2" class="tab-pane fade">
                                        <div class="pricing-price">$30.090</div>
                                        <div class="billing-cycle">+ IVA / Sem</div>
                                    </div>
                                    <div id="annualy2" class="tab-pane fade">
                                        <div class="pricing-price">$56.640</div>
                                        <div class="billing-cycle">+ IVA / Año</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=7&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a>
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
            <div class="col-sm-6 col-md-3">
                <div class="pricing-box pricing-box-simple pricing-color3">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="images/service-icon1.svg" alt="">
                        </div>
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Silver</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>14 GB de Almacenamiento</li>
                                    <li>Cuentas de correo Ilimitadas</li>
                                    <li>Dominios ilimitados</li>
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
                                        <div class="pricing-price">$9.900</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                    <div id="semestral3" class="tab-pane fade">
                                        <div class="pricing-price">$50.490</div>
                                        <div class="billing-cycle">+ IVA / Sem</div>
                                    </div>
                                    <div id="annualy3" class="tab-pane fade">
                                        <div class="pricing-price">$95.040</div>
                                        <div class="billing-cycle">+ IVA / Año</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=8&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a>
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
            <div class="col-sm-6 col-md-3">
                <div class="pricing-box pricing-box-simple pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="images/service-icon1.svg" alt="">
                        </div>
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Premium</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>22 GB de Almacenamiento</li>
                                    <li>Cuentas de correo Ilimitadas</li>
                                    <li>Dominios ilimitados</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#monthly4">Mensual</a></li>
                                    <li><a data-toggle="tab" href="#semestral4">Semestral</a></li>
                                    <li><a data-toggle="tab" href="#annualy4">Anual</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="monthly4" class="tab-pane fade in active">
                                        <div class="pricing-price">$13.900</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                    <div id="semestral4" class="tab-pane fade">
                                        <div class="pricing-price">$71.349</div>
                                        <div class="billing-cycle">+ IVA / Sem</div>
                                    </div>
                                    <div id="annualy4" class="tab-pane fade">
                                        <div class="pricing-price">$134.304</div>
                                        <div class="billing-cycle">+ IVA / Año</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=2&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a>
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
                        <div class="pricing-icon">
                            <img src="images/service-icon1.svg" alt="">
                        </div>
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Golden</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>31 GB de Almacenamiento</li>
                                    <li>Cuentas de correo Ilimitadas</li>
                                    <li>Dominios ilimitados</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#monthly5">Mensual</a></li>
                                    <li><a data-toggle="tab" href="#semestral5">Semestral</a></li>
                                    <li><a data-toggle="tab" href="#annualy5">Anual</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="monthly5" class="tab-pane fade in active">
                                        <div class="pricing-price">$18.900</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                    <div id="semestral5" class="tab-pane fade">
                                        <div class="pricing-price">$96.390</div>
                                        <div class="billing-cycle">+ IVA / Sem</div>
                                    </div>
                                    <div id="annualy5" class="tab-pane fade">
                                        <div class="pricing-price">$181.440</div>
                                        <div class="billing-cycle">+ IVA / Año</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=9&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a>
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
                    <div class="pricing-content">7
                        <div class="pricing-icon">
                            <img src="images/service-icon1.svg" alt="">
                        </div>
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Deluxe</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>50 GB de Almacenamiento</li>
                                    <li>Cuentas de correo Ilimitadas</li>
                                    <li>Dominios ilimitados</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#monthly6">Mensual</a></li>
                                    <li><a data-toggle="tab" href="#semestral6">Semestral</a></li>
                                    <li><a data-toggle="tab" href="#annualy6">Anual</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="monthly6" class="tab-pane fade in active">
                                        <div class="pricing-price">$28.000</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                    <div id="semestral6" class="tab-pane fade">
                                        <div class="pricing-price">$142.800</div>
                                        <div class="billing-cycle">+ IVA / Sem</div>
                                    </div>
                                    <div id="annualy6" class="tab-pane fade">
                                        <div class="pricing-price">$268.800</div>
                                        <div class="billing-cycle">+ IVA / Año</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=3&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a>
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
                <div class="pricing-box pricing-box-simple pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="images/service-icon1.svg" alt="">
                        </div>
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Mega</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>80 GB de Almacenamiento</li>
                                    <li>Cuentas de correo Ilimitadas</li>
                                    <li>Dominios ilimitados</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#monthly7">Mensual</a></li>
                                    <li><a data-toggle="tab" href="#semestral7">Semestral</a></li>
                                    <li><a data-toggle="tab" href="#annualy7">Anual</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="monthly7" class="tab-pane fade in active">
                                        <div class="pricing-price">$39.900</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                    <div id="semestral7" class="tab-pane fade">
                                        <div class="pricing-price">$203.490</div>
                                        <div class="billing-cycle">+ IVA / sem</div>
                                    </div>
                                    <div id="annualy7" class="tab-pane fade">
                                        <div class="pricing-price">$383.040</div>
                                        <div class="billing-cycle">+ IVA / Año</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=10&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a>
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
<!-- 2 Inicio -->
<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">¿Qué nos hace especiales?</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-2" style="width: 20%">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div class="mfeature-title">Alta velocidad nacional</div>
                    <div class="mfeature-details">Servidores en Chile garantizan una máxima velocidad</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2" style="width: 20%">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="fab fa-cpanel"></i>
                    </div>
                    <div class="mfeature-title">Acceso a cPanel</div>
                    <div class="mfeature-details">Ingreso con usuario y contraseña a un panel de administración para crear cuentas de emails y mucho más</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2" style="width: 20%">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <div class="mfeature-title">Compatible con Wordpress</div>
                    <div class="mfeature-details">Puedes instalarlo manualmente o también utilizar nuestro instalador fácil</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2" style="width: 20%">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="fas fa-envelope-open"></i>
                    </div>
                    <div class="mfeature-title">Correo privado</div>
                    <div class="mfeature-details">Tus correos están físicamente en servidores privados en Chile, no son léidos por robots ni ofrecen publicidad según tus conversaciones</div>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-2" style="width: 20%">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="mfeature-title">Asesoría personalizada</div>
                    <div class="mfeature-details">Atendido por humanos, lo orientamos en la creación y configuración de correos y mucho más</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 2 Fin -->

<div id="apps" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-icon"><img src="images/click-icon.png"></div>
                <div class="row-title">Instale App`s en pocos clicks</div>
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
                                    <div class="app-text">Instale una de las plataformas de creación de sitios web más utilizadas. Instalación mediante Softaculus.</div>
                                    <div class="app-link">
                                        <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>" class="ybtn ybtn-white ybtn-shadow">Contáctenos</a>
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
                                    <div class="app-text">Gratuito y de código abierto, le permitirá crear y administrar sitios web, blogs y aplicaciones móviles.</div>
                                    <div class="app-link">
                                        <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>" class="ybtn ybtn-white ybtn-shadow">Contáctenos</a>
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
                                    <div class="app-text">Aloje este sistema de gestión de contenidos multipropósito, libre y altamente personalizable.</div>
                                    <div class="app-link">
                                        <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>" class="ybtn ybtn-white ybtn-shadow">Contáctenos</a>
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
                                    <div class="app-text">Instale una de las principales plataformas para ecommerce.</div>
                                    <div class="app-link">
                                        <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>" class="ybtn ybtn-white ybtn-shadow">Contáctenos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    <div class="mfeature-title">99.9% de tiempo de actividad</div>
                    <!--<div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>-->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Atención personalizada y cercana</div>
                    <!--<div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>-->
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-cogwheel"></i>
                    </div>
                    <div class="mfeature-title">Soporte web y telefónico</div>
                    <!--<div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>-->
                </div>
            </div>
        </div>
    </div>
</div>






<!-- Detalles Inicio -->
<div id="domain-pricing" class="container-fluid">
    <div class="container">
        <div class="row">
            <!--<div class="col-md-12">
                <div class="row-title grey-color">Nuestras Ventajas</div>
                <p>Ofrecemos cuentas ilimitadas de email por el mismo valor.</p>
            </div>-->
        </div>





        
        <div class="row">
            <div class="col-md-12">
                <div class="htfy-pricing-table-holder">
                    
                    <div class="htfy-table">
                        <div class="row thead" style="position: sticky;top: 84px;z-index: 1;">
                            <div class="col-xs-1 th" style="width: 16.333333% !important;">Características Hosting</div>
                            <div class="col-xs-1 th" style="width: 11.333333% !important;">Plan Confort</div>
                            <div class="col-xs-1 th" style="width: 11.333333% !important;">Plan Simple</div>
                            <div class="col-xs-1 th" style="width: 11.333333% !important;">Plan Silver</div>
                            <div class="col-xs-1 th" style="width: 12.333333% !important;">Plan Premium</div>
                            <div class="col-xs-1 th" style="width: 12.333333% !important;">Plan Golden</div>
                            <div class="col-xs-1 th" style="width: 12.333333% !important;">Plan Deluxe</div>
                            <div class="col-xs-1 th" style="width: 12.333333% !important;">Plan Mega</div>
                        </div>
                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Almacenamiento</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">4 GB</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">7 GB</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">14 GB</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">22 GB</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">31 GB</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">50 GB</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">80 GB</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Cuentas de email</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilimitadas</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilimitadas</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilimitadas</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilimitadas</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilimitadas</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilimitadas</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilimitadas</div>
                        </div>

                        <!--<div class="row trow">
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Soporte</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Telefónico y Web</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Telefónico y Web</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Telefónico y Web</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Telefónico y Web</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Telefónico y Web</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Telefónico y Web</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Telefónico y Web</div>
                        </div>-->

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Web mail</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Gratis</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Gratis</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Gratis</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Gratis</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Gratis</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Gratis</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Gratis</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Ancho de Banda</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">1 gb/s</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">1 gb/s</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">1 gb/s</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">1 gb/s</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">1 gb/s</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">1 gb/s</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">1 gb/s</div>
                        </div>

                        <!--<div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Ancho de Banda Internacional</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">20Mb</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">20Mb</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">20Mb</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">20Mb</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">20Mb</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">20Mb</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">20Mb</div>
                        </div>-->

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Transferencia Mensual</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilimitada</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilimitada</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilimitada</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilimitada</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilimitada</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilimitada</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilimitada</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Filtro Anti Spam</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Antivirus</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Base de Datos MySql</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">1</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">2</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">3</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">4</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">5</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">6</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">7</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">FTP</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Cpanel</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Softacolous</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Respaldo</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Diario, semanal y mensual</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Diario, semanal y mensual</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Diario, semanal y mensual</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Diario, semanal y mensual</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Diario, semanal y mensual</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Diario, semanal y mensual</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Diario, semanal y mensual</div>
                        </div>
                        
                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Linux</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Redireccionamiento de correo</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Autorespondedores de correo</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Servidores en Chile</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                        </div>

                        <!--<div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Perl</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">✔</div>
                        </div>-->

                        <!--<div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Parking</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                        </div>-->

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Dominios adicionales</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Subdominios</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;">Ilímitado</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 16.333333% !important;">Costo mensual + iva</div>
                            <div class="col-xs-1 th" style="width: 11.333333% !important;">$3.900 + IVA</div>
                            <div class="col-xs-1 th" style="width: 11.333333% !important;">$5.900 + IVA</div>
                            <div class="col-xs-1 th" style="width: 11.333333% !important;">$9.900 + IVA</div>
                            <div class="col-xs-1 th" style="width: 12.333333% !important;">$13.990 + IVA</div>
                            <div class="col-xs-1 th" style="width: 12.333333% !important;">$18.900 + IVA</div>
                            <div class="col-xs-1 th" style="width: 12.333333% !important;">$28.000 + IVA</div>
                            <div class="col-xs-1 th" style="width: 12.333333% !important;">$39.900 + IVA</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 12.333333% !important;"></div>
                            <div class="col-xs-1 td" style="width: 16.333333% !important;"><a class="register-button" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=1&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a></div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;"><a class="register-button" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=7&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a></div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;"><a class="register-button" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=8&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a></div>
                            <div class="col-xs-1 td" style="width: 11.333333% !important;"><a class="register-button" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=2&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a></div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;"><a class="register-button" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=9&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a></div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;"><a class="register-button" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=3&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a></div>
                            <div class="col-xs-1 td" style="width: 12.333333% !important;"><a class="register-button" href="https://activa1.vinculo.cl/inc_contrata_host.php?emp=<?php echo $empx22; ?>&tip_reg=1&amp;cod2=<?php echo $keyyy22; ?>&amp;idplan=10&amp;porperso=<?php echo $porperso;  ?>&amp;link1=<?php echo $link1; ?>&amp;contacto=<?php echo $nombre; ?>&amp;email=<?php echo $email; ?>&amp;telefono=<?php echo $tel; ?>" target="_blank">Contratar</a></div>
                            
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