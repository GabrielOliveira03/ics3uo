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
      font-family: "Futura", Arial, sans-serif;
    }

    h2 {
      text-align: center;
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
      padding: 0 0 0.2em 0;
      margin: 0;
    }

    .form-container {
      width: 50%;
      margin: 2em auto;
      border: 1px solid #999;
      padding-top: 1.4em;
    }

    select {
      width: 200px;
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

    .form-row {
      padding-bottom: 10px;
      padding-right: 30px;
      position: relative;
    }

    .center {
      text-align: center;
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

    .alert {
      position: relative;
      padding: .75rem 1.25rem;
      margin-bottom: 1rem;
      border: 1px solid transparent;
      border-radius: .25rem;
    }

    .alert-primary {
      color: #004085;
      background-color: #cce5ff;
      border-color: #b8daff;
    }

    .alert-danger {
      color: #721c24;
      background-color: #f8d7da;
      border-color: #f5c6cb;
    }

    .alert-info {
      color: #0c5460;
      background-color: #d1ecf1;
      border-color: #bee5eb;
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

    fieldset {
      text-align: center;
    }

    fieldset, p {
      margin: 0 0 20px 0;
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

    .img {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>

<body>
  <nav>
    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>


  <div id="container">
    <header id="page_header">
      <h1>Days of the Week</h1>
    </header>

    <h2>Choose what day it is, and proceed to submit!</h2>

    <div class="form-container">
      <form name="form" action="activity-2-3.php" method="post">
        <div class="form-row center">
          <select name="day">
            <option value="">-Choose a day-</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
          </select>
        </div>
        <div class="form-row center">
          <input type="submit" name="submit" value="Submit" class="submit-btn btn btn-pill" />
        </div>
      </form>
    </div>
    <?php
      if ($_POST['submit']) {
        $day = $_POST['day'];
        if ($day == "") {
          echo '<div class="alert alert-info">Please select a day of the week.</div>';
        } else if ($day == 'Monday') {
          echo '<div class="alert alert-primary center">Argh, I am always tired on Monday!</div>';
          echo '<img class="img" src="https://ih0.redbubble.net/image.130303932.7492/flat,550x550,075,f.u1.jpg" />';
        } else if ($day == 'Tuesday') {
          echo '<div class="alert alert-primary center">Feels like Monday, but a little bit better.</div>';
          echo '<img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz-QV_lqpQcS9HCRzNmVryYj3TSr2H9GN1Kcc6ouBavxwMhg1xPg" />';
        } else if ($day == 'Wednesday'){
          echo '<div class="alert alert-primary center">It is halfway through the week!</div>';
          echo '<img class="img" src="http://www.lovethispic.com/uploaded_images/125501-We-re-Halfway-There-.jpg" />';
        } else if ($day == 'Thursday'){
          echo '<div class="alert alert-primary center">Thursday is like Friday Jr.</div>';
          echo '<img class="img" src="https://images-na.ssl-images-amazon.com/images/I/61OXsB72fJL._SY450_.jpg" />';
        } else if ($day == 'Friday'){
          echo '<div class="alert alert-primary center">Last day of work before the weekend!</div>';
          echo '<img class="img" src="https://www.promodo.com/wp-content/uploads/2015/06/1.jpg" />';
        } else if ($day == 'Saturday'){
          echo '<div class="alert alert-primary center">Best day of the week. No alarm and no bedtime.</div>';
          echo '<img class="img" src="http://www.lovethispic.com/uploaded_images/82817-Saturday-Best-Day-Of-The-Week.jpg" />';
        } else if ($day == 'Sunday'){
          echo '<div class="alert alert-primary center">The weekend, but the day after is Monday</div>';
          echo '<img class="img" src="https://cdn.quotestopics.com/87/96/932731963-original.jpg" />';
        }
      }
     ?>
  </div>
</body>
</html>
