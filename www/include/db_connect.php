<?php



#$db = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
#mysqli_select_db($db_database,$db) or die ("Ошибка подключения к базе данных!".mysqli_error());
#mysqli_query("SET names cp1251");

$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("<p>Ошибка подключения к базе данных!".mysqli_error(). "</p>");
mysqli_set_charset($db, "utf8");
?>

