<!DOCTYPE html>
<html>
<head>
	<title>usuario deslogado</title>
</head>
<body>
<?php

session_start();
	if($_SESSION['logado']==true){
    session_destroy();
    header("Location:index.php");
    exit();
}



?>
</body>
</html>