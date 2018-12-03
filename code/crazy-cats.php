<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" href="images/logo.ico">
  <title>Crazy Cats! - Lesson Evaluation</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
    	padding: 0;
    	margin: 0;
    	font-family: 'Futura';
      background-image: url("images/Webp.net-resizeimage.jpg");
      color: #ffffff;
    }
		.home-button {
      background-color: #1e90ff;
      color: #ffffff;
      padding: 12px 16px;
      margin-left: 1em;
      font-size: 16px;
      cursor: pointer;
    }
    #main {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }

    .img {
      display: block;
      margin: 0 auto;
    }

    a:link, a:active, a:visited {
    	text-decoration: underline;
    	color: #333333;
    }

    a:hover {
    	color: #999999;
    	text-decoration: underline;
    }

    h2.error {
    	color: #ff0000;
    }

    h1, h2, h3, form, p {
      text-align: center;
    }

    form {
      line-height: 3em;
    }

    .cat-picture img {
      height: 200px;
      display: block;
      margin: 0 auto;
    }

  </style>
  <!-- use a google font:  http://fonts.google.com -->
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
	<nav>
    <a class="home-button" href="https://icsprogramming.ca/2018-2019/oliveiraff730/index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>
  <div id="main">
    <h1>Crazy Cats!</h1>

    <h2>Type in a name, weight, and choose a colour and the program will output a picture of your cat!</h2>

    <!-- Code for crazy cats -->
    <form name="form" action="crazy-cats.php" method="post">
      <div class="cat-color">
        <label for="cat-color-select">What colour is your cat:</label>
        <select id="cat-color-select" name="color" required style="text-align: center">
          <option value="">-Choose a colour-</option>
          <option value="black">Black</option>
          <option value="white">White</option>
          <option value="grey">Grey</option>
          <option value="brown">Brown</option>
        </select>
      </div>
      <div>
        <label for="cat-name">Name of Cat:</label> <input id="cat-name" type="text" value="" name="name" required/>
      </div>
      <div>
        <label for="cat-mass">Mass of Cat (kg):</label> <input id="cat-mass" type="text" value="" name="mass" required/>
      </div>
      <div>
        <input type="submit" name="submit" value="submit"/>
      </div>
    </form>

    <?php
      if ($_POST['submit']) {
        $color = $_POST['color'];
        $name = $_POST['name'];
        $mass = $_POST['mass'];

        echo "<h2>Name: $name</h2>";

        echo "<div class='cat-picture'>";
        if ($mass <= 20) {
          if ($color == black) {
            echo '<img src="https://i.ytimg.com/vi/kY2b_cwbeRE/hqdefault.jpg" alt="blackcat" title="Black Cat" />';
          } else if ($color == white) {
              echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFjEFs5mXJVFvWru5yTgNB_rM0Fxnecei1SazTb668E3unZXqLgw" alt="whitecat" title="White Cat" />';
          } else if ($color == grey) {
              echo '<img src="https://i.pinimg.com/originals/fe/20/db/fe20db1b931e62f68bba5876a67d5468.jpg" alt="greycat" title="Grey Cat" />';
          } else if ($color == brown) {
              echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJtH1GPW53Om3tXmr4qahh8PC9OMvB4bAjKqPFy3HmGqOmecxu" alt="browncat" title="Brown Cat" />';
          }
        } else if ($mass > 20) {
          if ($color == black) {
            echo '<img class="div" src="https://c1.staticflickr.com/3/2597/4216273352_47d46acfe3.jpg" class="div" alt="fatblackcat" title="Fat Black Cat" />';
          }
          if ($color == white) {
            echo '<img class="div" src="https://c1.staticflickr.com/3/2164/2305175514_32a2450c4e_b.jpg" alt="fatwhitecat" title="Fat White Cat" />';
          }
          if ($color == grey) {
            echo '<img class="div" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsZ1Gwdmp14gLhYiIJNK7ZUFXgtyNNEy9EepFNWX-MEJj5zw3QoA" alt="fatgreycat" title="Fat Grey Cat" />';
          }
          if ($color == brown) {
            echo '<img class="div" src="https://pre00.deviantart.net/b771/th/pre/i/2005/196/6/2/skunk_is_a_fat_cat__by_j_a_x.jpg" alt="fatbrowncat" title="Fat Brown Cat" />';
          }
        }
        echo "</div>";

        echo "<div>";
          echo "<p>$mass kg</p>";
        echo "</div>";

        echo "<h3>";
        if ($mass <= 0 || $mass == "") {
          echo "Error: Mass has to be a natural number!";
        } else if ($mass <= 2.5) {
            echo "Skin and bones!!!";
        } else if ($mass <= 5) {
            echo "Small, but healthy...";
        } else if ($mass <= 10) {
            echo "Getting a little heavy I think!";
        } else if ($mass <= 15) {
            echo "You may wanna hide the food...";
        } else if ($mass <= 20) {
            echo "Are you sure this is a cat???";
        } else {
          if ($color != black) {
            echo "You're going to need another job to feed this thing!";
          } else { //black cat
            echo "Are you sure this isn't a cow?!";
          }
        }
        echo "</h3>";


      }
    ?>
    <!-- end code for crazy cats -->
  </div>
</body>
</html>
