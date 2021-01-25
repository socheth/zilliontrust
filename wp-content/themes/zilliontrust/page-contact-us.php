<?php /* Template Name: Contact Us */ ?>

<?php get_header() ?>

<div class="bg-white text-muted contact-page">

    <div class="container py-5">

        <div class="row">
            <div class="col-xl-4">
                <h3 class="text-dark my-3">CONTACT INFO</h3>
                <?php the_content() ?>
            </div>
            <div class="col-xl-8">
                <h3 class="text-dark my-3">MAPS</h3>
                <iframe src="<?php echo get_post_meta(get_the_ID(), 'google_map', true) ?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

    </div>
</div>

<?php get_footer() ?>