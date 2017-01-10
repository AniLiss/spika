<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body class="sale-info-page">

<?php include "blocks/header.php"; ?>

<!-- Заголовок + хлебные крошки -->
<section class="page-heading">
    <div class="container">
        <div class="page-heading__container">
            <ul class="page-heading__breadcrumbs">
                <li><a href="#">Главная страница</a></li>
                <li><a href="#">Акции</a></li>
            </ul>
            <h1 class="page-heading__heading">Заголовок акции</h1>
        </div>
    </div>
</section>
<!-- // Заголовок + хлебные крошки -->

<!-- Контент страницы  -->
<main class="main-content">
    <div class="container">
    	
    	<!-- Текстовый блок с картинкой -->
        <div class="text-image-block text-image-block_notext">
            <p class="text-image-block__heading"></p>
            <p class="text-image-block__text"></p>
            <div class="text-image-block__buttons"></div>
            <img src="img/imageblock/example.png" alt="@@" class="text-image-block__bgimage">
        </div>  
        <!-- // Текстовый блок с картинкой -->
    	
    	<!-- 1 колонка -->
        <div class="columns page-content-padding">
            <div class="columns__one">
                <p class="smalltitle">Текст на всю ширину</p>
                <p class="columns__maintext">Беспрецедентная популярность ботулотоксина в косметологии объясняется тремя факторами: высокая эффективность, простота и безопасность. Инъекции Ботокса в обиходе называют «уколами красоты» и «процедурой обеденного перерыва». Она не требуют специальной подготовки, а достигнутый эффект сохраняется на многие месяцы.</p>
                <p class="columns__maintext">Механизм действия Ботокса связан с блокированием мимических мышц. Мишень для ботулинического токсина — рецепторы, ответственные за передачу импульса от нервных клеток к мышечным волокнам. Связываясь с рецепторами, ботулотоксин прерывает нормальный путь передачи сигнала, мышца не получает «указаний» от нервов и расслабляется.</p>
                <p class="columns__maintext">Результатом расслабления мимических мышц становится столь желанное разглаживание морщин. Причина появления морщин кроется в чрезмерной активности мимической мускулатуры — мышцы лица реагируют на малейшее проявление эмоций. Избирательно блокируя мышцы в зоне коррекции, Ботокс разрывает связь мимической мускулатуры с ЦНС и устраняет причину формирования морщин.</p>
                <p class="columns__maintext">Ботулинотерапия — единственная косметологическая процедура, которая оказывает влияние на мимические мышцы! Ботокс для лица делает то, что неподвластно контурной пластике, биоревитализации и даже пластическим хирургам.</p>
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