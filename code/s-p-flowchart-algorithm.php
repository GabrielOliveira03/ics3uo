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
  <nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
  <div id="container">
    <header id="page-header">
      <h1>Flowcharts</h1>
    </header>
    <form name="form" method="post" action="s-p-flowchart-algorithm.php">
      <div class="form-row">
        <label class="label" for="numx">Number:<label>
        <input class="input-text" id="numx" type="number" value="" name="number" placeholder="Number" />
      </div>
      <div class="form-button">
        <input class="submit-btn btn btn-pill" type="submit" name="submit" value="Calculate">
      </div>
    </form>
    <?php
    if ($_POST['submit']) {
			function IsPrime($n) {
    for($x=2; $x<$n; $x++) {
      if($n % $x ==0) { return false;}
    }
    return true;
}

    $p = $_POST['number'];
    $s = 12;
		if($p % 2 == 0) {
        $p = $p + 1;
    } else if (isPrime($p) == true) {
      if ($p < 5) {
				$s = $s - $p;
				$p = $p + 2;
			} else {
				$s = $s - 1;
				if ($s == 0) {
					echo $p;
				} else {
					$p = $p + 2;
				}
			}
    } else {
			$p = $p + 2;
		}

  }
     ?>
  </div>
</body>
