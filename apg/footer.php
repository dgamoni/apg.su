<!-- FOOTER -->
<?php
// LANG
if(isset($_SERVER["REQUEST_URI"])){
	$url = explode('/', $_SERVER["REQUEST_URI"]);
}
if(!isset($_COOKIE['lang']) || $_COOKIE['lang']!='eng'){
	$url_lang = $url[1];
}else{
	$url_lang = $url[2];
}
// Изменение фона для меню
switch ($url_lang) {
	case 'about': $link_menu2 = true;break;
	case 'catalog': $link_menu3 = true;break;
	case 'plants': $link_menu4 = true;break;
	case 'qualitycontrol': $link_menu5 = true;break;
	case 'career': $link_menu6 = true;break;
	case 'contacts': $link_menu7 = true;break;

	default: $link_menu1 = true;break;
}
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="menu">
                <?php
                if(!isset($_COOKIE['lang']) || $_COOKIE['lang']!='eng'){ echo '
                    <li class="color1 '.(isset($link_menu1) ? 'open' : '').'">
                        <a href="/" title="Главная">Главная</a>
                    </li>
                    <li class="color2 '.(isset($link_menu2) ? 'open' : '').'">
                        <a href="/about/" title="О компании">О компании</a>
                    </li>
                    <li class="color3 '.(isset($link_menu3) ? 'open': '').'">
                        <a href="/catalog/" title="Каталог продукции">Каталог продукции</a>
                    </li>
		    <li class="color8 '.(isset($link_menu8) ? 'open': '').'">
			<a href="https://apg-vostochnaya-evro.tiu.ru/" title="Интернет магазин">Интернет магазин</a>
		    </li>
                    <li class="color4 '.(isset($link_menu4) ? 'open': '').'">
                        <a href="/plants/" title="Europlast">Europlast</a>
                    </li>
                    <li class="color5 '.(isset($link_menu5) ? 'open': '').'">
                        <a href="/qualitycontrol/" title="Контроль качества">Контроль качества</a>
                    </li>
                    <li class="color6 '.(isset($link_menu6) ? 'open': '').'">
                        <a href="/career/" title="Карьера">Карьера</a>
                    </li>
                    <li class="color7 '.(isset($link_menu7) ? 'open': '').'">
                        <a href="/contacts/" title="Контакты">Контакты</a>
                    </li>
                ';}else{ echo '
                    <li class="color1 '.(isset($link_menu1) ? 'open': '').'">
                        <a href="/eng/" title="Homepage">Homepage</a>
                    </li>
                    <li class="color2 '.(isset($link_menu2) ? 'open': '').'">
                        <a href="/eng/about/" title="About the Company">About the Company</a>
                    </li>
                    <li class="color3 '.(isset($link_menu3) ? 'open': '').'">
                        <a href="/eng/catalog/" title="Catalog">Catalog</a>
                    </li>
                    <li class="color4 '.(isset($link_menu4) ? 'open': '').'">
                        <a href="/eng/plants/" title="Plants Europlast">Plants Europlast</a>
                    </li>
                    <li class="color5 '.(isset($link_menu5) ? 'open': '').'">
                        <a href="/eng/qualitycontrol/" title="Quality control">Quality control</a>
                    </li>
                    <li class="color6 '.(isset($link_menu6) ? 'open': '').'">
                        <a href="/eng/career/" title="Careers">Careers</a>
                    </li>
                    <li class="color7 '.(isset($link_menu7) ? 'open': '').'">
                        <a href="/eng/contacts/" title="Contacts">Contacts</a>
                    </li>
                ';}?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div itemscope itemtype="http://schema.org/Organization">
                    <?php
                        if(!isset($_COOKIE['lang']) || $_COOKIE['lang']!='eng'){
                            echo '<div style="display:inline-block" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="postalCode">188300</span>, <span itemprop="addressCountry">Россия</span>, <span itemprop="addressRegion">Ленинградская область</span>, <span itemprop="addressLocality">г. Гатчина</span>, <span itemprop="streetAddress">Промзона 1, квартал 4, площадка 8</span></div>, <br><span itemprop="name">ОАО «АПГ Восточная Европа»</span>, тел.: +7 (812) 718 81 11, e-mail: <span itemprop="email">apg@preforma.ru</span>';
                        }else{
                            echo '<div style="display:inline-block" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="postalCode">188300</span>, <span itemprop="addressCountry">Russia</span>, <span itemprop="addressRegion">Leningrad region</span>, <span itemprop="addressLocality">Gatchina city</span>, <span itemprop="streetAddress">Industrial Area 1, Quarter 4, 8 Playground</span></div>, <br><span itemprop="name">OJSC «APG Eastern Europe»</span>, тел.: +7 (812) 718 81 11, e-mail: <span itemprop="email">apg@preforma.ru</span>';
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="copyright">
                    <a href="https://visible.name/">
                        <?php
                            if(!isset($_COOKIE['lang']) || $_COOKIE['lang']!='eng'){
                                echo '<img src="/wp-content/themes/apg/img/creator.gif" alt="Visible Name - Разработка сайтов премиум-класса" width="120"/>';
                            }else{
                                echo '<img src="/wp-content/themes/apg/img/eng_creator.png" alt="Visible Name - Development of premium sites" width="120"/>';
                            }
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->


<!-- WP_FOOTER -->
  <?php
    wp_footer();
    if(isset($GLOBALS['arrayjs'])){echo $GLOBALS['arrayjs'];}
  ?>
      <script src="/wp-content/themes/apg/js/jquery.cookie.js" type="text/javascript"></script>
      <script src="https://api-maps.yandex.ru/2.0/?load=geolocation&lang=<?php
        if (!isset($_COOKIE["lang"]) || $_COOKIE["lang"]!= 'eng') {
          echo 'ru-RU';
        }else{
          echo 'en_US';
        }
      ?>" type="text/javascript"></script>
      <script>
        ymaps.ready(init);
        function init(){
          var geo = ymaps.geolocation.city;
          $.cookie('geolocation_ip_yandex', geo, { expires: 1 });
          $('#geolocation_ip_yandex').text(geo);
        }
      </script>
<!-- WP_FOOTER END -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42032614 = new Ya.Metrika({
                    id:42032614,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42032614" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42784921-2', 'auto');
  ga('send', 'pageview');
</script>
<!-- /Google Analytics counter -->
</body>
</html>
