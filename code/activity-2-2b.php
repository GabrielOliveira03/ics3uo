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
		.math-form div {
			margin: 1em;
		}

		.math-form label {
			display: inline-block;
			width: 60px;
		}

		.math-form input[type="text"] {
			width: 160px;
			padding: 5px 8px;
			font-size: 1.2em;
			color: #666;
			border: none;
			background-image: -webkit-gradient(linear, 0% 0%, 0% 12%, from(#999), to(#fff));
			background-image: -moz-lieanr-gradient(0% 12%, 90deg, #fff, #999);
			background-color: #fff;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
		}

		.math-form select {
			width: 160px;
			padding: 5px 8px;
			font-size: 1.2em;
			color: #666;
			border: none;
			background-image: -webkit-gradient(linear, 0% 0%, 0% 12%, from(#999), to(#fff));
			background-image: -moz-lieanr-gradient(0% 12%, 90deg, #fff, #999);
			background-color: #fff;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
		}

		.home-button {
			background-color: #1e90ff;
			color: #ffffff;
			padding: 12px 16px;
			margin-left: 1em;
			font-size: 16px;
			cursor: pointer;
		}

		.math-form input[type="text"]:focus {
			-webkit-box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
			-moz-box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
			box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
		}
		.home-button {
      background-color: #1e90ff;
      color: #ffffff;
      padding: 12px 16px;
      margin-left: 1em;
      font-size: 16px;
      cursor: pointer;
    }
    </style>
	</head>
  <body>
		<nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
    <div id="container">
			<header id="page_header">
    		<h1>Working with Variables: Parsing URLs</h1>
			</header>
    <?php
    $border = $_GET['border'];
    $cellpadding = $_GET['cellpadding'];
    $bgcolor = $_GET['bgcolor'];
      // learning to parse variables from URLs
      echo "<p>We are learning how to parse variables from URLs.  The value of <b>x</b> is " . $_GET['x'] . ", the value of <b>y</b> is " . $_GET['y'] . ", the value of <b>z</b> is " . $_GET['z'] . " and the title is " . $_GET['title'] . ".</p>";
      echo "<h2>{$_GET['title']}</h2>";
    ?>
    <table style="border:<?=$border?>px solid black; padding:<?=$cellpadding?>px; background-color:<?=$bgcolor?>; border-collapse:collapse; ">
      <tr>
        <td style="border:<?=$border?>px solid black; padding:<?=$cellpadding?>px;">
          <h2>Mathematical Operation</h2>
        </td>
        <td style="border:<?=$border?>px solid black; padding:<?=$cellpadding?>px;">
          <h2>Result</h2>
        </td>
      </tr>
      <tr>
        <td style="border:<?=$border?>px solid black; padding:<?=$cellpadding?>px;">
          <h2>x + y - 2 * z</h2>
        </td>
        <td style="border:<?=$border?>px solid black; padding:<?=$cellpadding?>px;">
          <?php
            $x = $_GET['x'];
            $y = $_GET['y'];
            $z = $_GET['z'];
            $result = ($x + $y - 2 * $z);
            echo "<h2>$result</h2>";
          ?>
        </td>
      </tr>
      <tr>
        <td style="border:<?=$border?>px solid black; padding:<?=$cellpadding?>px;">
          <h2>2x - 4y + (3z - 80)</h2>
        </td>
        <td style="border:<?=$border?>px solid black; padding:<?=$cellpadding?>px;">
          <?php
            $result1 = (2 * $x) - (4 * $y) + ((3 * $z) - 80);
            echo "<h2>$result1</h2>";
           ?>
        </td>
      </tr>
      <tr>
        <td style="border:<?=$border?>px solid black; padding:<?=$cellpadding?>px;">
          <h2>The result of the sum of the first two equations</h2>
        </td>
        <td style="border:<?=$border?>px solid black; padding:<?=$cellpadding?>px;">
          <?php
            $result2 = ($result + $result1);
            echo "<h2>$result2</h2>";
           ?>
        </td>
      </tr>
    </table>
    <form name="form" action="" method="get" class="math-form">
      X Value: <input type="text" name="x" value="" /><br />
      Y Value: <input type="text" name="y" value="" /><br />
      Z Value: <input type="text" name="z" value="" /><br />
      Title: <input type="text" name="title" value="" /><br />
      Table Border: <input type="text" name="border" value="" /> You do not have to type in 'px', just type in the number.<br />
      Table Padding: <input type="text" name="cellpadding" value="" /> You do not have to type in 'px', just type in the number.<br />
      Table Colour: <input type="color" name="bgcolor" value="" /><br /><br />
      <input type="submit" name="subBtn" value="Show Changes" class="submit-btn btn btn-pill" /><br />
    </div>
</body>
</html>
