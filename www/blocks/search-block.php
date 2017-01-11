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

<!-- Результат поиска -->
<section class="search-result" style="display:none;">
	<div class="container">
		<div class="search-result__category">
        	<p class="smalltitle"><a href="#">Инъекционная косметология</a></p>
            <ul class="blue-links-list">
                <li><a href="#"><span class="match">Лечение</span> гипергидроза (повышенной потливости)</a></li>
                <li><a href="#"><span class="match">Лечение</span> болевого симптома при помощи ботулинотерапии</a></li>
            </ul>
        </div>
        <div class="search-result__category">
        	<p class="smalltitle"><a href="#">Аппаратная косметология</a></p>
            <ul class="blue-links-list">
				<li><a href="#"><span class="match">Лечение</span> сосудов и улучшение качества кожи на лазере VBeam Perfecta</a></li>
            </ul>
        </div>
        <div class="search-result__category">
        	<p class="smalltitle"><a href="#">Трихология</a></p>
            <ul class="blue-links-list">
                <li><a href="#"><span class="match">Лечение</span> волос</a></li>
            </ul>
        </div>
	</div>
</section>
<!-- // Результат поиска -->