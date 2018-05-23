<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>GED - Login</title>
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body background="imagens/parede.jpg">
		<div class="loginBox">
			<img src="imagens/Maracai.png" class="user">
		<h2>Efetue o login</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
		<form action="valida.php" method="POST">
			<p>Email</p>
				<input type="email" name="usuario" placeholder="Email">
			
			<p>Senha</p>
				<input type="password" name="senha" placeholder="••••••">
				<input type="submit" name="btnLogin" value="Entrar">
				</form>
			
			<form action="cadastrar.php" method="POST">
			    <input type="submit" name="reg" href="cadastrar.php" value="Registrar-se">
				<a href="#">Esqueci a senha</a>
			</form>
		</div>
	</body>
</html>