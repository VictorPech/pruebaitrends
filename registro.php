<?php
$con = mysql_connect("localhost","root","") or die("No se ecuentra el servidor");
$db = mysql_select_db("pitrends",$con) or die("Error de conexion");                          

$nombre=$_POST['nombre'];
$rsocial=$_POST['rsocial'];
$fcreacion=$_POST['fcreacion'];
$ntrabajadores=$_POST['ntrabajadores'];
$rfc=$_POST['rfc'];
$estado=$_POST['estado'];

$req = (strlen($nombre)*strlen($rsocial)*strlen($fcreacion)*strlen($ntrabajadores)*strlen($rfc)*strlen($estado));

@mysql_query("INSERT INTO formulario VALUE ('$id','$nombre','$rsocial','$fcreacion','$ntrabajadores','$rfc','$estado')",$con) or die ("Error al enviar datos");

?>
<html>
 <head>
  <title>Guardar Datos del estudiante </title>
  </head>
<body>
<section>
<center>
<?php
if($req > 0){ ?>
    <script>
		alert("HAS INGRESADO DATOS CORRECTAMENTE");
		 window.location="index.php";
		</script>
<?php }else{?>	
	<script>
		alert("ERROR AL INGRESAR DATOS");
		 window.location="index.php";
		</script>
    <?php }?>
    
    <p> </p>
    <a href="index.php">Volver</a>
    </center>
    </section>

</body>
</html>