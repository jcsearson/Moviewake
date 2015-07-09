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
						<?php
						$loopCount  = '0';
						$categories = get_the_category(); ?>
						<p class="genre"><span>Genre(s): </span>
				            <?php foreach($categories as $category) {
				            		$loopCount++;
						 	echo $category->category_nicename;
						 	if($loopCount < count($categories)) {
						 		echo ', ';
						 	} else {
						 		echo '';
						 	}
						} ?>
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

		<?php get_sidebar('single'); ?>

	</section>  <!-- .layout -->
</div>  <!-- .upcominglist -->

<?php get_footer(); ?>