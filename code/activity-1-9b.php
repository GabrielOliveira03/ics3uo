<!DOCTYPE html>
<html lang="en">
<head>
  <title>HTML Input and Forms</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <link rel="shortcut icon" href="images/logo.ico">
	<style type="text/css">

  body {
    background-image: url("https://i.pinimg.com/originals/d6/33/71/d633714327d7b8cd807fc00ed83dd102.jpg");
    font-family: "Futura";
    padding: 0;
  }
  .options {
    position: relative;
    padding: 20px;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    background: rgba(255,255,255,0.7);
  }

  form {
  		position: relative;
  		padding: 20px;
  		margin-left: auto;
  		margin-right: auto;
  		width: 50%;
  		background: rgba(255,255,255,0.7);
  }

  .submit {
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

  .submit:hover{
    background: #ffad66;
    color: #ffffff;
    -webkit-box-shadow: 0px 6px 0px #e07f43;
    -moz-box-shadow: 0px 6px 0px #e07f43;
    box-shadow: 0px 6px 0px #e07f43;
  }

  .submit:active {
    -webkit-box-shadow: 0px 2px 0px #d35400;
    -moz-box-shadow: 0px 2px 0px #d35400;
    box-shadow: 0px 2px 0px #d35400;
    transform: translateY(4px);
  }
  </style>
</head>
<body>
  <h1 style="text-align: center";>Order Your Pizza</h1>

<div class="options">
<?php
if ($_POST['orderbtn']) {
  $name = $_POST['name'];
  $phonenum = $_POST['phone'];
  $pizza = $_POST['pizza'];
  $sauce = $_POST['sauce'];
  $extra1 = $_POST['extra1'];
  $extra2 = $_POST['extra2'];
  $extra3 = $_POST['extra3'];
  $instruction = $_POST['instruction'];

  echo "<p>Your name is $name.</p>";
  echo "<p>Your phone number is $phonenum.</p>";
  echo "<p>You have chosen $pizza pizza.</p>";
  echo "<p>You have chosen $sauce sauce.</p>";

  if (empty($extra1)) {
    echo "";
} else {
    echo "<p>You want extra cheese.</p>";
  }

  if (empty($extra2)) {
    echo "";
} else {
    echo "<p>You want a cheese-filled crust.</p>";
  }

  if (empty($extra3)) {
    echo "";
} else {
    echo "<p>You want a gluten-free crust.</p>";
  }

  if (empty($instruction)) {
    echo "";
} else {
    echo "<p>Your delivery instructions are: $instruction</p>";
}

    echo "<h3>Is this correct?</h3>";
    echo '<button class="submit"><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/pizzaordered.php" style="text-decoration: none; color: #ffffff;">Place Order</a></button> <button class="submit"><a href="https://icsprogramming.ca/2018-2019/oliveiraff730/activity-1-9b.php" style="text-decoration: none; color: #ffffff;">Cancel Order</a></button>';

} ?>

</div>

  <form name="form1" action="activity-1-9b.php" method="post">

    Full Name: <input type="text" name="name" value="" placeholder="FULL NAME" required></input>
  	<hr size="1" />

    Phone Number: <input type="tel" name="phone" value="" placeholder="123-456-7890" required></input>
  	<hr size="1" />

    <h3>Type of Pizza</h3>
    <input type="radio" name="pizza" value="Pepperoni"> Pepperoni</input><br />
    <input type="radio" name="pizza" value="Canadian"> Canadian</input><br />
    <input type="radio" name="pizza" value="Hawaiian"> Hawaiian</input><br />
    <input type="radio" name="pizza" value="Vegetarian" required> Vegetarian</input>
    <hr size="1" />

    <h3>Sauce Type</h3>
    <select name="sauce" required>
  		<option value="">- Choose a Sauce -</option>
  		<option value="Tomato">Tomato</option>
  		<option value="Salsa">Salsa</option>
  		<option value="Alfredo">Alfredo</option>
  		<option value="Ranch">Ranch</option>
  	</select>
    <hr size="1" />

    <h3>Optional Extras</h3>
    <input type="checkbox" name="extra1" value="cheese"> Extra Cheese</input><br />
    <input type="checkbox" name="extra2" value="crust"> Cheese-Filled Crust</input><br />
    <input type="checkbox" name="extra3" value="gluten"> Gluten-Free Crust</input><br />
    <hr size="1" />

    <h3>Delivery Instructions</h3>
    <textarea name="instruction" rows="5" cols="50"></textarea>
    <hr size="1" />

    <input class="submit" type="submit" name="orderbtn" value="Order"></input>

</form>
</body>
</html>
