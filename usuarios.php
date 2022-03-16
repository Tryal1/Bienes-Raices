<?php
//importar la coneccions
require 'includes/config/database.php';
$db = conectarDB();

//Crear email y password
$email = "correo@correo.com";
$password = "1234";
//hash para el password
$passwordhash = password_hash($password, PASSWORD_DEFAULT);

var_dump($passwordhash);

//query para crear el usuario
$query = "INSERT INTO usuarios(email, password) values('${email}','${passwordhash}');";

//Agregarlo en la base de datos
mysqli_query($db, $query);
