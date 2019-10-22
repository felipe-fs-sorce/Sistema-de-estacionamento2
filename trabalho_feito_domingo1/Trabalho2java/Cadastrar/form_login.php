<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css" >

    <title>formulario!</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="../index.php">Sistema Estacionamento</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
              </li>
            </ul>
          </div>
        </nav>

    <div class="container">
    <form action="login.php" method="POST">

        <div class="row">
            <div class="col-sm-4">
        <div class="form-group">
          <label for="exampleInputEmail1">E-Mail:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exemple@exemple.com:" name="email" > 
        </div>
    </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
            <label for="exampleInputEmail1">Senha:</label>
            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Senha:" name="senha" >
          </div>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="formulario.php">
            <button type="button" class="btn btn-primary">Criar Conta</button>
          </a>
    </div>
      </form>

      

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>