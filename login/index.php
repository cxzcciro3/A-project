<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Valhalla</title>
	<link href="https://fonts.googleapis.com/css?family=Artifika" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">



</head>
<body>	

<div>
	
<center>
	<body>

		 <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Login</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="produto-formulario.php">Criar conta</a></li>
                    <li><a href="produto-lista.php">Sobre nós</a></li>
                    <li><a href="sobre.php">Eventos</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">

      <form class="form-signin" method="POST" action="valida.php">
        <h3 class="form-signin-heading">Bem vindo a Valhalla!</h3>
        <label for="inputUsuário" class="sr-only">Usuário</label>
        <input type="Usuário" name="Usuário" id="inputUsuário" class="form-control" placeholder="Usuário" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
      </form>
	  <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
    </div>
</center>

</div>

</body>
</html>