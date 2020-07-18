<?php get_header(); ?>
    <div class="row">
        <div class="col-xs-12 col-md-offset-1 col-md-7 b-content b-content-news">
            <div class="h1 b-content-news-h">ПРИВЕТСТВУЕМ ВАС НА ОФИЦИАЛЬНОМ САЙТЕ ДК «БРИГАНТИНА»</div>
            <div class="lead text-justify b-content-news-p">
                <?php
                while(have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>
            </div>
            <div class="h2">
                <strong>АФИША</strong>
            </div>
            <?php
            $wp_query = new WP_Query();
            $wp_query->query("showposts=7" . "&paged=".$paged);
            if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                $image = get_field("affiche"); ?>

                <div class="b-one-event">
                    <a class="h3" href="<?php the_permalink(); ?>">
                        <?php echo get_post_meta($post->ID, "titled", true); ?>
                    </a>
                    <div class="affiche col-xs-12 text-center">
                        <a href="<?php the_permalink(); ?>">
                            <img class="affiche-img"
                                 src="<?php echo $image["url"]; ?>"
                                 alt="<?php echo $image["alt"]; ?>"
                                 title="<?php echo $image["title"]; ?>" />
                        </a>
                    </div>
                    <div class="lead text-justify">
                        <?php echo get_post_meta($post->ID, "short_desc", true); ?>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 text-left b-date">
                            <p class="lead">
                                <span class="glyphicon glyphicon-calendar"></span>
                                <?php
                                $date_event = DateTime::createFromFormat('Ymd', get_field('date'));

                                echo $date_event->format("d-m-Y");
                                ?>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-right b-time">
                            <p class="lead">
                                <span class="glyphicon glyphicon-time"></span> Начало в:
                                <?php echo get_post_meta($post->ID, "time", true); ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php endwhile; endif; ?>
            <?php if (function_exists("pagenavi")) pagenavi(); ?>

            <?php wp_reset_query(); ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>