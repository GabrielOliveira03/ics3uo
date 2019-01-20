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
	<?
	function isPrimeX($n){
		for ($x = 2; $x <= $n/2; $x++) {
				if ($n % $x == 0){
						return 0;
				}
		}
		return 1;
}
		function isPrime($number) {
			// 1 is not prime
			if ( $number == 1 ) {
					return false;
			}
			// 2 is the only even prime number
			if ( $number == 2 ) {
					return true;
			}
			// square root algorithm speeds up testing of bigger prime numbers
			$x = sqrt($number);
			$x = floor($x);
			for ( $i = 2 ; $i <= $x ; ++$i ) {
					if ( $number % $i == 0 ) {
							break;
					}
			}

			if( $x == $i-1 ) {
					return true;
			} else {
					return false;
			}
		}

		function isEven($n) {
			return $n % 2 == 0;
		}

		if ($_POST['submit']) {
			$p = $_POST['number'];
			$s = 12;
			$error_message = "";

			if ($p < 1) {
				$error_message .= "<p>The number must be greater than or equal to 1</p>";
			}
		}
	?>
  <nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
  <div id="container">
    <header id="page-header">
      <h1>Flowcharts</h1>
    </header>
		<p>This program uses an algorithm that will calculate a number based on the flowchart pictured below. The computer will go through all steps of the flowchart to calculate the number that you have input. In this case, the number you input will be "p", while "S" is already predetermined as 12.</p>
		<div class="center"><img src="images/CHARTFLOW.png" style="height: 400px; width: 400px;" /></div>
    <form name="form" method="post" action="s-p-flowchart-algorithm.php">
      <div class="form-row">
        <label class="label" for="numx">Number:<label>
        <input class="input-text" id="numx" type="number" value="<?= $p ?>" name="number" placeholder="Number" />
      </div>
      <div class="form-button">
        <input class="submit-btn btn btn-pill" type="submit" name="submit" value="Calculate">
      </div>
    </form>



    <?php

    if ($_POST['submit']) {
			echo "Initial p: $p, Initial s: $s<br />";

			do {

				do {

					if (isEven($p)) {
						$p = $p + 1;
					}

					if (!isPrimeX($p)) {
						$p = $p + 2;
					}

				} while (!isPrime($p));

				if ($p < $s) {
					$s = $s - $p;
					$p = $p + 2;
				} else {
					$s = $s - 1;

					if ($s == 0) {
						$stop = true;
					} else {
						$p = $p + 2;
					}

				}
				echo "&#8595;<br />";
				echo "(p: $p, s: $s)<br />";


			} while (!$stop);


		}

		// 	do {
		// 		echo "<p>p: $p\n";
		// 		echo "s: $s</p>";
		//
		// 		do {
		//
		// 			do {
		//
		// 				if (isEven($p)) {
		// 					$p += 1;
		// 				}
		//
		// 				if (!isPrime($p)) {
		// 						$p += 2;
		// 				}
		//
		// 			} while (!isPrime($p));
		//
		// 			if ($p < $s) {
		// 				$s -= $p;
		// 				$p += 2;
		// 			}
		//
		// 		} while ($p <= $s);
		//
		// 		$s -= 1;
		//
		// 		if ($s != 0) {
		// 			$p += 2;
		// 		}
		//
		// 	} while ($s > 0);
		//
		// 	echo "<p>p: $p\n";
		// 	echo "s: $s</p>";
		//}

     ?>

		 <?
 			if ($_POST['submit']) {
 				if ($error_message) { ?>
 					<div class="alert alert-danger">
 						<?= $error_message  ?>
 					</div>
 			<? } else { ?>
 				<div class="user-response">
 					<h4>
 						After completing the flowchart, P is now <?= $p ?>.
 					</h4>
 				</div>
 			<? }
 		}
 		?>
  </div>
</body>
