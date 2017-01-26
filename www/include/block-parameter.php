<script type="text/javascript">
$(document).ready(function(){
	$('#blocktrackbar').trackbar({
		onMove:function(){
			document.getElementById("start-price").value=this.leftValue;
			document.getElementById("end-price").value=this.rightValue;
			},
			width:160,
			leftLimit:10,
			leftValue:<?php 
			   if ((int)$_GET["start_price"] >=10 AND (int)$_GET["start_price"] <=1000)
			   
			   {
				 echo (int)$_GET["start_price"];  
				   }
				   else 
				   {
					   echo "10";
					   }
			
			?>,
			rightLimit:1000,
			rightValue:<?php 
			   if ((int)$_GET["end_price"] >=100 AND (int)$_GET["end_price"] <=1000)
			   
			   {
				 echo (int)$_GET["end_price"];  
				   }
				   else 
				   {
					   echo "100";
					   }
			
			?>,
			roundUp:100
		});
	});
</script>

<div id="block-parameter">
<p class="header-title">Поиск по параметрам</p>
<p class="title-filter">Стоимость</p>
<form method="GET" action="search_filter.php">
<div id="block-input-price">
<ul>
<li><p>от</p></li>
<li><input type="text" id="start-price" name="start_price" value="10" /></li>
<li><p>до</p></li>
<li><input type="text" id="end-price" name="end_price" value="1000" /></li>
<li><p>грн</p></li>
</ul>
</div>

<div id="blocktrackbar"></div>

<p class="title-filter">Вид товара</p>
<ul class="checkbox-brand">
<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM category WHERE type='Для мальчиков'";
$result = mysqli_query($db, $query);
$row_cnt = mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0)
{
	$row =mysqli_fetch_array($result);	
	do
	{
		$checked_brand="";
		
		if ($_GET["brand"])
		{
			if(in_array($row["id"],$_GET["brand"]))
			{
				$checked_brand="checked";
				}
			}
		echo '<li><input '.$checked_brand.' type="checkbox" name="brand[]" value="'.$row["id"].'" id="checkbrand'.$row["id"].'"/><label for="checkbrand'.$row["id"].'">'.$row["brand"].'</label></li>';
		}
		
while ($row =mysqli_fetch_array($result));
}

?>


</ul>

<center><input type="submit" name="submit" id="button-param-search" value="Найти" /></center>
</form>


</div>
