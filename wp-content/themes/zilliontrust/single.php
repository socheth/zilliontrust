<?php

get_header();

// the_content();
echo strip_tags(get_the_content(), ['p', 'a']);

foreach (My_get_gallery_image_urls(get_the_ID()) as $url) {
    printf('<img src="%s" width="100">', $url);
}

get_footer();
