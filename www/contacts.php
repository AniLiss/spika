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
<main class="main-content contacts">
    <div class="container">
    	
    	<!-- Карта -->
        <div class="text-image-block text-image-block_map"> <!-- Добавляем вариацию с картой -->
        </div>  
        <!-- // Карта --> 
    	
    	<!-- Верхний контент -->
        <div class="columns page-content-padding">
            <div class="columns__third">
                <p class="smalltitle">Обязательно приходите к нам:</p>
                <p class="columns__maintext">
                	<b>Пироговская набережная., д. 5/2.</b><br><br> <!-- Для жирного начертания используем специально придуманный для этого тег <b>. Ему надо будет задать правильный font-weight -->
                	Для Вашего удобства для гостей клиники напротив входа в отель «Санкт-Петербург» расположена бесплатная парковка.<br><br>
                	Так же у нас работает многоканальный номер телефона:<br><br>
                	<b>Пироговская набережная., д. 5/2.</b><br><br>
                	Либо же напишите нам письмо:<br><br>
                	<b><a href="#">hi@spika.clinic</a></b>
                </p>
            </div>
            <div class="columns__two-of-three"><!-- Паддинг справа добавляешь конкретно к этой колонке -->
                <p class="smalltitle">Напишите нам прямо сейчас:</p>
                <form class="contact-form" action="send.php" method="post"><!-- Этот блок добавляешь в basics.scss. Делаешь через flex с использованием flex-wrap и justify-content: space-between. Стили для инпутов и textarea прописываешь ВНЕ самой формы, рядом с базовыми стилями кнопки. Непосредственно для .contact-form ты задаешь только ширину инпутов, textarea, блока "или номер телефона". Отступы сверху и снизу между инпутами задаешь через структуры типа input+input {margin-top:10px}, textarea+.button {margin-top:10px} и т.д. Это тоже БАЗОВЫЕ стили, вне формы  -->
                    <input type="text" name="name" placeholder="Как вас зовут?">
                    <input type="email" name="email" placeholder="Укажите тут вашу почту">
                    <p>или номер телефона</p><!-- В макете этот блок чуть ближе к номеру телефона, чем к почте, но ты можешь расположить ровно между ними -->
                    <input type="tel" name="tel" placeholder="+7 (___) ___ - __ - __"><!-- В скриптах подкорректируй маску, добавь пробелы слева и справа от тире -->
                    <textarea name="message" placeholder="Ваше сообщение"></textarea><!-- resize:none -->
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