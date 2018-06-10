<?php
/**
 * The template for displaying all pages melted into the about page
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

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				$image_1 = get_field("image_1");
				$image_2 = get_field("image_2");
				$image_3 = get_field("image_3");
				$image_4 = get_field("image_4");
				$size = "full";
				$services = get_field('services'); ?>
				<h2><?php the_title(); ?></h2>
					<article class="page-about clearfix">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h4><?php echo $services; ?></h4>
				<?php the_content(); ?>
					</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
