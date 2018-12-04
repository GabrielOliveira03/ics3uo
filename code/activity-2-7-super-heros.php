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
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    td img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  .center {
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
      <h1>Multidimensional Arrays</h1>
    </header>
    <table class="center">
      <thead>
        <tr>
          <th>Team 1:</th>
          <th>Team 2:</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $team = array(array('<img src="https://upload.wikimedia.org/wikipedia/en/8/87/Batman_DC_Comics.png" class="center" style="height: 150px; width: 100px;" /><br /><p style="text-align: center">Batman</p>',
      '<img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/SupermanRoss.png/250px-SupermanRoss.png" class="center" style="height: 150px; width: 100px;" /><br /><p style="text-align: center">Superman</p>',
      '<img src="https://png2.kisspng.com/sh/90aa1a0079325477e19a9f4c8e7a493e/L0KzQYm3U8MyN5Z3j5H0aYP2gLBuTgRpbV5rhNN8aD33PcTvigJ1NahmhN5ELYfog8W0gB9ucZQyetH4az3pfLL6iL02aZQ1SNQ8NkfkSYiBUL4yOGU5T6Q6M0G4QoO8U8UzOmM6SKQ6LoDxd1==/kisspng-the-flash-t-shirt-wally-west-comic-book-flash-5ac00b367a9780.1044721315225352225021.png" class="center" style="height: 150px; width: 100px" /><br /><p style="text-align: center">Flash</p>',
      '<img src="http://pngimg.com/uploads/ironman/ironman_PNG44.png" class="center" style="height: 150px; width: 100px;" /><br /><p style="text-align: center">Iron Man</p>',
      '<img src="http://pngimg.com/uploads/spider_man/spider_man_PNG73.png" class="center" style="height: 150px; width: 100px;" /><br /><p style="text-align: center">Spiderman</p>'),
      array('<img src="https://png2.kisspng.com/sh/318c085950f7374a478c089589007233/L0KzQYm3VMAyN6F5fZH0aYP2gLBuTf1ieqdqhJ9qdnXxd7b5k71idJ1uedDsZT33eLF5TfNieKVmgdC2YX3ogrrqgb1raZ8yjNp4cj24cbS3hck6OJNoSdhqND62RoiAUMY3QGI6SqQAOUK0RIWAV8A3NqFzf3==/kisspng-marvel-avengers-alliance-thor-captain-america-jan-thor-5ac0e990bc1fa4.3677066815225921447706.png" class="center" style="height: 150px; width: 100px;" /><br /><p style="text-align: center">Thor</p>',
      '<img src="https://png2.kisspng.com/sh/d1625c3382429bcde3a92c105bfbb13b/L0KzQYm3UsA1N6F9fZH0aYP2gLBuTfh2dJwyhdN7dnXvPbnskv9me143SKMBLXLvcbTyTgdqbJD8RdV1aX73PbPokwRwdl5oRdpAbHuwgLBuTfNtcaFmiuY2NXG6R7PtVcQ6QWVofao3MkG6RYG3WcUyPWI8T6sCMkC3RoOAWb5xdpg=/kisspng-hulk-marvel-heroes-2016-black-widow-clint-barton-c-hulk-png-clipart-5a77bf54994ce8.2175009515177972046279.png" class="center" style="height: 150px; width: 100px;" /><br/><p style="text-align: center">Hulk</p>',
      '<img src="http://pngimg.com/uploads/captain_america/captain_america_PNG50.png" class="center" style="height: 150px; width: 100px;" /><br /><p style="text-align: center">Captain America</p>',
      '<img src="https://pngimg.com/uploads/cyborg/cyborg_PNG57.png" class="center" style="height: 150px; width: 100px;" /><br /><p style="text-align: center">Cyborg</p>',
      '<img src="https://vignette.wikia.nocookie.net/alanomalyrapbattles/images/5/5d/Wolverine.png" class="center" style="height: 150px; width: 100px;" /><br /><p style="text-align: center">Wolverine</p>'));
      $numberOfColumns = max(count($team[0]), count($team[1]));

      $team0battle = rand(0, count($team[0]) - 1);
      $team1battle = rand(0, count($team[1]) - 1);
      $battle = array(array('Batman', 'Superman', 'Flash', 'Iron Man', 'Spiderman'), array('Thor', 'Hulk', 'Captain America', 'Cyborg', 'Wolverine'));

      for ($i = 0; $i < $numberOfColumns; $i++) {
        echo "<tr>";
        echo "<td>";
        echo $team[0][$i];
        if ($i == $team0battle) {
          echo '<p style="text-align: center"><strong>(BATTLE)</strong></p>';
        }
        echo "</td>";

        echo "<td>";
        echo $team[1][$i];
        if ($i == $team1battle) {
          echo '<p style="text-align: center"><strong>(BATTLE)</strong></p>';
        }
        echo "</td>";

        echo "</tr>";
      }

       ?>
     </tbody>
   </table><br />
   <? echo "<p style='text-align: center'><strong>" . $battle[0][$team0battle] . "</strong> has been chosen to battle <strong>" . $battle[1][$team1battle] . "</strong>!</p>";
			$team0[0] = ["Batman", "strength" => 3, "speed" => 3, "smart" => 4];
			$team0[1] = ["Superman", "strength" => 4, "speed" => 3, "smart" => 3];
			$team0[2] = ["Flash", "strength" => 2, "speed" => 5, "smart" => 3];
			$team0[3] = ["Iron Man", "strength" => 3, "speed" => 4, "smart" => 4];
			$team0[4] = ["Spiderman", "strength" => 3, "speed" => 4, "smart" => 2];
			$team1[0] = ["Thor", "strength" => 5, "speed" => 2, "smart" => 2];
      $team1[1] = ["Hulk", "strength" => 5, "speed" => 2, "smart" => 1];
      $team1[2] = ["Captain America", "strength" => 3, "speed" => 3, "smart" => 3];
      $team1[3] = ["Cyborg", "strength" => 4, "speed" => 2, "smart" => 4];
      $team1[4] = ["Wolverine", "strength" => 4, "speed" => 3, "smart" => 3];
   ?>
   <form name="form" action="activity-2-7-super-heros.php" method="post">
     Strength <input type="radio" name="chosen" value="strength" /><br />
     Speed <input type="radio" name="chosen" value="speed" /><br />
     Smarts <input type="radio" name="chosen" value="smart" /><br />
     <input type="submit" name="submit" value="Show Winner" /><br />
   </form>
  <?php
      if ($_POST['submit']) {
        $chosen = $_POST['chosen'];

        for ($i=0; $i < count($team0) ; $i++) {
				$hero0 = $team0[$i];
				$hero1 = $team1[$i];

      	echo "<p>" . $hero0["hero"] . "";

				if ($hero0[$chosen] > $hero1[$chosen]) {
					echo " winner ";
				}
				echo "</p>";


				echo "<p>" . $hero1["hero"] . "";
				if ($hero0[$chosen] < $hero1[$chosen]) {
					echo " winner ";
				}
				echo "</p>";
      }
      }
  ?>
  </div>
</body>
</html>
