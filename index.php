<?php 
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
		<a id="putting" href="/tournament.php"></a>
	</div>
	<div id="content">
		<div id="left">
			<h1>Foundation News</h1>
			<ul id="news">
				<li>
					<h2>7/14/2011 &ndash; 6pm - 9pm <b>Website Launch Party</b></h2>
					<p><b>Location</b> Lucky Strike Lanes - Fort Worth<br>
						<a href="http://maps.google.com/maps?hl=en&q=2845+West+Seventh+Street,+Fort+Worth,+TX+76107&um=1&gl=us&resnum=1&ie=UTF-8&hq=&hnear=0x864e73e74e1d99cb:0x3fd47585cfd046e4,2845+W+7th+St,+Fort+Worth,+TX+76107&gl=us&daddr=2845%20W%207th%20St,%20Fort%20Worth,%20TX%2076107&ei=bZ0cTo3hCcTXgQfIvoz4CQ&sa=X&oi=geocode_result&ct=directions-to&resnum=1&ved=0CBoQwwUwAA" target="_blank">2845 West Seventh Street, Fort Worth, TX 76107</a>
					</p>
					<p><b>Attire</b> Summer Dressy Casual</p>
					<p><b>21 Yrs &amp; Older</b> Entrance only with state issued ID / Driver's License</p>
					<p><b>Tickets</b> $23.00 Donation for (1) one complimentary well drink ticket, photo opportunity, &amp; (1) one autographed item.</p>
					<p><b>Benefiting</b> Alzheimer&rsquo;s disease patients &amp; their families.</p>
					<p><em>If you would like to donate, sponsor, or volunteer for this event contact <a href="mailto:mc@guzman23foundation.org?subject=<?php echo rawurlencode('Website Launch Party'); ?>">mc@guzman23foundation.org</a></em></p>
				</li>
				<li class="alt">
					<h2>8/17/2011 <b>Wine and Dinner Fundraiser</b></h2>
					<p>Join us at Grady&rsquo;s Restaurant in Fort-Worth  and help raise funds for Alzheimer&rsquo;s research and relief funding.</p>
					<p>Grady&rsquo;s Restaurant<br>2443 Forest Park Blvd.<br>Fort Worth, TX 76110<br>817-922-9980</p>
				</li>
				<li class="alt">
					<h2>10/1/2011 <b>Alzheimer&rsquo;s Walk</b></h2>
					<p>Walk, jog or sprint 2.2 miles starting at the UTA-Maverick Activities Center–Outdoor Basketball/Volleyball Court (on the south side of the MAC.</p>
					<p>Call or Email Leslie Alvarez<br>(800) 272-3900 or (817) 336-4949 leslie.alvarez@alz.org</p>
				</li>
				<li class="alt">
					<h2>4/18/2011 <b>Larry King with Maria Shriver</b></h2>
					<p>Watch the interview at <a href="http://cnnpressroom.blogs.cnn.com/2011/04/18/cnn-presents-a-larry-king-special/" target="_blank">http://cnnpressroom.blogs.cnn.com/2011/04/18/cnn-presents-a-larry-king-special/</a></p>
				</li>
			</ul>
		</div>
		<div id="right">
			<h1>Request Information</h1>
			<p>Request more information about the Guzman23Foundation, volunteer or find out how to make a donation.	</p>
			<?php echo isset($message) ? $message:''; ?>
			<?php if(!$success): ?>
			<form action="/" method="post">
				<p>
					<input class="half left<?php echo array_key_exists('fname', $error_parts) ? ' error':''; ?>" type="text" name="fname" id="fname" value="<?php echo isset($fname) ? $fname:'First Name'; ?>" placeholder="First Name" onblur="if(this.value=='') this.value = 'First Name';" onfocus="if(this.value=='First Name') this.value = '';">
					<input class="half right<?php echo array_key_exists('lname', $error_parts) ? ' error':''; ?>" type="text" name="lname" id="lname" value="<?php echo isset($lname) ? $lname:'Last Name'; ?>" placeholder="Last Name" onblur="if(this.value=='') this.value = 'Last Name';" onfocus="if(this.value=='Last Name') this.value = '';">
					<input class="full <?php echo array_key_exists('email', $error_parts) ? ' error':''; ?>" type="text" name="email" id="email" value="<?php echo isset($email) ? $email:'Email Address'; ?>" placeholder="Email Address" onblur="if(this.value=='') this.value = 'Email Address';" onfocus="if(this.value=='Email Address') this.value = '';">
				</p>
				<p class="clear"><input id="get_info" type="submit" name="submit" value=""><input type="hidden" name="do" value="get_info"></p>
			</form>
			<?php endif; ?>
		</div>
	</div>
<?php include('includes/footer.php'); ?>
