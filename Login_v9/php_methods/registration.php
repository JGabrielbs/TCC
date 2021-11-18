<?php

session_start();
include("connection.php");
$user =  $_POST["input4"];
$email = $_POST["input3"];
$senha = $_POST["input1"];
mysqli_real_escape_string($conn, trim($_POST["input4"]));
mysqli_real_escape_string($conn, trim(md5($_POST["input1"])));


$sql = "select count(*) as total from usuario where login_usuario = '$user'"; 
$sql2 = "select count(*) as total from usuario where email_usuario = '$email'"; 
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
if( $result ){

$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result2);
if($row['total'] == 1 || $row2['total'] == 1 ) {
$_SESSION['usuario_existe'] = true;
$_SESSION['username']=$user;
$_SESSION['loggedin']='yes';
header("Location: http://localhost/Projeto-HTML-1-master/TCC/Login_v9/pag_registration.php?exists==true");

exit;
}
else
$sql = "INSERT INTO usuario (email_usuario, senha_usuario, login_usuario) VALUES ('$email', '$senha', '$user')";

if (mysqli_query($conn, $sql)) {
header("Location: http://localhost/Projeto-HTML-1-master/TCC/Login_v9/pag_registration2.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  echo "não deu";
}

mysqli_close($conn);

}

?>
