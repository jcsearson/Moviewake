<?php

	/*
		Template Name: Shows
	*/

?>

<?php get_header(); ?>

<div class="archives">
	<section class="layout">
		<div class="primary">
			<article class="archive">
				<h1>TV Shows:</h1>
					<ul class="hits">
					<?php $shows = new WP_Query(array(  //makes WP_query object and stores in variable  $films
						'post_type' => 'shows',  //tells WP that we want posts that are from the custom post type 'shows'
						'posts_per_page' => '100'
					)); ?>
					<?php if ($shows->have_posts()) : while($shows->have_posts()) : $shows->the_post(); ?>
						<li>
					                  <h2>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
								<p><span style="font-weight:bold">Release Date:  </span><?php the_field('show_year'); ?>.<br></p>
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
								<p><span style="font-weight:bold"><?php the_field('show_rating'); ?>  Stars! </span><?php echo '(out of Ten)' ?></p>
								<p><span style="font-weight:bold">Premise:  </span><?php echo excerpt(175); ?></p>
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