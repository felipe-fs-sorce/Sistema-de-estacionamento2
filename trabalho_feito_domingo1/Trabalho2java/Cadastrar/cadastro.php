<?php
            //Declaração da variáveis
            $conexao = new PDO("mysql:dbname=teste;host=localhost", "root", "");
            $stmt = $conexao->prepare("INSERT INTO login (usuario, email, senha) VALUES (:USU, :EMAIL, :SENHA)");

            if (empty($_POST['usuario']) || empty($_POST['email']) || empty($_POST['senha'])) {
                header("Location: formulario.php");
             }else {
             
            $usuario = $_POST['usuario'];
            $email = $_POST['email'];
            $senha = $_POST["senha"];

            $teste = md5($senha);
            
            $stmt->bindParam(":USU", $usuario);
            $stmt->bindParam(":EMAIL", $email);
            $stmt->bindParam(":SENHA", $teste);
           

            $stmt->execute();

            header("Location: form_login.php");
             }
            

    ?> 
