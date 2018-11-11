<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Learning how to use Animate.css</title>

	<meta name="description" content="Learning how to use animate.css">
	<meta name="author" content="Gabriel Oliveira">
	<link rel="shortcut icon" href="images/logo.ico">
	<link rel="stylesheet" href="animate.css">

	<style>

		body {
			background: url("http://wallpapercave.com/wp/rlyvfvI.jpg");
			background-size: cover;
			font-family: "Futura";
		}

		.background-style {
			display: inline-block;
			padding: 20px;
			background: rgba(255,255,255,0.8);
			border-radius: 0.5em;
			font-size: 1.2em;
			color: #333333;
		}

		h1 {
			color: #19263b;
		}

		h2 {
			color: #999999;
		}

	</style>
</head>
<body>
	<!-- main content -->
	<h1 class="animated fadeIn">Using Animate.css</h1>

	<h2 class="animated bounceInRight">This title bounced in from the right</h2>

  <h3 class="animated wobble">This title wobbles</h3>

	<div>
		<p class="background-style animated rubberBand">This paragraph stretches like a rubber band</p>
	</div>

	<div>
  	<p class="background-style animated jello">This paragraph is like jello</p>
	</div>

	<div>
  	<p class="background-style animated lightSpeedIn">If you want all these crazy effects on your webpage, simply go to:</p>
	</div>

  <div class="background-style animated shake">
		<p>
			<a href="https://daneden.github.io/animate.css/" class="animated flip">This website, download the code and copy it onto a style sheet.</a>
		</p>
		<p>
			<a href="http://www.youtube.com/embed/WKpZwu9FKr4">Also, watch this video tutorial on how to use the effects.</a>
		</p>
	</div>

	<!-- end main content -->
	<!-- load jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
