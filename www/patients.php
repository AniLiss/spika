<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body class="page-patients"> 

<?php include "blocks/header.php"; ?>

<!-- Заголовок + хлебные крошки -->
<section class="page-heading">
    <div class="container">
        <div class="page-heading__container">
            <ul class="page-heading__breadcrumbs">
                <li><a href="#">Главная страница</a></li>
            </ul>
            <h1 class="page-heading__heading">ПАЦИЕНТАМ</h1>
        </div>
    </div>
</section>
<!-- // Заголовок + хлебные крошки -->

<!-- Контент страницы  -->
<main class="main-content">
    <div class="container">
    	
    	<!-- Текстовый блок с картинкой -->
        <div class="text-image-block text-image-block_notext text-image-block_fullbg">
            <p class="text-image-block__heading"></p>
            <p class="text-image-block__text"></p>
            <div class="text-image-block__buttons"></div>
            <img src="img/imageblock/example.png" alt="@@" class="text-image-block__bgimage">
        </div>  
        <!-- // Текстовый блок с картинкой -->
    	
    	<!-- Переключатели контента -->
        <ul class="content-changer">
            <li class="active">общая информация</li>
            <li>приём</li>
            <li>палаты стационара</li>
            <li>обследование перед операцией</li>
            <li>операция</li>
            <li>послеоперационный период</li>
            <li>подарочный сертификат</li>
        </ul>
        <!-- // Переключатели контента -->
        
        <!-- 1 колонка -->
        <div class="columns page-content-padding">
            <div class="columns__one">
                <p class="columns__maintext">При обращении в клинику «СПИКА» для получения интересующей вас информации или консультации, <br>
                вы можете позвонить по телефонам 8 (812) 403-02-01.</p>
                <p class="columns__maintext">Администраторы клиники любезно ответят вам на вопросы об оказываемых услугах, их стоимости, специалистах,<br>
                графике работы клиники и многом другом.</p>
                <p class="columns__maintext">Более подробную информацию вы сможете получить непосредственно на консультации специалиста.</p>
                <p class="columns__maintext">Административно-диспетчерская служба клиники «СПИКА» работает ежедневно с 9:00 до 21:00.<br>
                Просим вас отнестись с пониманием.<br>
                Для получения полной информации о стоимости и особенностях процедур и услуг клиники рекомендуем записаться<br>
                на консультацию к соответствующему специалисту в удобное для вас время.</p>
            </div>
        </div>
        <!-- // 1 колонка -->
        
    </div>
</main>
<!-- // Контент страницы  -->

<?php include "blocks/footer.php"; ?>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>