<?php

session_start();
include('conexao.php');

if(empty($_POST['login']) || empty($_POST['senha'])) {
    header('index.php');
    exit();
}

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query = "SELECT * FROM usuario WHERE login = '$login' AND senha='$senha' LIMIT 1";

$result = mysqli_query($conexao, $query);

$row =  mysqli_num_rows($result);
/*
if (mysqli_num_rows($results) == 1) { 

$logged_in_user = mysqli_fetch_assoc($result);
if ($logged_in_user['user_type'] == 'admin') {
*/
if(mysqli_num_rows($result) == 1) {
    $_SESSION['usuario'] = $login;
    header('sistema.php');
    exit();
}else {
    $_SESSION['Não_autenticado'] = true;
    header('index.php');
    exit();
}

?>
