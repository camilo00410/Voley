<?php

require_once "./db.php";
$db = new DB;
$jugadores = $db->select('jugadores', '*',   "id = '". $_SESSION['id'] . "'" ); //datos del jugador logueado
$equipo = $db->select('equipo', '*',"id = '". $jugadores[0]['equipo_id'] . "'" ); //datos de la tabla equipo where equipo_id = equipo 
$categoria = $db->select('categoria', '*',"id = '". $jugadores[0]['categoria_id'] . "'" ); //datos de la tabla categoria where categoria_equipo_id = categoria 

