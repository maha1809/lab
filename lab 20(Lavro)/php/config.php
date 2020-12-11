<?php
$config{'charset'} = 'utf-8';
$config{'default_lng'} = 'ua';
#$config{'host_name'} = 'your_path/Web';
$config_host_name=$config{'host_name'};
$config{'data_dir'} = 'your_path/Web';
$config{'dbName'} = "dimayurchuk14";
$config{'dbHost'} = "mysql.zzz.com.ua";
$config{'dbPort'} = "5432";
$config{'dbUser'} = "dimayurchuk14";
$config{'dbPasswd'} = "mdbZ5692";

$config{'LogInFor'} = 3600;
$config{'dom_name'} = 'bz';
$config{'sess_name'} = 'SPRITE_SESS_ID';

$config{'default_theme'} = 'black-style';

$config{'email'} = 'mariia.dutchak@pnu.edu.ua';
header("Content-Type: text/html; charset=".$config{'charset'});
//header — Отправка HTTP-заголовка
?>

<html>
<head>
   <!-- <title>Побудова бази знань</title> -->
    <meta name='keywords' content=''/>
    <meta name='description' content=''/>
    <meta http-equiv='Content-Type' content='text/html' charset='utf-8'>

<link rel='stylesheet' href='./css/style.css' type='text/css' media='screen, projection'/>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="my.js"></script>
</head>
