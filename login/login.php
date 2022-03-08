<?php
include("conexao.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$query = mysql_query("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'") or die (mysql_error());

$num_rows = mysql_num_rows($query);

if ($num_rows > 0) {
    session_start();
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;
    header("location:painel.php");
} else {
    header("location:index.php");
}

?>