<!--Верхний блок-->
<div id="block-header">


<!--Верхний блок с навигацией-->
<div id="header-top-block">
<!--Список с навигацией-->
<ul id="header-top-menu">

<li>Ваш собственный  - <span>МАГАЗИН </span></li>
<li><a href="o-nas.php">О нас</a></li>
<li><a href="yslovia.php">Условия</a></li>
<li><a href="contacts.php">Контакты</a></li>
</ul>

<!--Вход и регистрация-->
<p id="reg-auth-title" align="right"><a class="top-auth">Вход
</a><a href="registration.php">Регистрация</a></p>

</div>

<!--Линия-->
<div id="top-line"></div>
<!--Логотип-->
<div id="img-logo" ></div>
<!--Информационный блок-->
<div id="personal-info">
<p align="right">Режим работы:</p>
<p align="right">Будние дни : с 9:00 до 18:00</p>
<p align="right">Выходные - суббота, воскресенье</p>

</div>

<!--Поиск-->
<div id="block-search">
<form method="GET" action="search.php?q=">

<span></span>
<input type="text" id="input-search" name="q" placeholder="Поиск среди товаров" value="<?php echo $search ?>"/>
<input type="submit" id="button-search" value="Поиск"/>
</form>
</div>
</div>
<ul>
<div id="top-menu">
<li><img src="images/folder_upload.png" /><a href="index.php">Главная</a></li>  
<li><img src="images/check_mark.png"/><a href="view_aystopper.php?go=news">Новые вещи</a></li>
<li><img src="images/fullscreen.png" /><a href="view_aystopper.php?go=procat">Вещи на прокат</a></li>
<li><img src="images/edit.png" /><a href="view_aystopper.php?go=b_y">Б/У вещи</a></li>
<li><img src="images/star.png"/><a href="view_aystopper.php?go=sale">Акции</a></li>
</ul>
<p align="right" id="block-basket"><img src="images/shopping_cart.png" /><a href"">Корзина пуста</p>
<div id="nav-line"></div>

</div>
