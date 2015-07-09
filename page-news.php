<?php

	/*
		Template Name: News
	*/

?>

<?php get_header(); ?>

<div class="upcominglist">
	<section class="layout">
		<div class="primary">
			<section class="news">
			<?php $blogPost = new WP_Query(array(  //makes WP_query object and stores in variable  $films
				'posts_per_page' => '5'
			)); ?>

			<?php if ($blogPost->have_posts()) : ?>
			<?php while($blogPost->have_posts()) : $blogPost->the_post(); ?>
				<div class="news-article">
					<h2><?php the_title(); ?></h2>
					<h4>Posted on: <span class="post-date"><?php the_date(); ?></span></h4>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>"><h5>( Read Article ... )</h5></a>
				</div>  <!-- .news-article -->
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
			<?php wp_reset_query(); ?>
			</section>  <!-- .news -->
		</div><!-- .primary -->

		<?php get_sidebar('news'); ?>

	</section>  <!-- .layout -->
</div>  <!-- .upcominglist -->

<?php get_footer(); ?>