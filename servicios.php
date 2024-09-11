<?php
include 'inc_header.php'; 

if (!isset($pagx)) { $pagx = 'Nosotros: '; } //texto que muestra previo al contacto
//if (!isset($categ57)) { $categ57 = '12'; } // area
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
                    <div class="page-title">Servicios</div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Título Principal Fin -->

<!-- Nuevo Inicio -->
<div id="services" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-subtitle">Diseñado para satisfacer sus necesidades</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="images/service-icon1.svg" alt="">
                    </div>
                    <div class="service-title"><a href="planes_individuales.php">Web Hosting</a></div>
                    <div class="service-details">
                    <p style="font-size: 15px;">Desde el año 2003 que alojamos (Hosting) sitios Web y Cuentas de Email personales y de empresas con un servicio sólido, seguro, robusto y de alta velocidad gracias a nuestra plataforma tecnológica.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="images/service-icon2.svg" alt="">
                    </div>
                    <div class="service-title"><a href="web-hosting-reseller.php">Hosting Mayorista</a></div>
                    <div class="service-details">
                        <p>Estos planes son ideales para quienes tengan varios sitios web o quienes quieran tener su propia empresa de web hosting. Puedes crear múltiples cuentas utilizando los planes individuales.</p>
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
                        <p>Un Servidor Privado Virtual (VPS) es un servidor no físico que te permite almacenar cualquier tipo de información, evitándote así tener un servidor dedicado y ahorrarás en costos de mantención y relacionados.</p>
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
                        <p>Envía correos a tus propias bases de datos y manten comunicación directa con tus clientes.
Portal de fácil manejo y de uso personal, entrando con un nombre de usuario y contraseña a través de internet.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="service-box">
                    <div class="service-icon">
                        <img src="images/service-icon4.svg" alt="">
                    </div>
                    <div class="service-title"><a href="prog_y_sweb_dos.php">Desarrollo de Software y Sitios Web a medida</a></div>
                    <div class="service-details">
                        <p>Entendemos tus necesidades, por esto contamos con los mejores desarrolladores y diseñadores para entregarte el mejor servicio. En nuestro departamento de desarrollo encontrarás el aliado perfecto para mantener tu negocio operando de forma ordenada y segura. Creamos aplicaciones a medida de cada cliente con la clara misión de que gestiones tu negocio de forma óptima, tanto interna como externamente.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Nuevo Fin -->

<section>

</div><!-- Footer -->
<?php include 'inc_footer.php' ?>
