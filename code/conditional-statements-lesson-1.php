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
      Font-family: "Futura", Arial, sans-serif;
    }

    .home-button {
      position: absolute;
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
      background-color: #ccc;
    }

    #page_header {
      text-align: center;
      border-bottom: 1px solid #4287f4;
      color: #4287f4;
      padding: 0;
      margin: 0 0 1em 0;
    }

    #page_header h1 {
      padding: 0 0 0.2em 0;;
      margin: 0;
    }

    .lead {
      font-size: 1.2em;
      text-align: center;
      color: #333;
    }

    .form-row {
      padding-bottom: 10px;
      padding-right: 30px;
      position: relative;
    }

    .form-container {
      width: 50%;
      margin: 2em auto;
      border: 1px solid #999;
      padding-top: 1.4em;
    }

    form .center {
      text-align: center;
    }

    form label {
      display: inline-block;
      width: 60px;
      font-weight: bold;
      color: #4287f4;
    }

    form input[type="text"] {
      width: 160px;
      padding: 5px 8px;
      font-size: 1.2em;
      color: #666;
      border: none;
      background-image: -webkit-gradient(linear, 0% 0%, 0% 12%, from(#999), to(#fff));
      background-image: -moz-lieanr-gradient(0% 12%, 90deg, #fff, #999);
      background-color: #fff;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
    }

    form input[type="text"]:focus {
      -webkit-box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
      -moz-box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
      box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
    }

    .alert {
      position: relative;
      padding: .75rem 1.25rem;
      margin-bottom: 1rem;
      border: 1px solid transparent;
      border-radius: .25rem;
    }

    .alert-danger {
      color: #721c24;
      background-color: #f8d7da;
      border-color: #f5c6cb;
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
      font-size: 28px;
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

    .student-info {
      width: 50%;
      margin: 0 auto;
      background-color: #444;
      padding: 1.2em 1.4em 0.2em 1.4em;
      color: #fff;
      border-radius: .25em;
      box-shadow: 0.2em 0.2em 0.2em #333;
    }

    .student-info-label {
      color: #4287f4;
      font-weight: bold;
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

    p {
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
	<nav>
    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>

	<div id="container">
		<header id="page_header">
      <h1>Making the Grade!</h1>
    </header>

    <div class="lead">
      <p>This is a mock student report.<br />
    </div>

    <?
    // using if statements to automatically set the grade and comment
    if ($_POST['subBtn']) {
      $error_message = "";
      //store the posted values from the form in variables
    	$stu_name = $_POST['theName'];
    	$stu_mark = $_POST['theMark'];
      $special_comment = $_POST['specialcomment'];

    	if ($stu_name == "" OR $stu_mark == "") {
    		// show error statement if fields are left empty (simple error checking)
        $error_message = "You must include a name and mark!";
    	} else  {
    		// conditions for displaying grade and comment
        if ($stu_mark <=100 AND $stu_mark > 95) {
          $letter_grade = "A+";
          $comment = "Amazing job!";
          $special_comment = "Congratulations " . $stu_name . ", you are doing a fantastic job. Congratulations on all your hard work this term!";
        }
    		if ($stu_mark <= 100 AND $stu_mark > 90) {
    			$letter_grade = "A+";
    			$comment = "Great work, keep it up!";
    		} else if ($stu_mark == 90) {
    			$letter_grade = "A";
    			$comment = "Great work, keep it up!";
    		} else if ($stu_mark < 90 AND $stu_mark > 80) {
    			$letter_grade = "A-";
    			$comment = "Great work, keep it up!";
    		} else if ($stu_mark <= 80 AND $stu_mark > 75 ) {
    			$letter_grade = "B+";
    			$comment = "Good efforts.";
    		} else if ($stu_mark == 75) {
    			$letter_grade = "B";
    			$comment = "Good efforts.";
    		} else if ($stu_mark < 75 AND $stu_mark > 70) {
    			$letter_grade = "B-";
    			$comment = "Good efforts.";
    		} else if ($stu_mark <= 70 AND $stu_mark > 65) {
    			$letter_grade = "C+";
    			$comment = "Good effort, needs improvement.";
    		} else if ($stu_mark == 65) {
    			$letter_grade = "C";
    			$comment = "Good effort, needs improvement.";
    		} else if ($stu_mark < 65 AND $stu_mark > 60) {
    			$letter_grade = "C-";
    			$comment = "Ok effort, needs more improvement.";
    		} else if ($stu_mark <= 60 AND $stu_mark > 55) {
    			$letter_grade = "D+";
    			$comment = "Ok effort, needs more improvement.";
    		} else if ($stu_mark == 55) {
    			$letter_grade = "D";
    			$comment = "Needs improvement.";
    		} else if ($stu_mark < 55 AND $stu_mark >= 50) {
    			$letter_grade = "D-";
    			$comment = "Needs improvement.";
    		} else if ($stu_mark < 50 AND $stu_mark >= 0) {
    			$letter_grade = "Unsuccessful";
    			$comment = "Fail!";
    		} else {
    			$error_message  = "Invalid mark entered - must be between 0 and 100.";
    		}
    	}
    }
    ?>

		<!-- add user input form here-->
    <div class="form-container">
      <form action="conditional-statements-lesson-1.php" method="post">
        <!-- add user input fields  YOU MUST DO THIS FOR YOURSELF -->
        <div class="form-row center">
        <label for="theName">Name:</label> <input type="text" id="theName" name="theName" value="<?= $stu_name ?>" />
        </div>
        <div class="form-row center">
        <label for="theMark">Mark:</label> <input type="text" id="theMark" name="theMark" value="<?= $stu_mark ?>" />
        </div>
        <div class="form-row center">
          <input type="submit" name="subBtn" value="Submit" class="submit-btn btn btn-pill"/>
        </div>
      </form>
    </div>

    <? if ($_POST['subBtn']) {
          if ($error_message) { ?>
            <div class="alert alert-danger">
              <?= $error_message  ?>
            </div>
        <? } else { ?>
          <div class="student-info">
            <p><span class="student-info-label">Student's Name:</span> <?= $stu_name; ?></p>
            <p><span class="student-info-label">Student's Mark:</span> <?= $stu_mark; ?></p>
            <p><span class="student-info-label">Letter Grade:</span> <?= $letter_grade; ?></p>
            <p><span class="student-info-label">Comment:</span> <?= $comment; ?></p>
            <p><span class="student-info-label">Special Comment:</span> <?= $special_comment; ?></p>
          </div>
      <?  }
     } ?>

</div>

</body>
</html>
