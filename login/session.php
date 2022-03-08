<?php

session_start();

if ($_SESSION['email'] == '' && $_SESSION['senha'] == '') {

header("location:index.php?login=2");
}

?>