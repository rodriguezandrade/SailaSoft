<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Seción</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="../../Principal/bootstrap/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script type="text/javascript" src="js/code.js"></script>
     <script src="../../Principal/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div class="container" style="margin-left:-300px;margin-top: 100px;">
        <div method="post"action="../../principal/index.php" class="form-signin" role="form">
            <h2 class="form-signin-heading">Iniciar</h2>
            <input style="margin-bottom: 2px;" type="email" id="usuario" class="form-control" placeholder="Usuario" required autofocus >
            <input type="password" id="pass" class="form-control" placeholder="Contraseña" required>
            <button class="btn btn-lg btn-primary btn-block" id="singin" type="button">Entrar</button>
        </div>
    </div>
    <div class="container" id="resultado">
        
    </div>
</body>
</html>