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
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      width: 100%;
    }

    body {
      font-family: "Futura";
      background-color: #ffffff;
    }
		.home-button {
      background-color: #1e90ff;
      color: #ffffff;
      padding: 12px 16px;
      margin-left: 1em;
      font-size: 16px;
      cursor: pointer;
    }

    #container {
      display: block;
      margin: 0 auto;
      padding: 15px;
      width: 960px;
      background-color: #f9fbfb;
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
    #output {
      background-color: #f9fbfb;
      border: 1px solid black;
    }
		hr {
			padding: 0;
			margin: 0 0 1em 0;
			text-align: center;
			color: #4287f4;
			border-bottom: 0.5px solid #4287f4;
		}
		.image {
			display: block;
	margin-left: auto;
	margin-right: auto;
		}
    </style>
	</head>
  <body>
		<nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
		<div id="container">
		<header id="page_header">
    	<h1 style="text-align: center">Rock, Paper, Scissors, Lizard, Spock</h1>
		</header>
    <form style="text-align: center" name="form" action="activity-2-3b.php" method="post">
      <select name="number">
        <option value="">-Choose a number-</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <select name="color">
        <option value="">-Choose a color-</option>
        <option value="Red">Red</option>
        <option value="Blue">Blue</option>
        <option value="Green">Green</option>
      </select><br /><br />
      <input type="submit" name="submit" value="Submit" class="submit-btn btn btn-pill" />
    </form><br />
    <?php
      if ($_POST['submit']) {
        $number = $_POST['number'];
        $color = $_POST['color'];
        if ($number <= 5 && $color == Red) {
          echo "<h2 style='text-align: center'>You selected: $number and $color.</h2>";
          echo '<h2 style="text-align: center">Lizard</h2>';
          echo '<img class="image"src="https://www.wikihow.com/images/thumb/a/a9/Play-Rock-Paper-Scissors-Lizard-Spock-Step-2Bullet4.jpg/aid614957-v4-728px-Play-Rock-Paper-Scissors-Lizard-Spock-Step-2Bullet4.jpg" />';
        } else if ($number >= 5 && ($color == Red || $color == Blue)) {
          echo "<h2 style='text-align: center'>You selected: $number and $color.</h2>";
          echo '<h2 style="text-align: center">Spock</h2>';
          echo '<img class="image"src="https://www.wikihow.com/images/thumb/1/15/Play-Rock-Paper-Scissors-Lizard-Spock-Step-2Bullet5.jpg/aid614957-v4-728px-Play-Rock-Paper-Scissors-Lizard-Spock-Step-2Bullet5.jpg.webp" />';
        } else if ($number >= 3 && $number < 7 && $color == Green) {
          echo "<h2 style='text-align: center'>You selected: $number and $color.</h2>";
          echo '<h2 style="text-align: center">Rock</h2>';
          echo '<img class="image"src="https://www.wikihow.com/images/thumb/8/8d/Play-Rock-Paper-Scissors-Lizard-Spock-Step-2Bullet1.jpg/aid614957-v4-728px-Play-Rock-Paper-Scissors-Lizard-Spock-Step-2Bullet1.jpg.webp" />';
        } else if ($number >= 9 && $color == Green) {
          echo "<h2 style='text-align: center'>You selected: $number and $color.</h2>";
          echo '<h2 style="text-align: center">Paper</h2>';
          echo '<img class="image"src="https://www.wikihow.com/images/thumb/5/59/Play-Rock-Paper-Scissors-Lizard-Spock-Step-2Bullet3.jpg/aid614957-v4-728px-Play-Rock-Paper-Scissors-Lizard-Spock-Step-2Bullet3.jpg.webp" />';
        } else if ($number == 1 && $color == Blue) {
          echo "<h2 style='text-align: center'>You selected: $number and $color.</h2>";
          echo '<h2 style="text-align: center">Scissors</h2>';
          echo '<img class="image"src="https://www.wikihow.com/images/thumb/1/14/Play-Rock-Paper-Scissors-Lizard-Spock-Step-2Bullet2.jpg/aid614957-v4-728px-Play-Rock-Paper-Scissors-Lizard-Spock-Step-2Bullet2.jpg.webp" />';
        } else if ($number == "" || $color == "") {
          echo '<h2 style="text-align: center">Nothing specific to output...sorry try again.</h2>';
        }
      }
      ?>
		</div>
  </body>
</html>
