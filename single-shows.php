<?php

	/*
		Template Name: Single-shows
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
						<p><span style="font-weight:bold">Release Date:  </span><?php the_field('show_year'); ?>.</p>
						<!-- GENRE QUERY : ALL GENRES THAT FILM MATCHES -->
						<?php $categories = get_the_category(); ?>
						<p class="genre"><span>Genre(s): </span>
						<?php foreach($categories as $category) { ?>
							<?php echo $category->category_nicename . ', '; ?>
						<?php } ?>
						</p>
						<!-- END OF GENRE QUERY -->
						<p><span style="font-weight:bold">Show Premise:  </span><?php the_field('show_premise'); ?></p>
					</div>  <!-- .film-body -->
					<div class="preview">
						<?php the_field('show_preview'); ?>
					</div>  <!-- .preview -->
					<div class="review">
						<h3>Rating:</h3>
						<p><?php the_field('show_rating'); ?> <?php echo ' Stars! (out of Ten)' ?></p>
					</div>  <!-- .review -->
				</section> <!-- singlewrap -->
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
			<?php wp_reset_query(); ?>


			</div> <!-- singlefilm -->
		</div>  <!-- .primary -->

		<div class="secondary">
			<article class="recentreview">
				<h1>Recent Shows:</h1>
				<ul class="recentmovie recent-news">
				<?php $shows = new WP_Query(array(  //makes WP_query object and stores in variable  $films
						'post_type' => 'shows',  //tells WP that we want posts that are from the custom post type 'film'z
						'orderby' => 'rand',
						'posts_per_page' => '2'
					)); ?>
				<?php if ($shows->have_posts()) : while($shows->have_posts()) : $shows->the_post(); ?>
					<li>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
						<p><span style="font-weight:bold">Release Date:  </span><?php the_field('show_year'); ?>.</p>
						<p><span style="font-weight:bold;display:inline;">Premise:  </span><?php echo excerpt(35); ?></p>
					</li>
				<?php endwhile; endif; ?>
				</ul>  <!-- .recentmovie -->
			</article> <!-- .recentreview -->

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
		</div>
	</section>  <!-- .layout -->
</div>  <!-- .upcominglist -->

<?php get_footer(); ?>