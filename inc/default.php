<?php

//theme titile
add_theme_support('title-tag');

//Thumnil Image area
add_theme_support('post-thumbnails', array('page','post'));
add_image_size('post-thumbnails', 970,350,true);

// excerpt to 30 word

function sm_excerpt_more($more){
    global $post;
    return ' <br> <a class="readmore" href="' . get_permalink($post->ID) . '"> Read more</a>';
}
add_filter('excerpt_more', 'sm_excerpt_more');

function sm_excerpt_length($length){
    return 30;
}
add_filter('excerpt_length','sm_excerpt_length',999);

// Pagenav Function

function sm_pagenav() {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;

    $args = array(
        'base' => str_replace(99999999, '%#%', get_pagenum_link(99999999)),
        'total' => $max,
        'current' => $current,
        'prev_text' => 'prev',
        'next_text' => 'next',
    );

    if ($max > 1) {
        echo '<div class="wp_pagenav">';
        if ($max > 1) $pages = '<p class="pages">Page ' . $current . '<span> of </span>' . $max . '</p>';
        echo $pages . paginate_links($args);
        echo '</div>';
    }
}
