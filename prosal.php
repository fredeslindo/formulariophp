
<?php include('included/header.php');?>
<div class='container'>
Esta es la pagina de procesado<br>
	<?php	
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$poblacion=$_POST['poblacion'];
	include('functions.php');
	echo '<p>'.sobreMi($nombre,$email,$poblacion).'</p>';
	?>
</div>
<?php include("included/footer.php");?>