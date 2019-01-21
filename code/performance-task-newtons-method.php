<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gabriel Oliveira: ICS3UO</title>
	<meta name="description" content="Gabriel Oliveira's webpage for the ICS3UO course.">
	<meta name="author" content="Gabriel Oliveira">
	<link rel="shortcut icon" href="images/logo.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/performance_tasks.css">
</head>

<body>
	<?php
		$initialnum = $_POST['number'];
		$number = $initialnum;
		$recursions = $_POST['recursions'];
		$error_message = "";

		if ($_POST['submit']) {
			if (empty($initialnum) || empty($recursions)) {
				$error_message .= "<p>All fields are mandatory!</p>";
			} else {
				if ($recursions > 20 || $recursions < 1) {
					$error_message .= "<p>Recursions must be between 1 and 20, inclusive.</p>";
				}

				if ($initialnum < 1) {
					$error_message .= "<p>Number must be higher than 0.</p>";
				}
			}
		}
	?>

  <nav>
    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>

  <div id="container">
    <header id="page-header">
      <h1>Newton's Method</h1>
    </header>

		<section id="newtons-method">

	    <p>
				Newton’s Method is a type of recursive algorithm. This algorithm can be used to quickly calculate the square root of a number to a high degree of accuracy without using a calculator.
			</p>

			<p>
				The recursion algorithm is (when trying to find the &#8730;a:):
			</p>

			<div class="clearfix">

				<img class="left" src="images/newtonmethod.png" alt="Newton Method Formula" />

			</div>

			<p>
				Where a is the initial number and Xn is the new number in each recursion.
			</p>

	    <p>
				So, if you were trying to find &#8730;91:
			</p>

			<div class="newton-method-flowchart">
				<div>
	    	<img src="images/flowchart.png" alt="Flowchart for estimate" />
				</div>
				<div>
				<p>
					If we were to keep a lot more decimal places we would quickly see that for each iteration after number 6 we would become more and more accurate. Putting the square root of 91 into your calculator is:  &#8730;91 = 9.53939.
				</p>

		    <p>
					What you can do is enter the number you want to find the square root of (using newtons method), and how many times you want the algorithm to recurse. After that, the estimated number is compared to the actual square root of the number you input.
				</p>
			</div>
			</div>

		</section>

		<hr>

		<p class="mandatory-fields-note">
			<strong>Note:</strong> 1. All fields are mandatory; 2. Number must be higher than 0; 3. Number of Recursions must be between 1 and 20 inclusive.
		</p>

    <form class="newtons-method-form" name="form" method="post" action="performance-task-newtons-method.php">
      <div class="form-row">
        <label class="label" for="numx">Number:<label>
        <input class="input-text" id="numx" type="number" value="<?= $initialnum ?>" name="number" placeholder="Number" />
      </div>
      <div class="form-row">
        <label class="label" for="recursionsx">Number of Recursions:<label>
        <input class="input-text" id="recursionsx" type="number" value="<?= $recursions ?>" name="recursions" placeholder="Number of Recursions" />
      </div>
      <div class="form-button center">
        <input class="submit-btn btn btn-pill" type="submit" name="submit" value="Calculate">
      </div>
		</form>

			<? if ($_POST['submit']) {
					if ($error_message) { ?>
						<div class="alert alert-danger">
							<?= $error_message  ?>
						</div>
				<? } else { ?>
					<div class="user-response">
						<p>
							Finding the square root of <strong><?= $initialnum ?></strong> using newton's method:
						</p>

						<? for ($i = 0; $i < $recursions; $i++ ) {
		          $number = round(0.5 * ($number + ($initialnum / $number)), 4); ?>
							<p>
		          	<?= $number ?>
							</p>
		        <? } ?>

						<p>
							Finding the actual square root of <strong><?= $initialnum ?></strong>:
						</p>

						<? $actual = round(sqrt($initialnum), 4) ?>

						<p>
							<?= $actual ?>
						</p>

					</div>
				<? }
			} ?>

  </div>
