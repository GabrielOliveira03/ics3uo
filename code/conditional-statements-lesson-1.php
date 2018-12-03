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
      background-color: #fff;
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
	<nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
	<div id="container">
		<header id="page_header">
		<h1>"Making the Grade!"</h1>
	</header>
	<p>This is a mock student report.<br />

		<!-- add user input form here-->
		<form action="conditional-statements-lesson-1.php" method="post" class="math-form">
			<!-- add user input fields  YOU MUST DO THIS FOR YOURSELF -->
      Name: <label><input type="text" name="theName" value="" /><br /></label>
      Mark: <label><input type="text" name="theMark" value="" /><br /></label><br />
      <input type="submit" name="subBtn" value="Submit" class="submit-btn btn btn-pill"/>
		</form>
    <?
    // using if statements to automatically set the grade and comment
    if ($_POST['subBtn']) {
    	// store the posted values from the form in variables
    	$stu_name = $_POST['theName'];
    	$stu_mark = $_POST['theMark'];
      $special_comment = $_POST['specialcomment'];

    	if ($stu_name == "" OR $stu_mark == "") {
    		// show error statement if fields are left empty (simple error checking)
    		echo "<p class='error'>You must include a name and mark!</p>";
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
    			$letter_grade = "<p class='error'>Invalid mark entered - must be between 0 and 100.</p>";
    		}
    	}
    }
    ?>

		Student's Name: </b> <? echo $stu_name; ?><br />
		Student's Mark: </b> <? echo $stu_mark ?><br />
		Letter Grade: </b> <? echo $letter_grade; ?><br />
		Comment: </b> <? echo $comment; ?><br />
		Special Comment: </b> <? echo $special_comment; ?></p>

</div>

</body>
</html>
