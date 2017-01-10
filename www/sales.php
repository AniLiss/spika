<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body class="sales-page"> 

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
        
        <!-- Список акций -->
        <ul class="salespage-actionlist"> <!-- display:flex; flex-wrap:wrap; justify-content:space-between. Стиль этого блока пишешь в default.scss -->
        	<li class="action-block"> <!-- .action-block - добавляешь в basics.scss. Т.е. весь стиль блока и вариации описываешь там. Блоку этому надо еще прописать min-height как в макете -->
        		<h3 class="action-block__heading">Оплата</h3>
        		<p>Дорогие друзья! Вы можете оплатить услуги нашей клиники, любым удобным для Вас способом!</p> <!-- У этой штуки будет flex:1, чтобы она растягивалась от заголовка до нижнего текста. Чтобы нижний текст выравнивался по низу блока. -->
                <p class="action-block__bottominfo"><a href="#">Перейти</a></p>
                <img src="" class="action-block__image"/> <!-- Картинка справа. position:absolute. У нее будет отступ справа. А также max-height:80% и max-width: такая-максимальная-ширина-чтобы-на-текст-не-налезало -->
        	</li>
        	<li class="action-block action-block_lightblue"> <!-- action-block_lightblue - Класс для голубого фона. Темный цвет заголовка прописываешь внутри этого класса. -->
        		<h3 class="action-block__heading">Новость</h3>
        		<p>Лучший подарок для мужа на Новый год это конечно же большая грудь. Узнайте сейчас о всех предложениях.</p>
        		<p class="action-block__bottominfo">1 декабря — 1 февраля</p>
                <img src="" class="action-block__image action-block__image_bg"/> <!-- Это класс, который делает картинке height:100%; max-height:100%; max-width:initial; top:0; right:0; Т.е. делает картинку полностью заполняющей блок от верха до низа -->
        	</li>
        	<li class="action-block"> <!-- action-block_lightblue - Класс для светло-золотого фона. Темный цвет заголовка прописываешь внутри этого класса. -->
        		<h3 class="action-block__heading">Акция</h3>
        		<p>Омолодить тело, подтянуть овал лица или скорректировать недостатки? Справиться с этими проблемами поможет аппарат «Титан». <br>
        		Весь октябрь скидки 15%!</p>
        		<p class="action-block__bottominfo">1 октября — 29 октября</p>
                <img src="" class="action-block__image action-block__image_bg"/>
        	</li>
        	<li class="action-block">
        		<h3 class="action-block__heading">Оплата</h3>
        		<p>Дорогие друзья! Вы можете оплатить услуги нашей клиники, любым удобным для Вас способом!</p>
        		<p class="action-block__bottominfo"><a href="#">Перейти</a></p>
                <img src="" class="action-block__image"/>
        	</li>
        	<li class="action-block">
        		<h3 class="action-block__heading">Новость</h3>
        		<p>Лучший подарок для мужа на Новый год это конечно же большая грудь. Узнайте сейчас о всех предложениях.</p>
        		<p class="action-block__bottominfo">1 декабря — 1 февраля</p>
                <img src="" class="action-block__image action-block__image_bg"/>
        	</li>
        	<li class="action-block">
        		<h3 class="action-block__heading">Акция</h3>
        		<p>Омолодить тело, подтянуть овал лица или скорректировать недостатки? Справиться с этими проблемами поможет аппарат «Титан». <br>
        		Весь октябрь скидки 15%!</p>
        		<p class="action-block__bottominfo">1 октября — 29 октября</p>
                <img src="" class="action-block__image action-block__image_bg"/>
        	</li>
        </ul>
        <!-- // Список акций -->
        
    </div>
</main>
<!-- // Контент страницы  -->

<?php include "blocks/footer.php"; ?>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>