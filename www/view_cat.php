﻿<!doctype html>
<html>
<head>
<meta http-equive="content-type" content="text/html" charset="utf-8">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="trackbar/trackbar.css" rel="stylesheet" type="text/css">


<script type="text/javascript" src="../js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="../js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="../js/shop-script.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../trackbar/jquery.trackbar.js"></script>

<title>Интернет-магазин</title>
</head>

<body>
<?php
  include("functions/functions.php");
  
 if(isset($_GET["sort"]) and isset($_GET["cat"]) and isset($_GET["type"]))
 {
	 $sorting = clear_string($db_shop,$_GET["sort"]); 
	 $cat = clear_string($db_shop,$_GET["cat"]); 
	 $type = clear_string($db_shop,$_GET["type"]); 
	 $querycat = "AND brand='$cat' AND type_tovar='$type'"; 
	 $catlink = "cat=" . $cat . "&"; 
	 switch($sorting)
	 { 
	 case 'price-asc':
	  $sorting="price ASC"; 
	  $sort_name = 'От дешовых к дорогим';
	  break; 
	  
	  case 'price-desc':
	   $sorting="price DESC"; 
	   $sort_name = 'От дорогих к дешовым';
	   break; 
	   
	   case 'brand': 
	   $sorting="brand"; 
	   $sort_name = 'По алфавиту';
	   break;
	    
	   default: 
	   $sorting="products_id DESC"; 
	   $sort_name = 'Без сортировки'; 
	   break; 
	   }; 
	}
		  
	 elseif(isset($_GET["sort"]) and isset($_GET["type"]))
		  { $sorting = clear_string($db_shop,$_GET["sort"]); 
		  $type = clear_string($db_shop,$_GET["type"]); 
		  $querycat = " AND type_tovar='$type'"; 
		  $catlink = ""; 
		  
		  switch($sorting)
		  { 
		  case 'price-asc': 
		  $sorting="price ASC"; 
		  $sort_name = 'От дешовых к дорогим';
		  break; 
		  
		  case 'price-desc': 
		  $sorting="price DESC"; 
		  $sort_name = 'От дорогих к дешовым';
		  break;
		  		  
		  case 'brand': 
		  $sorting="brand"; 
		  $sort_name = 'По алфавиту';
		  break; 
		  
		  default: 
		  $sorting="products_id DESC"; 
		  $sort_name = 'Без сортировки'; 
		  break; 
		    }; 
	 }
	 elseif(isset($_GET["cat"]) and isset($_GET["type"]))
			  { $cat = clear_string($db_shop,$_GET["cat"]); 
			  $type = clear_string($db_shop,$_GET["type"]); 
			  $querycat = "AND brand='$cat' AND type_tovar='$type'"; $catlink = "cat=" . $cat . "&"; 
			  $sorting="products_id DESC"; 
			  $sort_name = 'Без сортировки'; 
			  }elseif(isset($_GET["type"]))
			    { $type = clear_string($db,$_GET["type"]); 
			    $querycat = "AND type_tovar='$type'"; 
			    $sorting="products_id DESC"; 
			    $sort_name = 'Без сортировки'; 
			    $catlink = ""; }else{ $querycat = ""; 
				};﻿
	
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


<?php
if (!empty($cat) && !empty($type))
{
	$querycat="AND brand='$cat' AND type_tovara='$type'";
	$catlink="cat=$cat&";
	}else
	    {
		if (!empty($type))
   {
	$querycat="AND type_tovara='$type'";
	}
		else{
			$querycat="";
			}
				if (!empty($cat))
   {
	$catlink="cat='.$cat.'&";
	}
		else{
			$catlink="";
			}
		}


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM table_products WHERE visible='1' $querycat ORDER BY $sorting";
$result = mysqli_query($db, $query);
$row_cnt = mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0)
{
	$row =mysqli_fetch_array($result);	
	echo '<div id="block-sorting">
<p id="nav-breadcrumbs"><a href="index.php">Главная страница</a> \ <span>Все товары</span></p>

<ul id="options-list">
<li>Вид:</li>
<li><img id="style-grid" src="../images/icon-grid1.png"></li>
<li><img id="style-list" src="../images/icon-list.png"></li>
<li>Сортировать:</li>
<li><a id="select-sort">'.$sort_name.'</a>

<ul id="sorting-list">
<li a href="view_cat.php?'.$catlink.'type='.$type.'&sort=price-asc">От дешовых к дорогим</li>
<li a href="view_cat.php?'.$catlink.'type='.$type.'&sort=price-desc">От дорогих к дешовым</li>
<li a href="view_cat.php?'.$catlink.'type='.$type.' &sort=brand1">От А до Я</li>
<li a href="view_cat.php?'.$catlink.'type='.$type.' &sort=brand2">От Я до А</li>
</ul>

</li>
</ul>
</div><ul id="block-tovar-grid">';

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
	<li><img src="images/eye.png" /><p>0</p></li>
	</ul>
	<a class="add-cart-style-grid"></a>
	<p class="style-price-grid"><strong>'.$row["price"].'</strong> грн.</p>
	<div class="mini-features">'.$row["mini_features"].'
	</div>
	</li>';

	
	}
	while ($row =mysqli_fetch_array($result));	


    include("include/block-footer.php");

?>
</ul>

<ul id="block-tovar-list">
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM table_products WHERE visible='1' $querycat ORDER BY $sorting";
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
		$img_path="images/no-image.jpg";
		$width=100;
	    $height=100;
		}
	
		echo '<li>
	<div class="block-images-list">
	<img src=" '.$img_path.' " width="'.$width.'" height="'.$height.'" />	
	</div>
	
	
	
	<ul class="reviews-and-counts-list">
	<li><img src="images/eye.png" /><p>0</p></li>
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
}else
  {
	echo '<h3>Категория не доступна или не создана</h3>';
	}
    include("include/block-footer.php");

?>
</ul>
</div>

</body>
</html>