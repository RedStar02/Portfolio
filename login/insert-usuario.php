<?php 

 

include"config.php";

 

$nome = $_POST['nome']; 
$email = $_POST['email'];
$usuário = $_POST['usuario'];
$senha = $_POST['senha'];

 

mysql_query("INSERT INTO tb_user (nome, email, usuario, senha) VALUES ('$nome', '$email', '$usuario', '$senha')");

 

echo "<script>alert('Usuário cadastrado com sucesso');</script>";
echo "<meta http-equiv='refresh' content='0, url=index.php'>";

 

?>