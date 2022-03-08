<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

<div style="background-color:#FFE4C4;">

  <body>
    
    <?php include("menu.php") ?>

    <br><br>

    <center>


<div class="card border-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Cadastro</div>
  <div class="card-body text-dark">

    <div class="container">
    <label></label>

        <form class="form" method="POST" action="insert-usuario.php">
            <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome"/>

                <br><br>

            <label>E-mail:</label>
                <input type="email" class="form-control" name="email" placeholder="Email"/>

                <br><br>

                 <label>Usuário:</label>
                <input type="text" class="form-control" name="usuario" placeholder="Usuário"/>

                <br><br>

            <label>Senha:</label>
                <input class="form-control" type="password" name="senha" placeholder="Senha"/>

                <br>

            <button type="submit" class="btn btn-primary">Entrar</button>

        </div>
    </div>
        </form>
        </div>
    </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>