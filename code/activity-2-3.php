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
		.home-button {
      background-color: #1e90ff;
      color: #ffffff;
      padding: 12px 16px;
      margin-left: 1em;
      font-size: 16px;
      cursor: pointer;
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
			text-align: center;
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
		.img {
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
    	<h1 style="text-align: center">Days of the Week</h1>
		</header>
    <h2 style="text-align: center">Choose what day it is, and proceed to submit!</h2>
    <form style="text-align: center" name="form" action="activity-2-3.php" method="post">
      <select name="day">
        <option value="">-Choose a day-</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
      </select><br /><br />
      <input type="submit" name="submit" value="Submit" class="submit-btn btn btn-pill" />
    </form><br />
    <?php
      if ($_POST['submit']) {
        $day = $_POST['day'];
        if ($day == "") {
          echo '<p id="p";><b>Please select a day of the week.</b></p>';
        } else if ($day == 'Monday') {
          echo '<p class="p";><b>Argh, I am always tired on Monday!</b></p>';
          echo '<img class="img" src="https://ih0.redbubble.net/image.130303932.7492/flat,550x550,075,f.u1.jpg" />';
        } else if ($day == 'Tuesday') {
            echo '<p class="p";><b>Feels like Monday, but a bit better.</b></p>';
            echo '<img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz-QV_lqpQcS9HCRzNmVryYj3TSr2H9GN1Kcc6ouBavxwMhg1xPg" />';
        } else if ($day == 'Wednesday'){
            echo '<p class="p";><b>It is halfway through the week!</b></p>';
            echo '<img class="img" src="http://www.lovethispic.com/uploaded_images/125501-We-re-Halfway-There-.jpg" />';
        } else if ($day == 'Thursday'){
            echo '<p class="p";><b>Thursday is like Friday Jr.</b></p>';
            echo '<img class="img" src="https://images-na.ssl-images-amazon.com/images/I/61OXsB72fJL._SY450_.jpg" />';
        } else if ($day == 'Friday'){
            echo '<p class="p";><b>Last day of work before the weekend!</b></p>';
            echo '<img class="img" src="https://www.promodo.com/wp-content/uploads/2015/06/1.jpg" />';
        } else if ($day == 'Saturday'){
            echo '<p class="p";><b>Best day of the week. No alarm and no bedtime.</b></p>';
            echo '<img class="img" src="http://www.lovethispic.com/uploaded_images/82817-Saturday-Best-Day-Of-The-Week.jpg" />';
        } else if ($day == 'Sunday'){
            echo '<p class="p";><b>The weekend, but the day after is Monday.</b></p>';
            echo '<img class="img" src="https://cdn.quotestopics.com/87/96/932731963-original.jpg" />';
        }
      }
     ?>
  </div>
  </body>
</html>
