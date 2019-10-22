<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>index</title>
    <meta charset="utf-8" />

     <!-- inserindo css do Bootstrap -->
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all" />

<!-- inserindo css do Font Awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all" />

<link rel="stylesheet" href="css/trilho.css" media="all" />

</head>
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Tela Login</h3>
                    
                    <div>
                    <form action="login.php" method="POST">
  <div class="form-group">
    <label for="Inputlogin">Login</label>
    <input type="text" class="form-control" name="login" placeholder="Digite o seu login">
  </div>
  <div class="form-group">
    <label for="InputPassword1">Senha</label>
    <input type="password" class="form-control" name="senha" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- script JQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- inserindo JavaScript do Bootstrap -->
<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>