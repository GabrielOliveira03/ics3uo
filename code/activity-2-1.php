<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Appending and Syntax PHP</title>

		<meta name="description" content="Gabriel Oliveira's webpage for the ICS3UO course.">
		<meta name="author" content="Gabriel Oliveira">
		<link rel="shortcut icon" href="images/logo.ico">
    <style>
      body {
        font-family: "Futura", Arial, sans-serif;
        background-color: #eee;
      }
    </style>
  </head>
  <body>
    <h1>PHP Basics: Syntax</h1>

    <?php
      echo "This is my first PHP document.  The text in this paragraph was displayed using the echo command.  This is pretty cool."; ?><br />
  <?  echo "This sentence would not" . " be complete unless I learn how to properly" . " append strings.";
    ?>
  </body>
</html>
