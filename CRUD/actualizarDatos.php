<?php

extract($_POST);
include("dll/config.php");
include("dll/class_mysqli_7.php");
//$id=$_GET['var'];
echo $id2;


$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
echo $nombres;
echo $nick;
echo $contra;

/*$ressql = $miconexion->consulta("update usuario set nombre='$nombres',nickname='$nick', contraseña='$contra' where idUsuario='$id'");
if (!$ressql) {
	echo '<script>alert("Error de cambio...");</script>';
	echo "<script>location.href='ver.php'</script>";
} else {
	echo '<script>alert("Datos guardados correctamente...");</script>';
	echo "<script>location.href='ver.php'</script>";
}*/

?>
