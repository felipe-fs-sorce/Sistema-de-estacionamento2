<?php
session_start();
        if (!$_SESSION['logged_in']){
            header("location: Cadastrar/form_login.php");
            exit();
        }
?>