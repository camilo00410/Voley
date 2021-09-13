<?php

require_once "./../../db.php"; //LLAMAMOS A LA CONEXION Y A LOS METODOS

$db = new DB; //INSTANCIAMOS LA CLASE DB

$columns = $db->select('jugadores','*', "correo = '". $_POST['correo'] . "'"); //

if(count($columns)>0){  //Si el correo existe
    if (password_verify($_POST['password'], $columns[0]['password'])) { //si la contraseña es valida
        session_start(); //INICIO DE SESSION
        $_SESSION['user'] = $columns[0]['nombre'];
        $_SESSION['id'] = $columns[0]['id']; 
        header('location: ./../../jugadores.php');

    } else {
        echo 'Contraseña no encontrada.';
        header('location: ./../../login.php');
    }
}else{
    echo "No encontro el correo";
    header('location: ./../../login.php');
}

