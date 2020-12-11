<?php
$db_name	= 'dimayurchuk14';
$db_host	= 'mysql.zzz.com.ua';
$db_user	= 'dimayurchuk14';
$db_pass	= 'mdbZ5692';
//$dbPort = "5432";

$dbconn = mysqli_connect("$db_host", "$db_user", "$db_pass","$db_name");//з'єднання з базою даних
if (!$dbconn) 
        die ("Збій db_server:");
if(!mysqli_query($dbconn,
	"CREATE TABLE IF NOT EXISTS dusc(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	name_d VARCHAR(250) UNIQUE,
	key_concepts1 text,
	key_concepts2 text,
	key_concepts3 text
       )")){  //key_concepts text[]
 	echo "Error create table!!!<br>";
 }
mysqli_query($dbconn,"insert into dusc (name_d, key_concepts1,key_concepts2, key_concepts3) values ('Об\'єктно-орієнтоване програмуваня','Java', 'C++','Phyton')");
?>