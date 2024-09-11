<?php 

include 'inc_header.php';

if (!isset($pagx)) { $pagx = 'VPS: '; } //texto que muestra previo al contacto
if (!isset($categ57)) { $categ57 = '25'; } // area
if (!isset($pagexito)) { $pagexito = 'https://'.$domain22.'/contacto.php?formok=1'; } //si se envió correcto
if (!isset($pagerror)) { $pagerror = 'https://'.$domain22.'/contacto.php?error1=1'; } //si tiene error, se suma en la url el error

 ?>		

<title>Vínculo.cl - Servidores VPS</title>
</head>

<body>

<div id="header-holder" class="main-header">

    <div class="bg-animation">

        <div class="graphic-show">



            <img class="fix-size" src="images/vepevepe.png" alt="">

            <img class="img img1" src="images/vepevepe.png" alt="">

            <img class="img img2" src="images/vepevepe.png" alt="">

            <img class="img img3" src="images/vepevepe.png" alt="">



        </div>

    </div>

    

    <!-- Menú -->

    <?php include 'menu.php' ?>

    <!-- Menú Fin -->



    <div id="top-content" class="container-fluid">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div id="main-slider">

                        <div class="slide">

                            <div class="noti-holder">


                            </div>

                            <div class="spacer"></div>

                            <div class="big-title">Servidores  <span>VPS</span></div>

                            <p>Lleve su empresa a la nube</p>

                            <div class="btn-holder">

                                <a href="#pricing" class="ybtn ybtn-header-color" style="padding: 19px 30px;">Ver planes</a><a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>" class="ybtn ybtn-white ybtn-shadow" style="padding: 19px 30px;">Contáctenos</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <img class="header-graphic" src="images/graphic1.png" alt="" />

                </div>

            </div>

        </div>

    </div>

</div>



<div id="h-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text grey-text">Ahorre en costos de mantención, proteja su información y optimice sus sistemas alojándolos de forma remota.</div>
            </div>
        </div>
    </div>
</div>

<!-- 1 Inicio -->
<div id="ifeatures" class="container-fluid" style=" padding: 0 !important;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/des.jpg" alt="">
                        <div class="feature-title">Ahorre en costos <div class="feature-details">Valores fijos en pesos Chilenos</div></div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/feature2.png" alt="">
                        <div class="feature-title">Sus archivos siempre disponibles<div class="feature-details">Comparta sus archivos de forma segura</div></div>
                        
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/feature3.png" alt="">
                        <div class="feature-title">Seguridad primero<div class="feature-details">Proteja su información y optimice sus sistemas trabajando de forma remota</div></div>
                        
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="images/feature4.png" alt="">
                        <div class="feature-title">Velocidad<div class="feature-details">Servidores en Chile garantiza una máxima velocidad</div></div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- 1 Fin -->




<div id="ifeatures" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <div class="col-sm-12 col-md-12">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="images/service-icon1.svg" alt="">
                    </div>
                    <div class="service-title">El Servidor Privado Virtual (VPS), al ser un servidor no físico, nos permite crear la configuración que se adapte más a sus necesidades y escalar o achicar en cualquier momento.</div>
                    <div class="service-details">
                        <p>Como resultado: menores costos y mayor seguridad</p>
                    </div>
                    <div class="buttons-holder" style="display: table;margin: 0 auto;">
                    <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>" class="ybtn ybtn-accent-color">Cotice aquí</a>
                </div>
                </div>
            </div>

            
                <br>
                <!--<div class="row-subtitle">Además, te permite almacenar cualquier tipo de información, evitándote así tener un servidor dedicado, ahorrando en costos de mantención y relacionados.</div>-->
            </div>
        </div>
    </div>
</div>
<div id="apps" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-icon"><img src="images/click-icon.png"></div>
                <div class="row-title">Ejemplos de configuraciones</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="apps-holder">
                    <div class="apps-links-holder">
                        <div class="app-icon-holder app-icon-holder1 opened" data-id="1">
                            <div class="app-icon"><img class="grayscale" src="images/own.png" alt="wordpress"></div>
                        </div>
                        <div class="app-icon-holder app-icon-holder2" data-id="2">
                            <div class="app-icon"><img class="" src="images/windows.png" alt="joomla"></div>
                        </div>
                        <div class="app-icon-holder app-icon-holder3" data-id="3">
                            <div class="app-icon"><img class="grayscale" src="images/cpanel.png" alt="drupal"></div>
                        </div>
                        <div class="app-icon-holder app-icon-holder4" data-id="4">
                            <div class="app-icon"><img class="brightness" src="images/linux.png" alt="magento"></div>
                        </div>
                    </div>
                    <div class="apps-details-holder">
                        <div class="app-details">
                            <div class="app-details1 show-details">
                                

                                <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="images/own_pre.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Configuración Owncloud</div>
                                    <div class="app-text">Comparta archivos en la nube e ingrese a ellos desde múltiples dispositivos, nuestros servidores no tienen límite de usuarios.</div>
                                    <div class="app-link">
                                        <a href="owncloud.php" class="ybtn ybtn-white ybtn-shadow">MÁS INFORMACIÓN AQUÍ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="app-details2">
                            <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="images/win_pre.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Configuración Windows</div>
                                    <div class="app-text">Instale los programas que necesite, acceso completo.</div>
                                    <div class="app-link">
                                        <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>" class="ybtn ybtn-white ybtn-shadow">MÁS INFORMACIÓN AQUÍ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="app-details3">
                                <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="images/cpanel_pre.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Configuración cPanel</div>
                                    <div class="app-text">Tenga su propio servidor de hosting para guardar sus correos.</div>
                                    <div class="app-link">
                                        <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>" class="ybtn ybtn-white ybtn-shadow">MÁS INFORMACIÓN AQUÍ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="app-details4">
                                <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="images/lin_pre.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Configuración Linux</div>
                                    <div class="app-text">Aloje su sistema operativo open source.</div>
                                    <div class="app-link">
                                        <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>" class="ybtn ybtn-white ybtn-shadow">MÁS INFORMACIÓN AQUÍ</a>
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




