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
		$p_o = $_POST['p_o'];
		$r = $_POST['r'];
		$t_1 = $_POST['t_1'];
		$t_2 = $_POST['t_2'];
		$error_message = "";

		if ($_POST['submit']) {
			if (empty($p_o) || empty($r) || empty($t_1) || empty($t_2)) {
				$error_message .= "<p>All fields are mandatory!</p>";
			} else if ($t_1 >= $t_2) {
				$error_message .= "<p>Starting year must be before ending year!</p>";
			} else {
				$rPercent = ($_POST['r'] / 100);
			}
		}
	?>

	<nav>
  	<a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i>
		</a>
	</nav>

  <div id="container">
	  <header id="page-header">
	    <h1>Population Growth Simulator</h1>
	  </header>

  	<h2>Background Information</h2>

  	<p class="lead">
			This is a script that uses a do while loop to automatically output the estimated population for each year. Simply type in the initial population, the rate of growth, and the starting and ending years. The script will show you the approximate population for each year. How does it do this? It uses a formula used to calculate population growth.
		</p>

		<div class="image-centered">
  		<img class="center" src="http://www.coolmath.com/sites/cmat/files/images/06-exponentials-01.gif" alt="formula" title="Formula">
		</div>

  	<p class="lead">
			This shows the initial population, p-not, being multiplied by Euler's number, e. e is the base for the exponent tr, which is the time (in years) multiplied by the rate of growth. All together, this will calculate the approximate population in the ending year.
		</p>

		<hr>

	  <form id="form" name="form" action="activity-2-5e.php" method="post">
			<div class="horizontal-controls">
	    	<label for="p_o">Initial Population:</label>
				<input id="p_o" type="text" name="p_o" value="<?= $p_o ?>">

				<label for="r">Rate of Growth (%):</label>
				<input id="r" type="text" name="r" value="<?= $r ?>">

	    	<label for="t_1">Starting Year:</label>
				<input id = "t_1" type="text" name="t_1" value="<?= $t_1 ?>">

	    	<label for="t_2">Ending Year:</label>
				<input id="t_2" type="text" name="t_2" value="<?= $t_2 ?>">
			</div>

			<div class="form-buttons">
	    	<input type="submit" name="submit" value="Show the Growth" class="submit-btn btn btn-pill">
			</div>
	  </form>

		<? if ($_POST['submit']) {
				if ($error_message) { ?>
					<div class="alert alert-danger">
						<?= $error_message  ?>
					</div>
			<? } else {
				$t = $t_2-$t_1;
	      $year = $t_1;
	      $time = 0;
		 	?>
			<div class="output-info">
				<table class="table">
					<thead>
						<tr>
							<th>Year</th>
							<th>Population</th>
						</tr>
					</thead>
					<tbody>
			<?
				do {
					$p_f = $p_o * (exp($time * $rPercent)); ?>
					<tr>
						<td><?= $year ?></td>
						<td><?= round($p_f) ?></td>
					</tr>
				<?
					$time++;
					$year++;
				} while ($time <= $t )?>
			<? } ?>
				</tbody>
			</table>
		</div>
		<?} ?>
  </div>
</body>
</html>
