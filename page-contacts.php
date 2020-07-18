<?php get_header(); ?>
    <div class="row">
        <div class="col-xs-12 col-md-offset-1 col-md-7 b-content b-content-page-contacts">
            <div class="h1"><strong>
                Муниципальное бюджетное учреждение<br />
                Дом культуры «Бригантина»</strong>
            </div><br />
            <div class="lead text-justify b-content-news-p">
                <?php
                    while(have_posts()) : the_post();
                        the_content();
                    endwhile;
                ?>
            </div>

            <!--
                * Карта 2гис основной ДК Бригантина.
                * Чтобы изменить ширину виджетов карты, искать CSS-селектор ".b-content-page-contacts iframe".
            -->
            <div class="lead">Дом культуры Бригантина (8 Марта, 134)</div>
            <a class="dg-widget-link" href="http://2gis.ru/miass/firm/12244689767892154/center/60.113179,55.040429/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Миасса и Златоуста</a><div class="dg-widget-link"><a href="http://2gis.ru/miass/firm/12244689767892154/photos/12244689767892154/center/60.113179,55.040429/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/miass/center/60.113179,55.040429/zoom/16/routeTab/rsType/bus/to/60.113179,55.040429╎Бригантина, дом культуры?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Бригантина, дом культуры</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
            <script charset="utf-8">new DGWidgetLoader({"width":640,"height":400,"borderColor":"#a3a3a3","pos":{"lat":55.040429,"lon":60.113179,"zoom":16},"opt":{"city":"miass"},"org":[{"id":"12244689767892154"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>

            <!--
                * Карта 2гис Филиал ДК Бригантина.
            -->
            <div class="lead">Филиал дома культуры Бригантина (Степана Разина, 4)</div>
            <a class="dg-widget-link" href="http://2gis.ru/miass/firm/12244689767892155/center/60.11431217193604,55.03580663464482/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Миасса и Златоуста</a><div class="dg-widget-link"><a href="http://2gis.ru/miass/center/60.114315,55.035807/zoom/16/routeTab/rsType/bus/to/60.114315,55.035807╎Бригантина, дом культуры?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Бригантина, дом культуры</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
            <script charset="utf-8">new DGWidgetLoader({"width":640,"height":400,"borderColor":"#a3a3a3","pos":{"lat":55.03580663464482,"lon":60.11431217193604,"zoom":16},"opt":{"city":"miass"},"org":[{"id":"12244689767892155"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>