<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>

<img src="broken-cat.png" alt="broken-cat"/>

  <link rel="stylesheet" href="styles.css">
	<div id="primary" class="site-content">
		<div class="main-content" role="main">
		<img src="broken-cat.jpg" alt="broken cat">
				<h2>404 Cat .exe has stopped working.</h2>
        <p>It looks like you broke teh interwebs.</p>
        <p>Great job!</p>
				<?php the_content(); ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->
