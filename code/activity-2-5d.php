<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Gabriel Oliveira: ICS3UO</title>
		<meta name="description" content="Gabriel Oliveira's webpage for the ICS3UO course.">
		<meta name="author" content="Gabriel Oliveira">
		<link rel="shortcut icon" href="images/logo.ico">
    <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      width: 100%;
    }

    body {
      font-family: "Futura";
      background-color: #f9fbfb;
    }

    #container {
      display: block;
      margin: 0 auto;
      padding: 15px;
      width: 960px;
      background-color: #fff;
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
      width: 100px;
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
    <div id="container">
    <header id="page_header">
      <h1>PHP Do While Loops</h1>
    </header>
    <h3>Background Information</h3>
    <p>This is a do while loop that will output temperatures starting from the starting temperature you input, and terminates at the ending temperature you input. You can set the amount that the list increments by, for example incrementing by 2 would skip over every other temperature. This script outputs celsius, fahrenheit and kelvin. If no increment is typed in the increment will be set to 1.</p><hr />
    <form id="form" name="form" action="activity-2-5d.php" method="post">
      Starting Temperature: <input type="text" name="cel1" value="" /><br />
      Ending Temperature: <input type="text" name="cel2" value="" /><br />
      Increment by: <input type="text" name="inc" value="" /><br />
      <input type="submit" name="submit" class="submit-btn btn btn-pill" value="Submit" /><br />
    </form><br />
    <?php
		if ($_POST['submit']) {
    if ($_POST['cel1'] == "" || $_POST['cel2'] == "") {
			echo "Error! You must type in starting and ending temperature!";
    } else {
		$cel1 = $_POST['cel1'];
    $cel2 = $_POST['cel2'];
    $inc = $_POST['inc'];
		if ($inc == "") {
			$inc = 1;
		}
    if ($cel1 > $cel2) {
      echo "<table id='output'>
              <tr>
                <th>Celsius</th>
                <th>Kelvin</th>
                <th>Fahrenheit</th>
              </tr>";
      do {
        $kel = ($cel1 + 273);
        $fah = (($cel1 * 1.8) + 32);
        echo "<tr>
                <td>" . round($cel1) . "</td>
                <td>" . round($kel) . "</td>
                <td>" . round($fah) . "</td>
              </tr>
              ";
        $cel1 -= $inc;
      } while ($cel1 >= $cel2);
      echo "</table>";
    } else {
      echo "Error! Starting Temperature must be higher than Ending Temperature!";
    }
  }
}
    ?>
  </div>
  </body>
</html>
