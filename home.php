<?php

	/*
		Template Name: Index
	*/
	/*This template is defaulted to if Home.php doesnt work.*/
?>

<?php get_header(); ?>

	<div class="upcominglist">
		<section class="layout">
			<div class="primary">
				<div class="comingup">
					<div class="main-title-bar">
						<h1>Just Added:</h1>
						<a href="/home" class="randomize"><h5>RANDOMIZE</h5></a>
					</div>
					<ul>
					<?php $films = new WP_Query(array(  //makes WP_query object and stores in variable  $films
						'post_type' => 'films',  //tells WP that we want posts that are from the custom post type 'film'z
						'orderby' => 'rand',
						'posts_per_page' => '10'
					)); ?>
					<?php if ($films->have_posts()) : ?>
						<?php while($films->have_posts()) : $films->the_post(); ?>
							<li>
								<article class="upcomingfilms">
									<h3>
										<a href="<?php the_permalink(); ?>"><?php the_field('film_title'); ?></a>
									</h3>
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
									<p><span style="font-weight:bold">Premise:  </span><?php the_excerpt(); ?></p>
								</article>
							</li>
					<?php endwhile; endif; ?>
					<?php wp_reset_postdata(); ?>
					<?php wp_reset_query(); ?>
					</ul>
				</div> <!-- .comingup -->
			</div>  <!-- .primary -->


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


			<article class="recentreview">
				<h1>Favorite Picks:</h1>
				<ul class="recentmovie">
				<?php
				//237->Leon: The Professional, 134->Knuckle, 124->The Great Beauty , 60->Howl's Moving Castle
				$myarray = array('237', '134', '124', '60');
				$args = array(
				   'post_type' => 'films',
				   'post__in'      => $myarray

				);
				$the_query = new WP_Query( $args );
				if ($the_query->have_posts()) :  while($the_query->have_posts()) : $the_query->the_post(); ?>
					<li>
						<h2><a href="<?php the_permalink(); ?>"><?php the_field('film_title'); ?></a></h2>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
						<p><span style="font-weight:bold">Release Date:  </span><?php the_field('film_year'); ?>.</p>
						<p><span style="font-weight:bold">Premise:  </span><?php echo excerpt(35); ?></p>
					</li>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
				<?php wp_reset_query(); ?>
				</ul>
			</article> <!-- recentreview -->
		</section> <!-- layout -->
	</div> <!-- upcominglist -->

<?php get_footer(); ?>