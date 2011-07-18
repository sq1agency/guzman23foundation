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
	<title><?php echo isset($title) ? $title.' | Guzman23Foundation' : 'Guzman23Foundation'; ?></title>
	<link rel="stylesheet" href="/css/main.css" type="text/css" media="all" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
	<script src="/scripts/js/functions.js" type="text/javascript"></script>
	<?php echo isset($head_scripts) ? $head_scripts : ''; ?>
</head>
<body>
	<div id="header">
		<a id="logo" href="/"></a>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" id="donate_form">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="8CSHWSXLHFJRC">
			<input id="donate_button" type="submit" name="submit" value="">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
		<div id="socials">
			<a href="https://www.facebook.com/pages/Guzman-23-Foundation/127189344007062?sk=info" target="_blank" id="facebook" title="Facebook">&nbsp;</a>
			<a href="http://twitter.com/Guzman23ORG" target="_blank" id="twitter" title="Twitter">&nbsp;</a>
		</div>
		<p id="company_info">P.O. BOX 884 | Colleyville, TX 78034 <a href="mailto:info@guzman23foundation.org">info@guzman23foundation.org</a></p>
	</div>
