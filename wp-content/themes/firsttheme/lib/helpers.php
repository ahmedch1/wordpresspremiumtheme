<?php
if (!function_exists('_themename_post_meta')) {
    function _themename_post_meta()
    {
        printf(esc_html('Posted on %s', '_themename'),
            '<a href="' . esc_url(get_permalink()) . '<time datetime="' . esc_attr(get_the_date('c')) .
            '">' . esc_html(get_the_date()) . '</time></a>'
        );

        printf(esc_html__(' By %s', '_themename'),
            '<a href = "' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" > ' . esc_html(get_the_author()) . '</a >');
    }
}
function _themename_readmore_link()
{
    echo '<a class="c-post__readmore" href="' . esc_url(get_the_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
    printf(
        wp_kses(
            __('Read More <span class="u-screen-reader-text">About %s</span>', '_themename'),
            [
                'span' => [
                    'class' => []
                ]
            ]
        ),
        get_the_title());
    echo '</a>';
}
