<?php
/**
 * The Sidebar containing the home page side content.
 */
?>
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
			<p><span style="font-weight:bold;display:inline;">Premise:  </span><?php echo excerpt(32); ?></p>
		</li>
	<?php endwhile; endif; ?>
	</ul>  <!-- .recentmovie -->
</article> <!-- .recentreview -->


<article class="recentreview">
	<h1>Favorite Picks:</h1>
	<ul class="recentmovie">
	<?php
	//1051->Horses of God, 84->Prince Avalanche, 124->The Great Beauty , 60->Howl's Moving Castle
	$myarray = array('1051', '84', '124', '60');
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
			<p><span style="font-weight:bold">Premise:  </span><?php echo excerpt(32); ?></p>
		</li>
	<?php endwhile; endif; ?>
	<?php wp_reset_postdata(); ?>
	<?php wp_reset_query(); ?>
	</ul>
</article> <!-- recentreview -->