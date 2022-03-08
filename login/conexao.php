<?php 
$conexao = mysql_connect('localhost', 'root', '') or die ('Erro de credencial');
$bd = mysql_select_db('controle_estoque', $conexao) or die ('Erro no sistema de base de dados');
?>