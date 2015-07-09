<?php

	/*
		Template Name: Single
	*/

?>
<!-- THIS IS THE SINGLE BLOG POST TEMPLATE FOR THE REGULAR BLOG POSTS -->
<?php get_header(); ?>

<div class="upcominglist">
	<section class="layout">
		<div class="primary">
			<section class="news">

			<?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>

				<div class="news-article">
					<h2><?php the_title(); ?></h2>
					<h4>Posted on: <span class="post-date"><?php the_date(); ?></span></h4>
					<div class="feature-image-post">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
					</div>  <!-- .feature-image-post -->
					<p><?php the_content(); ?></p>
				</div>  <!-- .news-article -->

			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
			<?php wp_reset_query(); ?>

			</section>  <!-- .news -->
		</div><!-- .primary -->

		<?php get_sidebar('single'); ?>

	</section>  <!-- .layout -->
</div>  <!-- .upcominglist -->

<?php get_footer(); ?>