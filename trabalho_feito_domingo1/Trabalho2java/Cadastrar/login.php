<?php

    $con = new PDO("mysql:dbname=teste;host=localhost", "root", "");
    $stmt = $con->prepare("SELECT * FROM login WHERE email = :EMAIL AND senha = :PASSWORD");  
 
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $teste = md5($senha);

    $stmt->bindParam(':EMAIL', $email);
    $stmt->bindParam(':PASSWORD', $teste);

    $stmt->execute();
   
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

     if (count($users) <= 0)
     {
         header("Location: form_login.php");
         exit;
     }

 
    // pega o primeiro usuário
    $dados = $users[0];
    
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['user'] = $dados['usuario'];
    $_SESSION['user_id'] = $dados['id_login'];
    $_SESSION['user_name'] = $dados['email'];
    $_SESSION['user'] = $dados['usuario'];
    
    
    if ($dados['nivel'] == 1) {
       // header('Location: index.php');
       echo "VOCÊ É ADMINISTRADOR :)";
    }else {
        //header('Location: index1.php');
        echo "VOCÊ NÃO É ADMINISTRADOR :(";
    }
    header("Location: ../sistema.php");
?>