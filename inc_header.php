<?php 
if(!isset($f)) { require_once (dirname(__FILE__, 1).'/cDirectorio.php'); } //configurar Ruta, 2 significa que sube 1 nivel

require_once ($f."cEmp.php");
require_once ($f."cook.php");
?>

<!-- // -->
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">

<link rel="icon" href="/favicon.ico" />


<!-- // -->

<? require_once ($f."cAnalitics.php");
require_once ($f."cAnaFacebook.php"); ?>