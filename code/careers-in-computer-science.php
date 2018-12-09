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
		.home-button {
      background-color: #1e90ff;
      color: #ffffff;
      padding: 12px 16px;
      margin-left: 1em;
      font-size: 16px;
      cursor: pointer;
    }
    body {
      font-family: "Futura";
      background-color: #fff;
    }

    #container {
			position: relative;
      display: block;
      margin: 0 auto;
      padding: 15px;
			height: 100%;
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

		.team_cards {
				display: flex;
				flex-wrap: wrap;
				justify-content: space-between;
				margin: 1em;
				background-color: #2e5ea9;
				padding: 1em;
		}

		.team_cards h2 {
			width: 100%;
			text-align: center;
			margin-top: 0;
			color: #fff;
		}

		.hero_card {
			background-color: #ff8533;
			flex: 0 1 14%;
			padding: 0.6em 1em 0.2em 1em;
			min-height: 162px;
			border-left: 2px solid #fff;
			border-top: 2px solid #fff;
			border-right: 2px solid #b34800;
			border-bottom: 2px solid #b34800;
		}

    .hero_card img {
			height: 90px;
			display: block;
			margin: 0 auto;
    }

		.hero_card h3 {
			text-align: center;
			color: #ffe682;
			text-shadow: 2px 2px #b38f00;
			margin: 0;
		}

		.team_cards .selected {
			background-color: #b34800;
		}

		.fighters_call p {
			border: 1px solid #2e5ea9;
			color: #2e5ea9;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 0.5em 0;
		}

		.skill_selections {
			text-align: center;
			border-bottom: 1px solid #2e5ea9;
			padding-bottom: 1em;
		}

		.skill_selections div {
			display: inline-block;
			width: 10%;
		}

		.skill_selections div label {
			color: #2e5ea9;
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

		hr {
			padding: 0;
			margin: 0 0 1em 0;
			text-align: center;
			color: #4287f4;
			border-bottom: 0.5px solid #4287f4;
		}



	  .center {
	    margin-left: auto;
	    margin-right: auto;
	  }

		.winner_message {
			font-size: 2em;
			font-weight: bold;
			margin-right: 2em;
		}
		#universitytable {
			position: absolute;
			left: 30px;
			border: 1px solid black;
			background-color: #c7c8c8;
			width: 450px;
			table-layout: fixed;
			height: 100%;
		}
		#collegetable {
			position: absolute;
			right: 30px;
			border: 1px solid black;
			background-color: #c7c8c8;
			width: 450px;
			table-layout: fixed;
			height: 100%;
		}
		h4, h5 {
			text-align: center;
		}
    </style>
	</head>

  <body>
		<nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>

	<div id="container">
    <header id="page_header">
      <h1>Careers in Computer Science</h1>
    </header>
		<h3>Information</h3>
		<p>This page displays many jobs that require computer programming skills and universities and colleges that offer computer programming programs. Also, schooling requirements for these programs and the many oppurtunities available for a career in computer programming are displayed on this page.</p><hr />
	<table id="universitytable">
		<tr>
		<td>
				<h2 style="text-align: center">University Programs</h2>
		</td>
		</tr>
		<tr>
			<td>
				<h4>Computer Science at University of Toronto</h4>
				<p>This program is a 4 year program that studies computer science at the University of Toronto. They look for notations for describing computations, and programming methodologies that facilitate the production of manageable and efficient software. In the theory of computation area, they study resource requirements in time and memory of many basic computational tasks.</p>
				<strong><h5 style="text-align: center">Requirements</h5></strong>
				<ul>
					<li>Ontario Secondary School Diploma</li>
					<li>Grade 12 English (ENG4U) credit</li>
					<li>Grade 12 Calculus and Vectors (MCV4U) credit</li>
					<li>Four additional Grade 12 university-level or university/college-level courses</li>
					<li>(It is expected you would have completed Advanced Functions as a prerequisite to Calculus and Vectors)
					<li>A grade average in at least the low 90s</li>
				</ul>
				<strong><h5>This program will award you a Bachelor of Science degree.</h5></strong>
			</td>
		</tr>
		<tr>
			<td>
				<h4>Applied Computing at University of Windsor</h4>
				<p>This program is a 4 year program that studies applied computing at the University of Windsor. It provides progressive, innovative tools and technology in computing, practical experience in developing software systems and the IT skills valued by industry.</p>
				<strong><h5 style="text-align: center">Requirements</h5></strong>
				<ul>
					<li>Ontario Secondary School Diploma</li>
					<li>Grade 12 English (ENG4U) credit</li>
					<li>Grade 12 Advanced Functions (MHF4U) credit</li>
					<li>Four additional Grade 12 university-level or university/college-level courses</li>
					<li>Grade 12 Calculus and Vectors (MCV4U) is not required but is highly reccomended</li>
					<li>A minimum average of 70% is required in math courses</li>
					<li>A grade average in at least the low 70s</li>
				</ul>
				<strong><h5>This program will award you a Bachelor of Computer Science degree.</h5></strong>
			</td>
		</tr>
		<tr>
			<td>
				<h4>Computer Science at Queens University</h4>
				<p>This program is a 4 year program that studies computer science at Queens University. Computer Science, which is based on a firm foundation in logic and discrete mathematics, includes the study of computer hardware (the design of the machines themselves), computer software (the programs that cause the machines to perform useful tasks), and human-computer interaction (effective communication between people and their computing tools).</p>
				<strong><h5 style="text-align: center">Requirements</h5></strong>
				<ul>
					<li>Ontario Secondary School Diploma</li>
					<li>Grade 12 English (ENG4U) credit</li>
					<li>Grade 12 Advanced Functions (MHF4U) credit</li>
					<li>Grade 12 Calculus and Vectors (MCV4U) credit</li>
					<li>Three additional Grade 12 university-level or university/college-level courses</li>
					<li>A personal statement of experience</li>
					<li>A grade average in at least the low 80s</li>
				</ul>
				<strong><h5>This program will award you a Bachelor of Computing degree.</h5></strong>
			</td>
		</tr>
	</table>
	<table id="collegetable">
		<tr>
		<td>
			<header>
				<h2 style="text-align: center">College Programs</h2>
			</header>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Computer Programming at Humber College</h4>
			<p>This program is a 2 year program that studies computer programming at Humber College. Your courses will include computer programming, systems analysis, web development, database management, information technology (IT), project management and other aspects of information systems. You will also learn the cycles of software development applications as follow the standards of planning, developing, testing and supporting.</p>
			<strong><h5 style="text-align: center">Requirements</h5></strong>
			<ul>
				<li>Ontario Secondary School Diploma</li>
				<li>Grade 12 English (ENG4U) or (ENG4C) credit</li>
				<li>Grade 12 college-level or higher Math (MAP4C, MCT4C, MDM4U, MHF4U or MCV4U)</li>
				<li>Two additional Grade 11 or 12 college-level or higher courses</li>
				<li>Applicants who do not possess the required courses may complete admission testing to determine equivalencies</li>
			</ul>
			<strong><h5>This program will award you a Diploma.</h5></strong>
		</td>
		</tr>
		<tr>
			<td>
				<h4>Computer Programming Analyst at George Brown College</h4>
				<p>This program is a 3 year program that studies programming and analytics at George Brown College. During the first two years of the program you will develop the skills and techniques required for software application development and testing. The industry tells us they are looking for “the total package.” So the third year includes advanced technical skills in areas such as systems analysis and design techniques - and continues to develop communications, teamwork and other client service skills such as needs assessment, sales and presentation methods.</p>
				<strong><h5 style="text-align: center">Requirements</h5></strong>
				<ul>
					<li>Ontario Secondary School Diploma</li>
					<li>Grade 12 English (ENG4U) or (ENG4C) credit</li>
					<li>One of the following courses: Grade 11 Functions and Applications (MCF3M), Grade 11 Functions (MCR3U), Grade 12 Foundations for College Mathematics (MAP4C), Grade 12 Mathematics for College Technology (MCT4C), Grade 12 Mathematics of Data Management (MDM4U), Grade 12 Advanced Functions (MHF4U) -or- Grade 12 Calculus and Vectors (MCV4U)</li>
				</ul>
				<strong><h5>This program will award you an Advanced Diploma.</h5></strong>
			</td>
		</tr>
		<tr>
			<td>
				<h4>Software Development at Mohawk College</h4>
				<p>Students in the Computer Systems Technology - Software Development program will experience a broad range of application development and computer systems. Experience a broad range of application development and computer systems Excel in: - Programming languages, database development - Web tools and mobile application development - System/business analysis Discover information technology including : - E-commerce - Project Management - Mobile Technologies</p>
				<strong><h5 style="text-align: center">Requirements</h5></strong>
				<ul>
					<li>Ontario Secondary School Diploma</li>
					<li>Grade 12 English (ENG4U) or (ENG4C) credit</li>
					<li>Grade 12 college-level or higher Math (MAP4C, MCT4C, MDM4U, MHF4U or MCV4U)</li>
					<li>A minimum grade of 60% is required in Grade 12 Foundations for College Mathematics (MAP4C)</li>
					<li>A working knowledge in computers and desktop applications</li>
				</ul>
				<strong><h5>This program will award you an Advanced Diploma.</h5></strong>
			</td>
		</tr>
	</table>
</div>
</body>
</html>
