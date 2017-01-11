﻿
<!doctype html>
<html>
<head>
<meta http-equive="content-type" content="text/html" charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="../js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="../js/shop-script.js"></script>
<title>Интернет-магазин</title>
</head>

<body>
<?php
   include("include/db_connect.php");
?>

<div id="block-dody">
<?php
    include("include/block-header.php");
?>
<div id="block-right">
<?php
    include("include/block-category.php");
	include("include/block-parameter.php");
?>
</div>


<div id="block-content">
<div id="block-sorting">
<p id="nav-breadcrumbs"><a href="index.php">Главная страница</a> \ <span>Все товары</span></p>

<ul id="options-list">
<li>Вид:</li>
<li><img id="style-grid" src="../images/icon-grid1.png"></li>
<li><img id="style-list" src="../images/icon-list.png"></li>
<li>Сортировать:</li>
<li><a id="select-sort">Без сортировки</a>

<ul id="sorting-list">
<li a href="">От дешовых к дорогим</li>
<li a href="">От дорогих к дешовым</li>
<li a href="">От А до Я</li>
<li a href="">От Я до А</li>
</ul>

</li>
</ul>
</div>
<ul id="block-tovar-grid">
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM table_products ";
$result = mysqli_query($db, $query);
$row_cnt = mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0)
{
	$row =mysqli_fetch_array($result);	
	do
	{

	if ($row["image"] != "" && file_exists(" ./uploads_images/".$row["image"]))
	{
		$img_path ='../uploads_images/'.$row["image"];        
		$max_width=100;
	    $max_height=100;
	    list($width, $height) = getimagesize($img_path);
	    $ratioh=$max_height/$height;
	    $ratiow=$max_width/$width;
	    $ratio=min($ratioh, $ratiow);
	    $width=intval($ratio*$width);
	    $height=intval($ratio*$height);

	}
	else
		{	
		$img_path="../images/no-image163x163.jpg";
		$width=163;
	    $height=163;
		}
	
		echo '<li>
	<div class="block-images-grid">
	<img src=" '.$img_path.' " width="'.$width.'" height="'.$height.'" />
	
	</div>
	<p class="style-title-grid"><a href="">'.$row["title"].'</a></p>
	<ul class="reviews-and-counts-grid">
	<li><img src="../images/eye-icon.png" /><p>0</p></li>
	</ul>
	<a class="add-cart-style-grid"></a>
	<p class="style-price-grid"><strong>'.$row["price"].'</strong> грн.</p>
	<div class="mini-features">'.$row["mini_features"].'
	</div>
	</li>';

	
	}
	while ($row =mysqli_fetch_array($result));	
}

    include("include/block-footer.php");

?>
</ul>

<ul id="block-tovar-list">
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM table_products";
$result = mysqli_query($db, $query);
$row_cnt = mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0)
{
	$row =mysqli_fetch_array($result);	
	do
	{

	if ($row["image"] != "" && file_exists(" ./uploads_images/".$row["image"]))
	{
		$img_path ='uploads_images/'.$row["image"];        
		$max_width=100;
	    $max_height=100;
	    list($width, $height) = getimagesize($img_path);
	    $ratioh=$max_height/$height;
	    $ratiow=$max_width/$width;
	    $ratio=min($ratioh, $ratiow);
	    $width=intval($ratio*$width);
	    $height=intval($ratio*$height);

	}
	else
		{	
		$img_path="../images/no-image.jpg";
		$width=100;
	    $height=100;
		}
	
		echo '<li>
	<div class="block-images-list">
	<img src=" '.$img_path.' " width="'.$width.'" height="'.$height.'" />	
	</div>
	
	
	
	<ul class="reviews-and-counts-list">
	<li><img src="images/eye-icon.png" /><p>0</p></li>
	</ul>
	<p class="style-title-list"><a href="">'.$row["title"].'</a></p>
	
	<a class="add-cart-style-list"></a>
	
	<p class="style-price-list"><strong>'.$row["price"].'</strong> грн.</p>
	
	<div class="style-text-list">'.$row["mini_description"].'
	</div>
	</li>';

	
	}
	while ($row =mysqli_fetch_array($result));	
}

    include("include/block-footer.php");

?>
</ul>
</div>
</div>
</body>
</html>