<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body class="page-main"> 

<?php include "blocks/header.php"; ?>

<section class="">
    <div class="container">
    	
    	<!-- Текстовый блок с картинкой -->
        <div class="text-image-block">
            <p class="text-image-block__heading">Весь январь<br><span>скидки на пластику бровей</span></p>
            <p class="text-image-block__text">Мы решили, что после празднования нового года, когда вы так устанете от праздников подтянуть ваши брови так, чтобы вы увидели какой прекрасный год вас ждет впереди.</p>
            <div class="text-image-block__buttons">
                <a href="#" class="button">Подробности акции</a>
            </div>
            <img src="img/imageblock/example.png" alt="@@" class="text-image-block__bgimage">
        </div>  
        <!-- // Текстовый блок с картинкой -->
        
        <!-- Подписка -->
        <div class="subscribe">
        	<p class="large">Будь в курсе</p>
        	<a href="#" class="button">Ваш e-mail</a>
        	<a href="#" class="button">Подписаться</a>
        	<p>Не забудьте подписаться на нашу рассылку, чтобы получать акционные скидки быстрее всех.</p>
        </div>
        <!-- // Подписка -->
        
        <!-- 2 колонки -->
        <div class="columns page-content-padding">
            <div class="columns__two">
                <div class="action-block">
        			<h3 class="action-block__heading">3 324 наших клиента уже изменили свою жизнь</h3>
        			<p class="action-block__text">Институт красоты «СПИКА» - современная высокотехнологичная клиника пластической хирургии и медицинской косметологии, открыла свои двери для пациентов в августе 2016 года.<br><br>
               		Под руководством Рыбакина Артура Владимировича, коллективом специалистов, основавших Санкт-Петербургский Институт красоты «СПИК» была создана клиника, оснащенная по самым современным стандартам для удобства и комфорта посетителей.</p>
                	<p class="action-block__bottominfo"><a href="#">Перейти</a></p>
                	<img src="" alt="">
                	<a href="#" class="button">Посмотреть еще 354 работы</a>
                	<a href="#">Давайте мы вам расскажем подробнее</a>
        		</div>
            </div>
            <div class="columns__two">
                <ul class="action-blocks-list">
        			<li class="action-block">
        				<h3 class="action-block__heading">Оплата</h3>
        				<p class="action-block__text">Дорогие друзья! Вы можете оплатить услуги нашей клиники, любым удобным для Вас способом!</p>
                		<p class="action-block__bottominfo"><a href="#">Перейти</a></p>
                		<img src="#" alt="@@" class="action-block__image" width="171" height="158"/>
        			</li>
        			<li class="action-block action-block_lightblue">
        				<h3 class="action-block__heading">Новость</h3>
        				<p class="action-block__text">Лучший подарок для мужа на Новый год это конечно же большая грудь. Узнайте сейчас о всех предложениях.</p>
        				<p class="action-block__bottominfo">1 декабря — 1 февраля</p>
                		<img src="" class="action-block__image action-block__image_bg" width="275"/>
        			</li>
        			<li class="action-block action-block_lightgold">
        				<h3 class="action-block__heading">Акция</h3>
        				<p class="action-block__text">Омолодить тело, подтянуть овал лица или скорректировать недостатки? Справиться с этими проблемами поможет аппарат «Титан». Весь октябрь скидки 15%!</p>
        				<p class="action-block__bottominfo">1 октября — 29 октября</p>
            		    <img src="" class="action-block__image action-block__image_bg" width="245"/>
        			</li>
				</ul>
            </div>
        </div>
        <!-- // 2 колонки -->
        
        <!-- Особенности -->
        <div class="features-block">
        	<p class="features-block__heading">Наши особенности</p>
        	<div>
        		<p class="features-block__number">1500</p>
        		<p class="features-block__text">м2 общая площадь клиники</p>
        	</div>
        	<div>
        		<p class="features-block__number">12</p>
        		<p class="features-block__text">косметологических кабинетов</p>
        	</div>
        	<div>
        		<p class="features-block__number">3</p>
        		<p class="features-block__text">соврменные операционные</p>
        	</div>
        	<div>
        		<p class="features-block__number">15000</p>
        		<p class="features-block__text">проведенных пластических операций</p>
        	</div>
        	<p class="features-block__number">650 000+</p>
        	<p class="features-block__text">Выполненных косметологических, инъекционных, аппаратных и терапевтических процедур</p>
        </div>
        <!-- // Особенности -->
    	
    </div>
</section>

<?php include "blocks/footer.php"; ?>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>