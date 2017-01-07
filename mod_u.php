<?php
require('conexion.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$rsocial=$_POST['rsocial'];
$fcreacion=$_POST['fcreacion'];
$ntrabajadores=$_POST['ntrabajadores'];
$rfc=$_POST['rfc'];
$estado=$_POST['estado'];


$query = "UPDATE formulario SET id='$id', 
nombre='$nombre',
rsocial='$rsocial',
fcreacion='$fcreacion',
ntrabajadores='$ntrabajadores',
rfc='$rfc', 
estado='$estado'

 WHERE id='$id'";

$result = $mysqli->query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar usuarios</title>
</head>

<body>
<center>

<?php
if($result > 0){ ?>
    <h1>Datos de la empresa han sido modificados</h1>
<?php }else{ ?>	
	<h1> Error al modificar informacion</h1>
    <?php }?>
    
    <p> </p>
    <a href="index.php">Volver</a>

</center>
</body>
</html>