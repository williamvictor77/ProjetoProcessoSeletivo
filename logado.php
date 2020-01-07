<!DOCTYPE html>
<html>
<head>
	<title>Usuário Logado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Kulim+Park&display=swap" rel="stylesheet">
</head>
<body>
	<div>
		<img style="width: 10%;position: absolute;margin-left: 45%;margin-top: 1%;" src="imagens/usuarios.png">
	</div>
	<div class="vcestalogado">
		<?php 
		session_start();
		$data = file_get_contents('membros.json',true);
		$data = json_decode($data);
		foreach($data as $row){

			$row->nome;
			$row->email;
			$row->telefone;
			$row->senha;

			if($_SESSION['$campoemail'] == $row->email){
			echo "$row->nome você está logado<br><br>";
			$_SESSION['logado'] = true;
			echo "Seu email: $row->email<br><br>";
			echo "Seu telefone: $row->telefone<br><br>";
			echo "<span class='buttonsair'><a href='logout.php'>Sair</a></span><br><br>";
		}
		}
		
		?>
	</div>



<?php


$data = file_get_contents('membros.json',true);
$data = json_decode($data);

foreach($data as $row){

			$row->nome;
			$row->email;
			$row->telefone;
			$row->senha;


			if($_SESSION['$campoemail'] == $row->email){
			ob_start();
			echo "$row->nome";
			$nome = ob_get_contents();
			ob_end_clean();

	}
}





?>
</body>
</html>