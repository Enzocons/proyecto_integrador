<?php
    require_once("helpers.php");
    require_once("clases/Usuario.php");
    require_once("clases/Validador.php");
    require_once("clases/ArmarUsuario.php");
    require_once("clases/BaseDeDatos.php");
    require_once("clases/BaseJSON.php");
    require_once("clases/Buscador.php");



    $validar = new Validador();
    $newUser = new ArmarUsuario();
    $json = new BaseJSON("usuarios.json");
    

