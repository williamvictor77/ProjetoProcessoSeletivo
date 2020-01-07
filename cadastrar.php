<!DOCTYPE html>
<html>
<head>
	<title>Red Check: cadastro</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Kulim+Park&display=swap" rel="stylesheet">
</head>
<body>
	<div>
		<a href="index.php"><img style="width: 14%;margin-left: 42.5%;margin-top: 3%;" src="imagens/logo-negativo.png"></a>
	</div>
	<div id="dados-letra">
		<b><p>Cadastro de usúario</p></b>
		<p>Informe seus dados abaixo</p>
	</div>
	<div>
		<form  method="POST">
			<img style="width: 1.7%;position: absolute;margin-left: 37%;margin-top: 0.5%" src="imagens/usuarios.png"><input class="inputscadastro" type="text" name='nome' placeholder="Nome" required=""><br><br>
			<img style="width: 1.7%;position: absolute;margin-left: 37%;margin-top: 0.7%" src="imagens/logo-email.png"><input class="inputscadastro" type="email" name='id' placeholder="E-mail válido" required=""><br><br>
			<img style="width: 1.7%;position: absolute;margin-left: 37%;margin-top: 0.7%" src="imagens/phone.png"><input class="inputscadastro" type="text" name='telefone' placeholder="Telefone" required=""><br><br>
			<img style="width: 1.7%;position: absolute;margin-left: 37%;margin-top: 0.6%" src="imagens/cadeado.png"><input class="inputscadastro" type="password" name='senha' placeholder="Senha" required="" ><br><br>
			<img style="width: 1.7%;position: absolute;margin-left: 37%;margin-top: 0.6%" src="imagens/cadeado.png"><input class="inputscadastro" type="password" name='repetirsenha' placeholder="Repita a senha" required=""><br><br>
			<input style="background-color: #F5214D;box-shadow: none;width: 20%;height: 30px;outline: 0;font-family: 'Roboto', sans-serif;border: none;margin-left: 40.4%;margin-top: 1%;border-radius: 50px;font-size: 110%" type="submit" name="save" value="CADASTRAR">
		</form>
		<img style="width: 1.3%;position: absolute;margin-left: 47%;margin-top: 2.3%;" src="imagens/seta.png"><a style="color: white;text-decoration: none;margin-left: 49%;margin-top: 2%;position: absolute;" href="index.php">voltar</a>
	</div>
	<img style="width: 3.5%;position: absolute;margin-left: 90%;margin-top: 1.8%" src="imagens/logo-conversa.png">
<?php
if(isset($_POST['save'])){
$senha = $_POST['senha'];
$senha2 = $_POST['repetirsenha'];
if ($senha != $senha2) {
	echo ("<script language= 'JavaScript'>
		alert('Senhas incompátiveis');
		</script>");
	exit;
}
if(isset($_POST['save'])){
	$data = file_get_contents('membros.json', true);
	$data = json_decode($data);
if(isset($_POST['save'])){
	$campoemail = $_POST['id'];
}
	foreach($data as $row){

			$row->email;
			
if(isset($_POST['save'])){
	if($campoemail == $row->email){
			echo "<script>alert('E-mail já está em uso')</script>";
			exit;
	}
	
}	
}

	$input = array(
			'id' =>$_POST['id'],
			'nome' => $_POST['nome'],
			'email' => $_POST['id'],
			'telefone' => $_POST['telefone'],
			'senha' => $_POST['senha'],
			'repetirsenha' => $_POST['repetirsenha']
		);	
		$data[] = $input;

		$data = json_encode($data, JSON_PRETTY_PRINT);
		file_put_contents('membros.json', $data);
		
		if(isset($_POST['save'])){
			echo ("<script language= 'JavaScript'>
		location.href='index.php'
		alert('Usuário cadastrado com sucesso');
		</script>");
}
}
}
?>
</body>
</html>