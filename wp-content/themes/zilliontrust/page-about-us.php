<?php /* Template Name: About Us */ ?>

<?php get_header() ?>

<div class="bg-white text-muted about-page">

    <div class="container py-5">
        <h1 class="text-center text-dark">ABOUT US</h1>
        <?php the_content() ?>

        <div class="row row-cols-1 row-cols-lg-3 mt-5 g-3">

            <?php

            $args = array(
                'numberposts' => 3,
                'category_name' => 'about-cart',
                'orderby'     => 'date',
                'order'       => 'DESC',
            );

            $posts = get_posts($args);

            foreach ($posts as $post) :

                setup_postdata($post);

            ?>

                <div class="col">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>" class="w-100">
                    <h5 class="text-dark mt-3"><?php echo get_the_title() ?></h5>
                    <?php echo get_the_content() ?>
                </div>

            <?php

            endforeach;
            wp_reset_postdata();
            ?>

        </div>

        <div class="row row-cols-1 row-cols-lg-2 mt-5">

            <?php

            $args = array(
                'numberposts' => 2,
                'category_name' => 'about-license',
                'orderby'     => 'date',
                'order'       => 'DESC',
            );

            $posts = get_posts($args);

            foreach ($posts as $post) :

                setup_postdata($post);

            ?>
                <div class="col">
                    <h5 class="text-dark"><?php echo get_the_title() ?></h5>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-zoomimage" data-bs-title="<?php echo get_the_title() ?>" data-bs-image="<?php echo get_the_post_thumbnail_url() ?>">
                        <img class="w-100" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>">
                    </a>
                </div>

            <?php

            endforeach;
            wp_reset_postdata();
            ?>

        </div>

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal-zoomimage" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="modal-zoomimage w-100">
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>