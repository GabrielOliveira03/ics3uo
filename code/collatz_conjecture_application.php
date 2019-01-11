<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gabriel Oliveira: ICS3UO</title>
	<meta name="description" content="Gabriel Oliveira's webpage for the ICS3UO course.">
	<meta name="author" content="Gabriel Oliveira">
	<link rel="shortcut icon" href="images/logo.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/gabriels_stylesheet.css" type="text/css">
</head>
<body>
	<?php
		$number = $_POST['number'];
		$error_message = "";

		if ($_POST['submit']) {
			if (empty($number) || $number <= 0) {
				$error_message .= "<p>Number must be a whole number over zero.</p>";
			}
		}
	?>

	<nav>
		<a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>

	<div id="container">

		<header id="page-header">
	  	<h1>Collatz Conjecture</h1>
		</header>

		<h2>Background Information</h2>

		<p class="lead">The Collatz conjecture is a conjecture in mathematics that concerns a sequence defined as follows: start with any positive integer n. Then each term is obtained from the previous term as follows: if the previous term is even, the next term is one half the previous term. If the previous term is odd, the next term is 3 times the previous term plus 1. The conjecture is that no matter what value of n, the sequence will always reach 1.
		</p>

		<hr>

		<form name="form" action="collatz_conjecture_application.php" method="post">
			<div class="horizontal-controls">
	  		<label for="number">Initial Number:</label>
				<input id="number" type="text" value="<?= $number ?>" name="number">
			</div>

			<div class="form-buttons">
	  		<input type="submit" name="submit" class="submit-btn btn btn-pill" value="Run Calculation">
			</div>
		</form>

		<? if ($_POST['submit']) {
				if ($error_message) { ?>
					<div class="alert alert-danger">
						<?= $error_message  ?>
					</div>
			<? } else { ?>
				<div class="output-info">
					<p>
				<?
					echo $number;
					do {
						if ($number % 2 == 0) {
							$number = $number / 2;
						} else {
							$number = ($number * 3) + 1;
						}
					echo " &#8594; " . $number;
				} while ($number != 1); ?>
					</p>
				</div>
			<? }
		}?>
	</div>
</body>
</html>
