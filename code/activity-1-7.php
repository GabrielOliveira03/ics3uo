<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gabriel Oliveira: ICS3UO</title>

	<meta name="description" content="Embedding Youtube videos">
	<meta name="author" content="Gabriel Oliveira">
	<link rel="shortcut icon" href="images/logo.ico">

	<style>
		body {
			font-family: "Futura", Arial, sans-serif;
			background-color: #eee;
			margin: 0;
		}

		#main {
			max-width: 80%;
			margin: 0 auto 0 auto;
			padding: 2em 1em;
			background-color: #fff;
		}

		h1 {
			margin: 0;
			padding-bottom: 0.2em;
			border-bottom: 1px solid #000;
		}

		.iframeWrapper {
			position: relative;
			padding-bottom: 56.25%;
			width: 100%;
			height: 0;
		}

		.iframeWrapper iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}
	</style>
</head>
<body>
	<div id="main">
		<h1>Embedding Media in Html Pages</h1>

	  <h2>Embedding Youtube Videos</h2>

		<p>This is a Youtube video that is playable on this webpage:</p>

		<div class="iframeWrapper">
	  	<iframe width="966" height="604" src="https://www.youtube.com/embed/v5shAVOH210" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>

	  <h2>Embedding Google Maps</h2>
		<p>This is a working, interactive Google Map set to the location of "Chichen Itza".</p>
		<div class="iframeWrapper">
	  	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.63828589695!2d-88.56997128492188!3d20.684289904823967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5138c6e391c0e7%3A0x7c1ea0a168994d9a!2zQ2hpY2jDqW4gSXR6w6E!5e0!3m2!1sen!2sca!4v1536542709747" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</body>
</html>
