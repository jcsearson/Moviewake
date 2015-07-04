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
									<?php $categories = get_the_category(); ?>
									<p class="genre"><span>Genre(s): </span>
							            <?php foreach($categories as $category) { ?>
									 	<?php echo $category->category_nicename . ', '; ?>
									<?php } ?>
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
		</section> <!-- .layout -->
	</div> <!-- .archives -->

<?php get_footer(); ?>