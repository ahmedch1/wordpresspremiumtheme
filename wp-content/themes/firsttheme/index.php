<?php get_header(); ?>
<?php if ($wp_query->have_posts()) { ?>
    git
    <?php while ($wp_query->have_posts()) { ?>
        <?php $wp_query->the_post(); ?>
        <h2>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title() ?>
            </a>
        </h2>
        <div>
            <?php firsttheme_post_meta(); ?>
        </div>
        <div>
            <?php the_excerpt(); ?>
        </div>
        <?php firsttheme_readmore_link(); ?>
    <?php } ?>
    <?php the_posts_pagination(); ?>
<?php } else {
    ?>
    <p>Sorry,no posts</p>
<?php } ?>
<?php get_footer(); ?>

