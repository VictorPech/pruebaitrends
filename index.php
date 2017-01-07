<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		<title>
			Formulario
		</title>
		</head>
	<body>
		<div>
		<fieldset>
		<legend>Formulario</legend>
			<form action="registro.php"  name="form" method="post">
			Nombre: <input type="text" name="nombre"  style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; " required><br>
			Razon Social: <input type="text" name="rsocial" required style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; "><br>
			Fecha de Creación: <input type="date" name="fcreacion" required style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; "><br>
			Número de trabajadores: <input type="number" name="ntrabajadores" required style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; " min="1" step="1" max="1000"><br>
			RFC:<acronym title="¡CUIDADO! VERIFIQUE SU RFC ANTES DE AGREGARLO AL SISTEMA">
			
			<input type="text" name="rfc" required style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; " maxlength="12"></acronym><br>
			Estado: <select name="estado" required style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; ">
			<option> Seleccione .... </option>
			<option value="ACTIVO"> ACTIVO </option>
			<option value="INACTIVO"> INACTIVO </option>
			</select> <br>
			<acronym title="POR FAVOR VERIFIQUE SUS DATOS ANTES DE ENVIARLO"><input type="submit" name="enviar" value="Enviar"></acronym>
			<input type="reset" name="borrar" value="Limpiar">
			</form>
		</fieldset>
		</div><br>
	 <center>	<form method="POST" action="" onSubmit="return validarForm(this)" >

    <input type="text" placeholder="Buscar usuario" name="palabra">
 
    <input type="submit" value="Buscar" name="buscar">
 
</form>
<a href="index.php" style="position:static"  >RECARGAR REPORTE EMPRESARIAL</a>
</center>
<script type="text/javascript">
    function validarForm(formulario) 
    {
        if(formulario.palabra.value.length==0) 
        { //¿Tiene 0 caracteres?
            formulario.palabra.focus();  // Damos el foco al control
            alert('Debes rellenar este campo'); //Mostramos el mensaje
            return false; 
         } //devolvemos el foco  
         return true; //Si ha llegado hasta aquí, es que todo es correcto 
     }   
</script>
<?php  
//si existe una petición  
if(@$_POST['buscar']) 
{   
   ?>
   <table width="100%" align="center" cellpadding="1" cellspacing="1" border="4" bordercolor="#AF55F3"  bgcolor="#0000FF">
      <tr>
   <td><b><center>#</center></b></td>
   <td><b><center>Nombre</center></b></td>
   <td><b><center>Razón social</center></b></td>
   <td><b><center>Fecha de Creación</center></b></td>
   <td><b><center>Número de Trabajadores</center></b></td>
   <td><b><center>RFC</center></b></td>
    <td><b><center>Estado</center></b></td>
    <td colspan="2"><center><b>Acciones</b></center></td>
 </tr> 
		
       <?php
       @$buscar = $_POST["palabra"];
     
$servidor ="localhost";
$usuario="root";
$pw="";

$con = mysql_connect($servidor, $usuario,$pw) or die ("No hay conexion");
$db= mysql_select_db("pitrends") or die ("No se encontro BD");
       $consulta_mysql= mysql_query ("SELECT * FROM formulario WHERE nombre like '%$buscar%'");
 
       while(@$registro = mysql_fetch_assoc($consulta_mysql)) 
       {
           ?> 
           <tbody bgcolor="#FF9900">
           <tr>
              <td> <?php $c =0; $c = $c+1; echo $c ?></td>
               <td class="estilo-tabla" align="center"><?=$registro['nombre']?></td>
               
               <td class=”estilo-tabla” align="center"><?=$registro['rsocial']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['fcreacion']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['ntrabajadores']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['rfc']?></td>
           <td class=”estilo-tabla” align="center"><?=$registro['estado']?></td>
           <td class=”estilo-tabla ><a href="mod.php?id=<?php echo $registro['id'];?>">Modificar</a></td>
<td class=”estilo-tabla><a href="eli.php?id=<?php echo $registro['id'];?>">Eliminar</a></td>
           </tr> 
           </tbody>
           <?php 
       } 
    ?>
    </table>
    <?php
}  
?>
	
		
		<?php
require('conexion.php');
$query="SELECT id, nombre, rsocial, fcreacion, ntrabajadores, rfc, estado FROM formulario";

$result=$mysqli->query($query);
?>


<center><h1>Empresas Registrados</h1><br></center>

<center>
<table border="4" bordercolor="#AF55F3"  bgcolor="#0000FF">
<thead>
 <tr>
   <td><b><center>#</center></b></td>
   <td><b><center>Nombre</center></b></td>
   <td><b><center>Razón social</center></b></td>
   <td><b><center>Fecha de Creación</center></b></td>
   <td><b><center>Número de Trabajadores</center></b></td>
   <td><b><center>RFC</center></b></td>
    <td><b><center>Estado</center></b></td>
    <td colspan="2"><center><b>Acciones</b></center></td>
 </tr>
 
 </center>
<tbody bgcolor="#FF9900">
<?php
	$c =0;
while($row=$result->fetch_assoc()){?>
<tr>
<td> <?php $c = $c+1; echo $c ?></td>
<td style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; "> <?php echo $row['nombre'];?></td>
<td style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; "> <?php echo $row['rsocial'];?></td>
<td style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; "> <?php echo $row['fcreacion'];?></td>
<td style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; "> <?php echo $row['ntrabajadores'];?></td>
<td style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; "> <?php echo $row['rfc'];?></td>
<td style="font-family:'Courier New', Courier, monospace; font-size:14px; text-transform:uppercase; "> <?php echo $row['estado'];?></td>
<td ><a href="mod.php?id=<?php echo $row['id'];?>">Modificar</a></td>
<td><a href="eli.php?id=<?php echo $row['id'];?>">Eliminar</a></td>

</tr>
<?php }?>
</tbody>
</table>


</body>
</html>
	</body>
</html>