<div id="pricing" class="container-fluid" style="padding-top: 0 !important;">
    <div class="container">
        <div class="row">

            
            <!-- Plan Inicio -->
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box pricing-box-simple pricing-color1">
                    <div class="pricing-content">
                        <!-- icon -->
                        <div class="pricing-icon" style="background-color: #fff0;box-shadow: none;width: 100px;height: 100px;padding-bottom: 5px;padding-right: 17px;">
                        <img src="images/nubicon.png" alt="" style="width: 86px;height: 86px;position: sticky;margin-left: 0;left: 0;">
                        </div>
                        <!-- icon -->
                        <div class="pricing-head">
                            <div class="pricing-title">Servidor Cloud VPS Económico</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>50 GB de Almacenamiento</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <div class="tab-content">
                                    <div id="monthly1" class="tab-pane fade in active">
                                        <div class="pricing-price">$29.900</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <ul>
                                <li>1 Core</li>
                                <li>1GB de RAM</li>
                                
                            </ul>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a>
                        </div>
                        <div class="pricing-details">
                            <ul>
                                <a href="#domain-pricing"><a href="#domain-pricing"><li>Ver más detalle de los planes</li></a></a>
                                
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
                        <!-- icon -->
                        <div class="pricing-icon" style="background-color: #fff0;box-shadow: none;width: 100px;height: 100px;padding-bottom: 5px;padding-right: 17px;">
                        <img src="images/nubicon.png" alt="" style="width: 86px;height: 86px;position: sticky;margin-left: 0;left: 0;">
                        </div>
                        <!-- icon -->
                        <div class="pricing-head">
                            <div class="pricing-title">Servidor Cloud VPS SAS 1</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>150 GB de Almacenamiento</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <div class="tab-content">
                                    <div id="monthly1" class="tab-pane fade in active">
                                        <div class="pricing-price">$50.000</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <ul>
                                <li>1 Core</li>
                                <li>1GB de RAM</li>
                                
                            </ul>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a>
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
                        <!-- icon -->
                        <div class="pricing-icon" style="background-color: #fff0;box-shadow: none;width: 100px;height: 100px;padding-bottom: 5px;padding-right: 17px;">
                        <img src="images/nubicon.png" alt="" style="width: 86px;height: 86px;position: sticky;margin-left: 0;left: 0;">
                        </div>
                        <!-- icon -->
                        <div class="pricing-head">
                            <div class="pricing-title">Servidor Cloud VPS SAS 2</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>200 GB de Almacenamiento</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <div class="tab-content">
                                    <div id="monthly3" class="tab-pane fade in active">
                                        <div class="pricing-price">$80.000</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <ul>
                                <li>2 Core</li>
                                <li>2GB de RAM</li>
                                
                            </ul>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a>
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
                        <!-- icon -->
                        <div class="pricing-icon" style="background-color: #fff0;box-shadow: none;width: 100px;height: 100px;padding-bottom: 5px;padding-right: 17px;">
                        <img src="images/nubicon.png" alt="" style="width: 86px;height: 86px;position: sticky;margin-left: 0;left: 0;">
                        </div>
                        <!-- icon -->
                        <div class="pricing-head">
                            <div class="pricing-title">Servidor Cloud VPS SAS 3</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>350 GB de Almacenamiento</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <div class="tab-content">
                                    <div id="monthly1" class="tab-pane fade in active">
                                        <div class="pricing-price">$130.000</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <ul>
                                <li>3 Core</li>
                                <li>4GB de RAM</li>
                                
                            </ul>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a>
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
                        <!-- icon -->
                        <div class="pricing-icon" style="background-color: #fff0;box-shadow: none;width: 100px;height: 100px;padding-bottom: 5px;padding-right: 17px;">
                        <img src="images/nubicon.png" alt="" style="width: 86px;height: 86px;position: sticky;margin-left: 0;left: 0;">
                        </div>
                        <!-- icon -->
                        <div class="pricing-head">
                            <div class="pricing-title">Servidor Cloud VPS SAS 4</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>750 GB de Almacenamiento</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <div class="tab-content">
                                    <div id="monthly1" class="tab-pane fade in active">
                                        <div class="pricing-price">$200.000</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <ul>
                                <li>4 Core</li>
                                <li>8GB de RAM</li>
                                
                            </ul>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a>
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
                        <!-- icon -->
                        <div class="pricing-icon" style="background-color: #fff0;box-shadow: none;width: 100px;height: 100px;padding-bottom: 5px;padding-right: 17px;">
                        <img src="images/nubicon.png" alt="" style="width: 86px;height: 86px;position: sticky;margin-left: 0;left: 0;">
                        </div>
                        <!-- icon -->
                        <div class="pricing-head">
                            <div class="pricing-title">Servidor Cloud VPS SAS 5</div>
                            <div class="pricing-features">
                                <ul>
                                    <li>1 TB de Almacenamiento</li>
                                </ul>
                            </div>
                            <div class="pricing-options">
                                <div class="tab-content">
                                    <div id="monthly1" class="tab-pane fade in active">
                                        <div class="pricing-price">$320.000</div>
                                        <div class="billing-cycle">+ IVA / mes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <ul>
                                <li>8 Core</li>
                                <li>32GB de RAM</li>
                                
                            </ul>
                        </div>

                        <div class="pricing-link">
                            <a class="ybtn" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a>
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
                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Atención personalizada y cercana</div>
                    
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-cogwheel"></i>
                    </div>
                    <div class="mfeature-title">Soporte web y telefónico</div>
                    
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
                        <div class="row thead" style="position: sticky;z-index: 1;">
                            <div class="col-xs-1 th" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">Servidor Cloud VPS SAS Económico</div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">Servidor Cloud VPS SAS 1</div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">Servidor Cloud VPS SAS 2</div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">Servidor Cloud VPS SAS 3</div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">Servidor Cloud VPS SAS 4</div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">Servidor Cloud VPS SAS 5</div>
                        </div>
                        

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Costo Mensual + IVA</div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">$29.000</div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">$50.000</div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">$80.000</div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">$130.000</div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">$200.000</div>
                            <div class="col-xs-1 th" style="width: 14.22% !important;">$320.000</div>
                        </div>

                        
                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Procesador Xeon 2.80Ghz:</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1 Core</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1 Core</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">2 Core</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">3 Core</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">4 Core</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">8 Core</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Memoria Ram:</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">2 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">4 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">8 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">32 GB</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Espacio en Disco RAID10:</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">50 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">150 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">200 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">350 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">750 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1 TB</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Transferencia Mensual:</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ilimitada</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ilimitada</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ilimitada</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ilimitada</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ilimitada</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ilimitada</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Sistema Operativo:</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Linux o Windows</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Linux o Windows</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Linux o Windows</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Linux o Windows</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Linux o Windows</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Linux o Windows</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Direcciones IP:</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Setup de Servidor</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Gratis</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Gratis</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Gratis</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Gratis</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Gratis</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Gratis</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Velocidad de Acceso a Disco</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">220Mb/seg</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">220Mb/seg</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">220Mb/seg</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">220Mb/seg</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">220Mb/seg</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">220Mb/seg</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Velocidad de Internet</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1 gb/s</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1 gb/s</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1 gb/s</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1 gb/s</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1 gb/s</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">1 gb/s</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Servidor 100% configurable</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Full Acceso Root</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Acceso SSH</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Si</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Memoria, Disco Duro y CPU</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ampliables</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ampliables</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ampliables</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ampliables</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ampliables</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Ampliables</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Activación</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Inmediata</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Inmediata</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Inmediata</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Inmediata</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Inmediata</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Inmediata</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Características del servidor VPS</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Doble Procesador Xeon 2.80Ghz</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">32 Core</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">32 Core</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">32 Core</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">32 Core</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">32 Core</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">32 Core</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Memoria Ram</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">192 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">192 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">192 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">192 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">192 GB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">192 GB</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">16 Discos Duros SAS RAID10</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">16TB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">16TB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">16TB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">16TB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">16TB</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">16TB</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Velocidad de Acceso a Disco</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">550 Mb/Seg</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">550 Mb/Seg</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">550 Mb/Seg</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">550 Mb/Seg</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">550 Mb/Seg</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">550 Mb/Seg</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Características del Datacenter</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Datacenter Ubicado en</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Santiago de Chile</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Santiago de Chile</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Santiago de Chile</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Santiago de Chile</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Santiago de Chile</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Santiago de Chile</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Grupo Electrógeno</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Doble Enlace de Fibra Óptica</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Sistema de Refrigeración Redundante</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                        </div>

                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;">Balanceo de Cargas por Enlaces Redundantes BGP 4</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;">si</div>
                        </div>


                        <div class="row trow">
                            <div class="col-xs-1 td" style="width: 14.22% !important;"></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"><a class="register-button" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"><a class="register-button" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"><a class="register-button" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"><a class="register-button" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"><a class="register-button" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a></div>
                            <div class="col-xs-1 td" style="width: 14.22% !important;"><a class="register-button" href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>">Contratar</a></div>
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