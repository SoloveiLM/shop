<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("<p>Ошибка подключения к базе данных!".mysqli_error(). "</p>");
mysqli_set_charset($db, "utf8");
?>

