<?php include('included/header.php');?>
<div class='container'>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="nav navbar-nav"><a href="#">Usuario1 </a></li>
        <li class="nav navbar-nav"><a href="#">Usuario2 </a></li>
		<li class="nav navbar-nav"><a href="#">Usuario3 </a></li>
		<li class="nav navbar-nav"><a href="#">Usuario4 </a></li>
		<li class="nav navbar-nav"><a href="#">Invitado </a></li>
      </ul> 
	 </div>
	 </div>
	</nav>
</div>
<div class='container'>
			<h1>Formulario de Ingreso</h1>
	<form class="form-horizontal">
	  <div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
		<div class="col-sm-10">
		  <input type="usuario" class="form-control" id="inputEmail3" placeholder="Usuario">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
		  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default">Enviar</button>
		</div>
	  </div>
	</form>
</div>
<?php include('included/footer.php');?>