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
		<div class="secondary">
			<article class="recentreview">
			<h1>Random Picks:</h1>
				<ul class="recentmovie">
					<?php
					$args = array(
						'post_type' => 'films',
						'posts_per_page' => '2',
						'orderby' => 'rand',
						'status' => 'published'
					);
					$second_loop = new WP_Query( $args );

					if ($second_loop->have_posts()) :  while($second_loop->have_posts()) : $second_loop->the_post(); ?>
						<li>
							<h2><a href="<?php the_permalink(); ?>"><?php the_field('film_title'); ?></a></h2>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
							<p><span style="font-weight:bold">Release Date:  </span><?php the_field('film_year'); ?>.<br></p>
							<p><span style="font-weight:bold">Premise:  </span><?php echo excerpt(35); ?></p>
						</li>
					<?php endwhile; endif; ?>
					<?php wp_reset_postdata(); ?>
					<?php wp_reset_query(); ?>
				</ul>  <!-- .recentmovie -->
			</article> <!-- recentreview -->
		</div>
	</section>  <!-- .layout -->
</div>  <!-- .upcominglist -->

<?php get_footer(); ?>