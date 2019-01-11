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
		$carSelected = $_POST['carSelected'];
		$error_message = "";

		if ($_POST['randomsubmit']) {
			$carSelected = rand(0, 7);
		}

    $trainCar[0] = ["guitar", "https://upload.wikimedia.org/wikipedia/commons/4/45/GuitareClassique5.png"];
    $trainCar[1] = ["pot", "https://www.snappychef.co.za/wp-content/uploads/2017/12/SSDS014-Snappy-Chef-14l-Deluxe-Stock-Pot.png"];
    $trainCar[2] = ["piano", "http://pluspng.com/img-png/piano-hd-png-piano-png-hd-png-image-522.png"];
    $trainCar[3] = ["television", "http://pluspng.com/img-png/television-png-television-png-tv-image-22253-1080.png"];
    $trainCar[4] = ["bed", "http://pngimg.com/uploads/bed/bed_PNG17382.png"];
    $trainCar[5] = ["skateboard", "http://pngimg.com/uploads/skateboard/skateboard_PNG11707.png"];
    $trainCar[6] = ["radio", "https://purepng.com/public/uploads/large/purepng.com-radioradioradio-stationtransceiverwirelessbroadcast-1701528368252zecsz.png"];
    $trainCar[7] = ["hockey stick", "http://pngimg.com/uploads/hockey/hockey_PNG104.png"];
	?>

	<nav>
  	<a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
	</nav>

<div id="container">
  <header id="page-header">
    <h1>Train Cars (Numeric Arrays)</h1>
  </header>

  <h2>Background Information</h2>

  <p class="lead">
		An array is a variable that can hold multiple values in one single variable.  It is similar to a spreadsheet column.  Arrays are very useful for storing lists of items.
	</p>

	<p class="lead">PHP has 3 types of variables. In this assignment, we will be using numeric arrays, which stores variables in a numeric index. There are 8 train cars, labeled from 0 to 7, that each contain an item. This assignment uses arrays to store all 8 items in 8 separate train cars in only one variable: the train.
	</p>

	<hr>

	<h3>Choose the Train Car</h3>

  <form name="form" action="activity-2-7-arrays-a.php" method="post">
		<div class="horizontal-controls">
			<label for="carSelected">Car:</label>
	    <select id="carSelected" name="carSelected">
	      <option name="0" <?= $carSelected == "0" ? "selected" : "" ?>>0</option>
	      <option name="1" <?= $carSelected == "1" ? "selected" : "" ?>>1</option>
	      <option name="2" <?= $carSelected == "2" ? "selected" : "" ?>>2</option>
	      <option name="3" <?= $carSelected == "3" ? "selected" : "" ?>>3</option>
	      <option name="4" <?= $carSelected == "4" ? "selected" : "" ?>>4</option>
	      <option name="5" <?= $carSelected == "5" ? "selected" : "" ?>>5</option>
	      <option name="6" <?= $carSelected == "6" ? "selected" : "" ?>>6</option>
	      <option name="7" <?= $carSelected == "7" ? "selected" : "" ?>>7</option>
	    </select>
		</div>

		<div class="form-buttons multiple-buttons clearfix">
    	<input type="submit" name="onesubmit" value="Show Selected Car" class="submit-btn btn btn-pill">
    	<input type="submit" name="allsubmit" value="Show All Cars" class="submit-btn btn btn-pill">
			<input type="submit" name="randomsubmit" value="Show a Random Car" class="submit-btn btn btn-pill">
		</div>

	</form>

			<? if ($_POST['onesubmit'] || $_POST['randomsubmit']) {
			?>
				<div class="output-info">
					<p>
						In train car <strong><?= $carSelected ?></strong> there is a <strong><?= $trainCar[$carSelected][0] ?></strong>.
					</p>

					<div class="image-centered">
						<img src="<?= $trainCar[$carSelected][1] ?>" class="activity2-7-img" />
					</div>
				</div>
			<? } ?>

			<? if ($_POST['allsubmit']) { ?>
				<h3>Train Contents</h3>
				<div class="train">
					<? foreach ($trainCar as $key => $value) { ?>
						<div class="train-car">
							<p>
								Car <?= $key ?>
							<br>
								<?= $value[0] ?>
							</p>

							<img src="<?= $value[1] ?>" class="activity2-7-img" />


						</div>
					<? } ?>
				</div>
			<? } ?>
		</div>
</body>
</html>
