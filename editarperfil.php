<?php
    require_once("controladores/funciones.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/editarPerfil.css">
    <link rel="stylesheet" href="css/navBar.css">
    <title>Editar</title>
</head>
<body>
<?php
    include_once 'navBar.php'
    ?>  
    <?php /*prueba*/
      if(isset($errores)):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errores as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
      <?php endif;?>
    <div class="container-fluid edit col-sm-12 col-md-9 col-lg-9 col-xl-6">

        <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group edit2 col-sm-5 col-md-5 col-lg-5 col-xl-5">
            <label for="nombre" class="label">Nombre de perfil:</label>
            <input name="nombre" type="text" class="form-control" id="nombre" value="<?= isset($_SESSION["nombre"])?  $_SESSION["nombre"] : "" ?>" >
            <div class="labelemail">
                <label for="email" class="label">Email:</label> <!--NAME="email"-->
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="<?= isset($_SESSION["email"])?  $_SESSION["email"] : "" ?>" aria-describedby="emailHelp">
            </div>
            <small id="emailHelp" class="form-text text-muted"></small>
            <label class="cambiarcontra"><a href="olvidarcontra.php">Cambiar contraseña</a></label>
            
        </div>
        <div class="avataredit col-sm-5 col-md-5 col-lg-5 col-xl-5">
            <label for="avatar">Cambiar avatar<input  type="file" name="avatar" value=""/></label>
        </div>                  
        <div class="edit3 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <hr>
            <button class="eliminar">Eliminar cuenta</button>
            <button type="submit" class="guardar">Guardar</button>
            <button class="cancelar">Cancelar</button>
        </div>
            </form>
        </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
 
</body>
</html> 