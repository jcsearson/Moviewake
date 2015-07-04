<?php
	$startYear = 2015;
	$thisYear = date( 'Y' );

	if ($thisYear > $startYear) {
		$copyright = '$startYear . " - " . $thisYear';
	} else {
		$copyright = $startYear;
	}
?>


	<footer class="social-footer">
		<section class="layout">
			<div class="social">
				<ul>
					<li>
						<a href="http://twitter.com/moviewake" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/svg/twitter.svg" alt="icon for twitter" class="icon">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/moviewake" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/svg/facebook.svg" alt="icon for facebook" class="icon">
						</a>
					</li>
					<li>
						<a href="http://linkedin.com" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/svg/linkedin.svg" alt="icon for linkedin" class="icon">
						</a>
					</li>
					<li>
						<a href="http://searsino.com" target="_blank">
							<img src="<?php echo get_template_directory_uri();?>/images/svg/blog.svg" alt="icon for blog" class="icon">
						</a>
					</li>
				</ul>
			</div> <!-- socialmediaicons -->

			<div class="twitterfeed">
				<section class="feed">


					<h2><a class="twitter-timeline"
						data-dnt="true"
						href="https://twitter.com/moviewake"
						data-widget-id="553186825838538752"
						data-border-color="#F8F8F8"
						data-tweet-limit="1"
						data-chrome="nofooter"
						></a></h2>
				</section> <!-- .feed -->
			</div> <!-- .twitterfeed -->
		</section> <!-- .layout -->
	</footer>  <!-- .social-footer -->

	<footer class="slogan-footer">
		<div class="colophan">
			<p>MovieWake.com &copy; <?php echo $copyright; ?>.  This site is hosted by <a href="http://mediatemple.net/">MediaTemple</a> and built on <a href="https://wordpress.org/">Wordpress</a>.</p>
		</div>  <!-- .colophan -->
	</footer>  <!-- .slogan-footer -->

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   	<script src="<?php echo get_template_directory_uri();?>/js/global-min.js"></script>

	<!-- TYPEKIT -->
    	<script>
      	(function(d) {
        	var config = {
          	kitId: 'ajj6lkc',
          	scriptTimeout: 3000
       	},
        		h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      	})(document);
    	</script>
    	<!-- TWITTER -->
    	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    	</script>
    	<!-- GOOGLE ANALYTICS -->
   	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-58464430-1', 'auto');
	  ga('send', 'pageview');
	</script>

   	<?php wp_footer(); ?>

</body>
</html>
