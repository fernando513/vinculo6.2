<?php

include 'inc_header.php';

if (!isset($pagx)) {
    $pagx = 'Home: ';
} //texto que muestra previo al contacto
//if (!isset($categ57)) { $categ57 = '12'; } // area
if (!isset($pagexito)) {
    $pagexito = 'https://' . $domain22 . '/contacto.php?formok=1';
} //si se envió correcto
if (!isset($pagerror)) {
    $pagerror = 'https://' . $domain22 . '/contacto.php?error1=1';
} //si tiene error, se suma en la url el error

?>

<title>Vínculo.cl - Web Hosting - Servidores VPS - desarrollo de software - Chile</title>
</head>

<body>

    <?php include 'inc_cabecera_home.php' ?>

    <!-- uno -->
    <div id="info" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="info-text">Contamos con un equipo humano preparado para atender sus dudas y brindarle la
                        asesoría que necesita. Desde la creación y configuración de sus correos, diseño y mantención de
                        su sitio web hasta el establecer sus servidores en la nube.</div>

                    <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>"
                        class="ybtn ybtn-accent-color ybtn-shadow">Recibe asesoría</a>
                </div>
            </div>
        </div>
    </div>

    <!-- uno fin -->

    <!-- Servicios Inicio -->
    <div id="services" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row-title">Servicios</div>
                    <div class="row-subtitle">Diseñado para satisfacer sus necesidades</div>
                </div>
            </div>
            <div class="row">
                <a href="planes_individuales.php">
                    <div class="col-sm-12 col-md-6">
                        <div class="service-box">
                            <div class="service-icon">
                                <img src="images/service-icon1.svg" alt="">
                            </div>
                            <div class="service-title"><a href="planes_individuales.php">Web Hosting</a></div>
                            <div class="service-details">
                                <p>Desde el año 2003 que alojamos (hosting) sitios web, cuentas de email personales y de
                                    empresas con un servicio sólido, seguro, robusto y de alta velocidad gracias a
                                    nuestra plataforma tecnológica.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="col-sm-12 col-md-6">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="images/service-icon2.svg" alt="">
                        </div>
                        <div class="service-title"><a href="web-hosting-reseller.php">Hosting Mayorista</a></div>
                        <div class="service-details">
                            <p>Planes de alojamiento ideales para quienes tengan varios sitios web o quienes deseen
                                tener su propia empresa de web hosting. Puedes crear múltiples cuentas utilizando los
                                planes individuales que tenemos disponibles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="images/service-icon3.svg" alt="">
                        </div>
                        <div class="service-title"><a href="vps.php">VPS</a></div>
                        <div class="service-details">
                            <p>Un Servidor Privado Virtual (VPS) es un servidor no físico que te permite almacenar
                                cualquier tipo de sistema informático. Es ideal para evitar los altos costos de mantener
                                un servidor físico y mejorar la escalabilidad de tus sistemas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="images/service-icon5.png" alt="">
                        </div>
                        <div class="service-title"><a href="fidelizacion.php">Mailing Fidelización</a></div>
                        <div class="service-details">
                            <p>Envía correos a tus propias bases de datos y mantén comunicación directa con tus clientes
                                y usuarios. Entrando con un nombre de usuario y contraseña podrás acceder a tu portal,
                                el cual es de uso personal y de fácil manejo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="images/service-icon4.svg" alt="">
                        </div>
                        <div class="service-title"><a href="prog_y_sweb_dos.php">Sitios Web a medida</a></div>
                        <div class="service-details">
                            <p>Nuestro equipo de desarrolladores y diseñadores está capacitado para entregar tu proyecto
                                de forma ágil y eficiente. El sitio web hoy es un pilar fundamental en cualquier
                                empresa, en Vínculo.cl encontrarás el aliado perfecto para mantener tu negocio operando
                                de forma ordenada y segura.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Aún no se Inicio -->
    <div id="features" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row-title">Nuestras características de alojamiento</div>
                    <div class="row-subtitle"></div>
                </div>
            </div>
            <div class="row rtl-cols">
                <div class="col-sm-12 col-md-6">
                    <div id="features-links-holder">
                        <div class="icons-axis">
                            <img src="images/features-icon.png" alt="">
                        </div>
                        <div class="feature-icon-holder feature-icon-holder1 opened" data-id="1">
                            <div class="animation-holder">
                                <div class="special-gradiant"></div>
                            </div>
                            <div class="feature-icon"><i class="htfy htfy-worldwide"></i></div>
                            <div class="feature-title">99,9% de tiempo de actividad</div>
                        </div>
                        <div class="feature-icon-holder feature-icon-holder2" data-id="2">
                            <div class="animation-holder">
                                <div class="special-gradiant"></div>
                            </div>
                            <div class="feature-icon"><i class="htfy htfy-cogwheel"></i></div>
                            <div class="feature-title">Servidores en Chile</div>
                        </div>

                        <div class="feature-icon-holder feature-icon-holder4" data-id="4">
                            <div class="animation-holder">
                                <div class="special-gradiant"></div>
                            </div>
                            <div class="feature-icon"><i class="fab fa-cc-diners-club"></i></div>
                            <div class="feature-title">Precios en pesos chilenos</div>
                        </div>
                        <div class="feature-icon-holder feature-icon-holder5" data-id="5">
                            <div class="animation-holder">
                                <div class="special-gradiant"></div>
                            </div>
                            <div class="feature-icon"><i class="htfy htfy-like"></i></div>
                            <div class="feature-title">Soporte email y telefónico</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="features-holder">
                        <div class="feature-box feature-d1 show-details">
                            <div class="feature-title-holder">
                                <span class="feature-icon"><i class="htfy htfy-worldwide"></i></span>
                                <span class="feature-title">99,9% de tiempo de actividad</span>
                            </div>
                            <div class="feature-details">
                                <p>Nuestros servidores prácticamente están en línea todo el tiempo, permitiendo la
                                    disponibilidad que su empresa necesita: 24/7</p>

                            </div>
                        </div>
                        <div class="feature-box feature-d2">
                            <div class="feature-title-holder">
                                <span class="feature-icon"><i class="htfy htfy-cogwheel"></i></span>
                                <span class="feature-title">Servidores en Chile</span>
                            </div>
                            <div class="feature-details">
                                <p>Físicamente contamos con servidores en Chile lo cual permite que la velocidad sea
                                    óptima.</p>

                            </div>
                        </div>

                        <div class="feature-box feature-d4">
                            <div class="feature-title-holder">
                                <span class="feature-icon"><i class="fab fa-cc-diners-club"></i></span>
                                <span class="feature-title">Precios en pesos chilenos</span>
                            </div>
                            <div class="feature-details">
                                <p>Olvídese de las sorpresas que le pueda generar el alza del dólar, nuestro valores
                                    están en la moneda local y emitimos factura chilena.</p>

                            </div>
                        </div>
                        <div class="feature-box feature-d5">
                            <div class="feature-title-holder">
                                <span class="feature-icon"><i class="htfy htfy-like"></i></span>
                                <span class="feature-title">Soporte email y telefónico</span>
                            </div>
                            <div class="feature-details">
                                <p>Nuestro equipo de soporte puede resolver sus inquietudes vía correo o
                                    telefónicamente. Un ejecutivo calificado podrá ayudarlo.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Aún no se Fin -->

    <!-- Contacto Inicio -->
    <div id="message2" class="container-fluid message-area normal-bg boxed">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="text-other-color1">¿Tiene más consultas?</div>
                    <div class="text-other-color2">En Vinculo.cl llevamos
                        <?php echo intval((time() - strtotime('2003-10-01')) / (365.25 * 24 * 60 * 60)); ?> años
                        trabajando en alojar sitios web, cuentas de email, desarrollo de software y alojamiento de
                        sistemas. Tenemos experiencia y queremos ayudarte, contáctanos.</div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="buttons-holder">
                        <a href="contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>&pagexito=<?php echo urlencode($pagexito); ?>&pagerror=<?php echo urlencode($pagerror); ?>"
                            class="ybtn ybtn-white ybtn-shadow" style="padding: 19px 30px;">Contáctenos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contacto Fin -->


    <?php include 'inc_footer.php' ?>