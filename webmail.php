<?php
include 'inc_header.php'; 

if (!isset($pagx)) { $pagx = 'webmail: '; } //texto que muestra previo al contacto
//if (!isset($categ57)) { $categ57 = '25'; } // area
if (!isset($pagexito)) { $pagexito = 'https://'.$domain22.'/contacto.php?formok=1'; } //si se envió correcto
if (!isset($pagerror)) { $pagerror = 'https://'.$domain22.'/contacto.php?error1=1'; } //si tiene error, se suma en la url el error
?>      

<title>Área Clientes</title>
</head>
 
<body>
 <?php include 'inc_cabecera.php' ?>

<!-- Título Principal Inicio -->
<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Webmail</div>

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
            <!--<div class="col-md-12">
                <div class="row-subtitle">Diseñado para satisfacer sus necesidades</div>
            </div>-->
        </div>
        <div class="row">

        	 <!-- 1 -->
            <div class="col-sm-12 col-md-12">
                <div class="service-box">
                    <div class="service-icon">
                    <img src="images/mai.svg" alt="">
                    </div>
                    <div class="service-title">También puede revisar su correo aquí.<br>

Su dominio:
</a></div>
                    <div class="service-details">
                        <!--1-->
                        <div class="signin-signup-form">
                <div class="form-items">
                    <form id="signinform" action="referer1.php" method="post" target="_blank">
                        <div class="form-text">
                        <input type="text" name="nomdominio" placeholder="dominio.cl" required>
                        </div>
                        <div class="">
                            <button id="submit" type="submit" class="ybtn ybtn-accent-color" style="margin: 0;">Consultar</button>
                            <input name="id" type="hidden" id="id" value="1" />
                        </div>
                    </form>
                </div>
            </div>
                        <!--1-->
                    </div>
                </div>
            </div>
            <!-- 1 -->

             
            
            
        </div>
    </div>
</div>
<!-- Nuevo Fin -->

<section>

</div><!-- Footer -->
<?php include 'inc_footer.php' ?>
