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

		.team_cards {
				display: flex;
				flex-wrap: wrap;
				justify-content: space-between;
				margin: 1em;
				background-color: #2e5ea9;
				padding: 1em;
		}

		.team_cards h2 {
			width: 100%;
			text-align: center;
			margin-top: 0;
			color: #fff;
		}

		.hero_card {
			background-color: #ff8533;
			flex: 0 1 14%;
			padding: 0.6em 1em 0.2em 1em;
			min-height: 162px;
			border-left: 2px solid #fff;
			border-top: 2px solid #fff;
			border-right: 2px solid #b34800;
			border-bottom: 2px solid #b34800;
		}

    .hero_card img {
			height: 90px;
			display: block;
			margin: 0 auto;
    }

		.hero_card h3 {
			text-align: center;
			color: #ffe682;
			text-shadow: 2px 2px #b38f00;
			margin: 0;
		}

		.team_cards .selected {
			background-color: #b34800;
		}

		.fighters_call p {
			border: 1px solid #2e5ea9;
			color: #2e5ea9;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 0.5em 0;
		}

		.skill_selections {
			text-align: center;
			border-bottom: 1px solid #2e5ea9;
			padding-bottom: 1em;
		}

		.skill_selections div {
			display: inline-block;
			width: 10%;
		}

		.skill_selections div label {
			color: #2e5ea9;
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

		hr {
			padding: 0;
			margin: 0 0 1em 0;
			text-align: center;
			color: #4287f4;
			border-bottom: 0.5px solid #4287f4;
		}

    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }

	  .center {
	    margin-left: auto;
	    margin-right: auto;
	  }

		.winner_message {
			font-size: 2em;
			font-weight: bold;
			margin-right: 2em;
		}

    </style>
	</head>

  <body>
		<nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>

	<div id="container">
    <header id="page_header">
      <h1>Superheroes Battle</h1>
    </header>

    <?
			$team1 = [];
			$team1[] = ["Batman", "strength" => 3, "speed" => 3, "smart" => 4, "img" => "batman.png"];
			$team1[] = ["Superman", "strength" => 4, "speed" => 3, "smart" => 3, "img" => "superman.png"];
			$team1[] = ["Flash", "strength" => 2, "speed" => 5, "smart" => 3, "img" => "flash.png"];
			$team1[] = ["Iron Man", "strength" => 3, "speed" => 4, "smart" => 4, "img" => "ironman.png"];
			$team1[] = ["Spiderman", "strength" => 3, "speed" => 4, "smart" => 2, "img" => "spiderman.png"];

			$team2 = [];
			$team2[] = ["Thor", "strength" => 5, "speed" => 2, "smart" => 2, "img" => "thor.png"];
      $team2[] = ["Hulk", "strength" => 5, "speed" => 2, "smart" => 1, "img" => "hulk.png"];
      $team2[] = ["Captain America", "strength" => 3, "speed" => 3, "smart" => 3, "img" => "captain_america.png"];
      $team2[] = ["Cyborg", "strength" => 4, "speed" => 2, "smart" => 4, "img" => "cyborg.png"];
      $team2[] = ["Wolverine", "strength" => 4, "speed" => 3, "smart" => 3, "img" => "wolverine.png"];

			if ($_POST['submit']) {
				$fighter1 = $_POST['fighter1'];
				$fighter2 = $_POST['fighter2'];

				$hero1 = $team1[$fighter1];
				$hero2 = $team2[$fighter2];

				$chosen_skill = $_POST['skill'];

				if ($hero1[$chosen_skill] > $hero2[$chosen_skill]) {
					$winner = $hero1[0];
				} else {
					$winner = $hero2[0];
				}

				$figthers_call = "&nbsp;<span class='winner_message'>" . $winner . " wins!</span>";
				$figthers_call .= '<a class="btn pill" href="' . $_SERVER['PHP_SELF'] . '">Try again</a>';

			} else {
				$fighter1 = rand(0, count($team1) - 1);
      	$fighter2 = rand(0, count($team2) - 1);

				$hero1 = $team1[$fighter1];
				$hero2 = $team2[$fighter2];

				$figthers_call = "<strong>" . $hero1[0] . "</strong>&nbsp;has been chosen to battle&nbsp;<strong>" . $hero2[0] . "</strong>!";
			}
		?>

		<div class="team_cards">
			<h2>
				Team 1
			</h2>
			<? for ($i=0; $i < count($team1); $i++) { ?>
				<div class="hero_card <? echo $i == $fighter1 ? "selected" : ""?>">
					<img src="images/<? echo $team1[$i]["img"] ?>">
					<h3><? echo $team1[$i][0] ?></h3>
				</div>
			<? } ?>
		</div>

		<div class="team_cards">
			<h2>Team 2</h2>
			<? for ($i=0; $i < count($team2); $i++) { ?>
				<div class="hero_card <? echo $i == $fighter2 ? "selected" : ""?>">
					<img src="images/<? echo $team2[$i]["img"] ?>">
					<h3><? echo $team2[$i][0] ?></h3>
				</div>
			<? } ?>
		</div>

		<div class="fighters_call">
			<p>
				<? echo $figthers_call ?>
			</p>
		</div>

   <form name="form" action="activity-2-7-super-heros2.php" method="post">
		 <input type="hidden" id="fighter1" name="fighter1" value=<?php echo $fighter1 ?>>
		 <input type="hidden" id="fighter2" name="fighter2" value=<?php echo $fighter2 ?>>
		 <div class="skill_selections">
			 <div>
				 <input type="radio" id="strength" name="skill" value="strength"
				 <?php echo $chosen_skill == "strength" ? "checked" : ""?> "required">
				 <label for="strength">Strength</label>
			 </div>
			 <div>
				 <input type="radio" id="speed" name="skill" value="speed"
				 <?php echo $chosen_skill == "speed" ? "checked" : ""?> "required">
				 <label for="speed">Speed</label>
			 </div>
			 <div>
				 <input type="radio" id="smarts" name="skill" value="smarts"
				 <?php echo $chosen_skill == "smarts" ? "checked" : ""?> "required">
				 <label for="smarts">Smarts</label>
			 </div>
			 <div>
	     	<input class="submit-btn btn btn-pill" type="submit" name="submit" value="Show Winner" />
			</div>
		</div>
   </form>
  </div>
</body>
</html>
