<?php

$host = "localhost";

$password = "BeMneComsalox75";

$username = "c51433_feruzbek_na4u_ru";

$databasename = "c51433_feruzbek_na4u_ru";

global $db;  

setlocale(LC_ALL,"ru_RU.UTF8");

$db = new mysqli($host, $username, $password, $databasename, 3306);

if ($db->connect_errno) {

    echo "Не удалось подключиться к MySQL: (" . $db->connect_errno . ") " . $db->connect_error;

	exit;

}