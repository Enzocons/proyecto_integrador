<?php
include_once("controladores/funciones.php");
?>
<!-- ---------- Include para la navBar--------------- -->

  <div class="container-fluid p-0"> 
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top mx-auto" style="background-color:rgb(32,32,32)">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--IMG LOGO-->
      <div class="logo mx-auto"><a href="index.php"><img src="img/logo.svg" alt=""></a></div>
      <div class="botonesxs">
          <form class="form-inline my-2 my-lg-0">
           <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
            <button type="submit"class="profile"><img src="img/search.png" alt=""></button>
            <div class="dropdown">
                <button class=" dropdown botonxs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="profile">
                <img src="img/profile.png" alt="">
                </button>
                <div class="dropdown-menu menu_login" aria-labelledby="dropdownMenuButton">
                <?php
                if (isset($_SESSION["email"])==null&&isset($_COOKIE["email"])==null) {
                   echo"<a class='dropdown-item' href='login.php'>Login</a>";
                   echo"<a class='dropdown-item' href='registro.php'>Register</a>";
                }else{
                 echo" <a class='dropdown-item' href='editarperfil.php'>Perfil</a>";
                 echo" <a class='dropdown-item logout' href='logout.php'>Cerrar Sesión</a>";
                }
              ?>
                </div>
                </div>
            <button type="button" class="profile2"><img src="img/carrito.png" alt=""></button>
        </form>
      </div>
      <!---->
      
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PC
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">HP</a>
          <a class="dropdown-item" href="#">Dell</a>
          <a class="dropdown-item" href="#">Alienware</a>
          <a class="dropdown-item" href="#">Razer</a>
          <a class="dropdown-item" href="#">Logitech</a>      
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Accesorios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="teclados.php">Teclados</a>
          <a class="dropdown-item" href="mouse.php">Mouse</a>
          <a class="dropdown-item" href="headsets.php">Headsets</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faqs.php">FAQs</a>
      </li>
    </ul>
    <div class="botoneslg">
      <form class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button type="submit"class="profile"><img src="img/search.png" alt=""></button>
        <button type="button" class="profile"><img src="img/carrito.png" alt=""></button>
        
      </form>
    </div>
        <div class="dropdown botoneslg" style="margin: 0;">
          <?php 
            if(isset($_SESSION["email"])==null&&isset($_COOKIE["email"])==null){
              echo"<button class=' dropdown' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='profile'>
              <img class='login_img' src='img/profile.png' alt=''>
              </button>";
            }else{
              echo" <button class=' dropdown logeado' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='profile'>"?><img class="perfil_img" src="imagenes/<?= isset($_SESSION['avatar'])?$_SESSION['avatar']:''; ?>" alt=''><?="</button>";
            }
            ?>
            <div class="dropdown-menu menu_login" aria-labelledby="dropdownMenuButton">
              <?php
                if (isset($_SESSION["email"])==null&&isset($_COOKIE["email"])==null) {
                   echo"<a class='dropdown-item' href='login.php'>Login</a>";
                   echo"<a class='dropdown-item' href='registro.php'>Register</a>";
                }else{
                 echo" <a class='dropdown-item' href='editarperfil.php'>Perfil</a>";
                 echo" <a class='dropdown-item logout' href='logout.php'>Cerrar Sesión</a>";
                }
              ?>
            </div>
            </div>
  </div>
</nav> 
    </header>
    </div>
