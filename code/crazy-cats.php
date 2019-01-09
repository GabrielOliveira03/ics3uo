<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" href="images/logo.ico">
  <title>Crazy Cats! - Lesson Evaluation</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- use a google font:  http://fonts.google.com -->
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
		html {
			height: 100%;
		}

		body {
			height: 100%;
			margin: 0;
			padding: 0;
			width: 100%;
			font-family: "Futura", Arial, sans-serif;
			background-color: #000;
	    color: #ffffff;
	  }

		.home-button {
			position: absolute;
			top: 0;
			left: 1em;
			background-color: #1e90ff;
			color: #fff;
			padding: 12px 16px;
			font-size: 16px;
			cursor: pointer;
		}

		a.home-button:link, a.home-button:active, a.home-button:visited {
    	text-decoration: underline;
    	color: #fff;
    }

    a.home-button:hover {
    	color: #000;
    }

		#page-header {
			text-align: center;
			border-bottom: 1px solid #fff;
			color: #fff;
			padding: 0;
			margin: 1em 0;
		}

		#page-header h1 {
			padding: 0 0 0.2em 0;;
			margin: 0;
		}

		#container {
			position: relative;
		  display: block;
		  margin: 0 auto;
		  padding: 15px;
		  width: 960px;
			height: 100%;
			background-image: url("images/Webp.net-resizeimage.jpg");
		  background-color: #000;
		}

		.lead {
			text-align: center;
			font-size: 1.5em;
			font-weight: bold;
		}

    .img {
      display: block;
      margin: 0 auto;
    }

    h1, h2, h3, form, p {
      text-align: center;
    }

    form {
      line-height: 3em;
    }

		form label {
      display: inline-block;
      width: 300px;
      font-weight: bold;
      color: #fff;
			text-align: right;
			margin-right: 1em;
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
      -webkit-box-shadow: 0 0 24px rgba(255, 255, 255, 1);
      -moz-box-shadow: 0 0 24px rgba(255, 255, 255, 1);
      box-shadow: 0 0 24px rgba(255, 255, 255, 1);
    }

		.select:focus-within {
      -webkit-box-shadow: 0 0 24px rgba(255, 255, 255, 1);
      -moz-box-shadow: 0 0 24px rgba(255, 255, 255, 1);
      box-shadow: 0 0 24px rgba(255, 255, 255, 1);
    }

		.select {
			display: inline;
		}

		form select {
      width: 180px;
      padding: 5px 8px;
			height: 1.4em;
      font-size: 1.2em;
      background-image: -webkit-gradient(linear, 0% 0%, 0% 12%, from(#999), to(#fff));
      background-image: -moz-lieanr-gradient(0% 12%, 90deg, #fff, #999);
      background-color: #fff;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
    }

		.form-row {
      padding-bottom: 10px;
      padding-right: 30px;
      position: relative;
    }

    .form-container {
      width: 60%;
      margin: 2em auto;
      border: 1px solid #999;
      padding-top: 1.4em;
    }

		.center {
      text-align: center;
    }

		.btn.pill{
      -webkit-border-radius: 16px;
      -moz-border-radius: 16px;
      border-radius: 16px;
    }

    .submit-btn {
			padding: 0.2em 1em;
      background: rgba(1, 119, 104, 0);
      border: 3px solid rgba(255, 255, 255, 1);
      border-radius: 8px;
      color: rgba(255, 255, 255, 1);
      cursor: pointer;
      font-size: 20px;
      line-height: 30px;
      outline: 0;
      -webkit-transition: background .2s linear, color .2s linear;
      transition: background .2s linear, color .2s linear;
    }

    .submit-btn:hover {
      background: rgba(255, 255, 255, 1);
      color: rgba(0, 0, 0, 1);
    }

    .cat-picture img {
      height: 200px;
      display: block;
      margin: 0 auto;
    }

		.alert {
		  position: relative;
		  padding: .75rem 1.25rem;
		  margin-bottom: 1rem;
		  border: 1px solid transparent;
		  border-radius: .25rem;
		}

		.alert-success {
			color: #155724;
			background-color: #d4edda;
			border-color: #c3e6cb;
		}

		.alert-danger {
		  color: #721c24;
		  background-color: #f8d7da;
		  border-color: #f5c6cb;
		}

  </style>
</head>
<body>
	<?php

		if ($_POST['submit']) {
			$color = $_POST['color'];
			$name = $_POST['name'];
			$mass = $_POST['mass'];
			$cat = [];
			$error_message = "";

			if (empty($color)) {
				$error_message .= "<p>Your cat needs a color.</p>";
			}

			if (empty($name)) {
				$error_message .= "<p>Your cat needs a name.</p>";
			}

			if (empty($mass)) {
				$error_message .= "<p>Your cat needs a mass.</p>";
			} else if ($mass < 0) {
				$error_message .= "<p>Your cat needs to weight more than zero.</p>";
			}

			if (!$error_message) {
				if ($mass <= 20) {
					if ($color == black) {
						$cat["img"] = "https://i.ytimg.com/vi/kY2b_cwbeRE/hqdefault.jpg";
						$cat["alt"] ="blackcat";
						$cat["title"] = "Black Cat";
					} else if ($color == white) {
						$cat["img"] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFjEFs5mXJVFvWru5yTgNB_rM0Fxnecei1SazTb668E3unZXqLgw";
						$cat["alt"] ="whitecat";
						$cat["title"] = "White Cat";
					} else if ($color == grey) {
						$cat["img"] = "https://i.pinimg.com/originals/fe/20/db/fe20db1b931e62f68bba5876a67d5468.jpg";
						$cat["alt"] ="greycat";
						$cat["title"] = "Grey Cat";
					} else if ($color == brown) {
						$cat["img"] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJtH1GPW53Om3tXmr4qahh8PC9OMvB4bAjKqPFy3HmGqOmecxu";
						$cat["alt"] ="browncat";
						$cat["title"] = "Brown Cat";
					}
				} else if ($mass > 20) {
					if ($color == black) {
						$cat["img"] = "https://c1.staticflickr.com/3/2597/4216273352_47d46acfe3.jpg";
						$cat["alt"] ="fatblackcat";
						$cat["title"] = "Fat Black Cat";
					} else if ($color == white) {
						$cat["img"] = "https://c1.staticflickr.com/3/2164/2305175514_32a2450c4e_b.jpg";
						$cat["alt"] ="fatwhitecat";
						$cat["title"] = "Fat White Cat";
					} else if ($color == grey) {
						$cat["img"] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsZ1Gwdmp14gLhYiIJNK7ZUFXgtyNNEy9EepFNWX-MEJj5zw3QoA";
						$cat["alt"] ="fatgreycat";
						$cat["title"] = "Fat Grey Cat";
					} else if ($color == brown) {
						$cat["img"] = "https://pre00.deviantart.net/b771/th/pre/i/2005/196/6/2/skunk_is_a_fat_cat__by_j_a_x.jpg";
						$cat["alt"] ="fatbrowncat";
						$cat["title"] = "Fat Brown Cat";
					}
				}

				if ($mass <= 2.5) {
						$cat["message"] = "Skin and bones!!!";
				} else if ($mass <= 5) {
						$cat["message"] = "Small, but healthy...";
				} else if ($mass <= 10) {
						$cat["message"] = "Getting a little heavy I think!";
				} else if ($mass <= 15) {
						$cat["message"] = "You may wanna hide the food...";
				} else if ($mass <= 20) {
						$cat["message"] = "Are you sure this is a cat???";
				} else {
					if ($color == black) {
						$cat["message"] = "Are you sure this isn't a cow?!";
					} else {
						$cat["message"] = "You're going to need another job to feed this thing!";
					}
				}
			}
		}
	?>

	<nav>
    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>

  <div id="container">
		<header id="page-header">
			<h1>Crazy Cats!</h1>
		</header>

    <p class="lead">
			Type in a name, weight, and choose a colour and the program will output a picture of your cat!
		</p>

    <!-- Code for crazy cats -->
		<div class="form-container">
			<form name="form" action="crazy-cats.php" method="post">
	      <div class="form-row center">
	        <label for="cat-color-select">What colour is your cat:</label>
					<div class="select">
		        <select id="cat-color-select" name="color">
		          <option value="">-Choose a colour-</option>
		          <option value="black" <?= $color == "black" ? "selected" : "" ?>>Black</option>
		          <option value="white" <?= $color == "white" ? "selected" : "" ?>>White</option>
		          <option value="grey" <?= $color == "grey" ? "selected" : "" ?>>Grey</option>
		          <option value="brown" <?= $color == "brown" ? "selected" : "" ?>>Brown</option>
		        </select>
					</div>
	      </div>
	      <div class="form-row center">
	        <label for="cat-name">Name of Cat:</label>
					<input id="cat-name" type="text" value="<?= $name ?>" name="name"/>
	      </div>
	      <div class="form-row center">
	        <label for="cat-mass">Mass of Cat (kg):</label>
					<input id="cat-mass" type="text" value="<?= $mass ?>" name="mass"/>
	      </div>
	      <div class="form-row center">
	        <input type="submit" name="submit" value="submit" class="submit-btn btn btn-pill"/>
	      </div>
	    </form>
		</div>

		<? if ($_POST['submit']) {
          if ($error_message) { ?>
            <div class="alert alert-danger">
              <?= $error_message  ?>
            </div>
        <? } else { ?>
					<h1>Name: <?= $name ?></h1>

          <div class="cat-picture">
						<img src="<?= $cat["img"] ?>" alt="<?= $cat["alt"]?>" title="<?= $cat["title"]?>" />
          </div>
					<h1>Cat: <? $cat ?></h1>
					<div>
						<p><?= $mass ?> kg</p>
					</div>

					<h3><?= $cat["message"] ?>
      <?  }
     } ?>

    <!-- end code for crazy cats -->
  </div>
</body>
</html>
