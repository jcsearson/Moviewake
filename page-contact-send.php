<?php

	/*
		Template Name: Contact-Send
	*/

?>

<?php 
	$day = date( 'l' );
	$time = date( 'h:i' );
	$hour = date( 'h' );
	$minute = date( 'i' );
?>

<?php get_header(); ?>

	<div class="contact-box">
		<span>
			<?php
				$first_name = $_POST[ 'first_name' ];
				$last_name = $_POST[ 'last_name' ];
				$email = $_POST[ 'email' ];
				$film = $_POST[ 'film' ];
				$message = $_POST[ 'message' ];

				$to = 'j.c.searson@gmail.com';
				$subject = 'New Submission - Contact Form - MovieWake';

				mail ($to, $subject, $message, "From: " . $first_name . ' ' . $last_name);
					
				$thanks = "Thank you for your message $first_name, I will be sure to get back to you as soon as possible!";
				$thanks .= "<br><br>";			
				echo $thanks;
			?>
		</span>

		<span class="signature">
			<?php

				echo "the MovieWake Team<br>($day, $time)";
			?>
		</span>  <!-- .signature -->
	</div>  <!-- .contact-box -->

<?php get_footer(); ?>