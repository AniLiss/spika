<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body class="page-about"> 

<?php include "blocks/header.php"; ?>

<!-- Заголовок + хлебные крошки -->
<section class="page-heading">
    <div class="container">
        <div class="page-heading__container">
            <ul class="page-heading__breadcrumbs">
                <li><a href="#">Главная страница</a></li>
            </ul>
            <h1 class="page-heading__heading">О НАС</h1>
        </div>
    </div>
</section>
<!-- // Заголовок + хлебные крошки -->

<!-- Контент страницы  -->
<main class="main-content">
    <div class="container">
    	
    	<!-- Слайдер -->
        <div class="text-image-block text-image-block_image-slider"><!-- Это у нас превращается в слайдер (слева и справа от него - перключалки) -->
            <div class="text-image-block__slider-wrapper">
                <div class="text-image-block__slide"><img src="img/imageblock/example.png" alt="@@" class="text-image-block__bgimage"></div>
                <div class="text-image-block__slide"><img src="img/imageblock/example.png" alt="@@" class="text-image-block__bgimage"></div>
                <div class="text-image-block__slide"><img src="img/imageblock/example.png" alt="@@" class="text-image-block__bgimage"></div>
                <div class="text-image-block__slide"><img src="img/imageblock/example.png" alt="@@" class="text-image-block__bgimage"></div>
            </div>
        </div>  
        <!-- // Слайдер -->
    	
    	<!-- Переключатели контента -->
        <ul class="content-changer">
            <li class="active">Почему мы?</li>
            <li>СМИ о нас</li>
            <li>Статьи</li>
            <li>Юридическая документация</li>
            <li>Вакансии</li>
            <li>Партнерские программы</li>
        </ul>
        <!-- // Переключатели контента -->
        
        <!-- Инфоблок -->
        <div class="about-infoblock">
        	<div>
        		<p class="about-infoblock__number">120</p>
        		<p class="about-infoblock__text">сотрудников</p>
        	</div>
        	<div>
        		<p class="about-infoblock__number">46</p>
        		<p class="about-infoblock__text">палат</p>
        	</div>
        	<div>
        		<p class="about-infoblock__number">11</p>
        		<p class="about-infoblock__text">косметологических<br> кабинетов</p>
        	</div>
        </div>
        <!-- // Инфоблок -->
        
        <!-- 2 колонки -->
        <div class="columns page-content-padding">
            <div class="columns__two">
                <p class="columns__maintext">Институт красоты «СПИКА» - современная высокотехнологичная клиника пластической хирургии и медицинской косметологии, открыла свои двери для пациентов в августе 2016 года.</p>
                <p class="columns__maintext">Под руководством Рыбакина Артура Владимировича, коллективом специалистов, основавших Санкт-Петербургский Институт красоты «СПИК» была создана клиника, оснащенная по самым современным стандартам для удобства и комфорта посетителей. Коллектив врачей и медицинский персонал института красоты, располагавшегося на ул. Савушкина д.8 и Савушкина д.36, теперь рады принять своих пациентов по адресу Пироговская наб., д. 5/2, в историческом центре Петербурга.</p>
                <p class="columns__maintext">«СПИКА» - один из крупнейших медицинских центров в России. Общая площадь клиники составляет более 1500 квадратных метров и включает в себя современный операционный блок (2 больших и 1 малая операционные), 12 палат класса deluxe (с панорамным видом на акваторию Невы и легендарный крейсер «Аврора»), а также отделение медицинской косметологии с новейшими, современными аппаратами.</p>
            </div>
            <div class="columns__two">
                <p class="columns__maintext">Парк медицинского оборудования представлен как уже известными традиционными аппаратами, так и новейшими установками, впервые представленными в России. Клиника соответствует всем мировым и российским стандартам, что подтверждается имеющимися лицензиями. На базе клиники «СПИКА» открыт учебный центр по эстетической медицине, в котором проводится специализированное разностороннее обучение современным технологиям работы в области пластической хирургии и медицинской косметологии. Врачи клиники регулярно посещают крупнейшие конгрессы и конференции, где выступают в качестве приглашенных экспертов.</p>
                <p class="columns__maintext">Для пациентов пластической хирургии в послеоперационный период предлагается специально подобранное авторское меню от Бренд-шефа CITYTEL Group Дмитрия Щербакова.</p>
            </div>
        </div>
        <!-- // 2 колонки -->
        
        <!-- Слайдер -->
        <div class="content-slider"><!-- basics.scss -->
        	<div class="content-slider__wrapper">
        		<div class="slide columns">
        			<div class="content-slider__image columns__two"><img src="" alt=""></div>
        			<div class="content-slider__image columns__two"><img src="" alt=""></div>
        		</div>
        		<div class="slide columns">
        			<div class="content-slider__image columns__two"><img src="" alt=""></div>
        			<div class="content-slider__image columns__two"><img src="" alt=""></div>
        		</div>
        	</div>
        	<div class="content-slider-arrows">
        		<a href="#" class="slider-arrow slider-arrow_prev"><img src="#" alt=""></a><!-- Стили стрелок в basics, положение - внутри slider-arrows. Эти же стили используются для стрелок верхнего слайдера (которые слева и справа прилеплены к экрану) -->
        		<a href="#" class="slider-arrow slider-arrow_next"><img src="#" alt=""></a><!-- Стрелочек если нет в svg, делаем серый квадрат img, потом заменим -->
        	</div>
        </div>
        <!-- // Слайдер -->
        
    </div>
</main>
<!-- // Контент страницы  -->

<?php include "blocks/footer.php"; ?>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>