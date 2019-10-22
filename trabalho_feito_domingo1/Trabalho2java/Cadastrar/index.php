<?php
    session_start();
    require_once "function.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <?php if(login()): ?>
        <p><?php echo $_SESSION['user']; ?> | <a href="logout.php">Sair</a></p>
        <?php else: ?>
            <p>Logar<a href="form_login.php"> Click aqui </a>
    <?php endif; ?>
</body>
</html>