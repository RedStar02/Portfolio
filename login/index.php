<!doctype html>
<html>
    <head>
        <title>Sistema de Login</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>

<div style="background-color:#FFE4C4;">
    
    <body>

 <?php include("menu.php") ?>

<br><br>
<center>

<div class="card border-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Login</div>
  <div class="card-body text-dark">
    
    <div class="container">
    <label></label>
        <form class="form" method="POST" action="login.php">
            <label>E-mail:</label>
                <input type="email" class="form-control" name="email" placeholder="Email"/>

                <br>

            <label>Senha:</label>
                <input class="form-control" type="password" name="senha" placeholder="Senha"/>
<br>
            <a href="painel.php"><button type="submit" class="btn btn-primary">Entrar</button></a>
            <a href="cadastro-usuario.php"><button type="submit" class="btn btn-success">Cadastro</button></a>
        

  </div>
</div>

        </form>
        

    </center>
    
    </body>


</div>

</div>
</div>
</div>
</html>