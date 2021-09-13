<?php

require_once "./db.php";

$db = new DB;
$columns_categoria = $db->select('categoria');
