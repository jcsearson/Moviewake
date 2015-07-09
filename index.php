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
								<p><span style="font-weight:bold">Premise:  </span><?php echo excerpt(75); ?></p>
							</article>
						</li>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
				<?php wp_reset_query(); ?>
				</ul>
			</div> <!-- .comingup -->
		</div>  <!-- .primary -->

		<?php get_sidebar(); ?>

	</section> <!-- layout -->
</div> <!-- upcominglist -->

<?php get_footer(); ?>