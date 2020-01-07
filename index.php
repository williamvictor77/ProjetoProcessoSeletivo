<!DOCTYPE html>
<html>
<head>
	<title>Red Check</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Kulim+Park&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	
	<div>
		<img id="logo" src="imagens/logo-negativo.png">
	</div>
	<form method="post">
		<img style="width: 2%;position: absolute;margin-left: 33.3%;margin-top: 8%;" src="imagens/logo-email.png"><input class="email" type="email" name="email" required="" placeholder="E-mail"><br><br>
		<img style="width: 2%;position: absolute;margin-left: 33.3%;margin-top: 1.8%" src="imagens/cadeado.png"><input class="email2" type="password" name="senha" required="" placeholder="Senha"><br><br>
		<div class="check"><input type="checkbox" name=""></div><span class="lembrar">Lembrar-me</span><span ><a class="recuperar" href="recuperar.php">Recuperar senha</a></span>
		<input style="background-color: #F5214D;box-shadow: none;width: 25%;height: 30px;outline: 0;font-family: 'Roboto', sans-serif;border: none;margin-left: 37.5%;margin-top: 3%;border-radius: 3px;font-size: 110%" type="submit" name="save" value="ENTRAR">
	</form>
		<p class="cadas">Não possui uma conta?<b>&nbsp<a href="cadastrar.php">cadastre-se</a></b></p>
		<img style="width: 3.5%;position: absolute;margin-left: 90%;margin-top: 1.8%" src="imagens/logo-conversa.png">
	
<?php
	
session_start();

	$data = file_get_contents('membros.json',true);
	$data = json_decode($data);

if(isset($_POST['save'])){
	$_SESSION['$campoemail'] = $_POST['email'];
	$camposenha = $_POST['senha'];
}
	foreach($data as $row){

			$row->email;
			$row->senha;
			

if(isset($_POST['save'])){
	if($_SESSION['$campoemail'] == $row->email  && $camposenha == $row->senha ){
			header("location: logado.php");

	}
	
}	
}
if(isset($_POST['save'])){
if($_SESSION['$campoemail'] != $row->email  || !$camposenha != $row->senha){
		echo("<script>alert('login ou senha incorretos')</script>");
		}
	}
	
?>
</body>
</html>