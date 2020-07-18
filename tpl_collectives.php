<?php
/*
 * Template Name: Страница коллектива
 */
get_header(); ?>

<div class="row">
    <div class="col-md-offset-1 col-md-7 b-content">
        <?php while ( have_posts() ) : the_post();
            $image = get_field('photo_coach'); ?>

            <div class="h1 b-content-collectives-h">
                <?php echo get_post_meta($post->ID, 'title', true); ?>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-12 col-sm-6 text-left">
                        <?php
                            if (!empty($image)) {
                        ?>
                            <img class="img-responsive img-thumbnail"
                                 src="<?php echo $image['url']; ?>"
                                 alt="Руководитель коллектива"
                                 title="Рукоодитель коллектива" />
                        <?php } else { ?>
                            <img class="img-responsive img-thumbnail"
                                 src="<?php bloginfo("template_url"); ?>/img/no-photo.png"
                                 alt="Фото руководителя отсутствует"
                                 title="Фото руководителя отсутствует">
                        <?php } ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-left b-content-collectives-p">
                        <p>
                            <strong>Руководитель:</strong><br />
                            <?php echo get_post_meta($post->ID, 'coach', true); ?>
                        </p>
                        <p>
                            <?php if (!empty(get_post_meta($post->ID, 'date_of_created', true))) { ?>
                                <strong>Дата основания коллектива:</strong><br />
                                <?php echo get_post_meta($post->ID, 'date_of_created', true); ?>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="h2"><strong>Описание:</strong></div>
                    <div class="lead text-justify">
                        <?php echo get_post_meta($post->ID, 'description', true); ?>
                    </div>
                </div>
                <div class="col-xs-12">
                    <?php the_content(); ?>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
    <div class="col-md-3">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>