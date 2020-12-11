<?php
$LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['SCRIPT_FILENAME'])));
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
echo "Last modified: $LastModified";
$config{'charset'} = 'utf-8';
$config{'default_lng'} = 'ua';
#$config{'host_name'} = 'your_path/Web';
$config_host_name=$config{'host_name'};
$config{'data_dir'} = 'your_path/Web';

$config{'dbName'} = "bz";
$config{'dbHost'} = "localhost";
$config{'dbPort'} = "5432";
$config{'dbUser'} = "postgres";
$config{'dbPasswd'} = "postgres";

$config{'LogInFor'} = 3600;
$config{'dom_name'} = 'bz';
$config{'sess_name'} = 'SPRITE_SESS_ID';

$config{'default_theme'} = 'black-style';

$config{'email'} = 'mariia.dutchak@pnu.edu.ua';
header("Content-Type: text/html; charset=".$config{'charset'});
//eader() используется для отправки HTTP-заголовка. В » спецификации HTTP/1.1 есть подробное описание HTTP-заголовков
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
