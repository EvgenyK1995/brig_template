<!DOCTYPE html>
<html>
	<head>
		<title><?php echo wp_get_document_title(); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/style.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/css/bootstrap.min.css">
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/bootstrap.min.js"></script>
        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="container-fluid">
			<div class="row">
				<header class="col-xs-12 b-header">
					<div class="row">
						<div class="col-sm-12 col-md-3 col-md-offset-1 b-contacts-top text-center">
							<p>
                                <span class="glyphicon glyphicon-map-marker"></span> г. Миасс, ул. 8 Марта, 134
                            </p>
							<p class="b-contacts-top__number_bold">
                                <span class="glyphicon glyphicon-earphone"></span> 8 (3513) 55-85-90, 57-26-00
                            </p>
						</div>
						<div class="col-sm-12 col-md-4 b-logo text-center">
							<a class="b-logo__logo" href="<?php bloginfo("url") ?>">
								<p>БРИГАНТИНА</p>
							</a>
						</div>
						<div class="col-sm-12 col-md-3 b-search text-center">
							<?php get_search_form(); ?><br />
                            <?php echo do_shortcode("[bvi text = \"Версия для слабовидящих\"]") ?>
						</div>
                        <div>

                        </div>
					</div>
					<div class="row">
                        <?php if (is_front_page()) : ?>
                            <div class="col-xs-12 col-md-6 col-md-offset-3 b-news-slider">
                                <?php echo photo_gallery(25); ?>
                            </div>
                        <?php endif; ?>
					</div>
				</header>
			</div>
            <div class="row">
                <nav class="navbar navbar-default b-navbar" role="navigation">
                    <div class="container">
                        <!--Название сайта и кнопка раскрытия меню для мобильных-->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!--Само меню-->
                        <div class="collapse navbar-collapse main-menu">
                            <?php
                                wp_nav_menu( array(
                                        'menu' => 'main_menu',
                                        'depth' => 2,
                                        'container' => false,
                                        'menu_class' => 'nav nav-justified',
                                        'walker' => new WP_Bootstrap_Navwalker()
                                ));
                            ?>
                        </div>
                    </div>
                </nav>
            </div>
