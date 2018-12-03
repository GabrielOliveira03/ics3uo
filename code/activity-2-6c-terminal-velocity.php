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
      background-color: #fff;
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
    </style>
	</head>
  <body>
		<nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
    <div id="container">
      <header id="page_header">
        <h1>Terminal Velocity</h1>
      </header>
      <h3>Background Information</h3>
      <p>The terminal velocity of an object is the maximum speed at which an object will fall through a fluid at.  Objects initially accelerate when falling in a fluid, as the object accelerates the upward resistive force of the fluid eventually equals the downward force of gravity causing the object to stop accelerating and to reach its terminal (maximum) speed.</p>
      <p>Terminal velocity is dependent on the weight of the object, drag coefficient, frontal surface area and density of the gas.<br />W = weight, Cd = drag coefficient,	A = frontal area,	P = gas density</p>
      <p>The formula for terminal velocity is: V=&#8730;19.6*mass/Cd*1.229*area</p><hr />
      <form name="form" id="form" method="post" action="activity-2-6c-terminal-velocity.php">
        Mass of Object (kg): <input type="text" name="mass" value="" /><br />
        Shape: <select name="shape">
          <option value="1.28">Flat Plate</option>
          <option value="1.14">Prism</option>
          <option value="0.3">Bullet</option>
          <option value="0.1">Sphere</option>
          <option value="0.05">Airfoil</option>
        </select><br />
        Frontal Area (m&#178;) <input type="text" name="area" value="" /><br />
        <input type="submit" name="submit" value="Submit" class="submit-btn btn btn-pill" /><br />
      </form>
      <?php
      if ($_POST['submit']) {
        function terminalVelocity() {
          $mass = $_POST['mass'];
          $area = $_POST['area'];
          $shape = $_POST['shape'];
					if ($mass == "" || $area == "") {
						echo "Error! You must input area and mass!";
					} else {
          if ($shape == "1.28") {
            $shapename = "Flat Plate";
          }
          if ($shape == "1.14") {
            $shapename = "Prism";
          }
          if ($shape == "0.3") {
            $shapename = "Bullet";
          }
          if ($shape == "0.1") {
            $shapename = "Sphere";
          }
          if ($shape == "0.05") {
            $shapename = "Airfoil";
          }
          $terminalvelocity = round(sqrt((19.6 * $mass) / ($shape * 1.229 * $area)), 2);
          echo "<br /><div id='output'>";
          echo "The mass is " . $mass . "kg, the area is " . $area . "m&#178;, and the shape is " . $shapename . ", which has a drag coefficient of " . $shape . ".<br />";
          echo "Therefore, the terminal velocity is <b>" . $terminalvelocity . "m/s</b>.";
          echo "</div>";
				}
        }
        terminalVelocity();
      }
       ?>
    </div>
  </body>
</html>
