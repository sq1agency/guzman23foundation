<?php 
include('scripts/php/config.php');
include('scripts/php/signup_form.php');
include('includes/header.php'); 
?>
	<div id="hero">
		<div id="mission">
			<div id="mission_text">
				<p>The mission is to provide financial assistance to those suffering from Alzheimer&rsquo;s disease, their families or loved ones when finances or basic insurance is unavailable. This is a personal journey to honor my Mother, Maria Mirabal Guzman, who died from this terrible disease.</p>
				<p>It&rsquo;s my desire to help families care for their loved ones in their own home as long as possible. A secondary goal is to help improve Alzheimer&rsquo;s facilities, making them a place where families feel their loved ones will be cared for with compassion.</p>
			</div>
		</div>
		<div id="putting"></div>
	</div>
	<div id="content">
		<div id="left">
			<h1>Foundation News</h1>
			<ul class="news">
				<li>
					<h2>4/13/2012<br><b>Guzman23Foundation 1st Annual Celebrity Poker Tournament</b></h2>
					<p>Please join us on April 13th 2012 for our first annual celebrity golf tournament to be held at the Hilton Hotel Southlake Town Square</p>
					<p class="button_wrap"><a href="/news/celebrity-poker-tournament.php" class="button">Read More</a></p>
				</li>
				<li class="alt">
					<h2>11/23/2011<br><b>Thanksgiving Volunteer Cook off to feed patients and families of local senior home</b></h2>
					<p>What a fabulous event we all witnessed on the day before Thanksgiving.</p>
					<p class="button_wrap"><a href="/news/thanksgiving-cook-off.php" class="button">Read More</a></p>
				</li>
			</ul>
			<ul class="news">
				<li>
					<h2>11/23/2011<br><b>A Special Thank you to our Golf Tournament players and Participants</b></h2>
					<p>Your generous support for the golf tournament made it a tremendous success.</p>
					<p class="button_wrap"><a href="/news/pfap-thank-you.php" class="button">Read More</a></p>
				</li>
				<li class="alt">
					<h2>10/15/2011<br><b>Star Telegram - For ex-Ranger Guzman, Charitable Work is Personal</b></h2>
					<p>Jose Guzman remembers those languid afternoons as if they happened only yesterday.</p>
					<p class="button_wrap"><a href="/news/star-telegram.php" class="button">Read More</a></p>
				</li>
			</ul>
			<ul class="news">
				<li>
					<h2>4/18/2011<br><b>Larry King with Maria Shriver</b></h2>
					<p>Watch the interview on CNN.</p>
					<p class="button_wrap"><a href="http://cnnpressroom.blogs.cnn.com/2011/04/18/cnn-presents-a-larry-king-special/" target="_blank" class="button">Read More</a></p>
				</li>
				<li class="alt"></li>
			</ul>
		</div>
		<div id="right">
			<h1>Request Information</h1>
			<p>Request more information about the Guzman23Foundation, volunteer or find out how to make a donation.	</p>
			<?php echo isset($message) ? $message:''; ?>
			<?php if(!$success): ?>
			<form action="/" method="post">
				<p>
					<input class="half left<?php echo isset($error_parts) && is_array($error_parts) && array_key_exists('fname', $error_parts) ? ' error':''; ?>" type="text" name="fname" id="fname" value="<?php echo isset($fname) ? $fname:'First Name'; ?>" placeholder="FIRST NAME" onblur="if(this.value=='') this.value = 'First Name';" onfocus="if(this.value=='First Name') this.value = '';">
					<input class="half right<?php echo isset($error_parts) && is_array($error_parts) && array_key_exists('lname', $error_parts) ? ' error':''; ?>" type="text" name="lname" id="lname" value="<?php echo isset($lname) ? $lname:'Last Name'; ?>" placeholder="LAST NAME" onblur="if(this.value=='') this.value = 'Last Name';" onfocus="if(this.value=='Last Name') this.value = '';">
					<input class="full <?php echo isset($error_parts) && is_array($error_parts) && array_key_exists('email', $error_parts) ? ' error':''; ?>" type="text" name="email" id="email" value="<?php echo isset($email) ? $email:'Email Address'; ?>" placeholder="EMAIL ADDRESS" onblur="if(this.value=='') this.value = 'Email Address';" onfocus="if(this.value=='Email Address') this.value = '';">
				</p>
				<p class="clear"><input id="get_info" type="submit" name="submit" value=""><input type="hidden" name="do" value="get_info"></p>
			</form>
			<?php endif; ?>
		</div>
		<div id="pfap_sponsors_logos">
			<h1>Putting For A Purpose Sponsors</h1>
			<div id="sponsors_logos">
				<p><a href="http://www.pnkinc.com/" target="_blank"><img alt="Pinnacle Entertainment" src="/images/pinnacle-ent.jpg" class="sponsor-logo"></a></p>
				<p>Pinnacle Entertainment, Inc., is a leading developer, owner and operator of casino gaming resorts. The company, based in Las Vegas, owns and operates casinos in Nevada, Louisiana, Indiana and Missouri.<br><a href="http://www.pnkinc.com" target="_blank">http://www.pnkinc.com</a></p>
			</div>
			<div id="ad_banners">
				<a href="https://www.ldlcasino.com/" class="ad_banner" target="_blank"><img src="/images/ads/lauberge.jpg"></a>
				<a href="http://www.pinnaclemychoice.com/" class="ad_banner" target="_blank"><img src="/images/ads/mychoice.jpg"></a>
			</div>
		</div>
		<div id="pfap_directors">
			<h1>Putting For A Purpose Directors</h1>
			<p>Chairman/Co-Founder:<br>Honorable Mike Farhat</p>
			<p>Co-Chairman:<br>Mr. James McIntire</p>
			<p>Board Member:<br>Mr. Jack Heller</p>
			<p>President/Founder:<br>Mr. Jose Guzman</p>
			<p>V. President:<br>Mrs. Carlene  Altom</p>
		</div>
	</div>
<?php include('includes/footer.php'); ?>
