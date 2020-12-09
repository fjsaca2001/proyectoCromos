<?php

extract($_POST);

include("dll/config.php");
include("dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$ressql = $miconexion->consulta("insert into usuario values(NULL,'$nombres','$nick','$correo','$pais','$edad','$contra','admin')");
if (!$ressql) {
	echo '<script>alert("Error de registro...");</script>';
	echo "<script>location.href='registro.php?'</script>";
} else {
	echo '<script>alert("Datos guardados correctamente...");</script>';
	#echo "<script>location.href='factura.php'</script>";
}
