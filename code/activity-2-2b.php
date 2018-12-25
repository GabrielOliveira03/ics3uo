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
		body {
			height: 100%;
			margin: 0;
			padding: 0;
			width: 100%;
			font-family: "Futura", Arial, sans-serif;
			background-color: #fff;
		}

		.home-button {
			position: absolute;
			top: 0;
			left: 1em;
			background-color: #1e90ff;
			color: #ffffff;
			padding: 12px 16px;
			font-size: 16px;
			cursor: pointer;
		}

		#page-header {
      width: 100%;
    }

    #page-header h1 {
      padding: 0;
      margin: 0 0 1em 0;
      text-align: center;
      color: #4287f4;
      border-bottom: 1px solid #4287f4;
    }

		#container {
			position: relative;
      display: block;
      margin: 0 auto;
      padding: 15px;
      width: 960px;
      background-color: #eee;
    }

		table {
			border-collapse: collapse;
		}

		.math-form label {
			display: block;
      width: 200px;
      font-weight: bold;
			float: left;
			margin-right: 1em;
			text-align: right;
			padding-top: 0.4em;
    }

		.row {
			width: 100%;
			height: 2em;
			margin: 0.2em 0;
			float: left;
			clear: left;
		}

    .math-form input[type="text"] {
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

    .math-form select {
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

    .math-form input[type="text"]:focus {
      -webkit-box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
      -moz-box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
      box-shadow: 0 0 12px rgba(51, 204, 255, 0.5);
    }

		span.info {
			margin-left: 1em;
			color: #333;
		}

		.btn.pill{
		  -webkit-border-radius: 16px;
		  -moz-border-radius: 16px;
		  border-radius: 16px;
		}

		.row-submit-btn {
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
		  outline: 0;
		  -webkit-transition: background .2s linear, color .2s linear;
		  transition: background .2s linear, color .2s linear;
		}

		.submit-btn:hover {
		  background: rgba(255, 133, 50, 1);
		  color: rgba(255, 255, 255, 1);
		}

		.clearfix::after {
		  content: "";
		  clear: both;
		  display: table;
		}
  </style>
</head>
<body>
	<nav>
		<a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
	</nav>

  <div id="container" class="clearfix">
		<header id="page-header">
			<h1>Working with Variables: Parsing URLs</h1>
		</header>

	  <?php
			$x = empty($_GET['x']) ? 0 : $_GET['x'];
			$y = empty($_GET['y']) ? 0 : $_GET['y'];
			$z = empty($_GET['z']) ? 0 : $_GET['z'];

			$noTdStyleOptions = empty($_GET['border']) && empty($_GET['cellpadding']);
			$noTableStyleOptions =  $noTdStyle && empty($_GET['bgcolor']);

			if (!empty($_GET['border'])) {
				$border = "border: " . $_GET['border'] . "px solid black;";
			}

			if (!empty($_GET['cellpadding'])) {
				$padding = "padding: " . $_GET['cellpadding'] . "px;";
			}

			if (!empty($_GET['bgcolor'])) {
				$backgroundColor = "background-color: " . $bgcolor = $_GET['bgcolor'] . ";";
			}

			$tableStyle = "'" . $border . $padding . $backgroundColor . "'";

			if ($noTableStyleOptions) {
				$table = "<table>";
			} else {
				$table = "<table style=" . $tableStyle . ">";
			}

			$style = "'" . $border . $padding . "'";

			if ($noTdStyleOptions) {
				$td = "<td>";
			} else {
				$td = "<td style=" . $style . ">";
			}

			function valueOrUndefined($value) {
				return empty($value) ? "&lt;empty&gt;" : $value;
			}

			function valueOrBlank($value) {
				return empty($value) ? "" : $value;
			}
	  ?>

		<p>
			We are learning how to parse variables from URLs.
		</p>
		<p>
			The value of <strong>x</strong> is "<?= valueOrUndefined($_GET['x']) ?>", the value of <strong>y</strong> is "<?= valueOrUndefined($_GET['y']) ?>", the value of <strong>z</strong> is "<?= valueOrUndefined($_GET['z']) ?>" and the <strong>title</strong> is "<?= valueOrUndefined($_GET['title']) ?>".
		</p>

		<h2><?= $_GET['title'] ?></h2>

	  <?= $table ?>
	    <tr>
	      <?= $td ?>
	        <h2>Mathematical Operation</h2>
	      </td>
	      <?= $td ?>
	        <h2>Result</h2>
	      </td>
	    </tr>
	    <tr>
	      <?= $td ?>
	        <h2>x + y - 2 * z</h2>
	      </td>
	      <?= $td ?>
	        <?php
	          $result = ($x + $y - 2 * $z);
	          echo "<h2>$result</h2>";
	        ?>
	      </td>
	    </tr>
	    <tr>
	      <?= $td ?>
	        <h2>2x - 4y + (3z - 80)</h2>
	      </td>
	      <?= $td ?>
	        <?php
	          $result1 = (2 * $x) - (4 * $y) + ((3 * $z) - 80);
	          echo "<h2>$result1</h2>";
	         ?>
	      </td>
	    </tr>
	    <tr>
	      <?= $td ?>
	        <h2>The result of the sum of the first two equations</h2>
	      </td>
	      <?= $td ?>
	        <?php
	          $result2 = ($result + $result1);
	          echo "<h2>$result2</h2>";
	         ?>
	      </td>
	    </tr>
	  </table>

	  <form name="form" action="" method="get" class="math-form">
			<div class="row">
				<label for="x-value">X Value</label><input id="x-value" type="text" name="x" value="<?= valueOrBlank($_GET['x']) ?>" />
			</div>
			<div class="row">
				<label for="y-value">Y Value</label><input id="y-value" type="text" name="y" value="<?= valueOrBlank($_GET['y']) ?>" />
			</div>
			<div class="row">
				<label for="z-value">Z Value</label><input id="z-value" type="text" name="z" value="<?= valueOrBlank($_GET['z']) ?>" />
			</div>
			<div class="row">
				<label for"title-value">Title</label><input id="title-value" type="text" name="title" value="<?= valueOrBlank($_GET['title']) ?>" />
			</div>
			<div class="row">
	    	<label for="border-value">Table Border Width</label><input id="border-value" type="text" name="border" value="<?= valueOrBlank($_GET['border']) ?>" /><span class="info">px</span>
			</div>
			<div class="row">
				<label for="padding-value">Table Padding</label><input id="padding-value" type="text" name="cellpadding" value="<?= valueOrBlank($_GET['cellpadding']) ?>" /><span class="info">px</span>
			</div>
			<div class="row">
	    	<label for="color-value">Table Colour</label><input id="color-value" type="text" name="bgcolor" value="<?= valueOrBlank($_GET['bgcolor']) ?>" />
			</div>
			<div class="row row-submit-btn">
    		<input type="submit" name="subBtn" value="Show Changes" class="submit-btn btn btn-pill" />
			</div>
  </div>
</body>
</html>
