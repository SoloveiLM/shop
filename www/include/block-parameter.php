<script type="text/javascript">
$(document).ready(function(){
	$('#blocktrackbar').trackbar({
		onMove:function(){
			document.getElementById("start-price").value=this.leftValue;
			document.getElementById("end-price").value=this.rightValue;
			},
			width:160,
			leftLimit:10,
			leftValue:10,
			rightLimit:1000,
			rightValue:100,
			roundUp:100
		});
	});
</script>

<div id="block-parameter">
<p class="header-title">Поиск по параметрам</p>
<p class="title-filter">Стоимость</p>
<form method="GET" action="search-filter.php">
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
<li><input type="checkbox" id="checkboxf"/><label fot="checkboxf">футболки</label></li>
<li><input type="checkbox" id="checkboxs"/><label fot="checkboxs">шорты</label></li>
<li><input type="checkbox" id="checkboxh"/><label fot="checkboxh">штаны</label></li>
<li><input type="checkbox" id="checkboxr"/><label fot="checkboxr">рубашки</label></li>
<li><input type="checkbox" id="checkboxc"/><label fot="checkboxc">свитера</label></li>
<li><input type="checkbox" id="checkboxk"/><label fot="checkboxk">костюмы</label></li>
<li><input type="checkbox" id="checkboxkm"/><label fot="checkboxkm">комбинизоны</label></li>
<li><input type="checkbox" id="checkboxp"/><label fot="checkboxp">платья</label></li>
<li><input type="checkbox" id="checkboxv"/><label fot="checkboxv">верхняя одежда</label></li>
</ul>

<center><input type="submit" name="submit" id="button-param-search" value="Найти" /></center>
</form>


</div>
