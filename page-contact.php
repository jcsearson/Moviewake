<?php

	/*
		Template Name: Contact
	*/

?>

<?php get_header(); ?>

	<div class="container">
		<form id="form1" name="form1" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="contact-send">

			<header id="header" class="info">
				<h2>Contact Form:</h2>
			</header>

			<ul>

				<li id="foli1" class="notranslate">
					<label class="desc" id="title1" for="Field1">
						Name
					</label></ br>
					<span>
						<input
							id="Field1"
							name="first_name"
							type="text"
							class="field text fn"
							value=""
							size="8"
							tabindex="1"       />
						<label for="Field1">( First )</label>
					</span>
					<span>
						<input
							id="Field2"
							name="last_name"
							type="text"
							class="field text ln"
							value=""
							size="14"
							tabindex="2" />
						<label for="Field2">(Last)</label>
					</span>
				</li> <!-- #foli1 -->
				<li id="foli3" class="notranslate">
					<label class="desc" id="title3" for="Field3">
						Email
					</label>
					<div>
						<input
							id="Field3"
							name="email"
							type="email"
							spellcheck="false"
							class="field text medium"
							value=""
							maxlength="255"
							tabindex="3"       />
					</div>
				</li> <!-- #foli3 -->
				<li id="foli4" class="notranslate">
					<label class="desc" id="title4" for="Field4">
						Message:
					</label>
					<div>
						<textarea
							id="Field4"
							name="message"
							class="field textarea small"
							spellcheck="true"
							rows="10" cols="50"
							tabindex="4"
							onkeyup=""
						       ></textarea>
					</div>
				</li>  <!-- #foli5 -->
				<li class="buttons">
					<div>
					            <input
					            	id="saveForm"
					            	name="saveForm"
					            	class="btTxt submit"
					            	type="submit"
					            	value="Submit"/>
					</div>
				</li> <!-- .buttons -->
			</ul>
		</form> <!-- #form1 -->
	</div> <!-- .container -->

<?php get_footer(); ?>