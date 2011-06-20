<?php include('scripts/php/signup_form.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="keywords" content="Guzman23Foundation" />
	<meta name="description" content="The mission is to provide financial assistance to those suffering from Alzheimer&rsquo;s disease, their families or loved ones when finances or basic insurance is unavailable" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/ico" />
	<link rel="apple-touch-icon" href="/css/images/touch-icon-iphone.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/css/images/touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/css/images/touch-icon-iphone4.png" />
	<title>Guzman23Foundation</title>
	<link rel="stylesheet" href="/css/main.css" type="text/css" media="all" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
	<script src="/scripts/js/functions.js" type="text/javascript"></script>
</head>
<body>
	<div id="header">
		<a id="logo" href="/"></a>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="8CSHWSXLHFJRC">
			<input id="donate_button" type="submit" name="submit" value="">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
		<p id="company_info">P.O. BOX 884 | Colleyville, TX 78034 <a href="mailto:info@guzman23foundation.org">info@guzman23foundation.org</a></p>
	</div>
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
					<h2>10/1/2011 <b>Alzheimer&rsquo;s Walk</b></h2>
					<p>Walk, jog or sprint 2.2 miles starting at the UTA-Maverick Activities Center–Outdoor Basketball/Volleyball Court (on the south side of the MAC.</p>
					<p>Call or Email Leslie Alvarez<br>(800) 272-3900 or (817) 336-4949 leslie.alvarez@alz.org</p>
				</li>
				<li class="alt">
					<h2>7/20/2011 <b>Wine and Dinner Fundraiser</b></h2>
					<p>Join us at Grady&rsquo;s Restaurant in Fort-Worth  and help raise funds for Alzheimer&rsquo;s research and relief funding.</p>
					<p>Grady&rsquo;s Restaurant<br>2443 Forest Park Blvd.<br>Fort Worth, TX 76110<br>817-922-9980</p>
				</li>
				<li>
					<h2>6/24/2011 <b>Martinis at M-Lounge, Ft. Worth</b></h2>
					<p>Appetizers and awareness networking in Cow-Town. Make connections and share your stories.</p>
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
</body>
</html>
