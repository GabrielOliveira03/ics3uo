<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gabriel Oliveira: ICS3UO</title>

	<meta name="description" content="Parcel Delivery Services">
	<meta name="author" content="Gabriel Oliveira">
	<link rel="shortcut icon" href="images/logo.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/performance_tasks.css">
</head>
<body>
  <?

    if ($_POST['submitbtn']) {
      $fullname = $_POST['full_namex'];
      $email = $_POST['emailx'];
      $phoneNumber = $_POST['numx'];
      $length = $_POST['lengthx'];
      $height = $_POST['heightx'];
      $width = $_POST['widthx'];
      $mass = $_POST['massx'];
      $distance = $_POST['distancex'];
    };

    function volume($length, $width, $height) {
      return $length * $width * $height;
    }

    function isValidPackageInput($value, $min, $max) {
      return $value > $min && $value <= $max;
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
    if ($_POST['submitbtn']) {

      $error_message = "";

      $validInput = isValidInput($fullname, $email, $phoneNumber, $length, $width, $height, $mass, $distance);

      if ($validInput == "") {
        $costData =  performCalculations($length, $width, $height, $mass, $distance);
      } else {
        $error_message = $validInput;
      }
    }
        function performCalculations($length, $width, $height, $mass, $distance) {
          $result["vol"] = volume($length, $width, $height);
		      $result["cost"] = volumeCost($result["vol"]);
					$result["subtotal"] = $result["cost"] + massCost($mass) + distanceCost($distance);
					$result["total"] = number_format((float)$result["subtotal"] + taxCost($result["subtotal"]), 2, ".", "");

          return $result;
        }


        function sendEmail($fullname, $email, $length, $width, $height, $vol, $mass, $total) {
					$to_company = "1oliveiragab@hdsb.ca";
					$subject_to_company = "Package Details";
          $email_message_to_company_header = "<p>An order has been placed on your website.</p>";
          $email_message_body = "<p><strong>Package Details:</strong></p>";
          $email_message_body .= "<p>Box Dimensions (length by width by height): " . $length . " cm x " . $width . " cm x " . $height . " cm.</p>";
					$email_message_body .= "<p>Volume: " . $vol . " cm3.</p>";
          $email_message_body .= "<p>Mass: " . $mass . " kg.</p>";
					$email_message_body .= "<p>Total cost: $" . $total . "</p>";
					$email_message_body .= "<p>HST is 13%, and one box was ordered.";

					$subject_to_user = "Your Order Has Been Placed";
					$email_message_to_user_header = "<p>Dear " . $fullname . ",</p><p>Your order has been placed.</p>";
					$email_message_to_user_footer = "<p>Thank you for ordering from 5 Star Delivery Service. Your package will arrive shortly.</p>";
					$email_message_to_user_footer .= "<p>Customer Relationship Expert</p>";

          $email_message_to_company = $email_message_to_company_header . $email_message_body;
          $email_message_to_user = $email_message_to_user_header . $email_message_body . $email_message_to_user_footer;
          //echo $email_message_to_company;
          //echo $email_message_to_user;
					mail($to_company, $subject_to_company, $email_message_to_company);
					mail($email, $subject_to_user, $email_message_to_user);
        }

        function isValidFormInput($field) {
          return (isset($field) && trim($field) != '');
        }

        function validPersonalData($fullname, $email, $phoneNumber) {
          $error_message = "";

          if (!isValidFormInput($fullname)) {
            $error_message .= "<p>A name was not entered.</p>";
					}

          if (!isValidFormInput($email)) {
            $error_message .= "<p>An email was not entered.</p>";
					}

          if (!isValidFormInput($phoneNumber)) {
            $error_message .= "<p>A phone number was not entered.</p>";
					}

          return $error_message;
        }

        function validPackageData($height, $width, $length, $mass, $distance) {
          $error_message = "";
          $VOLUME_INPUT_MIN = 0;
          $VOLUME_INPUT_MAX = 200;
          $MASS_INPUT_MIN = 0;
          $MASS_INPUT_MAX = 50;
          $DISTANCE_INPUT_MIN = 0;
          $DISTANCE_INPUT_MAX = 100;

          if (!isValidPackageInput($height, $VOLUME_INPUT_MIN, $VOLUME_INPUT_MAX)) {
            $error_message .= "<p>Height must be between " . $VOLUME_INPUT_MIN . " and " . $VOLUME_INPUT_MAX .  ".</p>";
					}

          if (!isValidPackageInput($width, $VOLUME_INPUT_MIN, $VOLUME_INPUT_MAX)) {
            $error_message .= "<p>Width must be between " . $VOLUME_INPUT_MIN . " and " . $VOLUME_INPUT_MAX .  ".</p>";
					}

          if (!isValidPackageInput($length, $VOLUME_INPUT_MIN, $VOLUME_INPUT_MAX)) {
            $error_message .= "<p>Length must be between " . $VOLUME_INPUT_MIN . " and " . $VOLUME_INPUT_MAX .  ".</p>";
					}

          if (!isValidPackageInput($mass, $MASS_INPUT_MIN, $MASS_INPUT_MAX)) {
            $error_message .= "<p>Mass must be between " . $MASS_INPUT_MIN . " and " . $MASS_INPUT_MAX .  ".</p>";
					}

          if (!isValidPackageInput($distance, $DISTANCE_INPUT_MIN, $DISTANCE_INPUT_MAX)) {
            $error_message .= "<p>Distance must be between " . $DISTANCE_INPUT_MIN . " and " . $DISTANCE_INPUT_MAX .  ".</p>";
					}

          return $error_message;
        }

        function isValidInput($fullname, $email, $phoneNumber, $length, $width, $height, $mass, $distance) {
          $result = "";
          $result = validPersonalData($fullname, $email, $phoneNumber);
          $result .= validPackageData($height, $width, $length, $mass, $distance);
          return $result;
        }

  ?>

	<nav>
    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
  <div id="container">

    <header id="page-header" class="clearfix">
			<h1>&#9733; 5 Star Delivery Company &#9733;</h1>
      <h2>Parcel Delivery Service</h2>
			<img title="Delivery Image" alt="deliveryimage" src="images/parcel_delivery.jpg" />
			<p>On this webpage, you will fill out a form that places an order for a parcel delivery. We only ship one item at a time, and it can only be in a box, so you must fill out your personal information as well as the dimensions and mass of the box. Also, you must fill out the distance that the box will be shipped. The reason for filling out all these details is to calculate the total cost of the delivery. How far the destination is, the mass of the box and the size are all factors that  determine the price of the box. There is also a comments section in which you can write comments or ask questions about the box. After you have placed an order, an email will be sent to you and our company to verify the order has been placed, as well as specifying the relevant information to the order.
			</p>
		</header>

    <? if (!$_POST['submitbtn'] || $error_message != "") { ?>
      <p class="mandatory-fields-note"><strong>Note:</strong> All fields are mandatory.</p>
      <form id="parcel-delivery-form" class="half-page" name="form" action="parcel-delivery-service.php" method="post">

        <h3>Personal Information</h3>

        <div class="form-row">
          <label class="label" for="full_namex">Full Name:<label>
          <input class="input-text" id="full_namex" type="text" value="<?= $fullname ?>" name="full_namex" placeholder="Full Name" />
        </div>

        <div class="form-row">
          <label class="label" for="emailx">Email:<label>
          <input class="input-text" id="emailx" type="email" value="<?= $email ?>" name="emailx" placeholder="Email" />
        </div>

        <div class="form-row">
          <label class="label" for="numx">Phone Number:<label>
          <input class="input-text" id="numx" type="text" value="<?= $phoneNumber ?>" name="numx" placeholder="Phone Number" />
        </div>

        <h3>Package Information</h3>

        <div class="form-row">
          <label class="label" for="heightx">Height(cm):
             <span class="required-field-info">Must be between 0 and 200</span>
          </label>
          <input class="input-text" id="heightx" type="number" value="<?= $height ?>" name="heightx" placeholder="Height (cm)" />
        </div>

        <div class="form-row">
          <label class="label" for="widthx">Width(cm):
             <span class="required-field-info">Must be between 0 and 200</span>
          </label>
          <input class="input-text" id="widthx" type="number" value="<?= $width ?>" name="widthx" placeholder="Width(cm)" />
        </div>

        <div class="form-row">
          <label class="label" for="lengthx">Length(cm):
             <span class="required-field-info">Must be between 0 and 200</span>
          </label>
          <input class="input-text" id="lengthx" type="number" value="<?= $length ?>" name="lengthx" placeholder="Length (cm)" />
        </div>

        <div class="form-row">
          <label class="label" for="massx">Mass(kg):
             <span class="required-field-info">Must be between 0 and 50</span>
          </label>
          <input class="input-text" id="massx" type="number" value="<?= $mass ?>" name="massx" placeholder="Mass (kg)" />
        </div>

        <div class="form-row">
          <label class="label" for="distancex">Distance(km):
             <span class="required-field-info">(Must be between 0 and 100)</span>
          </label>
          <input class="input-text" id="distancex" type="number" value="<?= $distance ?>" name="distancex" placeholder="Distance (km)" />
        </div>

        <div class="form-row">
          <h3>Comments</h3>
          <textarea form="parcel-delivery-form" rows="4" cols="54"></textarea>
        </div>

        <div class="form-row center">
          <input class="submit-btn" type="submit" value="Place Order" name="submitbtn" />
        </div>
      </form>
    <? } ?>


    <? if ($_POST['submitbtn']) { ?>
      <? if ($error_message == "") { ?>
        <h3 class="center">Order Details</h3>
        <div class="alert alert-info">
          Your order has been submitted
        </div>
        <div class="user-response">
          <p><span class="user-response-label">Name:</span> <?= $fullname; ?></p>
          <p><span class="user-response-label">Phone Number:</span> <?= $phoneNumber; ?></p>
          <p><span class="user-response-label">Email:</span> <?= $email; ?></p>
          <p><span class="user-response-label">Box Dimensions (length by width by height):</span><br>
          <?= $length ?> cm x <?= $width ?> cm x <?= $height ?> cm</p>
          <p><span class="user-response-label">Volume:</span> <?= $costData["vol"]; ?> cm3</p>
          <p><span class="user-response-label">Mass:</span> <?= $mass; ?> kg</p>
          <p><span class="user-response-label">Total Cost:</span> <?= $costData["subtotal"]; ?></p>
        </div>
        <div class="alert alert-success">
        A confirmationn email has been sent to <?= $email ?>.
        </div>
        <? sendEmail($fullname, $email, $length, $width, $height, $costData["vol"], $mass, $costData["total"]) ?>
        <? } else { ?>
          <div class="alert alert-danger">
            <?= $error_message ?>
          </div>
          <!--p>
            The order was not placed. Please make sure that<br />
            The dimensions are all greater than 0cm and less than 200cm,<br />
            The mass of the box is greater than 0kg and less than 50kg,<br />
            and that the distance shipped is less than 100km.";
          </p-->
      <? } ?>
    <? } ?>
    </div>
  </body>
</html>
