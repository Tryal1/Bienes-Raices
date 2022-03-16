<?php
//importa el archivo de app.php para utilizar sus funciones o etc
require 'app.php';
//esta funcion sirver para colocar el header o footer de todas las paginas mas sencillo
function incluirTemplate(string $nombre, bool $inicio = false)
{
    include TEMPLATES_URL . "/${nombre}.php";
}

function autenticado(): bool
{   //inicia la session y verfica si se autentico el usuario
    session_start();
    $auth = $_SESSION['login'];
    if ($auth) {

        return true;
    }
    return false;
}
