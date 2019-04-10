<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <section class="section1 col-xs-12 col-md-12 col-lg-12">
          <div class="logo">
             <a href="index.php">
                <img src="img/logo.svg" alt="">
             </a>  
          </div>
          <article class="col-xs-12 col-md-8 col-lg-5">
                <h1>Log In</h1> <hr>
                <form method="POST" action="">
                    <div class="form-group">
                      <label for="email">Email</label> <!--NAME="email"-->
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insert email" required>
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="contra">Password</label> <!--NAME="pass"-->
                      <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                      <small id="olvidecontraseña" class="form-text text-muted"><p> Password must have at least 6 characters.</p></small>
                      <small id="olvidecontraseña" class="form-text text-muted"><a href="">Forgot your password?</a> </small>
                    </div>
                    <div class="form-group form-check"> <!--NAME="remember"-->
                      <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
            
                    </div>
                    <button type="submit" class="btn btn-outline-light">Send</button>
                    <hr>
                    <label class="cuenta" ><a href="registro.php">New here?</a></label>
                  </form>
            </article>
        </section>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>