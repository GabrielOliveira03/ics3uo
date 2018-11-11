<!doctype html>
<html>
<head>
	<title>User Input & Conditional Statements Lesson</title>
  <link rel="shortcut icon" href="images/logo.ico">
	<style>
	body {
		font-family: Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
		background-image: url("https://img.freepik.com/free-photo/empty-school-board_23-2147849671.jpg?size=338&ext=jpg");
		background-size: cover;
		background-attachment: cover;
		font-size: 1.2rem;
		color: #ffffff;
	}
	h1 {
		font-style: italics;
	}
	.error {
		color: #ff0000;
	}
	#reportContainer {
		position: relative;
		margin-left: auto;
		margin-right: auto;
		width: 80%;
		padding: 2%;
		margin-top: 100px;
		background: rgba(0,0,0,0.4);
		border-radius: 0.5em;
	}
	input {
		font-size: 1.3em;
		width: 100px;
	}
	</style>
</head>
<body>
	<div id="reportContainer">
		<h1>"Making the Grade!"</h1>
		<p>This is a mock student report.<br />

		<!-- add user input form here-->
		<form action="conditional-statements-lesson-1.php" method="post">
			<!-- add user input fields  YOU MUST DO THIS FOR YOURSELF -->
      Name: <input type="text" name="theName" value="" /><br />
      Mark: <input type="text" name="theMark" value="" /><br />
      <input type="submit" name="subBtn" value="Submit" />
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
