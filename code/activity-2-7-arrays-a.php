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
		.home-button {
      background-color: #1e90ff;
      color: #ffffff;
      padding: 12px 16px;
      margin-left: 1em;
      font-size: 16px;
      cursor: pointer;
    }
    body {
      font-family: "Futura";
      background-color: #fff;
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
    </style>
	</head>
  <body>
		<nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
	<div id="container">
    <header id="page_header">
      <h1>Numeric Arrays</h1>
    </header>
    <h3>Background Information</h3>
    <p>An array is a variable that can hold multiple values in one single variable.  It is similar to a spreadsheet column.  Arrays are very useful for storing lists of items.</p>
		<p>PHP has 3 types of variables. In this assignment, we will be using numeric arrays, which stores variables in a numeric index. There are 8 train cars, labeled from 0 to 7, that each contain an item. This assignment uses arrays to store all 8 items in 8 separate train cars in only one variable: the train.</p><hr />
		<h4>Choose the Train Car:</h4>
    <form name="form" action="activity-2-7-arrays-a.php" method="post">
      <select name="caroftrain">
        <option name="0">0</option>
        <option name="1">1</option>
        <option name="2">2</option>
        <option name="3">3</option>
        <option name="4">4</option>
        <option name="5">5</option>
        <option name="6">6</option>
        <option name="7">7</option>
      </select><br /><br />
      <input type="submit" name="onesubmit" value="Show Selected Car" class="submit-btn btn btn-pill" /><br /><br />
      <input type="submit" name="allsubmit" value="Show All Cars" class="submit-btn btn btn-pill" /><br /><br />
			<input type="submit" name="randomsubmit" value="Show a Random Car" class="submit-btn btn btn-pill" /><br /><br />
    <?php
    if ($_POST['onesubmit']) {
			echo "<div id='output'>";
      $trainCar[0] = "guitar";
      $trainCar[1] = "pot";
      $trainCar[2] = "piano";
      $trainCar[3] = "television";
      $trainCar[4] = "bed";
      $trainCar[5] = "skateboard";
      $trainCar[6] = "radio";
      $trainCar[7] = "hockey stick";
      if ($_POST['caroftrain'] == 0) {
        echo "In train car 0 there is a <strong>" . $trainCar[0] . "</strong>.<br />";
				echo '<img src="https://upload.wikimedia.org/wikipedia/commons/4/45/GuitareClassique5.png" style="width: 150px; height: 150px;" />';
      } else if ($_POST['caroftrain'] == 1) {
        echo "In train car 1 there is a <strong>" . $trainCar[1] . "</strong>.<br />";
				echo '<img src="https://www.snappychef.co.za/wp-content/uploads/2017/12/SSDS014-Snappy-Chef-14l-Deluxe-Stock-Pot.png" style="width: 150px; height: 150px;" />';
      } else if ($_POST['caroftrain'] == 2) {
        echo "In train car 2 there is a <strong>" . $trainCar[2] . "</strong>.<br />";
				echo '<img src="http://pluspng.com/img-png/piano-hd-png-piano-png-hd-png-image-522.png" style="width: 150px; height: 150px;" />';
      } else if ($_POST['caroftrain'] == 3) {
        echo "In train car 3 there is a <strong>" . $trainCar[3] . "</strong>.<br />";
				echo '<img src="http://pluspng.com/img-png/television-png-television-png-tv-image-22253-1080.png" style="width: 150px; height: 150px;" />';
      } else if ($_POST['caroftrain'] == 4) {
        echo "In train car 4 there is a <strong>" . $trainCar[4] . "</strong>.<br />";
				echo '<img src="http://pngimg.com/uploads/bed/bed_PNG17382.png" style="width: 150px; height: 150px;" />';
      } else if ($_POST['caroftrain'] == 5) {
        echo "In train car 5 there is a <strong>" . $trainCar[5] . "</strong>.<br />";
				echo '<img src="http://pngimg.com/uploads/skateboard/skateboard_PNG11707.png" style="width: 150px; height: 150px;" />';
      } else if ($_POST['caroftrain'] == 6) {
        echo "In train car 6 there is a <strong>" . $trainCar[6] . "</strong>.<br />";
				echo '<img src="https://purepng.com/public/uploads/large/purepng.com-radioradioradio-stationtransceiverwirelessbroadcast-1701528368252zecsz.png" style="width: 150px; height: 150px;" />';
      } else if ($_POST['caroftrain'] == 7) {
        echo "In train car 7 there is a <strong>" . $trainCar[7] . "</strong>.<br />";
				echo '<img src="http://pngimg.com/uploads/hockey/hockey_PNG104.png" style="width: 150px; height: 150px;" />';
      }
			echo "</div>";
    }
    if ($_POST['allsubmit']) {
			echo "<div id='output'>";

      $trainCar[0] = 'In train car 0 there is a <strong>guitar</strong>,<br /><img src="https://upload.wikimedia.org/wikipedia/commons/4/45/GuitareClassique5.png" style="width: 150px; height: 150px;" />';
      $trainCar[1] = 'in train car 1 there is a <strong>pot</strong>,<br /><img src="https://www.snappychef.co.za/wp-content/uploads/2017/12/SSDS014-Snappy-Chef-14l-Deluxe-Stock-Pot.png" style="width: 150px; height: 150px;" />';
      $trainCar[2] = 'in train car 2 there is a <strong>piano</strong>,<br /><img src="http://pluspng.com/img-png/piano-hd-png-piano-png-hd-png-image-522.png" style="width: 150px; height: 150px;" />';
      $trainCar[3] = 'in train car 3 there is a <strong>television</strong>,<br /><img src="http://pluspng.com/img-png/television-png-television-png-tv-image-22253-1080.png" style="width: 150px; height: 150px;" />';
      $trainCar[4] = 'in train car 4 there is a <strong>bed</strong>,<br /><img src="http://pngimg.com/uploads/bed/bed_PNG17382.png" style="width: 150px; height: 150px;" />';
      $trainCar[5] = 'in train car 5 there is a <strong>skateboard</strong>,<br /><img src="http://pngimg.com/uploads/skateboard/skateboard_PNG11707.png" style="width: 150px; height: 150px;" />';
      $trainCar[6] = 'in train car 6 there is a <strong>radio</strong>,<br /><img src="https://purepng.com/public/uploads/large/purepng.com-radioradioradio-stationtransceiverwirelessbroadcast-1701528368252zecsz.png" style="width: 150px; height: 150px;" />';
      $trainCar[7] = 'and in train car 7 there is a <strong>hockey stick</strong>.<br /><img src="http://pngimg.com/uploads/hockey/hockey_PNG104.png" style="width: 150px; height: 150px;" />';
      foreach ($trainCar as $value) {
				echo $value . "<br />";
			}
			echo "</div>";
    }
		if ($_POST['randomsubmit']) {
			echo "<div id='output'>";
      $trainCar[0] = 'guitar.<br /><img src="https://upload.wikimedia.org/wikipedia/commons/4/45/GuitareClassique5.png" style="width: 150px; height: 150px;" />';
      $trainCar[1] = 'pot.<br /><img src="https://www.snappychef.co.za/wp-content/uploads/2017/12/SSDS014-Snappy-Chef-14l-Deluxe-Stock-Pot.png" style="width: 150px; height: 150px;" />';
      $trainCar[2] = 'piano.<br /><img src="http://pluspng.com/img-png/piano-hd-png-piano-png-hd-png-image-522.png" style="width: 150px; height: 150px;" />';
      $trainCar[3] = 'television.<br /><img src="http://pluspng.com/img-png/television-png-television-png-tv-image-22253-1080.png" style="width: 150px; height: 150px;" />';
      $trainCar[4] = 'bed.<br /><img src="http://pngimg.com/uploads/bed/bed_PNG17382.png" style="width: 150px; height: 150px;" />';
      $trainCar[5] = 'skateboard.<br /><img src="http://pngimg.com/uploads/skateboard/skateboard_PNG11707.png" style="width: 150px; height: 150px;" />';
      $trainCar[6] = 'radio.<br /><img src="https://purepng.com/public/uploads/large/purepng.com-radioradioradio-stationtransceiverwirelessbroadcast-1701528368252zecsz.png" style="width: 150px; height: 150px;" />';
      $trainCar[7] = 'hockey stick.<br /><img src="http://pngimg.com/uploads/hockey/hockey_PNG104.png" style="width: 150px; height: 150px;" />';
			$randtrainCar = rand(0, 7);
			echo "The randomly selected train car is <strong>train car " . $randtrainCar . "</strong>.<br />";
			echo "The object in this train car is a <strong>" . $trainCar[$randtrainCar] . "</strong>";
		}
     ?>
</div>
</body>
</html>
