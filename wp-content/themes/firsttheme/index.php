<?php get_header(); ?>
<?php if ($wp_query->have_posts()) { ?>
    <?php while ($wp_query->have_posts()) { ?>
        <?php $wp_query->the_post(); ?>

        <div>
            <?php _themename_post_meta(); ?>
        </div>
        <div>
            <?php the_excerpt(); ?>
        </div>
        <?php _themename_readmore_link(); ?>
    <?php } ?>
    <?php the_posts_pagination(); ?>
    <?php do_action('_themename_after_pagination') ?>

<?php } else {
    ?>
    <p><?php echo apply_filters('_themename_no_posts_test', esc_html__('Sorry,no posts matched your criteria',
            '_themename')); ?></p>
<?php } ?>


<?php get_footer(); ?>

