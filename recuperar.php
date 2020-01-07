<!DOCTYPE html>
<html>
<head>
	<title>Red Check: recuperação de senha</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Kulim+Park&display=swap" rel="stylesheet">
</head>
<body>
	<div>
		<a href="index.php"><img style="width: 14%;margin-left: 42.5%;margin-top: 3%;" src="imagens/logo-negativo.png"></a>
	</div>
	<div>
		<img class="cadeadorecuperar" src="imagens/cadeado 2.png">
	</div>
	<div id="dados-letra2">
		<b><p>Recuperar senha</p></b>
		<p>Informe seu e-mail cadastrado</p>
	</div>
	<form method="post">
		<img style="width: 1.7%;position: absolute;margin-left: 37%;margin-top: 4.6%" src="imagens/logo-email.png"><input class="inputscadastro2" type="email" name='email' placeholder="E-mail" required="">
		<input style="background-color: #F5214D;box-shadow: none;width: 20%;height: 30px;outline: 0;font-family: 'Roboto', sans-serif;border: none;margin-left: 40.4%;margin-top: 3%;border-radius: 50px;font-size: 110%" type="submit" name="save" value="ENVIAR">
	</form>
	<img style="width: 1.3%;position: absolute;margin-left: 47%;margin-top: 2.3%;" src="imagens/seta.png"><a style="color: white;text-decoration: none;margin-left: 49%;margin-top: 2%;position: absolute;" href="index.php">voltar</a>
<?php
require_once ("enviaremail\PHPMailerAutoload.php");
	$data = file_get_contents('membros.json',true);
	$data = json_decode($data);
	

if(isset($_POST['save'])){
	$campoemail = $_POST["email"];
}
	foreach($data as $row){

			$row->email;
			
if(isset($_POST['save'])){			
	if($campoemail == $row->email){
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' =>true
)
);
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Username = 'redcheckteste@gmail.com';
$mail->Password = 'redcheck';
$mail->setFrom('redcheckteste@gmail.com', 'Red Check - Recuperacao de senha');
$mail->addAddress($campoemail);
$mail->isHTML(true);
$mail->Subject = 'Recuperacao de senha';
ob_start();
// seu codigo php aqui
echo "$row->nome";
$nome = ob_get_contents();
ob_end_clean();
ob_start();
echo "$row->senha";
$senha = ob_get_contents();
ob_end_clean();
$mail->Body    = "$nome sua senha registrada é: <b>$senha</b>";
if($mail->send()){
echo ("<script language= 'JavaScript'>
location.href='index.php'
alert('Sua senha foi enviado para o email');
</script>");
}else{
echo 'Não foi possível Recuperar a senha.<br>';
echo 'Erro: ' . $mail->ErrorInfo;
}
	}

		
}
}
if(isset($_POST['save'])){
	echo ("<script language= 'JavaScript'>
location.href='recuperar.php'
alert('Este email não foi cadastrado');
</script>");
}
	




	
	



?>
</body>
</html>