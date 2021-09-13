<?php

require_once "./../../db.php"; //LLAMAMOS A LA CONEXION Y A LOS METODOS

$db = new DB; //INSTANCIAMOS LA CLASE DB

$_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT); //ENCRIPTAMOS LA CONTRASEÑA
$insert = $db->insert('jugadores', $_POST); //GUARDAMOS LOS DATOS ENVIADOS A LA TABLA JUGADORES

header('location: ./../../index.php'); //REDIRRECCIONAMOS A INDEX.PHP