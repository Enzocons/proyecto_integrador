<?php
include_once("controladores/funciones.php");
if ($_POST){
  $errores=validar($_POST,"registro");
  if(count($errores)==0){
    $avatar = armarAvatar($_FILES);
    $registro = armarRegistro($_POST,$avatar);
    guardar($registro);
    header("location:login.php");
    exit;
  }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: Register ::</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <section class="section1">
        <div class="logo">
              <a href="index.php">
                <img src="img/logo.svg" alt="">
              </a>  
          </div>
            <article class="col-xs-12 col-md-8 col-lg-5">
                <h1>Create account</h1> <hr>
                <form method="POST" action="">
                     <div class="form-group">
                            <label for="nombre">Name</label>
                            <input name="nombre" type="text" class="form-control" id="nombre" value="<?= (isset($errores["nombre"]))? "" : persistir("nombre"); ?>" placeholder="Your name here" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label> <!--NAME="email"-->
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=(isset($errores["email"]))? "" : persistir("email");?>" placeholder="Insert email" required>
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="contra">Password</label> <!--NAME="password"-->
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                      <small id="olvidecontraseña" class="form-text text-muted"><p> Password must have at least 6 characters.</p></small>
                    </div>
                    <div class="form-group">
                            <label for="confirmcontra">Confirm password</label> <!--NAME="repassword"-->
                            <input name="repassword" type="password" class="form-control" id="exampleInputPassword1" placeholder=" Confirm password" required>
                            <!-- <small id="olvidecontraseña" class="form-text text-muted"><a href="">Olvido su contraseña?</a> </small> -->
                    </div>
                    <!-- <div class="form-group form-check"> 
                      <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Recuérdame.</label>
                    </div> -->
                    <button type="submit" class="btn btn-outline-light">Send</button>
                    <hr>
                    <label class="cuenta" ><a href="login.php">Already have an account?</a></label>
                  </form>
            </article>
        </section>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>