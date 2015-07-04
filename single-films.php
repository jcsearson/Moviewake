<?php

	/*
		Template Name: Single-films
	*/

?>
<!-- THIS IS THE SINGLE BLOG POST TEMPLATE FOR THE CUSTOM POST TYPE "FILMS" -->
<?php get_header(); ?>
<div class="upcominglist">
	<section class="layout">
		<div class="primary">
			<div class="singlefilm">
			<?php if ( have_posts() ) : ?>
			<?php while( have_posts() ) : the_post(); ?>
				<section class="singlewrap">
					<div class="film-body">
						<h2><?php the_title(); ?><?php echo ' ' ?></h2>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
						<p><span style="font-weight:bold">Release Date:  </span><?php the_field('film_year'); ?>.<br></p>
						<!-- GENRE QUERY : ALL GENRES THAT FILM MATCHES -->
						<?php $categories = get_the_category(); ?>
						<p class="genre"><span>Genre(s): </span>
						<?php foreach($categories as $category) { ?>
							<?php echo $category->category_nicename . ', '; ?>
						<?php } ?>
						</p>
						<!-- END OF GENRE QUERY -->
						<p><span style="font-weight:bold">Film Premise:  </span><?php the_field('film_description'); ?></p>
					</div>  <!-- .film-body -->
					<div class="preview">
						<?php the_field('film_preview'); ?>
					</div>  <!-- .preview -->
					<div class="review">
						<h3>Rating:</h3>
						<p><?php the_field('film_rating'); ?> <?php echo ' Stars! (out of Ten)' ?></p>
					</div>  <!-- .review -->
				</section> <!-- singlewrap -->
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
			<?php wp_reset_query(); ?>
			</div> <!-- singlefilm -->
		</div>  <!-- .primary -->

		<div class="secondary">
			<article class="recentreview">  <!-- Advertisement -->
			<h1>Random Picks: </h1>
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
							<p><span style="font-weight:bold">Release Date:  </span><?php the_field('film_year'); ?>.</p>
							<p><span style="font-weight:bold">Premise:  </span><?php echo excerpt(35); ?></p>
						</li>
					<?php endwhile; endif; ?>
					<?php wp_reset_postdata(); ?>
					<?php wp_reset_query(); ?>
				</ul>  <!-- .comingsoon -->
			</article> <!-- .soontotheatre -->
		</div>  <!-- .secondary -->
	</section>  <!-- .layout -->
</div>  <!-- .upcominglist -->

<?php get_footer(); ?>