<?php 
$conexao = mysql_connect('localhost', 'root', '') or die ('Rapa deu ruim!');
$bd = mysql_select_db('login', $conexao) or die ('Não conseguimos acessar a base, EITA PEGA!');
?>