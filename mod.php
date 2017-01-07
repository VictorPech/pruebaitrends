<?php
require('conexion.php');

$id=$_GET['id'];
$query = "SELECT id,nombre, rsocial, fcreacion, ntrabajadores, rfc, estado FROM formulario WHERE id='$id'";
$result=$mysqli->query($query);
$row=$result->fetch_assoc();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guardar Datos del estudiante </title>
 </head>
 
<body>
<div>
		<fieldset>
		<legend>Modificar información </legend>
			<form name="modu" method="post" action="mod_u.php">
			<input type="hidden" name="id" value="<?php echo $row['id'];?>"/><br>
			Nombre: <input type="text" name="nombre"  style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; "  value="<?php echo $row['nombre'];?>" ><br>
			Razon Social: <input type="text" name="rsocial"  style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; " value="<?php echo $row['rsocial'];?>"><br>
			Fecha de Creación:<acronym title="SI MODIFICA LA FECHA O NO LE PEDIMOS QUE LO AGREGUE EN EL CAMPO CALENDARIO"> <input type="text" style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; " value="<?php echo $row['fcreacion'];?>"></acronym>
			<input type="date" name="fcreacion"  style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; "><br>
			
			Número de trabajadores: <input type="number" name="ntrabajadores"  style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; " value="<?php echo $row['ntrabajadores'];?>" min="1" step="1" max="1000"><br>
			RFC:<acronym title="¡CUIDADO! VERIFIQUE SU RFC ANTES DE MODIFICAR AL SISTEMA">
			<input type="text" name="rfc"  style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; " value="<?php echo $row['rfc'];?>" maxlength="12"></acronym><br>
			Estado: <select name="estado"  style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; " value="<?php echo $row['estado'];?>">
			<option value="<?php echo $row['estado'];?>" > <?php echo $row['estado'];?> </option>
			<option value="ACTIVO"> ACTIVO </option>
			<option value="INACTIVO"> INACTIVO </option>
			</select> <br>
			<acronym title="POR FAVOR VERIFIQUE LOS DATOS ANTES DE MODIFICAR"><input type="submit" name="enviar" value="Guardar"></acronym>
			<input type="submit" name="regresar" value="Regresar" formaction="index.php">
			</form>
		</fieldset>
		</div>
</body>
</html>
