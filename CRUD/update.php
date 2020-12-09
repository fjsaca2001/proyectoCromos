
<div>
    <form method="post" >
        <div class="grupo">
            <label for="nombres">Nombres</label>
            <input type="text" id="nombres" name="nombres" placeholder="Ingrese su nombre" required>
        </div>
        <div class="grupo">
            <label for="nick">NickName</label>
            <input type="text" id="nick" name="nick" placeholder="Ingrese su nick" required>
        </div>
        <div class="grupo">
            <label for="contra">Contraseña</label>
            <input type="text" id="contra" name="contra" placeholder="Ingrese su contraseña">
        </div>
        <button type="submit" class="btnGuardar">Guardar</button>
    </form>
</div>
<?php
$id=$_GET['var'];

extract($_POST);
include("dll/config.php");
include("dll/class_mysqli_7.php");
$id=$_GET['var'];
$nombre =$_GET['nombres'];
$nick =$_GET['nick'];
$contra =$_GET['contra'];
echo $nick;
/*
$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$ressql = $miconexion->consulta("update usuario set nombre='$nombres',nickname='$nick', contraseña='$contra' where idUsuario='$id'");
if (!$ressql) {
	echo '<script>alert("Error de cambio...");</script>';
	echo "<script>location.href='ver.php'</script>";
} else {
	echo '<script>alert("Datos guardados correctamente...");</script>';
	echo "<script>location.href='ver.php'</script>";
}*/
?>