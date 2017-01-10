<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body> 

<?php include "blocks/header.php"; ?>

<!-- Заголовок + хлебные крошки -->
<section class="page-heading">
    <div class="container">
        <div class="page-heading__container">
            <ul class="page-heading__breadcrumbs">
                <li><a href="#">Главная страница</a></li>
            </ul>
            <h1 class="page-heading__heading">Акции</h1>
        </div>
    </div>
</section>
<!-- // Заголовок + хлебные крошки -->

<!-- Контент страницы  -->
<main class="main-content">
    <div class="container">
       
        <!-- Переключатели контента -->
        <ul class="content-changer">
            <li class="active">актуальные акции</li>
            <li>архив</li>
        </ul>
        <!-- // Переключатели контента -->
        
        <ul class="sales-list">
        	<li class="sale-payment">
        		<p class="sale-heading">Оплата</p>
        		<p>Дорогие друзья! Вы можете оплатить услуги нашей клиники, любым удобным для Вас способом!</p>
        		<p class="addinfo"><a href="#">Перейти</a></p>
        	</li>
        	<li class="sale-news">
        		<p class="sale-heading">Новость</p>
        		<p>Лучший подарок для мужа на Новый год это конечно же большая грудь. Узнайте сейчас о всех предложениях.</p>
        		<p class="addinfo">1 декабря — 1 февраля</p>
        	</li>
        	<li class="sale-sale">
        		<p class="sale-heading">Акция</p>
        		<p>Омолодить тело, подтянуть овал лица или скорректировать недостатки? Справиться с этими проблемами поможет аппарат «Титан». <br>
        		Весь октябрь скидки 15%!</p>
        		<p class="addinfo">1 октября — 29 октября</p>
        	</li>
        	<li class="sale-payment">
        		<p class="sale-heading">Оплата</p>
        		<p>Дорогие друзья! Вы можете оплатить услуги нашей клиники, любым удобным для Вас способом!</p>
        		<p class="addinfo"><a href="#">Перейти</a></p>
        	</li>
        	<li class="sale-news">
        		<p class="sale-heading">Новость</p>
        		<p>Лучший подарок для мужа на Новый год это конечно же большая грудь. Узнайте сейчас о всех предложениях.</p>
        		<p class="addinfo">1 декабря — 1 февраля</p>
        	</li>
        	<li class="sale-sale">
        		<p class="sale-heading">Акция</p>
        		<p>Омолодить тело, подтянуть овал лица или скорректировать недостатки? Справиться с этими проблемами поможет аппарат «Титан». <br>
        		Весь октябрь скидки 15%!</p>
        		<p class="addinfo">1 октября — 29 октября</p>
        	</li>
        </ul>
        
    </div>
</main>
<!-- // Контент страницы  -->

<?php include "blocks/footer.php"; ?>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>