<?php
/**
 * The Sidebar containing the secondary page(s) side content.
 */
?>
<div class="secondary">
	<article class="recentreview">  <!-- Advertisement -->
	<h1>Random Picks: </h1>
		<ul class="recentmovie">
			<?php
			$args = array(
				'post_type' => 'films',
				'posts_per_page' => '4',
				'orderby' => 'rand',
				'status' => 'published'
			);
			$second_loop = new WP_Query( $args );

			if ($second_loop->have_posts()) :  while($second_loop->have_posts()) : $second_loop->the_post(); ?>
				<li>
					<h2><a href="<?php the_permalink(); ?>"><?php the_field('film_title'); ?></a></h2>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
					<p><span style="font-weight:bold">Release Date:  </span><?php the_field('film_year'); ?>.</p>
					<p><span style="font-weight:bold">Premise:  </span><?php echo excerpt(32); ?></p>
				</li>
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
			<?php wp_reset_query(); ?>
		</ul>  <!-- .comingsoon -->
	</article> <!-- .soontotheatre -->
</div>  <!-- .secondary -->