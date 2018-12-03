<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gabriel Oliveira: ICS3UO</title>

	<meta name="description" content="Gabriel Oliveira's webpage for the ICS3UO course.">
	<meta name="author" content="Gabriel Oliveira">
	<link rel="shortcut icon" href="images/logo.ico">
	<!--link rel="stylesheet" href="styles.css"-->
	<style>
	html, body {
		height: 100%;
		margin: 0;
		padding: 0;
		width: 100%;
	}

	body {
		font-family: "Futura";
		background-color: #f9fbfb;
	}

	hr {
		display: block;
		height: 1px;
		border: 0;
		border-top: 1px solid #4287f4;
		margin: 1em 0;
		padding: 0;
	}

	#container {
		display: block;
		margin: 0 auto;
		padding: 15px;
		width: 960px;
		background-color: #fff;
	}

	#page_header {
		width: 100%;
	}

	#page_header h1 {
		padding: 0;
		margin: 0 0 1em 0;
		text-align: center;
		color: #4287f4;
		border-bottom: 1px solid #4287f4;
	}

	#form {
		width: 50%;
	}

	.form-row {
		padding-bottom: 10px;
		padding-right: 30px;
		position: relative;
	}

	.label {
		display: inline-block;
		font-size: 18px;
		line-height: 22px;
		padding: 0;
		margin: 5px;
		width: 100%;
		color: #4287f4;
	}

	.input-holder {
		position: relative;
	}

	.input-text {
		width: 40%;
		border: solid 1px #888;
		box-shadow: 0 0 8px rgba(0, 153, 204, .0);
		font-size: 18px;
		line-height: 32px;
		margin: 5px 0;
		padding: 3px 10px;
		-webkit-transition: box-shadow .3s linear;
		transition: box-shadow .3s linear;
	}

	.error {
		display: block;
		vertical-align: middle;
		color: #ff8532;
	}

	.required-info {
		text-align: center;
		width: 40%;
	}

	.required-info span {
		color: #ff8532;
	}

	.btn {
		text-decoration:none;
		color:#ffffff;
		font-size:12px;
		font-weight:bold;
		padding:0 15px;
		line-height:32px;
		height: auto;
		display:inline-block;
		text-align:center;
		background-color:#ff8532;
		width: auto;
	}

	.btn:hover {
		background-color: #ff9f5d;
		cursor: pointer;
	}

	.btn:active {
		background-color: #eee;
	}

	#stats {
		margin: 1em 0;
		width: 50%;
		padding: 0;
		text-align: center;
	}

	.tile {
		display: inline-block;
		margin: 0 15px;
		width: 100px;
		text-align: center;
		color: #fff;
		border: 1px solid #000;
	}

	.tile-label {
		display: block;
		background-color: #2e5da9;
		padding: 15px;
	}

	.tile-content {
		display: block;
		background-color: #7397d0;
		padding: 15px;
		font-size: 2em;
	}

	.form-button {
		text-align: center;
	}

	.btn.pill{
		-webkit-border-radius: 16px;
		-moz-border-radius: 16px;
		border-radius: 16px;
	}

	.submit-btn {
		background: rgba(1, 119, 104, 0);
		border: 3px solid rgba(255, 133, 50, 1);
		border-radius: 8px;
		color: rgba(255, 133, 50, 1);
		cursor: pointer;
		font-size: 20px;
		line-height: 30px;
		outline: 0;
		-webkit-transition: background .2s linear, color .2s linear;
		transition: background .2s linear, color .2s linear;
	}

	.submit-btn:hover {
		background: rgba(255, 133, 50, 1);
		color: rgba(255, 255, 255, 1);
	}

	.success-message {
		color: #4287f4;
	}

	#dice-guess label {
		padding-right: 1em;
		padding-left: 0.4em;
	}

	fieldset {
		text-align: center;
	}

	fieldset, p {
		margin: 0 0 20px 0;
	}

	p, li {
		line-height: 20px;
	}

	h2, h3 {
		color: #4287f4;
		border-bottom: 1px solid #4287f4;
	}

	.activities-wrapper {
		display: flex;
	}

	.activity-section {
		flex: 1;
		width: 30%;
		margin: 0 0.2em;
	}

	.activity-section ul {
		list-style: none;
		font-size: 15px;
		padding: 0;
		margin-bottom: 4em;
		height: 100%;
		text-align: center;
	}

	.activity-section ul li a {
		height: 3em;
		display: block;
		padding: .4em 2em;
		margin: .5em 0;
		background: #4287f4;
		color: white;
		text-decoration: none;
		box-shadow:inset 0.5em 0 #ff8532;
		-webkit-transition: box-shadow 1s; /* For Safari 3.1 to 6.0 */
		-webkit-transition: background-color 100ms linear;
    -ms-transition: background-color 100ms linear;
    transition: background-color 100ms linear;
	}

	.activity-section ul li a:hover{
		background-color: #ff8532;
	}
	</style>
