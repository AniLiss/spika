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
    <div class="top-slider-container">
        
        <aside class="top-slider-container__nav">
            <!-- Тут будет HTML для навигации -->
        </aside>
       
        <div class="container">
           <!-- Слайдер -->
            <div class="text-image-block text-image-block_content-slider slider"><!-- _content-slider - обрати внимание, не _image-slider -->
                <div class="text-image-block__slider-wrapper wrapper">
                    <div class="text-image-block__slide slide"><!-- Тут могут быть какие-то изменения из за _content-slider, плюс может быть модификатор text-image-block__slide_fullbg или как-то так для блока с картинкой фоновой на весь блок. И у слайда overflow:hidden -->
                        <p class="text-image-block__heading_big">Весь январь</p><!-- модификатор для большого заголовка -->
                        <p class="text-image-block__heading_italic">скидки на пластику бровей</p><!-- модификатор для курсива -->
                        <p class="text-image-block__text">Мы решили, что после празднования нового года, когда вы так устанете от праздников подтянуть ваши брови так, чтобы вы увидели какой прекрасный год вас ждет впереди.</p>
                        <div class="text-image-block__buttons">
                            <a href="#" class="button">Подробности акции</a>
                        </div>
                        <img src="img/imageblock/example.png" alt="@@" class="text-image-block__bgimage">
                    </div>
                </div>
            </div>  
            <!-- // Слайдер -->
        </div>
    </div>
    
    <div class="container">
        
        <!-- Подписка - Лиза делает -->
        <form class="subscribe-block" action="send.php" method="post"><!-- стили пишешь в basics.scss, отступ вверх - default.scss -->
        	<p class="subscribe-block__heading">Будь в курсе</p>
        	<input class="subscribe-block__input" type="email" name="email" placeholder="Ваш e-mail">
        	<button class="button button_white subscribe-block__button" type="submit">Подписаться</button><!-- Добавить модификатор _white для кнопки -->
        	<p class="subscribe-block__text">Не забудьте подписаться на нашу рассылку, чтобы получать акционные скидки быстрее всех.</p>
        	<img src="" alt=""><!-- Фоновая картинка с конвертом. Поищи плз в img/dev. Там должна быть она в СВГ. А на самом фоне блока - градиент -->
        </form>
        <!-- // Подписка -->
        
        <!-- 2 колонки -->
        <div class="columns page-content-padding"><!-- Делаешь через флекс. 3 акции справа должны быть одинаковой высоты всегда. Высота определяется автоматически в зависимости от величины контента. Левая и правая колонка выравниваются по высоте относительно друг-друга. Короче, при любой величине контента у нас должны быть равны по высоте левая и правая части, а в правой акции одинаковые по величине. -->
            <div class="columns__two">
                <div class="action-block">
        			<h3 class="action-block__heading">3 324 наших клиента уже изменили свою жизнь</h3>
        			<p class="action-block__text">Институт красоты «СПИКА» - современная высокотехнологичная клиника пластической хирургии и медицинской косметологии, открыла свои двери для пациентов в августе 2016 года.<br><br> Под руководством Рыбакина Артура Владимировича, коллективом специалистов, основавших Санкт-Петербургский Институт красоты «СПИК» была создана клиника, оснащенная по самым современным стандартам для удобства и комфорта посетителей.</p><!-- flex:1-->
                	<div class="last-works-list">
                        <a href=""><img src="" alt=""></a>
                        <a href=""><img src="" alt=""></a>
                        <a href=""><img src="" alt=""></a>
                        <a href=""><img src="" alt=""></a>
                        <a href=""><img src="" alt=""></a>
                        <a href=""><img src="" alt=""></a>
                        <a href=""><img src="" alt=""></a>
                        <a href=""><img src="" alt=""></a>
                        <a href=""><img src="" alt=""></a>
                    </div>
                	<div class="action-block__bottom-nav"><!-- прилипает к нижней части -->
                	    <a href="#" class="button">Посмотреть еще 354 работы</a>
                	    <a href="#">Давайте мы вам расскажем подробнее</a>
                	</div>
        		</div>
            </div>
            <div class="columns__two">
                <ul class="action-blocks-list"><!-- .page-main .action-blocks-list - через такую структуру вносишь правки - .action-block {width:100%} и т.д. и т.п. в default.scss -->
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
        	<div class="features-block__cols"><!-- flex -->
        	    <div><!-- .features-block__cols > * -->
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
        	</div>
        	<p class="features-block__number features-block__number_bottom">650 000+</p><!-- модификатор _bottom для этого числа -->
        	<p class="features-block__text">Выполненных косметологических, инъекционных, аппаратных и терапевтических процедур</p>
        	<img src="" class="features-block__bg" alt="">
        </div>
        <!-- // Особенности -->
    	
    </div>
</section>

<?php include "blocks/footer.php"; ?>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>