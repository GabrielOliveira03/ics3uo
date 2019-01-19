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
  <link rel="stylesheet" href="styles/performance_tasks.css">
</head>
<style>

img {
  width: 129px;
  height: 129px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
<body>
	<nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
  <div id="container">
    <header id="page-header">
      <h1>Rock, Paper, Scissors</h1>
    </header>
    <p>On this page, you can play rock, paper, scissors with the computer. Just select one of the three options and the computer will randomly generate what they play to compare. The goal is to get the highest score possible, which goes up by one for every successive win. When you lose, your score goes back to zero. See how many wins in a row you can get.</p>
    <form name="form" method="post" action="perftask-rock-paper-scissors.php">
    <div>
      <input type="radio" id="rock" value="Rock" name="rps" />
      <label for="rock">Rock</label>
    </div>
    <div>
      <input type="radio" id="paper" value="Paper" name="rps" />
      <label for="paper">Paper</label>
    </div>
    <div>
      <input type="radio" id="scissors" value="Scissors" name="rps" />
      <label for="scissors">Scissors</label>
    </div><br />
    <div class="form-button">
      <input class="submit-btn btn btn-pill" type="submit" name="submit" value="Play!">
    </div><br />
    <div class="form-button">
      <input class="submit-btn btn btn-pill" type="submit" name="reset" value="Reset High Score?">
    </div>

    <?php
    if ($_POST['submit'] && $_POST['rps'] == "") {
      echo "<h4>You must pick one!</h4>";
    } else if ($_POST['submit']) {
      $rps = $_POST['rps'];
      $cpuRPS = array("Rock", "Paper", "Scissors");
      $cpuRoll = array_rand($cpuRPS);
      $cpu = $cpuRPS[$cpuRoll];
      $_SESSION['score'] = (int)$_SESSION['score'];
      $_SESSION['highscore'] = (int)$_SESSION['highscore'];
      if ($rps == "Rock") {
        $userimage = '<img src="http://waveavenue.com/wp-content/uploads/2011/10/21mag-abstractimages-slide-XOE4-jumbo.jpg" />';
      } else if ($rps == "Paper") {
        $userimage = '<img src="http://graphics8.nytimes.com/images/2011/08/21/magazine/21mag-abstractimages-slide-2T4N/21mag-abstractimages-slide-2T4N-jumbo.jpg" />';
      } else if ($rps == "Scissors") {
        $userimage = '<img src="http://blog.waveavenue.com.s167390.gridserver.com/wp-content/uploads/2013/05/21mag-abstractimages-slide-IRQ1-jumbo.jpg" />';
      }
      if ($cpu == "Rock") {
        $cpuimage = '<img src="http://waveavenue.com/wp-content/uploads/2011/10/21mag-abstractimages-slide-XOE4-jumbo.jpg" />';
      } else if ($cpu == "Paper") {
        $cpuimage = '<img src="http://graphics8.nytimes.com/images/2011/08/21/magazine/21mag-abstractimages-slide-2T4N/21mag-abstractimages-slide-2T4N-jumbo.jpg" />';
      } else if ($cpu == "Scissors") {
        $cpuimage = '<img src="http://blog.waveavenue.com.s167390.gridserver.com/wp-content/uploads/2013/05/21mag-abstractimages-slide-IRQ1-jumbo.jpg" />';
      }
      if ($rps == $cpu) {
        $_SESSION['score'] = (int)$_SESSION['score'];
        $winner = "It's a draw !";
      } else if ($rps == 'Rock' && $cpu == 'Scissors') {
        $_SESSION['score'] = (int)$_SESSION['score'] + 1;
        if ($_SESSION['score'] > $_SESSION['highscore']) {
          $_SESSION['highscore'] = $_SESSION['score'];
      }
        $winner = "You win!";
      } else if ($rps == 'Rock' && $cpu == 'Paper') {
        $_SESSION['highscore'] = $_SESSION['highscore'];
        $_SESSION['score'] = 0;
        $winner = "You lose!";
      } else if ($rps == 'Paper' && $cpu == 'Rock') {
        $_SESSION['score'] = (int)$_SESSION['score'] + 1;
        if ($_SESSION['score'] > $_SESSION['highscore']) {
          $_SESSION['highscore'] = $_SESSION['score'];
      }
        $winner = "You win!";
      } else if ($rps == 'Paper' && $cpu == 'Scissors') {
        $_SESSION['highscore'] = $_SESSION['highscore'];
        $_SESSION['score'] = 0;
        $winner = "You lose!";
      } else if ($rps == 'Scissors' && $cpu == 'Rock') {
        $_SESSION['highscore'] = $_SESSION['highscore'];
        $_SESSION['score'] = 0;
        $winner = "You lose!";
      } else if ($rps == 'Scissors' && $cpu == 'Paper') {
        $_SESSION['score'] = (int)$_SESSION['score'] + 1;
        if ($_SESSION['score'] > $_SESSION['highscore']) {
          $_SESSION['highscore'] = $_SESSION['score'];
      }
        $winner = "You win!";
      }
      ?>
      <div>
        <h2 style="text-align: center"><? echo $winner; ?></h2>
        <h3 style="text-align: center">Score: <? echo $_SESSION['score']; ?></h3>
        <h3 style="text-align: center">High Score: <? echo $_SESSION['highscore']; ?></h3>
      </div>
      <div class="clearfix">
        <div class="player">
          <h2 style="text-align: center">Player: <? echo $rps; ?></h2>
          <? echo $userimage; ?>
        </div>
        <div class="computer">
          <h2 style="text-align: center">Computer: <? echo $cpu; ?></h2>
          <? echo $cpuimage; ?>
        </div>
      </div>
      <?
    }
    if ($_POST['reset']) {
      $_SESSION['highscore'] = 0;
    }
     ?>
</body>
</html>
