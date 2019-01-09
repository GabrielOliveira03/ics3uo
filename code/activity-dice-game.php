<?php
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

		#dice-game-form {
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
  </style>
</head>

<body>
	<nav>
    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
	<?php
		//initialize variables and session
		$messages = "";

		if ($_SESSION['wins'] == "") {
			$_SESSION['wins'] = 0;
		}

		if ($_SESSION['losses'] == "") {
			$_SESSION['losses'] = 0;
		}

		if ($_SESSION['total_rolls'] == "") {
			$_SESSION['total_rolls'] = 0;
		}

		if ($_POST['submit']) {
			$dice_guess = $_POST['dice_guess'];
			$bet_amount = $_POST['bet_amount'];
			$available_credits = $_POST['credits'];
			$wins = $_SESSION['wins'];
			$losses = $_SESSION['losses'];
			$total_rolls = $_SESSION['total_rolls'];

			$roll = rand(1, 6);

			$messages .= "<p>Your guess: " . $dice_guess . ".</p>";
			$messages .= "<p>Your roll: " . $roll . ".</p>";
			$messages .= "<img src=\"images/dice" . $roll . ".png\" alt=\"die image\" />";

			$total_rolls += 1;
			if ($dice_guess == $roll) {
				$wins += 1;
				$winnings = $bet_amount * 2;
				$available_credits += $winnings;
				$messages .= "<p>Correct! Credits won: " . $winnings . "</p>";
			} else {
				$losses +=1;
				$available_credits -= $bet_amount;
				 $messages .= "<p>Wrong! Credits lost: " . $bet_amount . "</p>";
			}

			$_SESSION['wins'] = $wins;
			$_SESSION['losses'] = $losses;
			$_SESSION['total_rolls'] = $total_rolls;
		} else {
			$available_credits = 10;
			$wins = $losses = $total_rolls = 0;
			session_destroy();

		}

		//print_r($_SESSION);
	?>

  <div id="container">
    <header id="page_header">
      <h1>Dice Game!</h1>
    </header>

    <h2>Demonstrates rolling a die</h2>

		<div>
			<p>Credits <?php echo $available_credits ?></p>
		</div>

		<?php
			if ($available_credits > 0) { ?>

	    <form id= "dice-game-form" name="form" action="activity-dice-game.php" method="post">
	      <fieldset>
	        <legend>Guess the number that will be rolled</legend>
					<input type="hidden" id="credits" name="credits" value=<?php echo $available_credits ?>>
	        <div id="dice-guess">
	          <input type="radio" id="number_1" name="dice_guess" value="1"
							<?php echo $dice_guess == 1 ? "checked" : ""?>
							required>
	          <label for="number_1">1</label>

	          <input type="radio" id="number_2" name="dice_guess" value="2"
							<?php echo $dice_guess == 2 ? "checked" : ""?>>
	          <label for="number_2">2</label>

	          <input type="radio" id="number_3" name="dice_guess" value="3"
							<?php echo $dice_guess == 3 ? "checked" : ""?>>
	          <label for="number_3">3</label>

	          <input type="radio" id="number_4" name="dice_guess" value="4"
							<?php echo $dice_guess == 4 ? "checked" : ""?>>
	          <label for="number_4">4</label>

	          <input type="radio" id="number_5" name="dice_guess" value="5"
							<?php echo $dice_guess == 5 ? "checked" : ""?>>
	          <label for="number_5">5</label>

	          <input type="radio" id="number_6" name="dice_guess" value="6"
							<?php echo $dice_guess == 6 ? "checked" : ""?>>
	          <label for="number_6">6</label>
	        </div>
				</fieldset>

				<fieldset>
					<legend>Place your bet</legend>
					<div>
						<input type="number" id="bet_amount" name="bet_amount"
							min="1" max=<?php echo $available_credits ?> value="1">
						<label id="bet_amount_label" for="bet_amount">Credits</label>
					</div>
	      </fieldset>

				<div class="form-button">
					<input class="submit-btn btn btn-pill" type="submit" name="submit" value="Guess!">
				</div>
	    </form>
		<?php
			echo $messages;
		?>
			<div id="stats">
				<p class="tile">
					<span class="tile-label">Wins</span>
					<span class="tile-content"><?php echo $wins ?></span>
				</p>
				<p class="tile">
					<span class="tile-label">Losses</span>
					<span class="tile-content"><?php echo $losses ?></span>
				</p>
				<p class="tile">
					<span class="tile-label">Rolls</span>
					<span class="tile-content"><?php echo $total_rolls ?></span>
				</p>
			</div>
		<?php } else { ?>
			<div id="game-over-messages">
				<p>Game Over!</p>
				<p>You ran out of credits</p>
				<a class="btn pill" href='<? $_SERVER['PHP_SELF'] ."php" ?>?reset=yes'>RESET</a>
		<?php } ?>
  </div>
</body>
</html>
