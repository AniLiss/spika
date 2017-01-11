<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body class="page-contacts"> 

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
<main class="main-content">
    <div class="container">
    	
    	<!-- Карта -->
        <div class="text-image-block text-image-block_map">
        </div>  
        <!-- // Карта --> 
    	
    	<!-- Верхний контент -->
        <div class="columns page-content-padding">
            <div class="columns__third">
                <p class="smalltitle">Обязательно приходите к нам:</p>
				<p class="columns__maintext"><b>Пироговская набережная., д. 5/2.</b></p>
               	<p class="columns__maintext">Для Вашего удобства для гостей клиники напротив входа в отель «Санкт-Петербург» расположена бесплатная парковка.</p>
               	<p class="columns__maintext">Так же у нас работает многоканальный номер телефона:</p>
               	<p class="columns__maintext"><b>8 (812) 403-02-01</b></p>
               	<p class="columns__maintext">Либо же напишите нам письмо:</p>
               	<p class="columns__maintext"><b><a href="#">hi@spika.clinic</a></b></p>
            </div>
            <div class="columns__two-of-three">
                <p class="smalltitle">Напишите нам прямо сейчас:</p>
                <form class="contact-form" action="send.php" method="post">
                    <input type="text" name="name" placeholder="Как вас зовут?">
                    <input type="email" name="email" placeholder="Укажите тут вашу почту">
                    <p>или номер телефона</p>
                    <input type="tel" name="tel">
                    <textarea name="message" placeholder="Ваше сообщение"></textarea>
                    <button class="button">Отправить</button>
                </form>
            </div>
        </div>
        <!-- // Верхний контент -->
        
        <!-- Нижний контент -->
        <div class="columns page-content-padding">
            <div class="columns__one">    
                <p class="smalltitle">Как еще к нам можно проехать:</p>
            </div>
            <div class="columns__third">
                <p class="columns__maintext"><b>Проезд со стороны Литейного проезда</b></p>
                <a href="#" class="image-map-link"><img src="" alt=""></a>
            </div>
            <div class="columns__third">
                <p class="columns__maintext"><b>Проезд со стороны м. «Горьковская»</b></p>
                <a href="#" class="image-map-link"><img src="" alt=""></a>
            </div>
            <div class="columns__third">
                <p class="columns__maintext"><b>Проезд со стороны м. «Чёрная речка»</b></p>
                <a href="#" class="image-map-link"><img src="" alt=""></a>
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