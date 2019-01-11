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
		$start = $_POST['start'];
		$end = $_POST['end'];
		$error_message = "";

		$planetData['Mercury'] = [3.76, "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Mercury_in_color_-_Prockter07-edit1.jpg/1200px-Mercury_in_color_-_Prockter07-edit1.jpg" ];
		$planetData['Venus'] = [9.04, "https://3c1703fe8d.site.internapcdn.net/newman/csz/news/800/2014/whyisvenusso.jpg"];
		$planetData['Earth'] = [9.8, "https://3c1703fe8d.site.internapcdn.net/newman/gfx/news/hires/2018/earthsoxygen.jpg"];
		$planetData['Mars'] = [3.77, "https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/OSIRIS_Mars_true_color.jpg/1200px-OSIRIS_Mars_true_color.jpg"];
		$planetData['Jupiter'] = [23.6, "http://cdn.sci-news.com/images/enlarge3/image_4461e-Jupiter.jpg"];
		$planetData['Saturn'] = [10.06, "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Saturn_during_Equinox.jpg/220px-Saturn_during_Equinox.jpg"];
		$planetData['Uranus'] = [8.87, "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Uranus2.jpg/220px-Uranus2.jpg"];
		$planetData['Neptune'] = [11.23, "https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Neptune_Full.jpg/220px-Neptune_Full.jpg"];

		if ($_POST['submit']) {
			if (empty($start) || empty($end)) {
				$error_message .= "<p>All fields are mandatory!</p>";
			}

			if ($start >= $end) {
				$error_message .= "<p>Starting acceleration must be smaller than ending acceleration</p>";
			}
		}
	?>

	<nav>
  	<a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
	</nav>

	<div id="container">
	  <header id="page-header">
	    <h1>Acceleration of Planets (Associative Arrays)</h1>
	  </header>

	  <h2>Background Information</h2>

	  <p class="lead">
			An associative array is also known as a map or dictionary array.  It is an abstract data type composed of a collection of key/value pairs.
		</p>

	  <p class="lead">
			In this assignment, I have assigned the planets of the solar system to one array, each with a corresponding acceleration in m/s&#178;. You can type in a range of accelerations, from the starting acceleration to the ending acceleration, and the program uses a for each loop to only display the planets that have accelerations within the range that you input.
		</p>

		<hr>

		<p class="mandatory-fields-note">
			<strong>Note:</strong> 1. All fields are mandatory; 2. Starting Acceleration must be smaller than Ending Acceleration.
		</p>

	  <form name="form" action="activity-2-7-arrays-b.php" method="post" id="form">
			<div class="horizontal-controls">
	    	<label for="start">Starting Acceleration (m/s<sup>2</sup>):</label>
				<input id="start" type="text" name="start" value="<?= $start ?>">

	    	<label for="end">Ending Acceleration (m/s<sup>2</sup>):</label>
				<input id="end" type="text" name="end" value="<?= $end ?>">
			</div>

			<div class="form-buttons">
	    	<input type="submit" name="submit" value="Show Planets" class="submit-btn btn btn-pill">
			</div>
	  </form>

		<? if ($_POST['submit']) {
				if ($error_message) { ?>
					<div class="alert alert-danger">
						<?= $error_message  ?>
					</div>
			<? } else { ?>
				<div class="planets clearfix">
					<p>
						Planets with an acceleration between <strong><?= $start ?></strong> m/s<sup>2</sup> and <strong><?= $end ?></strong> m/s<sup>2</sup>
					</p>

					<? foreach ($planetData as $planet => $data) {
			         if ($data[0] >= $start && $end >= $data[0]) { ?>
								 <div class="planet">
									 <p class="planet-name">
										 <?= $planet ?>
									 </p>
									 <p>
										 Acceleration:<br>
										 <strong><?= $data[0] ?> m/s<sup>2</sup></strong>
									 </p>

									 <div class="image-centered activity2-7-img">
										 <img src="<?= $data[1] ?>"  alt="<?= $planet ?>'s picture">
				 					</div>
								</div>
			    	 <? }
					} ?>
				</div>
			</div>
		 	<? }
		}?>

	</div>
</body>
</html>
