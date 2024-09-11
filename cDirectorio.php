<?php /*
original: cSystem2

$viewxxx= '1'; 										    //requerido para definir ruta
require_once (dirname(__FILE__, 2).'/cDirectorio.php'); //configurar Ruta, 2 significa que sube 1 nivel

*/

if(!isset($viewxxx)){ $viewxxx=''; }

if(!isset($f)) {

    if($viewxxx == '1'){

        //$f= '/home/csystem2/public_html/';
        //$f= '/home/csentid/public_html/';

    }else{
        
        $a= $_SERVER['PHP_SELF'];
        $ar = explode('/',$a);
        $i = count($ar);
        $i=$i-1;
        $f='';
        for($x=1; $x<$i; $x++){
            $f.= "../";
        }
	}
}

/* 

$a = $_SERVER['PHP_SELF'];
$ar = explode('/',$a);
$i = count($ar);
$i=$i-1;
$f='';
for($x=1; $x<$i; $x++){
    $f.= "../";
}

echo '
'.$f;
echo '
'.$_SERVER['PHP_SELF'];
*/

?>