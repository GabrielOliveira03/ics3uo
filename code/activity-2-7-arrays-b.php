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
      <h1>Associative Arrays</h1>
    </header>
    <h3>Background Information</h3>
    <p>An associative array is also known as a map or dictionary array.  It is an abstract data type composed of a collection of key/value pairs.</p>
    <p>In this assignment, I have assigned the planets of the solar system to one array, each with a corresponding acceleration in m/s&#178;. You can type in a range of accelerations, from the starting acceleration to the ending acceleration, and the program uses a for each loop to only display the planets that have accelerations within the range that you input.</p><hr />
    <form name="form" action="activity-2-7-arrays-b.php" method="post" id="form">
      Starting Acceleration (m/s&#178;): <input type="text" name="start" value="" /><br />
      Ending Acceleration (m/s&#178;): <input type="text" name="end" value="" /><br /><br />
      <input type="submit" name="submit" value="Show Planets" class="submit-btn btn btn-pill" /><br />
    </form><br />
    <?php
    if ($_POST['submit']) {
      if ($_POST['start'] < $_POST['end']) {
      echo '<div id="output">';
      $acceleration['Mercury'] = 3.76;
      $acceleration['Venus'] = 9.04;
      $acceleration['Earth'] = 9.8;
      $acceleration['Mars'] = 3.77;
      $acceleration['Jupiter'] = 23.6;
      $acceleration['Saturn'] = 10.06;
      $acceleration['Uranus'] = 8.87;
      $acceleration['Neptune'] = 11.23;
      $planet_image['Mercury'] = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Mercury_in_color_-_Prockter07-edit1.jpg/1200px-Mercury_in_color_-_Prockter07-edit1.jpg" style="height: 100px; width: 100px;" />';
      $planet_image['Venus'] = '<img src="https://3c1703fe8d.site.internapcdn.net/newman/csz/news/800/2014/whyisvenusso.jpg" style="height: 100px; width: 100px;" />';
      $planet_image['Earth'] = '<img src="https://3c1703fe8d.site.internapcdn.net/newman/gfx/news/hires/2018/earthsoxygen.jpg" style="height: 100px; width: 100px;" />';
      $planet_image['Mars'] = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/OSIRIS_Mars_true_color.jpg/1200px-OSIRIS_Mars_true_color.jpg" style="height: 100px; width: 100px;" />';
      $planet_image['Jupiter'] = '<img src="http://cdn.sci-news.com/images/enlarge3/image_4461e-Jupiter.jpg" style="height: 100px; width: 100px;" />';
      $planet_image['Saturn'] = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Saturn_during_Equinox.jpg/220px-Saturn_during_Equinox.jpg" style="height: 100px; width: 100px;" />';
      $planet_image['Uranus'] = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Uranus2.jpg/220px-Uranus2.jpg" style="height: 100px; width: 100px;" />';
      $planet_image['Neptune'] = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Neptune_Full.jpg/220px-Neptune_Full.jpg" style="height: 100px; width: 100px;" />';
      $start = $_POST['start'];
      $end = $_POST['end'];
      echo "<p>Planets with an acceleration of in between <strong>" . $start . "</strong>m/s&#178; and <strong>" . $end . "</strong>m/s&#178;</p>";
      foreach ($acceleration  as $planet => $acc) {
          if ($acc >= $start && $end >= $acc) {
            echo "<div>";
            echo "<p>Planet: <strong>" . $planet . "</strong>, Acceleration: <strong>" . $acc . "</strong>m/s&#178;</p>";
            echo "" . $planet_image[$planet] . "";
            echo "</div>";
          } else {
              echo "";
          }
        }
        echo "</div>";
      } else if ($_POST['start'] >= $_POST['end']) {
        echo '<div id="output">';
        echo "Error! Starting acceleration must be smaller than ending acceleration";
        echo "</div>";
      }
    }
     ?>
  </div>
</body>
</html>
