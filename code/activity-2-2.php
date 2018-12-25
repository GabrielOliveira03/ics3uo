<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Programming Languages</title>
  <meta name="description" content="Input and Math">
  <meta name="author" content="Gabriel Oliveira">
  <link rel="shortcut icon" href="images/logo.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      height: 100%;
      margin: 0;
      padding: 0;
      width: 100%;
      background-image: url("https://hdqwalls.com/wallpapers/simple-background-2.jpg");
      background-position: top;
      background-repeat: no-repeat;
      background-size: cover;
      font-family: "Futura", Arial, sans-serif;
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
      text-align: center;
      background: rgba(255,255,255,0.5);
      border-bottom: 1px solid #000;
      color: #fff;
      padding: 0;
      margin: 0;
    }

    #page-header h1 {
      margin: 0;
      padding: 1em 0;
    }

    .container {
      position: relative;
      width: 80%;
      margin: 0 auto;
      background: rgba(255,255,255,0.5);
      padding: 1em 2em;
    }

    table {
      background: rgba(255,255,255,0.6);
      border-collapse: collapse;
    }

    td {
      border: 1px solid #000;
      padding: 1em;
    }

    .math-form div {
      margin: 1em;
    }

    .math-form label {
      display: inline-block;
      width: 60px;
      font-weight: bold;
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

    .submit {
      font-size: 28px;
      color: #ecf0f1;
      text-decoration: none;
      border-radius: 5px;
      border: solid 1px #f39c12;
      background:#e67e22;
      text-align: center;
      -webkit-transition: all 0.1s;
      -moz-transition: all 0.1s;
      transition: all 0.1s;
      -webkit-box-shadow: 0px 6px 0px #d35400;
      -moz-box-shadow: 0px 6px 0px #d35400;
      box-shadow: 0px 6px 0px #d35400;
      font-family: "Futura";
    }

    .submit:hover{
      background: #ffad66;
      color: #ffffff;
      -webkit-box-shadow: 0px 6px 0px #e07f43;
      -moz-box-shadow: 0px 6px 0px #e07f43;
      box-shadow: 0px 6px 0px #e07f43;
    }

    .submit:active {
      -webkit-box-shadow: 0px 2px 0px #d35400;
      -moz-box-shadow: 0px 2px 0px #d35400;
      box-shadow: 0px 2px 0px #d35400;
      transform: translateY(4px);
    }
  </style>
</head>
<body>
  <nav>
    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>

  <header id="page-header">
    <h1>PHP Input and Math</h1>
  </header>

  <div class="container">

    <table class="math-table">
      <tbody>
        <tr>
          <td>
            <h2>Perimeter</h2>
            <p>Enter numbers for length and width and the system will calculate the perimeter (2l + 2w = perimeter).</p>
            <form class="math-form" name="perimeter" method="post">
              <div>
                <label>Length: <input type="text" name="lvar" value="" /></label>
              </div>
              <div>
                <label>Width: <input type="text" name="wvar" value="" /></label>
              </div>
              <div>
                <input type="submit" name="subBtn" value="Answer" class="submit" />
              </div>
            </form>
            <?php
            if($_POST['subBtn']) {
              $l = $_POST['lvar'];
              $w = $_POST['wvar'];

              $pm = (2 * $l) + (2 * $w);

              echo "<p>If the length is <b>" . $l . "</b>, and the width is <b>" . $w . "</b>, therefore the perimeter is <b>" . $pm . "</b>.</p>";
            }
              ?>
          </td>
          <td>
            <h2>Area of a Triangle</h2>
            <p>Enter numbers for base and height and the system will calculate the area of a triangle (base times height divided by 2).</p>
            <form class="math-form" name="triangle" method="post">
              <div>
                  <label>Base: <input type="text" name="bvar" value="" /></label>
              </div>
              <div>
                <label>Height: <input type="text" name="hvar" value="" /></label>
              </div>
              <div>
                <input type="submit" name="subBtn1" value="Answer" class="submit" />
              </div>
            </form>
            <?php
            if ($_POST['subBtn1']) {
              $b = $_POST['bvar'];
              $h = $_POST['hvar'];

              $area = ($b * $h) / 2;

              echo "<p>If the base is <b>" . $b . "</b>, and the height is <b>" . $h . "</b>, therefore the area of the triangle is <b>" . $area . "</b>.</p>";
            }
              ?>
          </td>
        </tr>
        <tr>
          <td>
            <h2>Speed of Sound</h2>
            <p>Choose the temperature and the system will calculate the speed of sound (temperature times 0.6 plus 332).</p>
            <form class="math-form" name="sos" method="post">
              <div>
                <label for="temperature">Temperature:</label>
              </div>
              <div>
                <select id="temperature" name="temperature">
                  <option value="-10">-10C</option>
                  <option value="0">0C</option>
                  <option value="10">10C</option>
                  <option value="20">20C</option>
                  <option value="30">30C</option>
                </select>
              </div>
              <div>
                <input type="submit" name="subBtn2" value="Answer" class="submit" />
              </div>
            </form>
            <?php
            if ($_POST['subBtn2']) {
              $temp = $_POST['temperature'];

              $speedofsound = ($temp * 0.6) + 332;

              echo "<p>If the temperature is <b>" . $temp . "</b>, therefore the speed of sound would be <b>" . $speedofsound . "</b> m/s.</p>";
            }
            ?>
          </td>
          <td>
            <h2>Magic Number</h2>
            <p>Enter any number and the system will output a magic number.</p>
            <form class="math-form" name="magicnum" method="post">
              <div>
                <label>Number: <input type="text" name="numvar" value="" /></label>
              </div>
              <div>
                <input type="submit" name="subBtn3" value="Answer" class="submit" />
              </div>
            </form>
            <?php
            if ($_POST['subBtn3']) {
              $numvar = $_POST['numvar'];

              $magicnum = ((($numvar + 2) * 3) - 6) * 3;

              echo "<p>If the number you input is <b>" . $numvar . "</b>, therefore your magic number is <b>". $magicnum . "</b>.</p>";
            } ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
