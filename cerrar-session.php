<?php
session_start();
//el arreglo de la session lo vacia
$_SESSION = [];

header('location: /');