</head>
<body>
	<!-- main content -->
	<div id="container">
		<header id="page_header">
			<h1>Gabriel Oliveira: ICS3UO</h1>
		</header>

		<p>Welcome to my website. This website was made for the computer studies course "ICS3UO". In this website, you will see many activities that I have done and will be doing throughout this course. In the activities section, there are links to all the activities I have done, which is constantly being updated. Thank you for visiting my website.</p>

		<div class="activities">
			<h2>Activities</h2>

			<div class="activities-wrapper">
				<div class="activity-section">
					<h3>Design Activities</h3>
					<ul>
						<li><a href="basics/">BASICS (First Activity)</a></li>
						<li><a href="activity-1-1.php">Activity 1.1</a></li>
						<li><a href="activity-1-2.php">Activity 1.2: Images</a></li>
						<li><a href="activity-1-3.php">Activity 1.3: Fonts and Styling</a></li>
						<li><a href="activity-1-4.php">Activity 1.4: Tables</a></li>
						<li><a href="activity-1-5.php">Activity 1.5: CSS Tips and Tricks</a></li>
						<li><a href="activity-1-6.php">Activity 1.6: Animating</a></li>
						<li><a href="activity-1-7.php">Activity 1.7: Embedding Media</a></li>
						<li><a href="putting-it-all-together.php">Activity 1.8: Putting it All Together</a></li>
						<li><a href="division-tags-and-css-practice.php">Division Tags</a></li>
						<li><a href="activity-1-9.php">Activity 1.9: Forms and Input</a></li>
						<li><a href="activity-1-9b.php">Activity 1.9b: More Forms and Input</a></li>
					</ul>
				</div>

				<div class="activity-section">
					<h3>PHP - Basics</h3>
					<ul>
						<li><a href="introduction-to-php.php">Activity 2.0: Introduction to PHP</a></li>
						<li><a href="activity-2-1.php">Activity 2.1: PHP Basics: Syntax</a></li>
						<li><a href="php-variables-lesson.php">PHP Variables 1</a></li>
						<li><a href="php-variables-lesson-2.php">PHP Variables 2</a></li>
						<li><a href="activity-2-2.php">Activity 2.2: PHP Input and Math</a></li>
						<li><a href="activity-2-2b.php">Activity 2.2b: Working with Variables: Parsing URLs</a></li>
						<li><a href="conditional-statements-lesson-1.php">Conditional Statements 1</a></li>
						<li><a href="conditional-statements-practice.php">Conditional Statements 2</a></li>
						<li><a href="activity-2-3.php">Activity 2.3: Conditional Statements 3</a></li>
						<li><a href="activity-2-3b.php">Activity 2.3b: Conditional Statements 4</a></li>
						<li><a href="pamishan-creatures.php">Activity 2.3c: Dichotomous Key</a></li>
						<li><a href="activity-2-4.php">Activity 2.4: Basic Calculator</a></li>
						<li><a href="crazy-cats.php">Activity 2.4b: Crazy Cats</a></li>
						<li><a href="contact-form.php">Activity 2.4c: Contact Form</a></li>
					</ul>
				</div>
				<div class="activity-section">
					<h3>PHP - Advanced</h3>
					<ul>
						<li><a href="playing-with-sessions.php">PHP Sessions Tutorial</a></li>
						<li><a href="activity-dice-game.php">Activity 2.4d: Dice Game</a></li>
						<li><a href="activity-2-5a.php">Activity 2.5a: While Loops</a></li>
						<li><a href="activity-2-5b.php">Activity 2.5b: For Loops</a></li>
						<li><a href="activity-2-5c.php">Activity 2.5c: Nested For Loops</a></li>
						<li><a href="activity-2-5d.php">Activity 2.5d: Do While Loops</a></li>
						<li><a href="activity-2-5e.php">Activity 2.5e: Do While Loops 2</a></li>
						<li><a href="collatz_conjecture_application.php">Collatz Conjecture</a></li>
						<li><a href="activity-2-6b-ice-cream-cone.php">Activity 2.6b: Volume of an Ice Cream Cone</a></li>
						<li><a href="activity-2-6c-terminal-velocity.php">Activity 2.6c: Terminal Velocity</a></li>
						<li><a href="activity-2-6d-bmi.php">Activity 2.6d: Body Mass Index</a></li>
						<li><a href="activity-2-7-arrays-a.php">Activity 2.7a: Numeric Arrays</a></li>
						<li><a href="activity-2-7-arrays-b.php">Activity 2.7b: Associative Arrays</a></li>
						<li><a href="activity-2-7-super-heros.php">Activity 2.7c: Multidimensional Arrays</a></li>
					</ul>
				</div>

			</div>
		</div>

	</div>
	<!-- /main content -->

	<!-- load jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
