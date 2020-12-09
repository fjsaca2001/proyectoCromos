<?php
include("dll/config.php");
include("dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$miconexion->consulta("select * from usuario");
$miconexion->verconsultacrud();

?>
