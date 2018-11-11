<!DOCTYPE html>

<html lang="en">
<head>
	<title>Introduction to PHP</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <link rel="shortcut icon" href="images/logo.ico">
	<style type="text/css">
	body {
		font-family: "Futura";
		font-size: 1.0em;
		color: #ffffff;
		/* cool css3 background from: http://lea.verou.me/css3patterns/ */
		background:
		linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
		linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
		linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
		linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
		linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
		linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
		background-color: #131313;
		background-size: 20px 20px;
	}
  .options {
    color: #ffff00;
  }
	.fancyInput {
		border: 1px solid #d35400;
		outline: none;
		font-size: 1.5em;
	}
	.fancyInput:hover {
		border: 1px solid #2980b9;
	}
	h1, h2 {
		color: #ecf0f1;
	}
  .subButton {
    font-size: 28px;
    color: #ecf0f1;
    text-decoration: none;
    border-radius: 5px;
    border: solid 1px #f39c12;
    background:#e67e22;
    text-align: center;
    -webkit-transition: all 0.1s;
    -moz-transition: all 0.1s;
    transition: all 0.1s;
    -webkit-box-shadow: 0px 6px 0px #d35400;
    -moz-box-shadow: 0px 6px 0px #d35400;
    box-shadow: 0px 6px 0px #d35400;
    font-family: "Futura";
  }

  .subButton:hover{
    background: #ffad66;
    color: #ffffff;
    -webkit-box-shadow: 0px 6px 0px #e07f43;
    -moz-box-shadow: 0px 6px 0px #e07f43;
    box-shadow: 0px 6px 0px #e07f43;
  }

  .subButton:active {
    -webkit-box-shadow: 0px 2px 0px #d35400;
    -moz-box-shadow: 0px 2px 0px #d35400;
    box-shadow: 0px 2px 0px #d35400;
    transform: translateY(4px);
  }

	p.output {
		padding: 10px;
		margin: 10px;
		background: rgba(255,255,255,0.6);
		font-size: 1.2em;
	}
	</style>
</head>
<body>
<?
	echo "<h2>What is PHP?</h2>
	<p><b>PHP</b> (recursive acronym for <b>P</b>HP: <b>H</b>ypertext <b>P</b>reprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>";
?>

<h2>Simple Form Validation with PHP</h2>

<div class="options">
<?
	/* the if statement below makes the code inside of it
	only show up if the button in the form named 'submitBtn' is clicked.
	You can have multiple submit buttons, but they must have different names.*/
	if ($_POST['submitBtn1']) {
		// set the variables...
		$theName = $_POST['theName'];
		$socksColour = $_POST['socksColour'];
    $email = $_POST['email'];
    $chkbox1 = $_POST['chkbox1'];
    $chkbox2 = $_POST['chkbox2'];
    $chkbox3 = $_POST['chkbox3'];
    $choice = $_POST['choice'];

    if (empty($theName)) {
      echo "";
  } else {
      echo "<p>Your name is $theName. </p>";
    }

    if (empty($socksColour)) {
      echo "";
  } else {
      echo "<p>The colour of socks is $socksColour. </p>";
    }

    if (empty($email)) {
      echo "";
  } else {
      echo "<p>Your email is $email </p>";
    }

    if (empty($chkbox1)) {
      echo "";
  } else {
      echo "<p>You clicked on $chkbox1. </p>";
    }

    if (empty($chkbox2)) {
      echo "";
  } else {
      echo "<p>You clicked on $chkbox2. </p>";
    }

    if (empty($chkbox3)) {
      echo "";
  } else {
      echo "<p>You clicked on $chkbox3. </p>";
    }

    if (empty($choice)) {
      echo "";
  } else {
      echo "<p>You have chosen $choice. </p>";
    }

	}
?>
</div>


 <h2>The Form</h2>
 <p>Complete the form below and press submit.  Notice how the values are now output (echoed) to the page based and the <b>variable name</b> assigned in the form.</p>
<h3>Form Attributes</h3>
 <ul>
	<li> "name" is the unique name of the form</li>
	<li> "get" method shows the variables and values in the address bar of your browser</li>
	<li> "post" method hides the type variables and values - the information is posted to the server</li>
	<li> "action" is the URL that the form will direct to once the submit button is pressed</li>
</ul>

<form name="form1" action="introduction-to-php.php" method="post">
	<b>Name:</b><br />
	<input type="text" name="theName" value="" class="fancyInput"></input><br />
	<b>Colour of Socks:</b><br />
	<select name="socksColour" class="fancyInput">
		<option value=""></option>
		<option value="blue">Blue Socks</option>
		<option value="green">Green Socks</option>
		<option value="red">Red Socks</option>
	</select><br />
  <b>Email:</b><br />
  <input type="email" name="email" value="" class="fancyInput"></input><br />

  <b>Animals:</b><br />
  <input type="checkbox" name="chkbox1" value="Cat" class="fancyInput"> Cat</input><br />
  <input type="checkbox" name="chkbox2" value="Dog" class="fancyInput"> Dog</input><br />
  <input type="checkbox" name="chkbox3" value="Bird" class="fancyInput"> Bird</input><br />

  <b>Apple or Android?</b><br />
  <input type="radio" name="choice" value="Apple" class="fancyInput"> Apple</input><br />
  <input type="radio" name="choice" value="Android" class="fancyInput"> Android</input><br /><br />

	<input type="submit" value="SUBMIT" name="submitBtn1" class="subButton"></input>
</form>

</body>
</html>
