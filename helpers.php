<?php
session_start();
function dd($valor){
    echo "<pre>";
        var_dump($valor);
        exit;
    echo "</pre>";
}

function persistir($campo){
    if(isset($_POST[$campo])){
        return $_POST[$campo];
    }
}

function redirect($name){
    header("location:".$name);
    exit;
}

