<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body class="page-section"> 

<?php include "blocks/header.php"; ?>

<!-- Заголовок + хлебные крошки -->
<section class="page-heading">
    <div class="container">
        <div class="page-heading__container">
            <ul class="page-heading__breadcrumbs">
                <li><a href="#">Главная страница</a></li>
                <li><a href="#">Косметология</a></li>
            </ul>
            <h1 class="page-heading__heading">ИНЪЕКЦИОННАЯ<br> КОСМЕТОЛОГИЯ</h1>
        </div>
    </div>
</section>
<!-- // Заголовок + хлебные крошки -->

<!-- Контент страницы  -->
<main class="main-content ">
    <div class="container">
        
        <!-- Список услуг -->
        <ul class="service-list"><!-- Это в default. Отступы аналогично делаешь, как я  делал в sales.php, т.е. прописываешь внутри .page-section -->
        	<li class="service-block"> <!-- Это в basics. Глянь блок, у которого ховер показан (где кнопку видно). Там у блока тень появляется -->
        		<p class="smalltitle service-block__heading">Ботулинотерапия</p> <!-- Судя по макету, у заголовка есть min-height, равный 2 строкам. У нас в данном случае line-height:(24/20)*1em; Значит, min-height:(24/20)*2em. Уловил?  -->
        		<p class="service-block__text">Мимические морщины появляются на лице уже в молодости, являясь следствием активной мимики. Затем, по прошествии времени, снижается тургор кожи, и вместо мелких мимических морщин появляются глубокие и заметные, которые видно, даже когда лицо находится в покое.</p>
                <a href="#" class="button">Подробнее</a> <!-- Кнопка появляется на ховере -->
        		<div class="service-block__img"><img src="" alt=""></div> <!-- Картинка находится в контейнере, имеет position:absolute; left:0; top:0; object-fit:cover; min-width:100%; min-height:100%; width:0. У контейнера overflow:hidden, ну и тоже абсолютное позиционирование. -->
        	</li>
        	<li class="service-block">
        		<p class="smalltitle service-block__heading">Контурная пластика</p>
        		<p class="service-block__text">Утрата эластичности кожи всегда наблюдается как одно из закономерных проявлений возрастных изменений: появляются морщины, в зонах скул и висков «уходит» объем, уголки губ опускаются, овал «плывет», образуются «брыли».</p>
                <a href="#" class="button">Подробнее</a>
        		<div class="service-block__img"><img src="" alt=""></div>
        	</li>
        	<li class="service-block">
        		<p class="smalltitle service-block__heading">Биоревитализация гиалуроновой кислотой</p>
        		<p class="service-block__text">Гиалуроновая кислота – вещество, обладающее уникальной способностью увлажнять кожу и возвращать ей молодость. Именно поэтому ее используют для биоревитализации – процедуры, направленной на глубокое увлажнение кожи.</p>
        		<a href="#" class="button">Подробнее</a>
        		<div class="service-block__img"><img src="" alt=""></div>
        	</li>
        	<li class="service-block">
        		<p class="smalltitle service-block__heading">Лечение гипергидроза (повышенной потливости)</p>
        		<p class="service-block__text">Мокрые пятна на блузке или рубашке, постоянно потеющие ладони и стопы причиняют дискомфорт и становятся причиной неприятного запаха. Усиленное потоотделение специалисты называют гипергидрозом, и избавиться от этого недостатка поможет лечение ботулотоксином.</p>
                <a href="#" class="button">Подробнее</a>
        		<div class="service-block__img"><img src="" alt=""></div>
        	</li>
        	<li class="service-block">
        		<p class="smalltitle service-block__heading">Мезотерапия</p>
        		<p class="service-block__text">Витаминные комплексы и микроэлементы незаменимы для красоты и молодости кожи. Ценные вещества поступают в организм с пищей и в виде витаминных комплексов, которые мы принимаем. Однако кожа «усваивает» всего 1%.</p>
                <a href="#" class="button">Подробнее</a>
        		<div class="service-block__img"><img src="" alt=""></div>
        	</li>
        	<li class="service-block">
        		<p class="smalltitle service-block__heading">Лечение гипергидроза</p>
        		<p class="service-block__text">Идеальная фигура – цель большинства женщин, но для ее достижения приходится прикладывать массу усилий: нужно следить за питанием, заниматься спортом и отказывать себе во многом. Однако современная косметология позволяет избавиться от излишних жировых отложений быстро, эффективно и без особых усилий.</p>
                <a href="#" class="button">Подробнее</a>
        		<div class="service-block__img"><img src="" alt=""></div>
        	</li>
        </ul>
        <!-- // Список услуг -->
        
    </div>
</main>
<!-- // Контент страницы  -->

<?php include "blocks/footer.php"; ?>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>