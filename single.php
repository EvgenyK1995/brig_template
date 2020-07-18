<?php get_header(); ?>
    <div class="row">
        <div class="col-xs-12 col-md-offset-1 col-md-7 b-content">
            <?php
            if (have_posts()) : the_post();
                $image = get_field('affiche'); ?>

                <div class="col-xs-12 b-one-event">
                    <div class="h1">
                        <?php echo get_post_meta($post->ID, 'titled', true); ?>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 text-left b-date">
                            <p class="lead">
                                <span class="glyphicon glyphicon-calendar"></span>
                                <?php
                                    $date_event = DateTime::createFromFormat('Ymd', get_field('date'));

                                    echo $date_event->format("d-m-Y");
                                ?>
                            </p>
                        </div>
                        <div class="col-xs-6 text-right b-time">
                            <p class="lead">
                                <span class="glyphicon glyphicon-time"></span> Начало в:
                                <?php echo get_post_meta($post->ID, "time", true); ?>
                            </p>
                        </div>
                    </div>

                    <div class="affiche col-xs-12 text-center">
                        <img class="affiche-img"
                             src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt']; ?>"
                             title="<?php echo $image['title']; ?>" />
                    </div>
                    <div class="col-xs-12 lead text-justify">
                        <?php echo get_post_meta($post->ID, 'full_desc', true); ?>
                    </div>
                    <?php
                        if(!empty(the_content()))
                        {
                            the_content();
                        }
                    ?>
                </div>

            <?php endif; ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>