<?php
// константы
define("HOST", "localhost");
define("USER", "mysql");
define("PASSWORD", "mysql");
define("DB_NAME", "blogm");
//подключение к бд
$db_connect = mysql_connect(HOST, USER, PASSWORD, TRUE); 
if (!$db_connect)
{
   	echo( "<P> В настоящий момент сервер базы данных не доступен, поэтому корректное отображение страницы невозможно. </P>" );
	exit();
}

mysql_selectdb(DB_NAME,$db_connect);
mysql_set_charset('utf8'); // задаем кодировку для работы с бд

?>