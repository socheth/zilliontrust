<?php get_header() ?>

<div id="homepage-banner" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">

		<?php

		$count = 0;

		$category_query = new WP_Query(array(
			'category_name' => 'slide',
			'posts_per_page' => 0,
			'orderby' => 'date',
			'order' => 'DESC'
		));

		if ($category_query->have_posts()) :

			while ($category_query->have_posts()) :

				$category_query->the_post();

		?>
				<div class="carousel-item <?php if ($count == 0) echo 'active' ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
					<img src="<?php echo get_the_post_thumbnail_url() ?>" class="d-none w-100" alt="Banner image">
					<div class="carousel-caption">
						<h1 class="carousel-title animate__animated animate__zoomIn"><?php echo get_the_title() ?></h1>
						<p class="carousel-subtitle animate__animated animate__slideInUp"><?php echo str_replace("\n", '<br>', get_the_excerpt()) ?></p>
					</div>
				</div>

		<?php
				$count++;

			endwhile;
		endif;

		wp_reset_postdata();
		?>
	</div>

	<?php if ($count > 1) : ?>
		<a class="carousel-control-prev" href="#homepage-banner" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</a>
		<a class="carousel-control-next" href="#homepage-banner" role="button" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</a>
	<?php endif ?>

</div>

<div class="row g-0 text-center homepage-services">

	<?php

	$args = array(
		'numberposts' => 3,
		'category_name' => 'home-services',
		'orderby'     => 'date',
		'order'       => 'ASC',
	);

	$posts = get_posts($args);

	foreach ($posts as $post) :

		setup_postdata($post);

	?>

		<div class="col-lg-4">
			<a href="./services" class="text-white">
				<div class="card rounded-0 border-0 overflow-hidden">
					<img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img rounded-0" alt="...">
					<div class="card-img-overlay">
						<h5 class="card-title animate__animated animate__zoomIn"><?php echo get_the_title() ?></h5>
						<span class="card-text animate__animated animate__slideInRight"><?php echo get_post_meta(get_the_ID(), 'sub_title', true) ?></span>
					</div>
				</div>
			</a>
		</div>

	<?php

	endforeach;
	wp_reset_postdata();
	?>
</div>

<?php get_footer() ?>