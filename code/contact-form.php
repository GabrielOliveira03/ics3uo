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
  </style>
</head>
<body>
  <div id="container">
    <?php
    function clear_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $form_submitted = false;

    // only send the e-mail if the submit button has been clicked.
    if ($_POST['submitbtn']) {
        // to send HTML mail, you can set the Content-type header.
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        $to = "1oliveiragab@hdsb.ca";  // recipient e-mail address
        $recipient_name = "Gabriel Oliveira";
        $subject_to_sender = "Email has been sent";
        $message_to_sender = "Hello, I have received your email and will get back to you with a response as soon as possible. This is an automated message.";

        $form_is_valid = true;
        $name_error_message = $subject_error_message = $message_error_message = $email_error_message = "";

        $full_name_from_form = clear_input($_POST['full_namex']);
        if (empty($full_name_from_form)) {
          $form_is_valid = false;
          $name_error_message = "Full name is required";
        }

        $email_from_form = clear_input($_POST['emailx']);
        if (empty($email_from_form)) {
          $form_is_valid = false;
          $email_error_message = "Email address is required";
        } else {
          if (!filter_var($email_from_form, FILTER_VALIDATE_EMAIL)) {
            $form_is_valid = false;
            $email_error_message = "Email address is invalid";
          } else {
            $form_is_valid = true;
            $email_error_message = "";
          }
        }

        $subject = clear_input($_POST['subjectx']);
        if (empty($subject)) {
          $form_is_valid = false;
          $subject_error_message = "Subject is required";
        }

        $email_message = clear_input($_POST['messagex']);
        if (empty($email_message)) {
          $form_is_valid = false;
          $message_error_message = "Message is required";
        }

        $password = clear_input($_POST['passwordx']);
        if (empty($password)) {
          $form_is_valid = false;
          $password_error_message = "Password is required";
        }

        if ($form_is_valid) {

          if ($password == "icssecure") {
                // additional headers
                $headers .= "From: " . $full_name_from_form . "\n";  // from information
                $headers .= " <" . $email_from_form . ">"; // e-mail address
                $headers .= "\n";

                mail($to, $subject, $email_message, $headers); // send the e-mail function

                $headers  = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                $headers .= "From: " . $recipient_name . "\n";  // from information
                $headers .= " <" . $to . ">"; // e-mail address
                $headers .= "\n";
                mail($email_from_form, $subject_to_sender, $message_to_sender, $headers);
                //mail($email_from_form, $subject_to_sender, $message_to_sender, $headers);
                $form_submitted = true;
          } else {
                $password_error_message = "Sorry, your captcha secure code was not correct";
          }
        } else {
          echo $form_error_message;
        }
    }
    ?>
    <header id="page_header">
      <h1>Email Contact Form</h1>
    </header>

    <?php if ($form_submitted) {
      echo "<div class='success-message'><p>Thank you for contacting us. Your message has been sent to " . $to . ".</p></div>";
      echo "<div class='success-message'><p>You should receive a confirmation e-mail shortly.</p></div>";
    } else  { ?>
        <form class="contact-us" name="form" action="contact-form.php" method="post">
          <div class="form-row">
            <label class="label" for="full_namex">Full Name:<label>
            <div class="input-holder">
              <input class="input-text" id="full_namex" type="text" value="<?php echo $full_name_from_form;?>" name="full_namex" placeholder="Full Name">
              <span class="error"><?php echo $name_error_message;?></span>
            </div>
          </div>
          <div class="form-row">
            <label class="label" for="emailx">Email:<label>
            <div class="input-holder">
              <input class="input-text" id="emailx" type="email" value="<?php echo $email_from_form;?>" name="emailx" placeholder="Email">
              <span class="error"><?php echo $email_error_message;?></span>
            </div>
          </div>
          <div class="form-row">
            <label class="label" for="subjectx">Subject:<label>
            <div class="input-holder">
              <input class="input-text" id="subjectx" type="text" value="<?php echo $subject;?>" name="subjectx" placeholder="Message Subject">
              <span class="error"><?php echo $subject_error_message;?></span>
            </div>
          </div>
          <div class="form-row">
            <label class="label" for="messagex">Message:<label>
            <div class="input-holder">
              <textarea class="input-text" id="messagex" type="text" value="" name="messagex" placeholder="Your Message"><?php echo $email_message;?></textarea>
              <span class="error"><?php echo $message_error_message;?></span>
            </div>
          </div>
          <div class="form-row">
            <label class="label" for="passwordx">Password:<label>
            <div class="input-holder">
              <input class="input-text" type="password" value="<?php echo $password;?>" name="passwordx" placeholder="Password">
              <span class="error"><?php echo $password_error_message;?></span>
            </div>
          </div>
          <div class="required-info">
            <p>
              <span>All fields are required</span>
            </p>
          </div>

          <div class="button">
            <input class="submit-btn" type="submit" value="Contact Us" name="submitbtn" />
          </div>
        </form>
    <?php } ?>
</div>
</body>
</html>
