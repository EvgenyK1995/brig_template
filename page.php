<?php get_header(); ?>
    <div class="row">
        <div class="col-xs-12 col-md-offset-1 col-md-7 b-content">
            <div class="lead text-justify b-content-news-p">
                <?php
                while(have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>