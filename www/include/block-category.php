<div id="block-category">
<p class="header-title">Категории товаров</p>
<ul>

<li><a id="index1">Для мужчин</a>
<ul class="category-section">
<li><a href="view_cat.php?type=Для мужчин"><strong>Весь товар</strong></a></li>

<?php
#mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
#$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("Error");
#$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM category WHERE  type='Для мужчин'";
$result = mysqli_query($db, $query);
$row_cnt = mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0)
{
	$row =mysqli_fetch_array($result);	
	do
	{
	
	   echo '
	   <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>';
	
	}
	while ($row =mysqli_fetch_array($result));	
}


 ?>
</ul>
</li>
<li><a id="index2">Для женщин</a>
<ul class="category-section">
<li><a href="view_cat.php?type=Для женщин"><strong>Весь товар</strong></a></li>

<?php
#mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
#$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("Error");
#$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM category WHERE  type='Для женщин'";
$result = mysqli_query($db, $query);
$row_cnt = mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0)
{
	$row =mysqli_fetch_array($result);	
	do
	{
	
	   echo '
	   <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>';
	
	}
	while ($row =mysqli_fetch_array($result));	
}
 ?>
</ul>
</li>

<li><a id="index3">Для девочек</a>
<ul class="category-section">
<li><a href="view_cat.php?type=Для девочек"><strong>Весь товар</strong></a></li>

<?php
#mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
#$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("Error");
#$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM category WHERE  type='Для девочек'";
$result = mysqli_query($db, $query);
$row_cnt = mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0)
{
	$row =mysqli_fetch_array($result);	
	do
	{
	
	   echo '
	   <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>';
	
	}
	while ($row =mysqli_fetch_array($result));	
}
 ?>
</ul>

</li>
<li><a id="index4">Для мальчиков</a>
<ul class="category-section">
<li><a href="view_cat.php?type=Для мальчиков"><strong>Весь товар</strong></a></li>

<?php
#mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
#$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("Error");
#$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM category WHERE  type='Для мальчиков'";
$result = mysqli_query($db, $query);
$row_cnt = mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0)
{
	$row =mysqli_fetch_array($result);	
	do
	{
	
	   echo '
	   <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>';
	
	}
	while ($row =mysqli_fetch_array($result));	
}
 ?>
</ul>
</li>

<li><a id="index5">Аксессуары</a>
<ul class="category-section">
<li><a href="view_cat.php?type=Аксессуары"><strong>Весь товар</strong></a></li>

<?php
#mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
#$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("Error");
#$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM category WHERE  type='Аксессуары'";
$result = mysqli_query($db, $query);
$row_cnt = mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0)
{
	$row =mysqli_fetch_array($result);	
	do
	{
	
	   echo '
	   <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>';
	
	}
	while ($row =mysqli_fetch_array($result));	
}
 ?>
</ul>
</li>
</ul>
</div>