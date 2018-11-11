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
		<h1>Volume of an Ice Cream Cone</h1>
	</header>
	<h3>Background Information</h3>
	<p>This is a function that calculates the volume of an ice cream cone by adding together the volume of the cone and the volume of the scoop, assuming that there is only one scoop and the radius of the scoop is the same as the cone. The ice cream inside the cone will not be counted as it is inside the cone, so only half of the scoop's volume and the cone's volume will be counted.</p><hr />
	<img src="https://ncalculators.com/images/formulas/sphere.jpg" alt="Volume of Sphere" title="Volume of Sphere" height="200px"; />
	<img src="https://www.onlinemathlearning.com/image-files/xvolume-of-cone.png.pagespeed.ic.2-YhHAnIvd.png" alt="Volume of Cone" title="Volume of Cone" height="200px"; />
  <form name="form" action="activity-2-6b-ice-cream-cone.php" method="post" id="form">
    Radius of Cone/Sphere: (cm) <input type="text" name="radius" value="" /><br />
    Height of Cone: (cm) <input type="text" name="height" value="" /><br />
    <input type="submit" name="submit" value="Submit" class="submit-btn btn btn-pill" />
  </form>
  <?php
  if ($_POST['submit']) {
	echo "<br />";
	echo "<div id='output'>";
    function totalVolume() {
			$height = $_POST['height'];
	    $radius = $_POST['radius'];
			if ($height == "" || $radius == "") {
				echo "Error! You must input height and radius!";
			} else {
      $conevol = round(($height * pi() * pow($radius, 2)) / 3);
      $spherevol = round(4 * (pi() * pow($radius, 3)) / 3);
      $totalvol = $conevol + ($spherevol / 2);
      echo "The volume of cone is " . $conevol . "cm&#179;.<br />";
			echo "The volume of the scoop is " . $spherevol . "cm&#179;.<br />";
      echo "Assuming the ice cream inside the cone is not counted, the total volume of the ice cream cone is <b>" . $totalvol . "cm&#179;</b>.<br />";
			echo "</div><br />";
			echo '<img src="https://content.mycutegraphics.com/graphics/icecream/ice-cream-cone-clip-art.png" alt="icecreamcone" title="Ice Cream Cone" height="200px" />';
    }
	}
    totalVolume();
  }
   ?>
 </div>
</body>
</html>
