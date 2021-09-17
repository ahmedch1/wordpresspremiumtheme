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
<?php } else {
    ?>
    <p><?php echo esc_html_e('Sorry,no posts matched your criteria', '_themename'); ?></p>
<?php } ?>

<?php
$city = 'london';
echo esc_html__('Your city is ', '_themename') . $city;

printf(
/* translators: %s is the city name */
    esc_html('Your city is %s', '_themename'),
    $city
)

?>
<?php get_footer(); ?>

