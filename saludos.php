<?php include('included/header.php');?>
<div class='container'>
			<h1>Formulario de Ingreso</h1>
			
			<form method='post' action='prosal.php'>
			<label for='nombre'>Nombre</label>
			<input name='nombre' type='text' placeholder='escribe tu nombre' required>
			<label for=''email>Email</label>
			<input name= 'email' type='email' placeholder='escribe tu email' required>
			<label for='poblacion'>Poblacion</label>
			<input name='poblacion' type='text' placeholder='escribe tu ciudad' required>
			<button class='btn btn-warming' type='submit'>Enviar</button>
			</form>
		</div>
<?php include('included/footer.php');?>