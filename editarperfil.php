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
    <title>Editar</title>
</head>
<body>
<?php
    include_once 'navBar.php'
    ?>  
    <div class="container edit">
        <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group edit2">
            <label for="nombre" class="label">Nombre de perfil:</label>
            <input name="nombre" type="text" class="form-control" id="nombre" value="">
            <div class="labelemail">
                <label for="email" class="label">Email:</label> <!--NAME="email"-->
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <small id="emailHelp" class="form-text text-muted"></small>
            <label class="cambiarcontra"><a href="olvidarcontra.php">Cambiar contraseña</a></label>
            
        </div>
        <div class="edit3">
            <hr>
            <label type="button" class="eliminar">Eliminar cuenta</label>
            <label type="button" class="guardar">Guardar</label>
            <label type="button" class="cancelar">Cancelar</label>
        </div>
        <div class="avataredit">
            <label for="avatar">Cambiar avatar<input  type="file" name="avatar" value=""/></label>
        </div>                  
            </form>
        </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
 
</body>
</html> 