<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Identify Browser, Browser Size and Screen Size | What device am I using?</title>
	<meta name="Description" content="Identify screen size, viewport, browser and device information instantly. *Click to COPY to clipboard!* and send to your web developer. 'What device am I using' is perfect for debugging problems remotely with clients.">
	<meta property="og:title" content="What device am I using?">
	<meta property="og:site_name" content="The Two Percent">
	<meta property="og:url" content="https://debug.thetwopercent.co.uk">
	<meta property="og:description" content="Identify screen size, viewport, browser and device information. *Click to COPY to clipboard!* What device am I using is perfect for debugging problems remotely with clients.">
	<meta property="og:type" content="article">
	<meta property="og:image" content="https://debug.thetwopercent.co.uk/what-device.png">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@thetwopct">
	<meta name="twitter:title" content="What device am I using?">
	<meta name="twitter:description" content="Instantly get screen size, viewport, browser and device information. *Click to COPY to clipboard!* What device am I using is perfect for debugging problems remotely with clients.">
	<meta name="twitter:image" content="https://debug.thetwopercent.co.uk/what-device.png">
	<meta name="twitter:image:alt" content="Never ask - What device are you using? - EVER again">

	<link rel='stylesheet' href='styles.css' type='text/css' media='all' />
	<link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css' type='text/css' media='all' />
</head>

<body>
	<?php

	// get user agent info.
	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	// set everything up.
	require_once 'identification.php';
	$user_os = getOS2($user_agent);
	$user_browser = getBrowser($user_agent);
	$user_browser_version = getBrowserVersion($user_agent);
	?>

	<div class='debug-container' id='debug'>
		<h2>Device Debug</h2>

		<ul class="debug-details">
			<li><strong>Screen Width: </strong><span class="screen-width"></span></li>
			<li><strong>Screen Height: </strong><span class="screen-height"></span></li>
			<li><strong>Viewport Width: </strong><span class="viewport-width"></span></li>
			<li><strong>Viewport Height: </strong><span class="viewport-height"></span></li>
			<?php

			if ($user_browser) {
				echo '<li><strong>Browser: </strong>' . $user_browser . '  ' . $user_browser_version . '</li>';
			}

			if ($user_os) {
				echo '<li><strong>Operating System: </strong>
	' . $user_os . '</li>';
			}

			echo '<li><strong>Raw Browser Info: ' . $user_agent . '</strong></li>';

			?>
		</ul>

	</div>

	<div class="fixed-header">
		Click the info to copy to your clipboard. <br class="hide">Paste the info when giving feedback on projects.
	</div>

	<div class="fixed-footer">
		<a href="https://www.thetwopercent.co.uk" target="_blank">Made by The Two Percent</a>&nbsp;-&nbsp;<a href="https://www.github.com/thetwopct" target="_blank">Github</a>
	</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="browser.js"></script>
<script defer src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</html>