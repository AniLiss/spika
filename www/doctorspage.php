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
                <li><a href="#">Косметология</a></li>
                <li><a href="#">Врачи-косметологи</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- // Заголовок + хлебные крошки -->

<!-- Контент страницы  -->
<main class="main-content doctorspage">
    <div class="container">
    
    	<!-- Текстовый блок с картинкой -->
        <div class="text-image-block">
            <p class="text-image-block__heading">Александров<br>
            Константин<br>
            Самойлович</p>
            <p class="text-image-block__text">Короткое описание деятельности или личная информация о враче. Несколько строк.</p>
            <img src="img/imageblock/example.png" alt="@@" class="text-image-block__bgimage">
        </div>  
        <!-- // Текстовый блок с картинкой -->
        
        <div class="columns page-content-padding">
            <!-- 2/3 колонки -->
            <div class="columns__two-of-three">
               <div>
                	<p class="smalltitle">Образование</p>
                	<p class="columns__maintext">— Санкт-Петербургский Государственный медицинский университет им. акад. И.П. Павлова. Стоматологический факультет (с отличием) (специальность - стоматология. Диплом БВС 0175829 от 18.06.1999).</p>
                	<p class="columns__maintext">— Интернатура по хирургической стоматологии Санкт-Петербургского Государственного медицинского университета им. акад. И.П. Павлова.</p>
                	<p class="columns__maintext">— Специализация по специальности «Ортодонтия» в отделе ортодонтии Центрального научно-исследовательского института стоматологии.</p>
                	<p class="columns__maintext">— Клиническая ординатура по челюстно-лицевой хирургии Санкт-Петербургского Государственного медицинского университета им. акад. И.П. Павлова.</p>
                	<p class="columns__maintext">— Первичная специализация по специальности «Ортодонтия» на кафедре детской стоматологии Санкт-Петербургской медицинской академии последипломного образования (МАПО).</p>
                	<p class="columns__maintext">— Специализация по пластической хирургии на базе Военно-медицинской академии им. С.М. Кирова.</p>
                </div>
              	<div>
                	<p class="smalltitle">Опыт работы</p>
                	<p class="columns__maintext">С 2000 г. – Врач-хирург отделения пластической хирургии СПИК, Санкт-Петербург</p>
               		<p class="columns__maintext">С 2016 г. – Врач-хирург отделения пластической хирургии Института красоты СПИКА, Санкт-Петербург (сертификат 0178270028161 от 20.11.15)</p>
               	</div>
               	<div>
               		<p class="smalltitle">Повышение квалификации</p>
                	<ul>
                		<li><p>Курс по применению компрессионно-дистракционных аппаратов в Московском центре детской челюстно-лицевой хирургии (Детская больница им. Св. Владимира) (Москва, июнь 2001 г.)</p></li>
                		<li><p>Семинар по вопросам увеличивающей маммопластики (Стамбул, 2007 г.)</p></li>
                		<li><p>Съезд европейской ассоциации лингвальных ортодонтов (Канны, июль 2008 г.)</p></li>
                		<li><p>Съезд пластических хирургов (Екатеринбург, 2009 г.)</p></li>
                		<li><p>Стажировка в ортодонтической практике (Берлин, декабрь 2009 г.).</p></li>
                		<li><p>Стажировка в клинике пластической хирургии (Париж, июль 2009 г.)</p></li>
                		<li><p>Балтийский съезд ортогнотических хирургов и ортодонтов (Вильнюс, сентябрь 2009 г.)</p></li>
                		<li><p>Ежегодный съезд ортогнотических хирургов и ортодонтов (Санта-Барбара, январь 2010 г.)</p></li>
                		<li><p>Ежегодный курс по ортогнотической хирургии и ортодонтии (Санта-Барбара, октябрь 2010 г.)</p></li>
                		<li><p>Стажировка в клинике доктора P. Server (Бирбингем (Алабама), 2010 г.)</p></li>
                	</ul>
                </div>
            </div> 
            <!-- // 2/3 колонки -->
            
            <!-- 1/3 колонки -->
            <div class="columns__third">
               
                <div>
                	<p class="smalltitle">Статистика</p>
                	<div class="statistic">
                		<p class="number">15</p>
                		<p>Общий стаж</p>
                	</div>
                	<div class="statistic">
                		<p class="number">1244</p>
                		<p>Операций проведено</p>
                	</div>
                	<div class="statistic">
                		<p class="number">60</p>
                		<p>Научных работ</p>
                	</div>
                </div>
                
                <div>
                	<p class="smalltitle">Последние работы</p>
                	<img src="" alt="">
                </div>
                
                <div>
                	<p class="smalltitle">В социальных сетях</p>
                	<ul class="social">
                		<li><a href="#"><svg viewBox="0 0 20 18" width="20" height="18"><use xlink:href="img/social_icons.svg#mail"></use></svg></a></li>
                		<li><a href="#"><svg viewBox="43 0 13 18" width="20" height="18"><use xlink:href="img/social_icons.svg#vk"></use></svg></a></li>
                		<li><a href="#"><svg viewBox="88 0 10 18" width="18" height="18"><use xlink:href="img/social_icons.svg#facebook"></use></svg></a></li>
            		</ul>
               		<p><a href="#">www.alexandrovkonst.ru</a></p>
                </div>
                
            </div>
            <!-- // 1/3 колонки -->
        </div>
        
        <!-- 1 колонка -->
        <div class="columns page-content-padding">
            <div class="columns__one">
                <p class="smalltitle">Instagram: <a href="#">kostopraver</a></p>
                <ul class="insta-photos">
                	<li><img src="" alt=""></li>
                	<li><img src="" alt=""></li>
                	<li><img src="" alt=""></li>
                	<li><img src="" alt=""></li>
                	<li><img src="" alt=""></li>
                	<li><img src="" alt=""></li>
                </ul>
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