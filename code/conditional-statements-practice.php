<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Gabriel Oliveira: ICS3UO</title>

		<meta name="description" content="Gabriel Oliveira's webpage for the ICS3UO course.">
		<meta name="author" content="Gabriel Oliveira">
		<link rel="shortcut icon" href="images/logo.ico">
    <style>
      body {
        background-color: #eee;
        font-family: "Futura";
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Parsing Variables from URL</h1>
    <h2>Define num1 and num2 in the URL</h2>
    <hr />
    <?php
// conditional statements (IF Statements)
$num = $_GET['num1'];
$num2 = $_GET['num2'];

if ($num == "5") {
	echo "num1 (" . $num  . ") is equal to 5.";
}

// conditional statements (IF not equal to)
if ($num != "5") {
	echo "num1 (" . $num  . ") is not equal to 5.";
}
echo "<hr size=\"1\">";

// conditional statements (IF, ELSE IF, and ELSE)
if ($num < "5") {
	echo "num1 (" . $num  . ") is less than 5.";
}
else if ($num > "5") {
	echo "num1 (" . $num  . ") is greater than 5.";
}
else {
	echo "num1 (" . $num  . ") is equal to 5.";
}
echo "<hr size=\"1\">";

// conditional statements (comparing two variables)
if ($num > $num2) {
	echo $num . " is greater than " . $num2;
}
else if ($num < $num2) {
	echo $num . " is less than " . $num2;
}
else {
	echo $num . " is equal to " . $num2;
}
echo "<hr size=\"1\">";

// conditional statements (comparing two variables - OR and AND)
if ($num == "5" OR $num2 == "20") {
	echo "num1 is FIVE <b>or</b> num 2 is TWENTY.";
} else {
            echo "num1 is not FIVE <b>or</b> num 2 is not TWENTY.";
}

echo "<hr size=\"1\">";
if ($num == "5" AND ($num2 == "20" OR $num2 == "15") ) {
	echo "num1 is FIVE and num2 is TWENTY or FIFTEEN.";
} else {
            echo "num1 is not FIVE <b>and</b> num 2 is not TWENTY or FIFTEEN.";
}
?>

  </body>
</html>
