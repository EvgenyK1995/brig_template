<?php get_header(); ?>
    <div class="row">
        <div class="col-xs-12 col-md-offset-1 col-md-7 b-content">
            <div class="h1">Вокальные коллективы</div>

            <div class="col-xs-12 b-collective-mini_desc">
                <?php
                    $args = array(
                        "post_parent" => "348", // страницы, родителем которых является текущая страница
                        "post_type"   => "page" // тип - страница
                    );
                    $children = get_children($args);

                    foreach ($children as $ch)
                    {
                        $image = get_field("photo_coach", $ch->ID);
                        if (!empty($image)) { ?>
                            <img class="img-responsive img-thumbnail "
                                 src="<?php echo $image['url']; ?>"
                                 alt="Руководитель коллектива"
                                 title="Руководитель коллектива" />
                        <?php } else { ?>
                            <img class="img-responsive img-thumbnail"
                                 src="<?php bloginfo("template_url"); ?>/img/no-photo.png"
                                 alt="Фото руководителя отсутствует"
                                 title="Фото руководителя отсутствует">
                        <?php } ?>

                        <a class="lead" href="<?php echo get_permalink($ch->ID); ?>">
                            <?php echo $ch->post_title."<br />"; ?>
                        </a>
                    <?php }
                ?>
            </div>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
