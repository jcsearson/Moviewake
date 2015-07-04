<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Casper
 */

get_header(); 
?>
	<div class="layout">
		<div class="page-error">

			<section class="wrong-page">
				<h2 class="entry-title">"Oops!  The page you are looking for is not here."</h2>
				<p>Please try refreshing the browser or navigating back to another page.</p>
				<div class="lost-icon">
					<img src="<?php echo get_template_directory_uri();?>/images/svg/error.svg" alt="icon for blog" class="icon">
				</div>
			</section><!-- .error-404 -->

		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
