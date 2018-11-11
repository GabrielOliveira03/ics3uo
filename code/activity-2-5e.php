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
    <div id="container">
    <header id="page_header">
      <h1>Population Growth Simulator</h1>
    </header>
    <h3>Background Information</h3>
    <p>This is a script that uses a do while loop to automatically output the estimated population for each year. Simply type in the initial population, the rate of growth, and the starting and ending years. The script will show you the approximate population for each year. How does it do this? It uses a formula used to calculate population growth.</p>
    <img src="http://www.coolmath.com/sites/cmat/files/images/06-exponentials-01.gif" alt="formula" title="Formula" />
    <p>This shows the initial population, p-not, being multiplied by Euler's number, e. e is the base for the exponent tr, which is the time (in years) multiplied by the rate of growth. All together, this will calculate the approximate population in the ending year.</p><hr />
    <form id="form" name="form" action="activity-2-5e.php" method="post">
      Initial Population: <input type="text" name="p_o" value="" /><br />
      Rate of Growth (%): <input type="text" name="r" value="" /><br />
      Starting Year: <input type="text" name="t_1" value="" /><br />
      Ending Year: <input type="text" name="t_2" value="" /><br />
      <input type="submit" name="submit" value="Show the Growth" class="submit-btn btn btn-pill" />
    </form><br />
    <?php
		if ($_POST ['submit']) {
      if ($_POST['p_o'] == "" || $_POST['r'] == "" || $_POST['t_1'] == "" || $_POST['t_2'] == "" ) {
        echo "Error! None of the fields can be empty!";
      } else {
        $p_o = $_POST['p_o'];
        $r = ($_POST['r'] / 100);
        $t_1 = $_POST['t_1'];
        $t_2 = $_POST['t_2'];
        $t = $t_2-$t_1;
        $year = $t_1;
        $time = 0;
        if ($t_1 > $t_2) {
          echo "Error! Starting year must be before ending year!";
        } else {
          echo "<table id='output'>
                <tr>
                  <td>";
        do {
          $p_f = $p_o * (exp($time * $r));
          echo "In the year " . $year . " the population was " . round($p_f) . ".<br />";
          $time++;
          $year++;
        } while ($time <= $t);
        echo "</td>
              </tr>
              </table>";
      }
      }
		}
    ?>
  </div>
</body>
</html>
