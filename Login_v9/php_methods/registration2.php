<?php

session_start();
include("connection.php");
$id_usuario = $_SESSION["id_usuario"];
$nome_pessoa = $_POST["name_p"];
$nome_inst = $_POST["inst_pessoa"];
$date = $_POST["date_nasc"];
$descricao = $_POST["desc"];


mysqli_real_escape_string($conn, trim($_POST["desc"]));
mysqli_real_escape_string($conn, trim($_POST["inst_pessoa"]));

$sql2 = "INSERT INTO perfil (nome_perfil, instituicao_perfil, data_nasc, descricao_perfil, id_usuario) VALUES ('$nome_pessoa', '$nome_inst ', '$date' ,'$descricao', '$id_usuario')";
if (mysqli_query($conn, $sql2)) {
header("Location: http://localhost/Projeto-HTML-1-master/TCC/Login_v9/index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  echo "não deu";
}

mysqli_close($conn);
session_abort();
?>



