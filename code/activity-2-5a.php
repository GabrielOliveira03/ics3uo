<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Gabriel Oliveira: ICS3UO</title>

		<meta name="description" content="Gabriel Oliveira's webpage for the ICS3UO course.">
		<meta name="author" content="Gabriel Oliveira">
		<link rel="shortcut icon" href="images/logo.ico">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

		body {
			min-height: 100%;
		}

		body {
			height: 100%;
			margin: 0;
			padding: 0;
			width: 100%;
			font-family: "Futura", Arial, sans-serif;
			background-color: #fff;
		}

		.home-button {
			position: absolute;
			top: 0;
			left: 1em;
			background-color: #1e90ff;
			color: #ffffff;
			padding: 12px 16px;
			font-size: 16px;
			cursor: pointer;
		}

		#container {
			position: relative;
		  display: block;
		  margin: 0 auto;
		  padding: 15px;
		  width: 960px;
		  background-color: #ccc;
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

		.form-row {
			padding-bottom: 10px;
			padding-right: 30px;
			position: relative;
		}

		#form label {
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

		.btn{
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
			width: 100px;
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

		form input[type="text"] {
		  margin: 5px 0;
		  padding: 3px 10px;
		  font-size: 1em;
			line-height: 1.6em;
		  color: #666;
		  border: none;
		  background-image: -webkit-gradient(linear, 0% 0%, 0% 12%, from(#999), to(#fff));
		  background-image: -moz-lieanr-gradient(0% 12%, 90deg, #fff, #999);
		  background-color: #fff;
		  -webkit-border-radius: 4px;
		  -moz-border-radius: 4px;
		  border-radius: 4px;
		}

		form input[type="text"]:focus {
		  -webkit-box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
		  -moz-box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
		  box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
		}


		p, li {
			line-height: 20px;
		}

		.mandatory-fields-note {
			font-style: italic;
			color: rgba(255, 133, 50, 1);
		}

		#output {
      background-color: #f9fbfb;
      border: 1px solid black;
    }

		.center {
		  text-align: center;
		}

		.alert {
		  position: relative;
		  padding: .75rem 1.25rem;
		  margin-bottom: 1rem;
		  border: 1px solid transparent;
		  border-radius: .25rem;
		}

		.alert-success {
			color: #155724;
			background-color: #d4edda;
			border-color: #c3e6cb;
		}

		.alert-danger {
		  color: #721c24;
		  background-color: #f8d7da;
		  border-color: #f5c6cb;
		}

		.alert-info {
			color: #0c5460;
			background-color: #d1ecf1;
			border-color: #bee5eb;
		}

		hr {
			height: 5px;
			border: 0px solid #4287f4;
			border-top-width: 1px;
		}

		.user-response {
		  width: 50%;
		  margin: 1em auto;
		  background-color: #444;
		  padding: 1.2em 1.4em 0.2em 1.4em;
		  color: #fff;
		  border-radius: .25em;
		  box-shadow: 0.2em 0.2em 0.2em #333;
		}

    </style>
	</head>
	<body>
		<?php
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$error_message = "";

			if ($_POST['submit']) {
				if (empty($num1) || empty($num2)) {
					$error_message .= "<p>Error! There must be a first and second number!</p>";
				} else if ($num1 >= 4 || $num2 <= 6) {
		    	$error_message .= "<p>Error! Number 1 must be lower than 4 and Number 2 must be higher than 6!</p>";
		  	}
			}
		?>

		<nav>
	    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
	  </nav>

		<div id="container">

			<header id="page_header">
	    	<h1>PHP While Loops</h1>
			</header>

			<h2>Background Information</h2>
	    <p>This is a while loop that prints out numbers. If statements are used to print special statements at numbers 3 and 7. Set the first and last numbers, and the script will print out all the numbers in between.</p>
			<p class="mandatory-fields-note"><strong>Note:</strong> Number 1 must be lower than 4 and Number 2 must be higher than 6!</p>
			<hr />

	    <form id="form" class="center" name="form" action="activity-2-5a.php" method="post">
				<div class="form-row">
	      	<label for="num1">First Number:</label>
					<input type="text" id="num1" value="<?= $num1 ?>" name="num1" />
				</div>

				<div class="form-row">
	      	<label for="num2">Second Number:</label>
					<input type="text" id="num2" value="<?= $num2 ?>" name="num2" />
				</div>

				<div class="form-row center">
	      	<input type="submit" name="submit" value="Submit" class="submit-btn btn btn-pill" />
				</div>
			</form>

			<? if ($_POST['submit']) {
				if ($error_message) { ?>
	      	<div class="alert alert-danger">
	        	<?= $error_message  ?>
	        </div>
			<? } else { ?>
				<div class="user-response">
					<? while ($num1 <= $num2) {
						if ($num1 == 3) { ?>
				      <p><?= $num1 ?> - Yay, this is number three!</p>
						<? }else if ($num1 == 7) { ?>
							<p><?= $num1 ?> - Lucky number seven!</p>
						<? } else { ?>
							<p><?= $num1 ?></p>
				<? } $num1++;
				} ?>
				</div>
			<? }
		}
		?>
	  </div>
  </body>
</html>
