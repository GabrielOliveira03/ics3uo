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
      <h1>Newton's Method</h1>
    </header>
    <p>Newton’s Method is a type of recursive algorithm. This algorithm can be used to quickly calculate the square root of a number to a high degree of accuracy without using a calculator.</p>
    <p>The recursion algorithm is:  Where you are trying to find the &#8730;a:</p>
    <img src="images/newtonmethod.png" style="height: 150px; width: 500px" />
    <p>Where a is the initial number and Xn is the new number in each recursion.</p>
    <p>So, if you were trying to find &#8730;91,</p>
    <img src="images/flowchart.png" style="height: 400px; width: 300px;" />
    <p>If we were to keep a lot more decimal places we would quickly see that for each iteration after number 6 we would become more and more accurate. Putting the square root of 91 into your calculator is:  &#8730;91 = 9.53939.</p>
    <p>What you can do is enter the number you want to find the square root of (using newtons method), and how many times you want the algorithm to recurse. After that, the estimated number is compared to the actual square root of the number you input.</p>
    <form name="form" method="post" action="performance-task-newtons-method.php">
      <div class="form-row">
        <label class="label" for="numx">Number:<label>
        <input class="input-text" id="numx" type="number" value="" name="number" placeholder="Number" />
      </div>
      <div class="form-row">
        <label class="label" for="recursionsx">Number of Recursions:<label>
        <input class="input-text" id="recursionsx" type="number" value="" name="recursions" placeholder="Number of Recursions" />
      </div>
      <div class="form-button">
        <input class="submit-btn btn btn-pill" type="submit" name="submit" value="Calculate">
      </div>
      <?php
      if ($_POST['submit'] && ($_POST['recursions'] > 20 || $_POST['recursions'] < 1)) {
        echo '<div class="user-response">';
        echo '<p style="text-align: center;">There can only be a maximum of 20 recursions and a minimum of 1 recursion.</p>';
        echo '</div>';
      } else if ($_POST['submit'] && $_POST['number'] < 1) {
        echo '<div class="user-response">';
        echo '<p style="text-align: center;">The number must be over 0.</p>';
        echo '</div>';
      } else if ($_POST['submit'] && $_POST['recursions'] <= 20 && $_POST['number'] > 0 && $_POST['recursions'] > 0) {
        echo '<div class="user-response">';
        $initialnum = $_POST['number'];
        $number = $initialnum;
        $recursions = $_POST['recursions'];
        echo "<h4>Finding the square root of <strong>" . $initialnum . "</strong> using newton's method</h4>";
        echo $initialnum;
        for ($i = 0; $i < $recursions; $i++ ) {
          $number = round(0.5 * ($number + ($initialnum / $number)), 4);
          echo "<br />&#8595;<br />";
          echo $number;

        }

        $actual = round(sqrt($initialnum), 4);
        echo "<h4>Finding the actual square root of <strong>" . $initialnum . "</strong></h4>";
        echo $actual;
        echo "</div>";
      }
      ?>
  </div>
