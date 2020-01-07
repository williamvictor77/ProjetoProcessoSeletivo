<?php
require_once ("PHPMailerAutoload.php");
$email = $_POST["email"];
$nome = $_POST["nome"];
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
$mail->Username = 'williamvictorsilva@gmail.com';
$mail->Password = 'equipematrix77';
$mail->setFrom('williamvictorsilva@gmail.com', 'facilite sua vida');
$mail->addAddress($email, $nome);
$mail->isHTML(true);
$mail->Subject = 'apostila';
$mail->Body    = 'Olá você foi comtemplado e irá receber essa apostila de estudos, <b>parabéns!!!!</b>';
$mail->addAttachment('C:\Users\willi\Desktop\curriculum william.pdf', 'curriculo.pdf');
if($mail->send()){
echo ("<script language= 'JavaScript'>
location.href='telaemail2.php'
</script>");
}else{
echo 'Não foi possível enviar a mensagem.<br>';
echo 'Erro: ' . $mail->ErrorInfo;
}
?>






