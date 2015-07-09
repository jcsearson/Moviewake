<?php

	/*
		Template Name: Drama
	*/

?>

<?php get_header(); ?>

<div class="archives">
	<section class="layout">
		<div class="primary">
			<article class="archive">
				<h1>Drama Films:</h1>
					<ul class="hits">
					<?php $films = new WP_Query(array(  //makes WP_query object and stores in variable  $films
						'post_type' => 'films',  //tells WP that we want posts that are from the custom post type 'film'
						'cat' => '2',  //  local:18 / live:2
						'posts_per_page' => '175'
					)); ?>

					<?php if ($films->have_posts()) : ?>
					<?php while($films->have_posts()) : $films->the_post(); ?>
						<li>
					                  <h2>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
								<p><span style="font-weight:bold">Release Date:  </span><?php the_field('film_year'); ?>.<br></p>
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
								<p><span style="font-weight:bold"><?php the_field('film_rating'); ?>  Stars! </span><?php echo '(out of Ten)' ?></p>
								<p><span style="font-weight:bold">Premise:  </span><?php the_excerpt(); ?></p>
						</li>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
					<?php wp_reset_query(); ?>
					</ul>  <!-- .hits -->
			</article> <!-- .alltimefav -->
		</div> <!-- .primary -->

		<?php get_sidebar('films'); ?>

	</section> <!-- .layout -->
</div> <!-- .archives -->

<?php get_footer(); ?>