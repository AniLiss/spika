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
            <h1 class="page-heading__heading">КОНТАКТЫ</h1>
        </div>
    </div>
</section>
<!-- // Заголовок + хлебные крошки -->

<!-- Контент страницы  -->
<main class="main-content contacts">
    <div class="container">
    	
    	<!-- Блок с картой -->
        <div class="map-block">
        </div>  
        <!-- // Блок с картой --> 
    	
    	<!-- Верхний контент -->
        <div class="columns page-content-padding">
            <div class="columns__third">
                <p class="smalltitle">Обязательно приходите к нам:</p>
                <p class="columns__maintext">
                	<span class="contact">Пироговская набережная., д. 5/2.</span><br><br>
                	Для Вашего удобства для гостей клиники напротив входа в отель «Санкт-Петербург» расположена бесплатная парковка.<br><br>
                	Так же у нас работает многоканальный номер телефона:<br><br>
                	<span class="contact">Пироговская набережная., д. 5/2.</span><br><br>
                	Либо же напишите нам письмо:<br><br>
                	<span class="contact"><a href="#">hi@spika.clinic</a></span>
                </p>
            </div>
            <form class="columns__two-of-three" action="send.php" method="post">
                <p class="smalltitle">Напишите нам прямо сейчас:</p>
                <input type="text" name="name" placeholder="Как вас зовут?">
                <input type="email" name="email">
                <p>или номер телефона</p>
                <input type="tel" name="tel">
                <textarea name="message" placeholder="Ваше сообщение"></textarea>
                <button class="button">Отправить</button>
            </form>
        </div>
        <!-- // Верхний контент -->
        
        <!-- Нижний контент -->
        <div class="columns page-content-padding">
            <div class="columns__one">
                <p class="smalltitle">Как еще к нам можно проехать:</p>
                <div class="path">
                	<p>Проезд со стороны Литейного проезда</p>
                	<img src="" alt="">
                </div>
                <div class="path">
                	<p>Проезд со стороны м. «Горьковская»</p>
                	<img src="" alt="">
                </div>
                <div class="path">
                	<p>Проезд со стороны м. «Чёрная речка»</p>
                	<img src="" alt="">
                </div>
            </div>
        </div>
        <!-- // Нижний контент -->
        
    </div>
</main>
<!-- // Контент страницы  -->

<?php include "blocks/footer.php"; ?>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>