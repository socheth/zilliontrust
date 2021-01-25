<?php /* Template Name: Our Services */ ?>

<?php get_header() ?>

<div class="bg-white text-muted service-page">

    <div class="container py-5">
        <h1 class="text-center text-dark">OUR SERVICES</h1>

        <div class="row row-cols-1 row-cols-lg-3 mt-5">

            <?php

            $args = array(
                'numberposts' => 3,
                'category_name' => 'page-services',
                'orderby'     => 'date',
                'order'       => 'DESC',
            );

            $posts = get_posts($args);

            foreach ($posts as $post) :

                setup_postdata($post);

            ?>

                <div class="col">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="w-100">
                    <h5 class="text-dark mt-3"><?php echo get_the_title() ?></h5>
                    <?php echo get_the_content() ?>
                </div>

            <?php

            endforeach;
            wp_reset_postdata();
            ?>

        </div>

    </div>
</div>

<?php get_footer() ?>