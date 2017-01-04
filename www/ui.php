<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body class="page-ui"> 

<?php include "blocks/header.php"; ?>

<!-- Заголовок + хлебные крошки -->
<section class="page-heading">
    <div class="container">
        <div class="page-heading__container">
            <ul class="page-heading__breadcrumbs">
                <li><a href="#">Главная страница</a></li>
                <li><a href="#">Раздел</a></li>
                <li><a href="#">Внутренняя страница</a></li>
            </ul>
            <h1 class="page-heading__heading">Заголовок страницы</h1>
        </div>
    </div>
</section>
<!-- // Заголовок + хлебные крошки -->

<!-- Поиск -->
<section class="search-block">
    <div class="container">
        <form action="send.php" method="get" class="search-block__form">
            <input type="text" name="searchfield" placeholder="Поисковый блок (работает только в разделе)" class="search-block__input">
            <div class="search-block__nav">
                <button type="submit" class="search-block__start"></button>
                <span class="search-block__close"><img src="img/search_close.svg" alt="@@" width="18" height="18"></span>
            </div>
        </form>
    </div>
</section>
<!-- // Поиск -->

<!-- Контент страницы  -->
<main class="main-content">
    <div class="container">
        <!-- Текстовый блок с картинкой -->
        <div class="text-image-block">
            <p class="text-image-block__heading">Текстовый блок с&nbsp;картинкой</p>
            <p class="text-image-block__text">Заголовок у этого текстового блока может быть трех-четырёх цветов: розовый, голубой, белый и золотой. В зависимости от выбранного цвета текст так же меняет цвет. Больше примеров в прилагающихся банерах.<br><br> В этом блоке справа может находиться, а может не находиться картинка. Важно чтобы при добавлении картинки (для контент-менеджеров) цвет фона блока совпадал с цветом фона на изображении. Возможность загружать PNG изображения.<br><br> Так же в этом блоке можно не использовать изображения, но при этом ширина столбца не должна меняться и текст должен быть расположен там где он сейчас находится. Данный блок может содержать до двух кнопок, но должна быть возможность их отключать.<br><br> Если в блок загружена картинка, но нет никакого текста, то картинка просто центрируется в середине блока и всё. Если введен хоть 1 символ (заголовок, текст блока или кнопка, то картинка равняется по правому краю).</p>
            <div class="text-image-block__buttons">
                <a href="#" class="button">Первая кнопка</a>
                <a href="#" class="button">Вторая кнопка</a>
            </div>
            <img src="img/imageblock/example.png" alt="@@" class="text-image-block__bgimage">
        </div>  
        <!-- // Текстовый блок с картинкой -->
        
        <!--  -->
        <h2 class="subtitle">Подзаголовок</h2>
        <!-- //  -->
        
        <!-- 3 колонки -->
        <div class="columns page-content-padding">
            <div class="columns__third">
                <p class="smalltitle"><a href="#">Кликабельный заголовок</a></p>
                <ul class="blue-links-list">
                    <li><a href="#">Ссылка</a></li>
                    <li><a href="#">Ссылка</a></li>
                </ul>
            </div>
            <div class="columns__third">
                <p class="smalltitle"><a href="#">Кликабельный заголовок</a></p>
                <ul class="blue-links-list">
                    <li><a href="#">Ссылка</a></li>
                    <li><a href="#">Ссылка</a></li>
                </ul>
            </div>
            <div class="columns__third">
                <p class="smalltitle"><a href="#">Кликабельный заголовок</a></p>
                <ul class="blue-links-list">
                    <li><a href="#">Ссылка</a></li>
                    <li><a href="#">Ссылка</a></li>
                </ul>
            </div>
        </div>
        <!-- // 3 колонки -->
    </div>
</main>
<!-- // Контент страницы  -->

<?php include "blocks/footer.php"; ?>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>