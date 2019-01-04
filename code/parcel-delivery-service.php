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

  body {
    font-family: "Futura";
    background-color: #ffffff;
  }
	.home-button {
      background-color: #1e90ff;
      color: #ffffff;
      padding: 12px 16px;
      margin-left: 1em;
      font-size: 16px;
      cursor: pointer;
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

	#page_header h2 {
		text-align: center;
	}

	#page_header img {
		width: 50%;
		float: left;
	}

	#page_header p {
		width: 50%;
	}

  h3 {
    color: #4287f4;
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

  .button {
    width: 40%;
    text-align: center;
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
	.center {
		display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
	}
	hr {
		height: 5px;
		border: 0px solid #4287f4;
		border-top-width: 1px;
	}
  </style>
</head>
<body>
	<nav>
    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
  <div id="container">
    <header id="page_header">
      <h1>Parcel Delivery Service</h1>

			<h2>&#9733;5 Star Delivery Company&#9733;</h2>
			<img title="Delivery Image" alt="deliveryimage" src="https://www.standardmedia.co.ke/images/wednesday/clgmjmzy27jy5b4ee333c808c.jpg" />
			<p>On this webpage, you will fill out a form that places an order for a parcel delivery. We only ship one item at a time, and it can only be in a box, so you must fill out your personal information as well as the dimensions and mass of the box. Also, you must fill out the distance that the box will be shipped. The reason for filling out all these details is to calculate the total cost of the delivery. How far the destination is, the mass of the box and the size are all factors that  determine the price of the box. There is also a comments section in which you can write comments or ask questions about the box. After you have placed an order, an email will be sent to you and our company to verify the order has been placed, as well as specifying the relevant information to the order.
			</p>
		</header>
		<h3>Personal Information</h3>
    <form class="contact-us" name="form" action="parcel-delivery-service.php" method="post">
      <div class="form-row">
        <label class="label" for="full_namex">Full Name:<label>
        <div class="input-holder">
          <input class="input-text" id="full_namex" type="text" value="" name="full_namex" placeholder="Full Name" />
        </div>
      </div>
      <div class="form-row">
        <label class="label" for="emailx">Email:<label>
        <div class="input-holder">
          <input class="input-text" id="emailx" type="email" value="" name="emailx" placeholder="Email" />
        </div>
      </div>
      <div class="form-row">
        <label class="label" for="numx">Phone Number:<label>
        <div class="input-holder">
          <input class="input-text" id="numx" type="number" value="" name="numx" placeholder="Phone Number" />
        </div>
      </div>
      <h3>Package Information</h3>
      <div class="form-row">
        <label class="label" for="heightx">Height (cm):<label>
        <div class="input-holder">
          <input class="input-text" id="heightx" type="number" value="" name="heightx" placeholder="Height (cm)" />
        </div>
      </div>
      <div class="form-row">
        <label class="label" for="widthx">Width (cm):<label>
        <div class="input-holder">
          <input class="input-text" id="widthx" type="number" value="" name="widthx" placeholder="Width(cm)" />
        </div>
      </div>
      <div class="form-row">
        <label class="label" for="lengthx">Length (cm):<label>
        <div class="input-holder">
          <input class="input-text" id="lengthx" type="number" value="" name="lengthx" placeholder="Length (cm)" />
        </div>
      </div>
      <div class="form-row">
        <label class="label" for="massx">Mass (kg):<label>
        <div class="input-holder">
          <input class="input-text" id="massx" type="number" value="" name="massx" placeholder="Mass (kg)" />
        </div>
      </div>
			<div class="form-row">
        <label class="label" for="distancex">Distance (km):<label>
        <div class="input-holder">
          <input class="input-text" id="distancex" type="number" value="" name="distancex" placeholder="Distance (km)" />
        </div>
      </div>
      <h3>Comments</h3>
      <textarea rows="4" cols="63"></textarea>
      <div class="button">
        <input class="submit-btn" type="submit" value="Place Order" name="submitbtn" /><hr />
      </div>
    </form>

    <?php
			if ($_POST['submitbtn']) {
	      $length = $_POST['lengthx'];
	      $height = $_POST['heightx'];
	      $width = $_POST['widthx'];
	      $mass = $_POST['massx'];
				$distance = $_POST['distancex'];

				function volume($length, $width, $height) {
					return $length * $width * $height;
				}

				function validVolumeInput($value) {
					$min = 0;
					$max = 200;
					return $value > $min && $value <= $max;
				}

				function validMassInput($mass) {
					$min = 0;
					$max = 50;
					return $mass > $min && $mass <= $max;
				}

				function validDistanceInput($distance) {
					$min = 0;
					$max = 100;
					return $distance > $min && $distance <= $max;
				}

				function volumeCost($volume) {
					$COST_PER_CM3 = 0.00025;
					$result = $COST_PER_CM3 * $volume;
					if ($cost >= 15) {
						$result = $cost;
					} else if ($cost < 15) {
						$result = 15;
					}
					return $result;
				}

				function massCost($mass) {
					$result = 0;
					if ($mass >= 0 && $mass <= 2) {
						$result = 2;
					} else if ($mass > 2 && $mass <= 5) {
						$result = 5;
					} else if ($mass > 5 && $mass <= 10) {
						$result = 10;
					} else {
						$result = ($mass * 1.5);
					}
					return $result;
				}
				function distanceCost($distance) {
					$result = 0;
					if ($distance >= 0 && $distance <= 10) {
						$result = 5;
					} else if ($distance > 10 && $distance <= 50) {
						$result = 10;
					} else if ($distance > 50 && $distance <= 100) {
						$result = 15;
					}
					return $result;
				}

				function taxCost($value) {
					return $value * 0.13;
				}

	      if (validVolumeInput($length) && validVolumeInput($width) && validVolumeInput($height) && validMassInput($mass) && validDistanceInput($distance)) {
					$vol = volume($length, $width, $height);
		      $cost = volumeCost($vol);
					$subtotal = $cost + massCost($mass) + distanceCost($distance);
					$total = number_format((float)$subtotal + taxCost($subtotal), 2, ".", "");
					$to_company = "1oliveiragab@hdsb.ca";
					$subject_to_company = "Package Details";
					$email_message_to_company = "An order has been placed on your website. Here are the package details.
					Box Dimensions (length by width by height): " . $length . "cm x " . $width . "cm x " . $height . "cm
					Volume: " . $vol . "cm3
					Mass: " . $mass . "kg
					Total cost: $" . $total . "
					HST is 13%, and one box was ordered.";
					echo "<h3>Order Details</h3>";
					$fullname = $_POST['full_namex'];
					$phonenum = $_POST['numx'];
					$email = $_POST['emailx'];
					if ($_POST['full_namex'] == "") {
						echo "<p>A name was not entered.";
					} else {
					echo "<p>Name: " . $fullname . "</p>";
					}
					if ($_POST['numx'] == "") {
						echo "<p>A phone number was not entered.</p>";
					} else {
					echo "<p>Phone Number: " . $phonenum . "</p>";
					}
					if ($_POST['emailx'] == "") {
					echo "<p>An email was not entered, so an email was not sent to the user.</p>";
					} else {
					echo "<p>Email: " . $email . "</p>";
					}
					echo "<p>Box Dimensions (length by width by height): " . $length . "cm x " . $width . "cm x " . $height . "cm</p>";
					echo "<p>Volume: " . $vol . "cm&#173;</p>";
					echo "<p>Mass: " . $mass . "kg</p>";
					echo "<p>Total cost: $" . $total . "</p>";
					if ($_POST['emailx'] == "") {
					echo "";
				  } else {
					echo "<p>An email has been sent to your email address.</p>";
			  	}
					$subject_to_user = "Your Order Has Been Placed";
					$email_message_to_user = "Your order has been placed. Here are the package details.
					Box Dimensions (length by width by height): " . $length . "cm x " . $width . "cm x " . $height . "cm
					Volume: " . $vol . "cm3
					Mass: " . $mass . "kg
					Total cost: $" . $total . "
					Thank you for ordering from 5 Star Delivery Service. Your package will arrive shortly.";
					mail($to_company, $subject_to_company, $email_message_to_company);
					mail($email, $subject_to_user, $email_message_to_user);
	      } else {
					echo "The order was not placed. Please make sure that<br />
					The dimensions are all greater than 0cm and less than 200cm,<br />
					The mass of the box is greater than 0kg and less than 50kg,<br />
					and that the distance shipped is less than 100km.";
	    	}
			}
     ?>
    </div>
  </body>
</html>
