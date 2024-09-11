<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-2 col-md-4" style="width:auto;">
                <div class="footer-menu-holder">
                    <h4>Acceso Clientes</h4>
                    <ul class="footer-menu">
                        <div class="signin-signup-form">
                            <div class="form-items">
                                <form id="signinform" role="form" method="post"
                                    action="https://www.c.c1.cl/admin/val.php?empx22=<?php echo $empx22 ?>&keyyy22=<?php echo $keyyy22; ?>">
                                    <div class="form-text">
                                        <input type="text" name="usuario" placeholder="Ingrese usuario" required>
                                    </div>
                                    <div class="form-text">
                                        <input type="password" name="clave" placeholder="Ingrese Contraseña" required>
                                    </div>
                                    <div class="form-button">
                                        <input class="ybtn ybtn-accent-color" type="submit" value="Ingresar"
                                            style="margin: 0 15px 0 0 !important;">
                                        <a class="ybtn ybtn-accent-color"
                                            href="https://www.c.c1.cl/admin/pass.php?empx22=3&amp;keyyy22=okokpokasd0044"
                                            target="_blank" style="color: #fff;margin: 15px 0 !important; background: #02101e;">Recuperar
                                            contraseña</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Métodos de pago</h4>
                    <ul class="footer-menu">

                        <a class="ybtn ybtn-accent-color"
                            href="https://www.c.c1.cl/inc_notifica.php?emp=<?php echo $empx22 ?>&amp;cod2=<?php echo $keyyy22 ?>&amp;tip_reg=1"
                            target="_blank" class="btn btn-light btn-radius btn-brd grd1 btn-block" style="
    margin: 0 !important;
">Notificación Depósito</a>

                        <a href="https://c.c1.cl/inc_transbank.php?emp=<?php echo $empx22 ?>&cod2=<?php echo $keyyy22 ?>&tip_reg=1"
                            class="footer_logo_iner" target="_blank"> <img src="images/webpay.png" alt="#" style="
    width: 100%;"> </a>

                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Menú</h4>
                    <ul class="footer-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="areas_clientes.php">Área Clientes</a></li>
                        <li><a
                                href="<?php echo $f; ?>contacto.php?pagx=<?php echo urlencode($pagx); ?>&categ57=<?php echo $categ57; ?>">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1">
                <div class="social-menu-holder">
                    <ul class="social-menu">
                        <li><a href="https://www.facebook.com/Vinculo.cl" target="_blank"><i
                                    class="fab fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/VinculoCL" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li><a href="http://instagram.com/vinculo.cl" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
<script>
    // Obtén la posición del menú
    var menu = document.getElementById("menu");
    var sticky = menu.offsetTop;

    // Añade la clase "sticky" cuando se desplaza hacia abajo
    window.onscroll = function () {
        if (window.pageYOffset >= sticky) {
            menu.classList.add("sticky");
        } else {
            menu.classList.remove("sticky");
        }
    };

</script>
<?php require 'contactoflotante.php' ?>
</body>

</html>