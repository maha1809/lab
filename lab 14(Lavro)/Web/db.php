<?php
$db_name	= 'bz';
$db_host	= 'localhost';
$db_user	= 'postgres';
$db_pass	= 'postgres';


$conection_string	= "host=$db_host dbname=$db_name user=$db_user password=$db_pass"; 
//var_dump($conection_string);die();
$dbconn = pg_connect($conection_string) or die ("DB error --> " . pg_last_error($dbconn)); 
//pg_connect — Открывает соединение с базой данных PostgreSQL
//pg_last_error — Получает сообщение о последней произошедшей ошибке на соединении с базой данных
pg_query ($dbconn,"Set default_text_search_config='pg_catalog.ukrainian'");
//pg_query() выполняет query к указанной в connection базе данных. 
#include_once("jquery.php");

#echo "db.php";