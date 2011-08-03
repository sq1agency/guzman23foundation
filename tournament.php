<?php 
include('scripts/php/signup_form.php'); 

$head_scripts  = '<script src="/scripts/js/jquery.easing.1.3.js" type="text/javascript"></script>';
$head_scripts .= '	<script type="text/javascript">'."
		$(document).ready(function() {
		    $('.view_desc').click(function() {
			    var desc = $(this);
				desc.parent().next().next().next('.description').slideToggle('slow');
		    });
		});
	</script>"."\n";

$title = 'Putting For A Purpose Golf Tournament';

include('includes/header.php');
?>
	<div id="content">
		<div id="left-sm">
			<a id="putting_left" href="/documents/putting-for-a-purpose.pdf" target="_blank"></a>
			<div id="sponsors">
				<h1>Title Sponsor</h1>
				<p><img alt="Pinnacle Entertainment" src="/images/pinnacle-ent-sm.jpg"></p>
			</div>
		</div>
		<div id="sponsorships">
			<h1>Sponsorships</h1>
			<ul>
				<li>
					<p class="title"><b>Title Sponsorship</b> &ndash; <a href="javascript:void(0);" class="view_desc">View Description</a></p>
					<div class="purchase_form">
						<p class="nopurchase">Sold Out</p>
					</div>
					<p class="price">$25,000</p>
					<div class="description">
						<p>Recognition of title sponsorship on signage, page inside &amp; back outside cover advertisement on golf program, logo placement on photo opportunity banner</p>
						<p>VIP LOUNGE cocktail access for Sixteen (16) persons over the age of 21 years old</p>
						<p>Booth 10x10 table display: guest speaker</p>
						<p>Eight (8) Free auction bid cards to participate in the Silent & Live Auction</p>
						<p>Eight (8) person golf registration
							<br>Five (5) hole sponsorship company recognition signage on both courses
							<br>Title sponsorship signage recognition
							<br>Recognition during video presentation at awards dinner
							<br>Eight (8) VIP gift bags
							<br>Two (2) celebrity guests to play with the golf team
							<br>Breakfast, lunch & dinner for Eight (8) persons</p>
						<p>Ten (10) months of title sponsorship recognition company logo on foundation web site guaranteed three (3) months prior to golf event and three (3) months after the event</p>
						<p>One half a web site page advertisement of title sponsorship of company recognition on the foundation web site guaranteed three (3) months prior to golf event and three (3) months after the event for 10 months.</p>
						<p>Title Recognition of company logo or audio recognition on advertisements and press releases for media exposure throughout the ten (10) month period.</p>
					</div>
				</li>
				<li>
					<p class="title"><b>Platinum Sponsorship</b> &ndash; <a href="javascript:void(0);" class="view_desc">View Description</a></p>
					<div class="purchase_form">
						<p class="nopurchase">Contact to Purchase</p>
					</div>
					<p class="price">$15,000</p>
					<div class="description">
						<p>Recognition of platinum sponsorship on signage, full page inside front cover advertisement on golf program as the entertainment sponsor and/or the platinum sponsor, logo placement on photo opportunity banner</p>
						<p>VIP LOUNGE cocktail access for Eight (8) persons over the age of 21 years old</p>
						<p>Booth 10x10 table display</p>
						<p>Four (4) Free auction bid cards to participate in the Silent & Live Auction</p>
						<p>Four (4) person golf registration
							<br>Four (4) hole sponsorship company recognition signage on both courses
							<br>Platinum sponsorship signage recognition
							<br>Recognition during video presentation at awards dinner
							<br>Four (4) VIP gift bags
							<br>One (1) celebrity guest to play with the golf team
							<br>Breakfast, lunch & dinner for Four (4) persons</p>
						<p>Ten (10) months of platinum sponsorship recognition company logo on foundation web site guaranteed three (3) months prior to golf event and three (3) months after the event</p>
						<p>Platinum recognition of company logo or audio recognition on advertisements and press releases for media exposure throughout the ten (10) month period.</p>
					</div>
				</li>
				<li>
					<p class="title"><b>Gold Sponsorship</b> &ndash; <a href="javascript:void(0);" class="view_desc">View Description</a></p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="purchase_form" target="_blank">
						<input class="purchase" type="submit" name="submit" value="">
						<input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="WC2LRT8K532QY"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					<p class="price">$10,000</p>
					<div class="description">
						<p>Recognition of gold sponsorship on signage, half page advertisement on golf program as the lunch sponsor and/or the gold sponsor, logo placement on photo opportunity banner</p>
						<p>VIP LOUNGE cocktail access for Eight (8) persons over the age of 21 years old</p>
						<p>Booth 10x10 table display</p>
						<p>Four (4) Free auction bid cards to participate in the Silent & Live Auction</p>
						<p>Four (4) person golf registration
							<br>Three (3) hole sponsorship company recognition signage on both courses
							<br>Gold sponsorship signage recognition
							<br>Recognition during video presentation at awards dinner
							<br>Four (4) VIP gift bags
							<br>One (1) celebrity guest to play with the golf team
							<br>Breakfast, lunch & dinner for Four (4) persons</p>
						<p>Eight (8) months of platinum sponsorship recognition company logo on foundation web site guaranteed three (3) months prior to golf event and three (3) months after the event</p>
						<p>Gold recognition of company logo or audio recognition on advertisements and press releases for media exposure throughout the eight (8) month period.</p>
					</div>
				</li>
				<li>
					<p class="title"><b>Silver Sponsorship</b> &ndash; <a href="javascript:void(0);" class="view_desc">View Description</a></p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="purchase_form" target="_blank">
						<input class="purchase" type="submit" name="submit" value="">
						<input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="QN2AS79YE7HUJ"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					<p class="price">$5,000</p>
					<div class="description">
						<p>Recognition of silver sponsorship on signage, half page advertisement on golf program as the breakfast sponsor and/or the silver sponsor, logo placement on photo opportunity banner</p>
						<p>VIP LOUNGE cocktail access for four (4) persons over the age of 21 years old</p>
						<p>Booth 10x10 table display</p>
						<p>Four (4) Free auction bid cards to participate in the Silent & Live Auction</p>
						<p>Four (4) person golf registration
							<br>Two (2) hole sponsorship company recognition signage on both courses
							<br>Silver sponsorship signage recognition
							<br>Recognition during video presentation at awards dinner
							<br>Four (4) VIP gift bags
							<br>One (1) celebrity guest to play with the golf team
							<br>Breakfast, lunch & dinner for Four (4) persons</p>
						<p>Six (6) months of platinum sponsorship recognition company logo on foundation web site guaranteed three (3) months prior to golf event and three (3) months after the event</p>
					</div>
				</li>
				<li>
					<p class="title"><b>Bronze Sponsorship</b> &ndash; <a href="javascript:void(0);" class="view_desc">View Description</a></p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="purchase_form" target="_blank">
						<input class="purchase" type="submit" name="submit" value="">
						<input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="69988STXFGLTA"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					<p class="price">$2,500</p>
					<div class="description">
						<p>Recognition of bronze sponsorship on signage, three fourths (3/4) page advertisement on golf program as the hole sponsor and/or the bronze sponsor</p>
						<p>Four (4) person golf registration
							<br>One (1) hole sponsorship company recognition signage on one (1) course
							<br>Bronze sponsorship signage recognition
							<br>Recognition during video presentation at awards dinner
							<br>Four (4) VIP gift bags
							<br>Breakfast, lunch & dinner for Four (4) persons</p>
						<p>Three (3) months of bronze sponsorship recognition company logo on foundation web site guaranteed three (3) months prior to golf event</p>
					</div>
				</li>
			</ul>
			<h1>Golf Tournament Sponsorships</h1>
			<ul>
				<li>
					<p class="title"><b>Golf Cart Sponsorship</b> &ndash; <a href="javascript:void(0);" class="view_desc">View Description</a></p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="purchase_form" target="_blank">
						<input class="purchase" type="submit" name="submit" value="">
						<input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="5P9KG5LPP75RA"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					<p class="price">$500</p>
					<div class="description">
						<p>Company logo magnetic sign sponsoring the Jose Guzman 23 Foundation for nine (9) golf carts</p>
					</div>
				</li>
				<li>
					<p class="title"><b>Golf Player Individual</b> &ndash; <a href="javascript:void(0);" class="view_desc">View Description</a></p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="purchase_form" target="_blank">
						<input class="purchase" type="submit" name="submit" value="">
						<input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="2F7C83AYZ2UKN"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					<p class="price">$200</p>
					<div class="description">
						<p>One (1) person golf registration, Breakfast, Lunch, Dinner and participation in the tournament</p>
					</div>
				</li>
				<li>
					<p class="title"><b>Putting For A Purpose</b> &ndash; <a href="javascript:void(0);" class="view_desc">View Description</a></p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="purchase_form" target="_blank">
						<input class="purchase" type="submit" name="submit" value="">
						<input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="CHF4WY363U7PS"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					<p class="price">$100</p>
					<div class="description">
						<p>Along the golf course lane there is a Super Challenge to put the orange golf ball into &ldquo;the Secret Hole&rdquo; for additional prizes!</p>
					</div>
				</li>
				<li>
					<p class="title"><b>Love, Honor, Memory Lane</b> &ndash; <a href="javascript:void(0);" class="view_desc">View Description</a></p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="purchase_form" target="_blank">
						<input class="purchase" type="submit" name="submit" value="">
						<input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="Z7WE95HA38T6W"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					<p class="price">$50</p>
					<div class="description">
						<p>&ldquo;In Loving Memory&rdquo; or &ldquo;In Honor of&rdquo; signage along the golf course lane</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
<?php include('includes/footer.php'); ?>
