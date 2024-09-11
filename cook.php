<?php //original: karacter.cl
///////////////////////////////////////////////////////////
///////////////variables globales

if(isset($_POST['porperso'])){$porperso= $_POST['porperso'];} elseif(isset($_GET['porperso'])){ $porperso = $_GET['porperso'];} elseif(isset($_COOKIE['persocook'])){ $porperso= $_COOKIE['persocook'];} else {$porperso = '';} 
if(isset($_POST['ejecutC'])){ $ejecutC= $_POST['ejecutC']; } elseif(isset($_GET['ejecutC'])){ $ejecutC = $_GET['ejecutC'];} elseif(isset($_COOKIE['ejecutC'])){ $ejecutC= $_COOKIE['ejecutC'];} else {$ejecutC = '';} 
if(isset($_POST['link1'])){ $link1= $_POST['link1']; } elseif(isset($_GET['link1'])){ $link1 = $_GET['link1']; } elseif(isset($_COOKIE['linkcook'])){ $link1= $_COOKIE['linkcook'];} else {$link1 = '';}
if(isset($_POST['nombre'])){ $nombre= $_POST['nombre']; } elseif(isset($_GET['nombre'])){ $nombre = $_GET['nombre']; } elseif(isset($_COOKIE['nombcook'])){ $nombre= $_COOKIE['nombcook'];} else {$nombre = '';}
if(isset($_POST['email'])){ $email= $_POST['email']; } elseif(isset($_GET['email'])){ $email= $_GET['email']; } elseif(isset($_COOKIE['mcook'])){ $email= $_COOKIE['mcook'];} else {$email = '';}
if(isset($_POST['tel'])){ $tel= $_POST['tel']; }elseif(isset($_GET['tel'])){ $tel= $_GET['tel']; } elseif(isset($_COOKIE['telcook'])){ $tel= $_COOKIE['telcook']; } else { $tel= ''; }


if (isset($_POST['pagctual'])){ $pagctual= $_POST['pagctual']; }elseif(isset($_GET['pagctual'])){ $pagctual= $_GET['pagctual']; }else{
    $pagctual = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $pagctual1= explode('.php', $pagctual);
    if(count($pagctual1) > '1') {
        $pagctual= $pagctual1[0].'.php';
    }   
} 
if (isset($_POST['pagexito'])) { $pagexito = $_POST['pagexito']; } elseif (isset($_GET['pagexito'])) { $pagexito = $_GET['pagexito']; } 
if (isset($_POST['formok'])) { $formok = $_POST['formok']; } elseif (isset($_GET['formok'])) {$formok = $_GET['formok'];} else {$formok ='0';}
if (isset($_POST['error1'])) { $error1 = $_POST['error1']; } elseif (isset($_GET['error1'])) { $error1 = $_GET['error1']; } else {$error1 = '0';} 
if (isset($_POST['error'])) { $error = $_POST['error']; } elseif (isset($_GET['error'])) { $error = $_GET['error']; } 
if (isset($_POST['ingresdd'])) { $ingresdd = $_POST['ingresdd']; } elseif (isset($_GET['ingresdd'])) { $ingresdd = $_GET['ingresdd']; } 
if (isset($_POST['comet'])) { $comet= $_POST['comet']; } elseif (isset($_GET['comet'])) { $comet= $_GET['comet']; } else {$comet= '';}
if (isset($_POST['pagx'])) { $pagx = $_POST['pagx']; } elseif (isset($_GET['pagx'])) { $pagx = $_GET['pagx']; } 
if (isset($_POST['categ57'])) { $categ57 = $_POST['categ57']; } elseif (isset($_GET['categ57'])) { $categ57 = $_GET['categ57']; }

if (isset($_POST['idprodx'])) { $idprodx = $_POST['idprodx']; } elseif (isset($_GET['idprodx'])) { $idprodx = $_GET['idprodx']; } else {$idprodx= '';}
if (isset($_POST['keyprodx'])) { $keyprodx = $_POST['keyprodx']; } elseif (isset($_GET['keyprodx'])) { $keyprodx = $_GET['keyprodx']; } else {$keyprodx= '';}


//////////////////////////////////
//////////////////////////////////////////////////////////

setcookie("persocook", $porperso, time()+60*60*24*90,"/", "$domain22");
setcookie("ejecutC", $ejecutC, time()+60*60*24*15,"/", "$domain22");
setcookie("linkcook", $link1, time()+60*60*24*60,"/","$domain22");
setcookie("nombcook", $nombre, time()+60*60*24*90,"/","$domain22");
setcookie("mcook", $email, time()+60*60*24*90,"/","$domain22");
setcookie("telcook", $tel, time()+60*60*24*90,"/","$domain22");

?>