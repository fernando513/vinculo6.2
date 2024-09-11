<?php 
if ($_POST['id']) { $id = $_POST['id']; } else { $id = '';	}
if ($_POST['nomdominio']) { $nomdominio = $_POST['nomdominio']; } else { $nomdominio = '';	}

if ($id==1) {
    $url = "https://".$nomdominio.'/webmail';
} elseif ($id==2) {
    $url = "https://".$nomdominio.'/cpanel';
}

header("Location: $url"); ?>