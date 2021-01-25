<?php

if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.2');
}

function init_meta_link()
{
	echo '<meta http-equiv="content-type" content="text/html;charset=utf-8">' . PHP_EOL;
	echo '<meta http-equiv="Cache-control" content="public, max-age=604800, immutable">' . PHP_EOL;
	echo '<meta http-equiv="X-UA-Compatible" content="ie=edge">' . PHP_EOL;
	echo '<meta name="theme-color" content="#222133">' . PHP_EOL;
	echo '<meta name="-ms-viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">' . PHP_EOL;
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">' . PHP_EOL;
	echo '<meta name="description" content="">' . PHP_EOL;
	echo '<meta name="keywords" content="">' . PHP_EOL;
	echo '<meta property="og:title" content="Zilliontrust in Cambodia">' . PHP_EOL;
	echo '<meta property="og:description" content="">' . PHP_EOL;
	echo '<meta property="og:image" content="">' . PHP_EOL;
	echo '<meta property="og:url" content="">' . PHP_EOL;
	echo '<meta property="og:type" content="website">' . PHP_EOL;
	echo '<link rel="icon" href="' . get_theme_file_uri('images/cropped-logo-zillion-trust-plc-32x32.png') . '" sizes="32x32">' . PHP_EOL;
	echo '<link rel="icon" href="' . get_theme_file_uri('images/cropped-logo-zillion-trust-plc-192x192.png') . '" sizes="192x192">' . PHP_EOL;
	echo '<link rel="apple-touch-icon" href="' . get_theme_file_uri('images/cropped-logo-zillion-trust-plc-180x180.png') . '">' . PHP_EOL;
	echo '<meta name="msapplication-TileImage" content="' . get_theme_file_uri('images/cropped-logo-zillion-trust-plc-270x270.png') . '">' . PHP_EOL;
	echo '<link rel="dns-prefetch" href="//fonts.googleapis.com" />' . PHP_EOL;
}

function init_header()
{
	wp_enqueue_style('animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
	wp_enqueue_style('font-custom', '//fonts.googleapis.com/css2?family=Raleway:wght@500;700&display=swap');
	wp_enqueue_style('font-awesome', '//maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css');
	wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
	wp_enqueue_style('main-style', get_stylesheet_uri(), null, _S_VERSION);
	wp_enqueue_style('sub-styles', get_theme_file_uri('css/style.css'), null, _S_VERSION);
}

function init_footer()
{
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', null, false, true);
	wp_enqueue_script('main-script', get_theme_file_uri('js/app.js'), null, _S_VERSION, true);
}

function My_get_gallery_image_urls($post_id)
{

	$post = get_post($post_id);

	if (has_block('gallery', $post->post_content)) {

		$dom = new DOMDocument();
		$dom->loadHTML(strip_tags($post->post_content, ['img']));
		$images = $dom->getElementsByTagName('img');
		$src_url = [];

		foreach ($images as $i => $image) {
			$src_url[$i] = $image->getAttribute('src');
		}

		return $src_url;
	} else {
		return [];
	}
}

function page_title()
{
}

# show page title
add_theme_support('title-tag');

# show menus item of Appearance in admin
add_theme_support('menus');

# show post featured image in admin
add_theme_support('post-thumbnails');

# remove generator meta tag from head
remove_action('wp_head', 'wp_generator');

# run init_meta_link function when wp_enqueue_scripts function worked
add_action('wp_enqueue_scripts', 'init_meta_link');

# run init_header function when wp_enqueue_scripts function worked
add_action('wp_enqueue_scripts', 'init_header');

# run page_title function when after_setup_theme function worked
add_action('after_setup_theme', 'page_title');

# run init_footer function when wp_footer function worked
add_action('wp_footer', 'init_footer');
