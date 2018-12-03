<?php
// start the PHP session
session_start();
?>
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

	.btn{
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
		margin: 0 12px;
	}

	.btn:hover {
		background-color: #ff9f5d;
		cursor: pointer;
	}

	.btn:active {
		background-color: #eee;
	}

	.tile {
		display: block;
		padding: 15px;
		background-color: #075ce3;
		width: 100px;
		text-align: center;
		color: #fff;
	}

	.counter {

	}

	.label {

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
    padding: 0 20px;
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

  p {
    margin: 0 0 20px 0;
  }

  p, li {
    line-height: 20px;
  }
  </style>
</head>
<body>
	<nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
  <div id="container">
    <header id="page_header">
			<h1>PHP SESSIONS</h1>
		</header>

		<?php
		// initialize wins and losses
		if ($_SESSION['wins'] == "") {
			$_SESSION['wins'] = 0;
		}
		if ($_SESSION['losses'] == "") {
			$_SESSION['losses'] = 0;
		}
		if ($_SESSION['total_rolls'] == "") {
			$_SESSION['total_rolls'] = 0;
		}

		// check for reset
		if ($_GET['reset'] == "yes") {
			$_SESSION['wins'] = 0;
			$_SESSION['losses'] = 0;
			$_SESSION['total_rolls'] = 0;
			$message1 = "The game has been reset.";
			$message2 = "&nbsp;";
		} else {
			// create a random number between 1 and 5.
			$randNum = rand(1,5);

			// show the random number
			$message1 = "The random number is <strong>" . $randNum . "</strong>";

			if ($randNum == 3) {
				$message2 = "The number equalled 3. YOU WIN!";
				$_SESSION['wins']  = $_SESSION['wins']  + 1;
			} else {
				$message2 = "The number did not equal 3. YOU LOSE!";
				$_SESSION['losses']  = $_SESSION['losses']  + 1;
			}
			$_SESSION['total_rolls'] = $_SESSION['total_rolls'] + 1;
			$percentage_of_wins = ($_SESSION['wins'] / $_SESSION['total_rolls']) * 100;
			// easiest way to make sure the percentage of losses and wins adds up to 100%
			$percentage_of_losses = 100 - $percentage_of_wins;
		}
		?>

		<div>
			<p><?php echo $message1 ?></p>

			<p><?php echo $message2 ?></p>
		</div>

		<div class="scoreboard-row">
			<p class="tile">WINS: <?php echo $_SESSION['wins'] ?></p><p> |  LOSSES: <?php echo $_SESSION['losses'] ?></p>
		</div>

		<div>
			<p>PERCENTAGE OF WINS: <?php echo round($percentage_of_wins) ?>% | PERCENTAGE OF LOSSES: <?php echo round($percentage_of_losses) ?>%</p>

			<p><a class="btn pill" href='playing-with-sessions.php'>ROLL AGAIN</a><a class="btn pill" href='playing-with-sessions.php?reset=yes'>RESET</a></p>
		</div>
	</div>
</body>
</html>
