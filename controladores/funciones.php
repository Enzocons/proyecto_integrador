<?php
session_start();
function dd($valor){
    echo "<pre>";
        var_dump($valor);
        exit;
    echo "</pre>";
}

function validar($datos,$bandera){
    $errores = [];
    if (isset($datos["nombre"])) {
        $nombre=trim($datos["nombre"]);
        if (empty($nombre)){
            $errores["nombre"]="Complete the name";
            }
    }    

    $email = trim($datos["email"]);
    if(empty($email)){
        $errores["email"]="Complete the email";
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores["email"]="Invalid email";
    }
    if ($bandera=="register") {
         if ($erroremail=true) {
            $errores["email"]="esta cuenta ya esta registrada";
        }
    }
    $pass=trim($datos["pass"]);
    if (isset($datos["repass"])) {
        $repass=trim($datos["repass"]);
    }
    if(empty($pass)){
        $errores["pass"]="Insert your password";
    }elseif (strlen($pass)<6) {
        $errores["pass"]="Password must have at least 6 characters";
    }
    if (isset($datos["repass"])) {
        if ($pass != $repass) {
            $errores["repass"]="Passwords do not match";
        }
    }
    if($bandera=="register"){
        if($_FILES["avatar"]["error"]!=0){
            $errores["avatar"]="Error,debe subir imagen";
        }
        $nombre = $_FILES["avatar"]["name"];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        if($ext!="png" && $ext!="jpg"){
            $errores["avatar"]="Debe seleccionar archivo png ó jpg";
        }  
    }

    return $errores;
}
    
    function persistir($campo){
        if(isset($_POST[$campo])){
            return $_POST[$campo];
        }
    }
    
    function armarAvatar($imagen){
        $nombre = $imagen["avatar"]["name"];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        $archivoOrigen = $imagen["avatar"]["tmp_name"];
        $archivoDestino = dirname(__DIR__);
        $archivoDestino = $archivoDestino."/imagenes/";
        $avatar=uniqid();
        $archivoDestino = $archivoDestino.$avatar;
        $archivoDestino = $archivoDestino.".".$ext;
        move_uploaded_file($archivoOrigen,$archivoDestino);
        $avatar=$avatar.".".$ext;
        return $avatar;
    }
    
    function crearRegistro($datos){
        $usuario = [
            "nombre"=>$datos["nombre"],
            "email"=>$datos["email"],
            "password"=> $datos["pass"],
            "avatar"=>$imagen
        ];
        return $usuario;
    }
    
    function guardar($usuario){
        $jsusuario = json_encode($usuario);
        file_put_contents("usuarios.json", $jsusuario . PHP_EOL ,FILE_APPEND);
    }

    function buscarEmail($email){
        $usuarios=abrirBaseDeDatos();
        foreach ($usuarios as $usuario) {
          if ($email===$usuario["email"]) {
              return $usuario;
          }
        }
        return null;
    }
    function emailencontrado($email){
        $user=abrirBaseDeDatos();
        foreach ($user as $usuario) {
            if ($email===$usuario["email"]) {
                $erroremail=true;
            }
        }
    }

    function abrirBaseDeDatos(){
        $baseDatosJson=file_get_contents("usuarios.json");
        $baseDatosJson=explode(PHP_EOL,$baseDatosJson);
        array_pop($baseDatosJson);
        foreach ($baseDatosJson as $usuarios) {
            $arrayUsuarios[]=json_decode($usuarios,true);
        }
        return $arrayUsuarios;
    }

    function seteoUsuario($user,$dato){
        $_SESSION["nombre"]=$user["nombre"];
        $_SESSION["email"]=$user["email"];
        $_SESSION["perfil"]=$user["perfil"];
        $_SESSION["avatar"]=$user["avatar"];
        if (isset($dato["remember"])) {
            setcookie("email",$dato["email"],time()+3600);
        }    
    }

    function validarUsuario(){
        if ($_SESSION["email"]) {
            return true;
        }elseif ($_COOKIE["email"]) {
            $_SESSION["email"]=$_COOKIE["email"];
            return true;
        }else {
            return false;
        }
    }

    function reemplazoDePass($user,$passnueva){
        $user["password"]= $passnueva;

        return $user;
    }
