<aside>
    <div class="col-xs-12 b-event-calendar">
        <div class="h2">
            <strong>События текущего месяца</strong>
        </div>
        <div class="b-events">
            <?php
                $query = new WP_Query();
                $query->query("showposts=20" . "&paged=".$paged."&order=ASC");
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    $date_e = DateTime::createFromFormat('Ymd', get_field('date'));

                    if ($date_e->format("m") == date("m")) : ?>
                        <div class="b-event-calendar__event">
                            <div class="b-number">
                                <strong><?php echo $date_e->format("d"); ?></strong>
                            </div>
                            <a class="b-title-event" href="<?php the_permalink(); ?>">
                                <?php echo get_field("titled"); ?>
                            </a>
                            <div class="both"></div>
                        </div>
                <?php endif; endwhile; else : ?>
                    <p>Событий нет</p>
                <?php endif;
                wp_reset_query();
            ?>
        </div>
    </div>
    <div class="col-xs-12 b-menu-sidebar">
        <div class="h2">
            <strong>Меню</strong>
        </div>
        <?php
            wp_nav_menu( array(
                'menu' => 'sidebar-menu',
                'menu_class' => 'sidebar-menu'
            ));
        ?>
    </div>
    <?php if(is_active_sidebar('right_sidebar')) : ?>
        <div id="true-side" class="sidebar">
            <?php dynamic_sidebar('right_sidebar'); ?>
        </div>
    <?php endif; ?>
</aside>
