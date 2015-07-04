<?php
/**
 * The template for displaying Search Results pages.
 *
 * 
 */

get_header(); ?>

	<div class="upcominglist">
		<section class="layout">
			<div class="primary">
				<div class="comingup">
					<h1>Search Results for: "<?php the_search_query(); ?>"</h1>
					<ul>
					<?php if (have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
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
									<p><span style="font-weight:bold"><?php the_field('film_rating'); ?>  Stars! </span><?php echo '(out of Ten)' ?></p><br>
									<p><span style="font-weight:bold">Premise:  </span><?php the_excerpt(); ?></p>
								</article>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
					<?php wp_reset_query(); ?>
					</ul> 
				</div> <!-- .comingup -->
			</div>  <!-- .primary -->
			
			<article class="soontotheatre">  <!-- Advertisement -->
				<ul class="comingsoon">
					<li class="ads">
						<a href="http://www.mediatemple.net#a_aid=54b2c50f156ff" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/money/media-temple-dark-long.png" alt="MediaTemple-social" class="ads"></a>				
					</li>  <!-- .ads -->
				</ul>  <!-- .comingsoon -->
			</article> <!-- .soontotheatre -->
		</section> <!-- .layout -->
	</div> <!-- .upcominglist -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
