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
	<h1>Pamishan Creatures - Dichotomous Key</h1>
	</header>
	<p>Help! Scientists have discovered quite a few new creatures on planet Pamishan. They need your help to identify and classify them. Use the dichotomous key to identify these creatures.</p>
	<p><img src="https://icsprogramming.ca/examples/pamishan-creatures-all.jpg" alt="creatures" title="Pamishan Creatures" style="width: 400px;" /><hr />

	<?php
	// store the option
	$opt = $_GET['opt'];

	echo "<h3>Make a selection based on your observations:</h3>";
	// your code goes here - use conditional statements to successfully identify the creatures.
	if ($opt == 1 OR $opt == "") {
		// you are at the beginning - ask the first question
		echo "<h4>Key Item #1</h4>";
		echo "&raquo; <a href='pamishan-creatures.php?opt=2'>The creature has a large wide head</a><br />&raquo; <a href='pamishan-creatures.php?opt=11'>The creature has a small narrow head</a>";
	} else if ($opt == 2) {
		// questions for option 2 go here along with their link options
      echo "<h4>Key Item #2</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=3'>It has 3 eyes</a><br />&raquo; <a href='pamishan-creatures.php?opt=7'>It has 2 eyes</a>";
  } else if ($opt == 3) {
      echo "<h4>Key Item #3</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=4'>There is a star in the middle of its chest</a><br />&raquo; <a href='pamishan-creatures.php?opt=6'>There is no star in the middle of its chest</a>";
  } else if ($opt == 4) {
      echo "<h4>Key Item #4</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=brha'>The creature has hair spikes</a><br />&raquo; <a href='pamishan-creatures.php?opt=5'>The creature has no hair spikes</a>";
  } else if ($opt == brha) {
      echo "<h4>The creature you have identified is the Broadus Hairus</h4>";
      echo '<img src="images/broadus-hairus.jpg" alt="broadushairus" title="Broadus Hairus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 5) {
      echo "<h4>Key Item #5</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=brar'>The bottom of the creature is arch-shaped</a><br />&raquo; <a href='pamishan-creatures.php?opt=brem'>The bottom of the creature is M-shaped</a>";
  } else if ($opt == brar) {
      echo "<h4>The creature you have identified is the Broadus Archus</h4>";
      echo '<img src="images/broadus-archus.jpg" alt="broadusarchus title="Broadus Archus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == brem) {
      echo "<h4>The creature you have identified is the Broadus Emmus</h4>";
      echo '<img src="images/broadus-emmus.jpg" alt="broadusemmus" title="Broadus Emmus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 6) {
      echo "<h4>Key Item #6</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=brpl'>The creature has an arch-shaped bottom</a><br />&raquo; <a href='pamishan-creatures.php?opt=brtr'>The creature has an M-shaped bottom</a>";
  } else if ($opt == brpl) {
      echo "<h4>The creature you have identified is the Broadus Plainus</h4>";
      echo '<img src="images/broadus-plainus.jpg" alt="broadusplainus" title="Broadus Plainus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == brtr) {
      echo "<h4>The creature you have identified is the Broadus Tritops</h4>";
      echo '<img src="images/broadus-tritops.jpg" alt="broadustritops" title="Broadus Tritops" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 7) {
      echo "<h4>Key Item #7</h4>";
      echo "&raquo <a href='pamishan-creatures.php?opt=8'>The creature has hairy spikes</a><br />&raquo; <a href='pamishan-creatures.php?opt=10'>The creature has no spikes</a>";
  } else if ($opt == 8) {
      echo "<h4>Key Item #8</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=brhay'>There is a star in the middle of its body</a><br />&raquo; <a href='pamishan-creatures.php?opt=9'>There is no star in the middle of its body</a>";
  } else if ($opt == brhay) {
      echo "<h4>The creature you have identified is the Broadus Hairystarus</h4>";
      echo '<img src="images/broadus-hairystus.jpg" alt="broadushairystarus" title="Broadus Hairystarus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 9) {
      echo "<h4>Key Item #9</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=brhayem'>The creature has an arch shaped bottom</a><br />&raquo; <a href='pamishan-creatures.php?opt=brki'>The creature has an M shaped bottom</a>";
  } else if ($opt == brhayem) {
      echo "<h4>The creature you have identified is the Broadus Hairyemmus</h4>";
      echo '<img src="images/broadus-hairyemus.jpg" alt="hairyemmus" title="Broadus Hairyemmus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == brki) {
      echo "<h4>The creature you have identified is the Broadus Kiterus</h4>";
      echo '<img src="images/broadus-kiterus.jpg" alt="broaduskiterus" title="Broadus Kiterus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 10) {
      echo "<h4>Key Item #10</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=brwa'>The body is symmetrical</a><br />&raquo; <a href='pamishan-creatures.php?opt=brand'>The body is not symmetrical</a>";
  } else if ($opt == brwa) {
      echo "<h4>The creature you have identified is the Broadus Walter</h4>";
      echo '<img src="images/broadus-walter.jpg" alt="broaduswalter" title="Broadus Walter" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == brand) {
      echo "<h4>The creature you have identified is the Broadus Anderson</h4>";
      echo '<img src="images/broadus-anderscus.jpg" alt="broadusanderson" title="Broadus Anderson" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 11) {
      echo "<h4>Key Item #11</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=12'>The creature has no antennae</a><br />&raquo; <a href='pamishan-creatures.php?opt=14'>The creature has antennae</a>";
  } else if ($opt == 12) {
      echo "<h4>Key Item #12</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=nawa'>There are spikes on the face</a><br />&raquo; <a href='pamishan-creatures.php?opt=13'>There are no spikes on the face</a>";
  } else if ($opt == nawa) {
      echo "<h4>The creature you have identified is the Narrowus Wolfus</h4>";
      echo '<img src="images/narrowus-wolfus.jpg" alt="narrowuswolfus" title="Narrowus Wolfus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 13) {
      echo "<h4>Key Item #13</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=nabl'>The creature has no spikes anywhere</a><br />&raquo; <a href='pamishan-creatures.php?opt=nast'>There are spikes on the right leg</a>";
  } else if ($opt == nabl) {
      echo "<h4>The creature you have identified is the Narrowus Blankus</h4>";
      echo '<img src="images/narrowus-blankus.jpg" alt="narrowusblankus" title="Narrowus Blankus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == nast) {
      echo "<h4>The creature you have identified is Narrowus Starboardus</h4>";
      echo '<img src="images/narrowus-starbops.jpg" alt="narrowusstarboardus" title="Narrowus Starboardus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 14) {
      echo "<h4>Key Item #14</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=15'>The creature has 2 eyes</a><br />&raquo; <a href='pamishan-creatures.php?opt=nacy'>The creature has 1 eye</a>";
  } else if ($opt == nacy) {
      echo "<h4>The creature you have identified is the Narrowus Cyclops</h4>";
      echo '<img src="images/narrowus-cyclops.jpg" alt="narrowuscyclops" title="Narrowus Cyclops" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 15) {
      echo "<h4>Key Item #15</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=16'>The creature has a mouth</a><br />&raquo; <a href='pamishan-creatures.php?opt=17'>The creature has no mouth</a>";
  } else if ($opt == 16) {
      echo "<h4>Key Item #16</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=narpor'>There are spikes on the left leg</a><br />&raquo; <a href='pamishan-creatures.php?opt=narpla'>There are no spikes at all</a>";
  } else if ($opt == narpor) {
      echo "<h4>The creature you have identified is the Narrowus Portus</h4>";
      echo '<img src="images/narrowus-portus.jpg" alt="narrowusportus" title="Narrowus Portus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == narpla) {
      echo "<h4>The creature you have identified is the Narrowus Plainus</h4>";
      echo '<img src="images/narrowus-plainus.jpg" alt="narrowusplainus" title="Narrowus Plainus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 17) {
      echo "<h4>Key Item #17</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=18'>The creature has spikes</a><br />&raquo; <a href='pamishan-creatures.php?opt=nargeo'>The creature has no spikes</a>";
  } else if ($opt == nargeo) {
      echo "<h4>The creature you have identified is the Narrowus Georginia</h4>";
      echo '<img src="images/narrowus-georgius.jpg" alt="narrowusgeorginia" title="Narrowus Georginia" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 18) {
      echo "<h4>Key Item #18</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=19'>There are spikes on the head</a><br />&raquo; <a href='pamishan-creatures.php?opt=narmon'>There are spikes on the right leg</a>";
  } else if ($opt == narmon) {
      echo "<h4>The creature you have identified is the Narrowus Montanian</h4>";
      echo '<img src="images/narrowus-montanus.jpg" alt="narrowusmontanian" title="Narrowus Montanian" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == 19) {
      echo "<h4>Key Item #19</h4>";
      echo "&raquo; <a href='pamishan-creatures.php?opt=narbea'>There are spikes covering the face</a><br />&raquo; <a href='pamishan-creatures.php?opt=narfuz'>There are spikes only on the outside edge of the head</a>";
  } else if ($opt == narbea) {
      echo "<h4>The creature you have identified is the Narrowus Beardus</h4>";
      echo '<img src="images/narrowus-beardus.jpg" alt="narrowusbeardus" title="Narrowus Beardus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  } else if ($opt == narfuz) {
      echo "<h4>The creature you have identified is the Narrowus Fuzzus</h4>";
      echo '<img src="images/narrowus-fuzzus.jpg" alt="narrowusfuzzus" title="Narrowus Fuzzus" /><br />';
      echo '<h3><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pamishan-creatures.php">Restart</a></h3>';
  }
	?>

</body>
</html>
